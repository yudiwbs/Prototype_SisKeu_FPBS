<?php
/**
 * Get Author Scopus Documents Data
 * Fungsi untuk mengambil data dokumen Scopus dari author di SINTA.
 * Merupakan bagian dari program Scraper Web SINTA UPI.
 * 
 * Data yang diambil:
 * - Quartile
 * - Publication
 * - Publication Details
 * - Citation
 * 
 * Dikembangkan untuk Direktorat TIK UPI
 * Tahun 2020
 */
    

set_time_limit(0);
include_once("simple_html_dom.php");

$g_part = $_GET['part'];
$g_id = $_GET['id'];
$g_page = $_GET['page'];
$max_page;
run($g_part, $g_id, $g_page, 30, $max_page);

function run($part, $id, $page, $limit, &$max_page)
{
    set_time_limit($limit);
    
    // Array penampung detail dokumen Scopus yang akan diambil.
    $quartile = array();
    $publication = array();
    $details = array();
    $citation = array();
    
    $sinta_id;
    
    $database = new SQLite3('scrape'.$part.'.db');
    $sql = 'SELECT sinta_id AS s_id FROM author WHERE id = '.$id;
    $result = $database->query($sql);
    if ($result) {
        if ($row = $result->fetchArray()) {
            $sinta_id = $row['s_id'];
        }
    }
    
    // Array penampung data gabungan dari detail dokumen Scopus.
    // $scopusDocsGab = array();

    // Variabel penampung halaman maksimal dokumen Scopus.
    // $max_page;
    
    /**
     * Inisialisasi Simple HTML DOM Parser dengan alamat web SINTA ID
     * detail dokumen Scopus author.
     */
    $ch_init = curl_init();
    // ID author didapatkan dari parameter fungsi.
    curl_setopt($ch_init, CURLOPT_URL, "http://sinta.ristekbrin.go.id/authors/detail?page=".$page."&id=".$sinta_id."&view=documentsscopus");
    curl_setopt($ch_init, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch_init, CURLOPT_RETURNTRANSFER, 1);
    $response = curl_exec($ch_init);
    curl_close($ch_init);

    $html = new simple_html_dom();
    $html->load($response);

    // Ambil halaman maksimum dokumen Scopus.
    foreach ($html->find('caption') as $out) {
        $split = explode(' ', $out);
        $max_page = $split[3];
        $max_recs = $split[8];
    }

    // echo $max_page."<br>";
    // echo $max_recs."<br>";

    if ($max_recs > 0) {
        /**
         * Pada blok-blok kode sebelum perulangan for di bawah ini,
         * data pada page pertama akan diambil terlebih dahulu.
         */
        // Ambil data quartile dan citation.
        $count = 1;
        foreach ($html->find('.index-val') as $out) {
            if ($count % 2 == 1) {
                array_push($quartile, $out->plaintext);
            }
            else {
                array_push($citation ,$out->plaintext);
            }
            $count++;
        }
        // Ambil data publication (judul publikasi).
        foreach ($html->find('.paper-link') as $out) {
            array_push($publication, $out->plaintext);
        }
        // Ambil data detail dari publication.
        foreach ($html->find('.indexed-by') as $out) {
            array_push($details, $out->plaintext);
        }

        
        for ($i = 0; $i < count($publication); $i++) {
            $sql = 'INSERT INTO scopus (
                        sinta_id,
                        quartile,
                        publication,
                        details,
                        citation
                    ) VALUES (
                        "'.$sinta_id.'",
                        "'.$quartile[$i].'",
                        "'.$publication[$i].'",
                        "'.$details[$i].'",
                        "'.$citation[$i].'"
            )';
            $database->exec($sql);
/*             echo $sinta_id."<br>";
            echo $quartile[$i]."<br>";
            echo $publication[$i]."<br>";
            echo $details[$i]."<br>";
            echo $citation[$i]."<br>"; */
        }
    }
}

$g_page++;

sleep(1);

if ($g_page <= $max_page) {
    echo '<script type="text/javascript" language="Javascript">'.
        'window.open("http://128.199.205.18/scraper/get_author_scopus_docs_data.php?part='.$g_part.'&id='.$g_id.'&page='.$g_page.'");'.
        '</script>'
    ;
    echo '<script type="text/javascript" language="Javascript">'.
        'close();'.
        '</script>'
    ;
} else {
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
            'window.open("http://128.199.205.18/scraper/get_author_scopus_docs_data.php?part='.$g_part.'&id='.$g_id.'&page=1");'.
            '</script>'
        ;
        echo '<script type="text/javascript" language="Javascript">'.
            'close();'.
            '</script>'
        ;
    }
}

echo '<script type="text/javascript" language="Javascript">'.
    'close();'.
    '</script>'
;