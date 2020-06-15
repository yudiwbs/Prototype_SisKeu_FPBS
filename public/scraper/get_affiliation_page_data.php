<?php
/**
 * Get Affiliation Page Data
 * Fungsi untuk mengambil data yang tertera di page affiliation UPI di SINTA.
 * Merupakan bagian dari program Scraper Web SINTA UPI.
 * 
 * Data yang diambil:
 * - Nama Author
 * - NIDN
 * - Scopus H-Index
 * - Google H-Index
 * x 3 Year Score
 * x Keterangan 3 Year Score
 * x All Year Score
 * - 3 Year Score v2
 * - All Year Score v2
 * - Link Author Page Per Author
 * 
 * Dikembangkan untuk Direktorat TIK UPI
 * Tahun 2020
 */
    
// Menghilangkan time limit standar PHP.
set_time_limit(0);

// $path = {{ asset('scraper/01_gather_data.php') }};
include_once("simple_html_dom.php");

echo "Hello, World!";


// $page = $_GET['page'];
// $dbpart = $_GET['part'];

// $nama = array();
// $nidn = array();
// $h_indeks = array();
// $google_h_indeks = array();

// // (KOMPONEN DI WEB HILANG)
// /* $three_yr_score = array();
// $three_yr_ket = array();
// $all_yr_score = array(); */

// $three_yr_score_v2 = array();
// $all_yr_score_v2 = array();
// $temp_author_links = array();

// /**
//  * Inisialisasi Simple HTML DOM Parser dengan alamat web SINTA ID
//  * affiliation UPI pada page tertentu (sesuai pada parameter fungsi).
//  */
// $ch_init = curl_init();
// curl_setopt($ch_init, CURLOPT_URL, "http://sinta.ristekbrin.go.id/affiliations/detail?page=".$page."&view=authors&id=414&sort=year2");
// curl_setopt($ch_init, CURLOPT_FOLLOWLOCATION, 1);
// curl_setopt($ch_init, CURLOPT_RETURNTRANSFER, 1);
// $response = curl_exec($ch_init);
// curl_close($ch_init);

// $html = new simple_html_dom();
// $html->load($response);

// // Ambil link page detail setiap author.
// foreach ($html->find('a[href^=/authors/detail]') as $out) {
//     array_push($temp_author_links, $out->href);
// }

// // Ambil nama
// foreach ($html->find('a[href^=/authors/detail]') as $out) {
//     array_push($nama, $out->innertext);
// }

// // Ambil nidn
// $count = 0;
// foreach ($html->find('dd') as $out) {
//     $count++;
//     if ($count == 2)
//         array_push($nidn, $out->plaintext);
//     if ($count == 3)
//         $count = 0;
// }

// // Ambil h-indeks scopus
// $count = 1;
// foreach ($html->find('.indexed-by-val') as $out) {
//     if ($count % 2 == 1)
//     array_push($h_indeks, $out->plaintext);
//     $count++;
// }

// // Ambil h-indeks google scholar
// $count = 1;
// foreach ($html->find('.indexed-by-val') as $out) {
//     if ($count % 2 == 0)
//     array_push($google_h_indeks, $out->plaintext);
//     $count++;
// }

// // (KOMPONEN DI WEB HILANG)
// // Ambil 3 year score, keterangan 3 year score, dan all year score
// /* $count = 1;
// foreach ($html->find('table td[class=index-val uk-text-center]') as $out) {
//     $temp = explode(' ', $out->plaintext);
//     if ($count % 2 == 1) {
//         array_push($three_yr_score, $temp[37]);
//         array_push($three_yr_ket, $temp[74]." ".$temp[75]);
//     } else {
//         array_push($all_yr_score, $temp[37]);
//     }
//     $count++;
// } */

// // Ambil 3 year score v2 dan all year score v2
// $count = 1;
// foreach ($html->find('table td[class=index-val]') as $out) {
//     $temp = explode(' ', $out->plaintext);
//     if ($count % 2 == 1) {
//         array_push($three_yr_score_v2, $temp[37]);
//     } else {
//         array_push($all_yr_score_v2, $temp[37]);
//     }
//     $count++;
// }

// $count = 0;
// foreach($nidn as $n) {
//     $temp = explode(' ', $n);
//     $nidn[$count] = $temp[3];
//     $count++;
// }

// $database = new SQLite3('scrape'.$dbpart.'.db');

// for ($i = 0; $i < count($nama); $i++) {
//     $sql = 'INSERT INTO affiliations (
//                 page_num,
//                 nama,
//                 nidn,
//                 h_indeks,
//                 google_h_indeks,
//                 three_yr_score_v2,
//                 all_yr_score_v2,
//                 author_link,
//                 auth_ok,
//                 docs_ok
//             ) VALUES (
//                 "'.$page.'",
//                 "'.$nama[$i].'",
//                 "'.$nidn[$i].'",
//                 "'.$h_indeks[$i].'",
//                 "'.$google_h_indeks[$i].'",
//                 "'.$three_yr_score_v2[$i].'",
//                 "'.$all_yr_score_v2[$i].'",
//                 "'.$temp_author_links[$i].'",
//                 0,
//                 0
//             )';
//     $database->exec($sql);
// }

// $max_page;
// foreach ($html->find('caption') as $out) {
//     $split = explode(' ', $out);
//     $max_page = $split[3];
// }

// if ($page == $max_page || $page == $dbpart * 50) {
//     echo '<script type="text/javascript" language="Javascript">'.
//         'window.open("http://128.199.205.18/scraper/get_author_page_data.php?part='.$dbpart.'&id=1");'.
//         '</script>'
//     ;
//     echo '<script type="text/javascript" language="Javascript">'.
//          'close();'.
//          '</script>'
//     ;
// }
// else {
//     $sql = 'SELECT MAX(page_num) AS max_curr_page FROM affiliations
//             ORDER BY page_num DESC LIMIT 1';
//     $result = $database->query($sql);
//     if ($result) {
//         if ($row = $result->fetchArray()) {
//             $next_pg = $row['max_curr_page'] + 1;
//             echo '<script type="text/javascript" language="Javascript">'.
//                  'window.open("http://128.199.205.18/scraper/get_affiliation_page_data.php?page='.$next_pg.'&part='.$dbpart.'");'.
//                  '</script>'
//             ;
//             // sleep(1);
//             echo '<script type="text/javascript" language="Javascript">'.
//                  'close();'.
//                  '</script>'
//             ;
//         }
//     }
// }
