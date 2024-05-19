<?php

namespace App\Helpers;

use App\Models\M_buku;
use Sastrawi\Stemmer\StemmerFactory;
use Sastrawi\StopWordRemover\StopWordRemoverFactory;
use TeamTNT\TNTSearch\TNTSearch;

class CBFHelper
{
    protected static $stemmer;
    protected static $stopWordRemover;

    // Inisialisasi Stemmer dan StopWordRemover
    public static function initialize()
    {
        $stemmerFactory = new StemmerFactory();
        self::$stemmer = $stemmerFactory->createStemmer();

        $stopWordRemoverFactory = new StopWordRemoverFactory();
        self::$stopWordRemover = $stopWordRemoverFactory->createStopWordRemover();
    }

    // Preprocessing Text
    public static function preprocessText($text)
    {
        $text = strtolower($text);
        $text = self::$stopWordRemover->remove($text);
        $text = self::$stemmer->stem($text);

        return $text;
    }

    // Mendapatkan Rekomendasi buku
    public static function getRecommendations($query)
    {
        if (!isset(self::$stemmer) || !isset(self::$stopWordRemover)) {
            self::initialize();
        }

        $processedQuery = self::preprocessText($query);
        $books = M_buku::all();
        $documents = [];
        foreach ($books as $book) {
            $documents[$book->id] = self::preprocessText($book->judul . ' ' . $book->kategori . ' ' . $book->sinopsis);
        }

        // TF-IDF Vectorization dan Cosine Similarity
        $tnt = new TNTSearch();
        $indexName = "books.index";
        $tnt->loadConfig([
            "storage" => storage_path(),
            "driver"  => "sqlite",
            "database" => storage_path("books.sqlite"),
        ]);

        // Membuat penyimpanan sementara untuk menyiman vektor
        if (!file_exists(storage_path("books.sqlite"))) {
            $indexer = $tnt->createIndex($indexName);
            foreach ($documents as $id => $content) {
                $indexer->insert(['id' => $id, 'content' => $content]);
            }
            $indexer->run();
        }

        // Proses pencarian
        $tnt->selectIndex($indexName);
        $results = $tnt->searchBoolean($processedQuery, 10);
        $recommendedBooks = [];
        foreach ($results['ids'] as $id) {
            $recommendedBooks[] = $books->find($id);
        }

        return $recommendedBooks;
    }
}
