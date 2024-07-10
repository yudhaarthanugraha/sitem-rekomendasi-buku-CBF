<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Log;
use Sastrawi\Stemmer\StemmerFactory;
use Sastrawi\StopWordRemover\StopWordRemoverFactory;

class CBFHelper
{
    private $stemmer;
    private $stopWordRemover;

    // Deklarasi variable Sastrawi
    public function __construct()
    {
        $stemmerFactory = new StemmerFactory();
        $this->stemmer = $stemmerFactory->createStemmer();

        $stopWordRemoverFactory = new StopWordRemoverFactory();
        $this->stopWordRemover = $stopWordRemoverFactory->createStopWordRemover();
    }

    // Preprocessing Text
    public function preprocess($text)
    {
        Log::info("Query Input : " . $text);
        $text = strtolower($text); // Mengubah teks menjadi huruf kecil (case folding)
        Log::info("Case Folding : " . $text);
        $text = preg_replace('/[^\p{L}\p{N}\s-]/u', '', $text); // Menghilangkan simbol dan karakter khusus
        Log::info("Symbol remove : " . $text);
        $text = $this->stopWordRemover->remove($text); // Menghapus stop word dari teks
        Log::info("Stop word Remove : " . $text);
        $text = $this->stemmer->stem($text); // Melakukan stemming pada teks
        Log::info("Stemming : " . $text);

        return $text; // Mengembalikan teks yang telah diproses
    }

    // Pembobotan TF-IDF
    public function calculateTfIdf($documents)
    {
        $tf = []; // Term Frequency
        $df = []; // Document Frequency
        $idf = []; // Inverse Document Frequency
        $tfidf = []; // TF-IDF
        $n = count($documents); // Jumlah dokumen

        foreach ($documents as $docId => $document) {
            $terms = preg_split('/\s+/', $document); // Memecah dokumen menjadi array kata

            // Membuat bigram
            $bigrams = [];
            for ($i = 0; $i < count($terms) - 1; $i++) {
                $bigrams[] = $terms[$i] . '-' . $terms[$i + 1];
            }

            Log::info("Bigrams : " . print_r($bigrams, true));
            $allTerms = array_merge($terms, $bigrams); // Menggabungkan unigram dan bigram
            $termCount = array_count_values($allTerms); // Menghitung frekuensi setiap term
            $tf[$docId] = $termCount;

            foreach ($termCount as $term => $count) {
                if (!isset($df[$term])) {
                    $df[$term] = 0;
                }
                $df[$term]++;
            }
        }

        foreach ($df as $term => $count) {
            $idf[$term] = log($n / $count); // Menghitung IDF
        }

        foreach ($tf as $docId => $terms) {
            foreach ($terms as $term => $count) {
                $tfidf[$docId][$term] = $count * $idf[$term]; // Menghitung TF-IDF
            }
        }

        return $tfidf;
    }

    // Pencocokan kata dengan Cosine Similarity
    public function cosineSimilarity($vec1, $vec2)
    {
        $dotProduct = 0;
        $normVec1 = 0;
        $normVec2 = 0;

        foreach ($vec1 as $term => $weight) {
            $dotProduct += $weight * ($vec2[$term] ?? 0); // Menghitung dot product
            $normVec1 += pow($weight, 2); // Menghitung norma vektor 1
        }

        foreach ($vec2 as $weight) {
            $normVec2 += pow($weight, 2); // Menghitung norma vektor 2
        }

        if ($normVec1 == 0 || $normVec2 == 0) {
            return 0; // Mengembalikan 0 jika salah satu norma vektor adalah 0
        }

        return $dotProduct / (sqrt($normVec1) * sqrt($normVec2)); // Menghitung cosine similarity
    }

    // Mencari rekomendasi buku dari dokumen buku didatabase
    public function recommend($query, $documents)
    {
        $processedDocs = array_map([$this, 'preprocess'], $documents); // Memproses setiap dokumen
        $processedQuery = $this->preprocess($query); // Memproses query

        /** sebelum prossesing */
        // dd($query, $documents); // Debugging sebelum memproses dokumen dan query

        array_unshift($processedDocs, $processedQuery); // Menambahkan query ke awal array dokumen
        $tfidfDocs = $this->calculateTfIdf($processedDocs); // Menghitung TF-IDF untuk semua dokumen dan query

        /** sesudah prosessing termasuk B-gram */
        dd($processedDocs, $tfidfDocs); // Debugging setelah memproses dokumen dan query

        $tfidfQuery = $tfidfDocs[0]; // Mengambil TF-IDF dari query
        array_shift($tfidfDocs); // Menghapus query dari array dokumen

        $similarities = [];

        foreach ($tfidfDocs as $docId => $tfidfDoc) {
            $similarities[$docId] = $this->cosineSimilarity($tfidfQuery, $tfidfDoc); // Menghitung cosine similarity antara query dan dokumen
        }

        arsort($similarities); // Mengurutkan similarity secara menurun

        /** Simailarity */
        // dd($similarities); // Debugging untuk melihat similarity

        return $similarities; // Mengembalikan daftar dokumen dengan similarity tertinggi
    }

    // autocomplete suggestions
    public function getSuggestions($query, $documents)
    {
        $processedQuery = $this->preprocess($query); // Memproses query
        $suggestions = [];

        foreach ($documents as $document) {
            $document = preg_replace('/[\n\r]/', ' ', $document); // Menghilangkan karakter newline
            $procDocs = $this->preprocess($document); // Memproses dokumen
            $terms = preg_split('/\s+/', $procDocs); // Memecah dokumen menjadi array kata
            foreach ($terms as $term) {
                $term = trim(strtolower(str_replace(['.', ','], '', $term))); // Membersihkan dan menormalisasi term
                if (str_contains($term, $processedQuery) && !in_array($term, $suggestions)) {
                    $suggestions[] = $term; // Menambahkan term ke suggestions jika mengandung query
                }
            }
        }

        return $suggestions; // Mengembalikan daftar suggestions
    }
}




















// namespace App\Helpers;

// use Illuminate\Support\Facades\Log;
// use Sastrawi\Stemmer\StemmerFactory;
// use Sastrawi\StopWordRemover\StopWordRemoverFactory;

// class CBFHelper
// {
//     private $stemmer;
//     private $stopWordRemover;

//     // Deklarasi variable Sastrawi
//     public function __construct()
//     {
//         $stemmerFactory = new StemmerFactory();
//         $this->stemmer = $stemmerFactory->createStemmer();

//         $stopWordRemoverFactory = new StopWordRemoverFactory();
//         $this->stopWordRemover = $stopWordRemoverFactory->createStopWordRemover();
//     }

//     // Preprocessing Text
//     public function preprocess($text)
//     {
//         Log::info("Query Input : " . $text);
//         $text = strtolower($text);
//         Log::info("Case Folding : " . $text);
//         $text = preg_replace('/[^\p{L}\p{N}\s-]/u', '', $text);
//         Log::info("Symbol remove : " . $text);
//         $text = $this->stopWordRemover->remove($text);
//         Log::info("Stop word Remove : " . $text);
//         $text = $this->stemmer->stem($text);
//         Log::info("Stemming : " . $text);

//         return $text;
//     }

    
//     // Pembobotan TF-IDF
//     public function calculateTfIdf($documents)
//     {
//         $tf = [];
//         $df = [];
//         $idf = [];
//         $tfidf = [];
//         $n = count($documents);

//         foreach ($documents as $docId => $document) {
//             $terms = preg_split('/\s+/', $document);

//             $bigrams = [];
//             for ($i = 0; $i < count($terms) - 1; $i++) {
//                 $bigrams[] = $terms[$i] . '-' . $terms[$i + 1];
//             }

//             Log::info("Bigrams : " . print_r($bigrams, true));
//             $allTerms = array_merge($terms, $bigrams);
//             $termCount = array_count_values($allTerms);
//             $tf[$docId] = $termCount;

//             foreach ($termCount as $term => $count) {
//                 if (!isset($df[$term])) {
//                     $df[$term] = 0;
//                 }
//                 $df[$term]++;
//             }
//         }

//         foreach ($df as $term => $count) {
//             $idf[$term] = log($n / $count);
//         }

//         foreach ($tf as $docId => $terms) {
//             foreach ($terms as $term => $count) {
//                 $tfidf[$docId][$term] = $count * $idf[$term];
//             }
//         }

//         return $tfidf;
//     }

//     // Pencocokan kata dengan Cosine Similarity
//     public function cosineSimilarity($vec1, $vec2)
//     {
//         $dotProduct = 0;
//         $normVec1 = 0;
//         $normVec2 = 0;

//         foreach ($vec1 as $term => $weight) {
//             $dotProduct += $weight * ($vec2[$term] ?? 0);
//             $normVec1 += pow($weight, 2);
//         }

//         foreach ($vec2 as $weight) {
//             $normVec2 += pow($weight, 2);
//         }

//         if ($normVec1 == 0 || $normVec2 == 0) {
//             return 0;
//         }

//         return $dotProduct / (sqrt($normVec1) * sqrt($normVec2));
//     }

//     // Mencari rekomendasi buku dari dokumen buku didatabase
//     public function recommend($query, $documents)
//     {
//         $processedDocs = array_map([$this, 'preprocess'], $documents);
//         $processedQuery = $this->preprocess($query);

//         /** sebelum prossesing */
//         // dd($query, $documents);

//         array_unshift($processedDocs, $processedQuery);
//         $tfidfDocs = $this->calculateTfIdf($processedDocs);

//         /** sesudah prosessing termasuk B-gram */
//         dd($processedDocs, $tfidfDocs);

//         $tfidfQuery = $tfidfDocs[0];

//         array_shift($tfidfDocs);

//         $similarities = [];

//         foreach ($tfidfDocs as $docId => $tfidfDoc) {
//             $similarities[$docId] = $this->cosineSimilarity($tfidfQuery, $tfidfDoc);
//         }

//         arsort($similarities);
//         /** Simailarity */
//         // dd($similarities);

//         return $similarities;
//     }

//     // autocomplete suggestions
//     public function getSuggestions($query, $documents)
//     {
//         $processedQuery = $this->preprocess($query);
//         $suggestions = [];

//         foreach ($documents as $document) {
//             $document = preg_replace('/[\n\r]/', ' ', $document);
//             $procDocs = $this->preprocess($document);
//             $terms = preg_split('/\s+/', $procDocs);
//             foreach ($terms as $term) {
//                 $term = trim(strtolower(str_replace(['.', ','], '', $term)));
//                 if (str_contains($term, $processedQuery) && !in_array($term, $suggestions)) {
//                     $suggestions[] = $term;
//                 }
//             }
//         }

//         return $suggestions;
//     }
// }
