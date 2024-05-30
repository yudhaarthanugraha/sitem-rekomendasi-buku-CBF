<?php

namespace App\Helpers;

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
        $text = strtolower($text);
        $text = preg_replace('/[^\p{L}\p{N}\s]/u', '', $text);
        $text = $this->stopWordRemover->remove($text);
        $text = $this->stemmer->stem($text);

        return $text;
    }

    // Pembobotan TF-IDF
    public function calculateTfIdf($documents)
    {
        $tf = [];
        $df = [];
        $idf = [];
        $tfidf = [];
        $n = count($documents);

        foreach ($documents as $docId => $document) {
            $terms = explode(' ', $document);
            $termCount = array_count_values($terms);
            $tf[$docId] = $termCount;

            foreach ($termCount as $term => $count) {
                if (!isset($df[$term])) {
                    $df[$term] = 0;
                }
                $df[$term]++;
            }
        }

        foreach ($df as $term => $count) {
            $idf[$term] = log($n / $count);
        }

        foreach ($tf as $docId => $terms) {
            foreach ($terms as $term => $count) {
                $tfidf[$docId][$term] = $count * $idf[$term];
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
            $dotProduct += $weight * ($vec2[$term] ?? 0);
            $normVec1 += pow($weight, 2);
        }

        foreach ($vec2 as $weight) {
            $normVec2 += pow($weight, 2);
        }

        if ($normVec1 == 0 || $normVec2 == 0) {
            return 0;
        }

        return $dotProduct / (sqrt($normVec1) * sqrt($normVec2));
    }

    // Mencari rekomendasi buku dari dokumen buku didatabase
    public function recommend($query, $documents)
    {
        $processedDocs = array_map([$this, 'preprocess'], $documents);
        $processedQuery = $this->preprocess($query);

        array_unshift($processedDocs, $processedQuery);
        $tfidfDocs = $this->calculateTfIdf($processedDocs);
        $tfidfQuery = $tfidfDocs[0];
        array_shift($tfidfDocs);

        // test frasa ex:'gotong-royong'
        // dd($tfidfDocs);
        $similarities = [];

        foreach ($tfidfDocs as $docId => $tfidfDoc) {
            $similarities[$docId] = $this->cosineSimilarity($tfidfQuery, $tfidfDoc);
        }

        arsort($similarities);

        return $similarities;
    }

    // autocomplete suggestions
    public function getSuggestions($query, $documents)
    {
        $processedQuery = $this->preprocess($query);
        $suggestions = [];

        foreach ($documents as $document) {
            $terms = explode(' ', $document);
            foreach ($terms as $term) {
                $term = trim(strtolower(str_replace(['.', ','], '', $term)));
                if (str_contains($term, $processedQuery) && !in_array($term, $suggestions)) {
                    $suggestions[] = $term;
                }
            }
        }

        return $suggestions;
    }
}
