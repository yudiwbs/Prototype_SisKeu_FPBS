<?php
/**
 * Get Author Page Data
 * Fungsi untuk mengambil data yang tertera di page author di SINTA.
 * Merupakan bagian dari program Scraper Web SINTA UPI.
 * 
 * Data yang diambil:
 * - Departemen
 * - SINTA ID
 * - Books
 * - Overall Score
 * - Overall Score v2
 * - Books
 * - 3 Years Score
 * - 3 Years Score v2
 * - IPR
 * - Rank in National
 * - 3 Years National Rank
 * - Rank in Affiliation
 * - 3 Years Affiliation Rank
 * - Research Output Scopus
 *   - Articles
 *   - Conference
 *   - Other
 *   - Total
 * - Quartile Scopus
 *   - Q1
 *   - Q2
 *   - Q3
 *   - Q4
 *   - Undefined
 * - Accreditation SINTA
 *   - S1
 *   - S2
 *   - S3
 *   - S4
 *   - S5
 *   - S6
 *   - Uncategorized
 *  - Score
 *    - Scopus
 *      - Documents
 *      - Citations
 *      - i10-Index
 *    - Google
 *      - Documents
 *      - Citations
 *      - i10-Index
 *    - Web of Science
 *      - Documents
 * 
 * Dikembangkan untuk Direktorat TIK UPI
 * Tahun 2020
 */

set_time_limit(0);
include "simple_html_dom.php";

$g_part = $_GET['part'];
$g_id = $_GET['id'];
run($g_part, $g_id, 30);

function run($part, $id, $limit){
    set_time_limit($limit);

    $temp_author_link;

    $database = new SQLite3('scrape'.$part.'.db');
    $sql = 'SELECT author_link AS link FROM affiliations WHERE id = '.$id;
    $result = $database->query($sql);
    if ($result) {
        if ($row = $result->fetchArray()) {
            $temp_author_link = $row['link'];
        }
    }

    $departemen;
    $sinta_id;
    $books;
    $ipr;
    $rank_in_national;
    $three_yr_national_rank;
    $rank_in_affiliation;
    $three_yr_affiliation_rank;
    $scopus_ro_articles;
    $scopus_ro_conference;
    $scopus_ro_other;
    $scopus_ro_total;
    $scopus_q1;
    $scopus_q2;
    $scopus_q3;
    $scopus_q4;
    $scopus_undefined;
    $sinta_s1;
    $sinta_s2;
    $sinta_s3;
    $sinta_s4;
    $sinta_s5;
    $sinta_s6;
    $sinta_uncategorized;
    $scopus_docs;
    $scopus_citations;
    $scopus_i10_idx;
    $scopus_g_idx;
    $google_docs;
    $google_citations;
    $google_i10_idx;
    $google_g_idx;
    $wos_docs;

    /**
     * Inisialisasi Simple HTML DOM Parser dengan alamat web SINTA ID
     * author pada author tertentu (sesuai perulangan).
     */
    $ch_init = curl_init();
    curl_setopt($ch_init, CURLOPT_URL, "http://sinta.ristekbrin.go.id" . $temp_author_link);
    curl_setopt($ch_init, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch_init, CURLOPT_RETURNTRANSFER, 1);
    $response = curl_exec($ch_init);
    curl_close($ch_init);

    $html = new simple_html_dom();
    $html->load($response);

    // Ambil data departemen dan SINTA ID author.
    $count = 1;
    foreach($html->find('.au-department') as $out) {
        if ($count == 1) {
            $departemen = $out->plaintext;
        }
        else if ($count == 2) {
            $temp = explode(' ', $out->plaintext);
            $sinta_id = $temp[3];
        }

        $count++;
    }

    /**
     * Ambil data:
     * - Books
     * - IPR
     * - Rank in National
     * - 3 Year National Rank
     * - Rank in Affiliation
     * - 3 Year Affiliation Rank
     */
    $count = 1;
    foreach($html->find('.stat2-val') as $out) {
        switch($count) {
            case 5:
                $books = $out->plaintext;
                break;
            case 6:
                // $ipr = $out->plaintext;
                $rank_in_national = $out->plaintext;
                break;
            case 7:
                // $rank_in_national = $out->plaintext;
                $three_yr_national_rank = $out->plaintext;
                break;
            case 8:
                // $three_yr_national_rank = $out->plaintext;
                $ipr = $out->plaintext;
                break;
            case 9:
                $rank_in_affiliation = $out->plaintext;
                break;
            case 10:
                $three_yr_affiliation_rank = $out->plaintext;
                break;
        }

        $count++;
    }

    // Ambil semua data di Research Output Scopus
    $count = 1;
    foreach($html->find('.uk-width-1-4') as $out) {
        switch($count) {
            case 5:
                $scopus_ro_articles = $out->plaintext;
                break;
            case 6:
                $scopus_ro_conference = $out->plaintext;
                break;
            case 7:
                $scopus_ro_other = $out->plaintext;
                break;
            case 8:
                $scopus_ro_total = $out->plaintext;
                break;
        }

        $count++;
    }

    // Ambil semua data di Quartile Scopus
    $count = 1;
    foreach($html->find('.uk-width-1-5') as $out) {
        switch($count) {
            case 6:
                $scopus_q1 = $out->plaintext;
                break;
            case 7:
                $scopus_q2 = $out->plaintext;
                break;
            case 8:
                $scopus_q3 = $out->plaintext;
                break;
            case 9:
                $scopus_q4 = $out->plaintext;
                break;
            case 10:
                $scopus_undefined = $out->plaintext;
                break;
        }

        $count++;
    }

    // Ambil semua data di Accreditation SINTA (kecuali Uncategorized)
    $count = 1;
    foreach($html->find('.uk-width-1-10') as $out) {
        switch($count) {
            case 9:
                $sinta_s1 = $out->plaintext;
                break;
            case 10:
                $sinta_s2 = $out->plaintext;
                break;
            case 11:
                $sinta_s3 = $out->plaintext;
                break;
            case 12:
                $sinta_s4 = $out->plaintext;
                break;
            case 13:
                $sinta_s5 = $out->plaintext;
                break;
            case 14:
                $sinta_s6 = $out->plaintext;
                break;
        }

        $count++;
    }

    // Ambil data Uncategorized di Accreditation SINTA
    $count = 1;
    foreach($html->find('.uk-width-2-10') as $out) {
        if ($count == 3) {
            $sinta_uncategorized = $out->plaintext;
        }

        $count++;
    }

    // Ambil semua data di Score
    $count = 1;
    foreach($html->find('.uk-width-1-6') as $out) {
        switch($count) {
            case 8:
                $scopus_docs = $out->plaintext;
                break;
            case 9:
                $scopus_citations = $out->plaintext;
                break;
            case 11:
                $scopus_i10_idx = $out->plaintext;
                break;
            case 12:
                $scopus_g_idx = $out->plaintext;
                break;
            case 14:
                $google_docs = $out->plaintext;
                break;
            case 15:
                $google_citations = $out->plaintext;
                break;
            case 17:
                $google_i10_idx = $out->plaintext;
                break;
            case 18:
                $google_g_idx = $out->plaintext;
                break;
            case 20:
                $wos_docs = $out->plaintext;
                break;
        }

        $count++;
    }

    $sql = 'INSERT INTO author (
                departemen,
                sinta_id,
                books,
                ipr,
                rank_in_national,
                three_yr_national_rank,
                rank_in_affiliation,
                three_yr_affiliation_rank,
                scopus_ro_articles,
                scopus_ro_conference,
                scopus_ro_other,
                scopus_ro_total,
                scopus_q1,
                scopus_q2,
                scopus_q3,
                scopus_q4,
                scopus_undefined,
                sinta_s1,
                sinta_s2,
                sinta_s3,
                sinta_s4,
                sinta_s5,
                sinta_s6,
                sinta_uncategorized,
                scopus_docs,
                scopus_citations,
                scopus_i10_idx,
                scopus_g_idx,
                google_docs,
                google_citations,
                google_i10_idx,
                google_g_idx,
                wos_docs
            ) VALUES (
                "'.$departemen.'",
                "'.$sinta_id.'",
                "'.$books.'",
                "'.$ipr.'",
                "'.$rank_in_national.'",
                "'.$three_yr_national_rank.'",
                "'.$rank_in_affiliation.'",
                "'.$three_yr_affiliation_rank.'",
                "'.$scopus_ro_articles.'",
                "'.$scopus_ro_conference.'",
                "'.$scopus_ro_other.'",
                "'.$scopus_ro_total.'",
                "'.$scopus_q1.'",
                "'.$scopus_q2.'",
                "'.$scopus_q3.'",
                "'.$scopus_q4.'",
                "'.$scopus_undefined.'",
                "'.$sinta_s1.'",
                "'.$sinta_s2.'",
                "'.$sinta_s3.'",
                "'.$sinta_s4.'",
                "'.$sinta_s5.'",
                "'.$sinta_s6.'",
                "'.$sinta_uncategorized.'",
                "'.$scopus_docs.'",
                "'.$scopus_citations.'",
                "'.$scopus_i10_idx.'",
                "'.$scopus_g_idx.'",
                "'.$google_docs.'",
                "'.$google_citations.'",
                "'.$google_i10_idx.'",
                "'.$google_g_idx.'",
                "'.$wos_docs.'"
            )';
    $database->exec($sql);
    
    $sql = 'UPDATE affiliations SET auth_ok = 1 WHERE id = '.$id;
    $database->exec($sql);
}

$g_id++;
$max_id;

$database = new SQLite3('scrape'.$g_part.'.db');

$sql = 'SELECT MAX(id) AS max_id FROM affiliations
        ORDER BY id DESC LIMIT 1';
$result = $database->query($sql);
if ($result) {
    if ($row = $result->fetchArray()) {
        $max_id = $row['max_id'];
    }
}

if ($g_id <= $max_id) {
    echo '<script type="text/javascript" language="Javascript">'.
        'window.open("get_author_page_data.php?part='.$g_part.'&id='.$g_id.'");'.
        '</script>'
    ;
    echo '<script type="text/javascript" language="Javascript">'.
        'close();'.
        '</script>'
    ;
} else {
    echo '<script type="text/javascript" language="Javascript">'.
        'window.open("get_author_scopus_docs_data.php?part='.$g_part.'&id=1&page=1");'.
        '</script>'
    ;
    echo '<script type="text/javascript" language="Javascript">'.
        'close();'.
        '</script>'
    ;
}

echo '<script type="text/javascript" language="Javascript">'.
    'close();'.
    '</script>'
;

