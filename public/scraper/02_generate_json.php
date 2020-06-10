<?php

set_time_limit(0);
// $dataGab = array(
    // // Author Profile
    // "nama",
    // "nidn",
    // "departement",
    // "sinta_id",

    // // Scores
    // "overall_score_v2",
    // "books",
    // "3_yr_score_v2",
    // "ipr",
    // "rank_in_national",
    // "3_yr_national_rank",
    // "rank_in_affiliation",
    // "3_yr_affiliation_rank",

    // // Scopus Research Output
    // "scopus_ro_articles",
    // "scopus_ro_conference",
    // "scopus_ro_other",
    // "scopus_ro_total",

    // // Scopus Quartile
    // "scopus_q1",
    // "scopus_q2",
    // "scopus_q3",
    // "scopus_q4",
    // "scopus_undefined",

    // // SINTA Accreditation
    // "sinta_s1",
    // "sinta_s2",
    // "sinta_s3",
    // "sinta_s4",
    // "sinta_s5",
    // "sinta_s6",
    // "sinta_uncategorized",

    // // Score
    // "scopus_docs",
    // "scopus_citations",
    // "scopus_h_idx",
    // "scopus_i10_idx",
    // "scopus_g_idx",
    // "google_docs",
    // "google_citations",
    // "google_h_idx",
    // "google_i10_idx",
    // "google_g_idx",
    // "wos_docs",

    // // Scopus Docs
    // "scopus_publications"
// );

$dataGab = array();

// Author Profile
$nama = array();
$nidn = array();
$departement = array();
$sinta_id = array();

// Scores
$overall_score_v2 = array();
$books = array();
$three_yr_score_v2 = array();
$ipr = array();
$rank_in_national = array();
$three_yr_national_rank = array();
$rank_in_affiliation = array();
$three_yr_affiliation_rank = array();

// Scopus Research Output
$scopus_ro_articles = array();
$scopus_ro_conference = array();
$scopus_ro_other = array();
$scopus_ro_total = array();

// Scopus Quartile
$scopus_q1 = array();
$scopus_q2 = array();
$scopus_q3 = array();
$scopus_q4 = array();
$scopus_undefined = array();

// SINTA Accreditation
$sinta_s1 = array();
$sinta_s2 = array();
$sinta_s3 = array();
$sinta_s4 = array();
$sinta_s5 = array();
$sinta_s6 = array();
$sinta_uncategorized = array();

// Score
$scopus_docs = array();
$scopus_citations = array();
$scopus_h_idx = array();
$scopus_i10_idx = array();
$scopus_g_idx = array();
$google_docs = array();
$google_citations = array();
$google_h_idx = array();
$google_i10_idx = array();
$google_g_idx = array();
$wos_docs = array();

// Scopus Docs
$scopus_publications = array();

for ($i = 1; $i <= 3; $i++) {
    $database = new SQLite3('scrape'.$i.'.db');

    $sql_affil = 'SELECT * FROM affiliations ORDER BY id ASC';
    $sql_auth = 'SELECT * FROM author ORDER BY id ASC';

    $result_affil = $database->query($sql_affil);
    $result_auth = $database->query($sql_auth);

    while ($res_af = $result_affil->fetchArray()) {
        /* array_push($dataGab, array(
            "nama" => $res_af['nama'],
            "nidn" => $res_af['nidn'],
            "scopus_h_idx" => (int)$res_af['h_indeks'],
            "google_h_idx" => (int)$res_af['google_h_indeks'],
            "3_yr_score_v2" => (float)$res_af['three_yr_score_v2'],
            "overall_score_v2" => (float)$res_af['all_yr_score_v2']
        )); */

        array_push($nama, $res_af['nama']);
        array_push($nidn, $res_af['nidn']);
        array_push($scopus_h_idx, $res_af['h_indeks']);
        array_push($google_h_idx, $res_af['google_h_indeks']);
        array_push($three_yr_score_v2, $res_af['three_yr_score_v2']);
        array_push($overall_score_v2, $res_af['all_yr_score_v2']);
    }

    while ($res_au = $result_auth->fetchArray()) {
        /* array_push($dataGab, array(
            "departement" => $res_au['departemen'],
            "sinta_id" => $res_au['sinta_id'],
            "books" => (int)$res_au['books'],
            "ipr" => (int)$res_au['ipr'],
            "rank_in_national" => (int)$res_au['rank_in_national'],
            "3_yr_national_rank" => (int)$res_au['three_yr_national_rank'],
            "rank_in_affiliation" => (int)$res_au['rank_in_affiliation'],
            "3_yr_affiliation_rank" => (int)$res_au['three_yr_affiliation_rank'],
            
            // Scopus Research Output
            "scopus_ro_articles" => (int)$res_au['scopus_ro_articles'],
            "scopus_ro_conference" => (int)$res_au['scopus_ro_conference'],
            "scopus_ro_other" => (int)$res_au['scopus_ro_other'],
            "scopus_ro_total" => (int)$res_au['scopus_ro_total'],

            // Scopus Quartile
            "scopus_q1" => (int)$res_au['scopus_q1'],
            "scopus_q2" => (int)$res_au['scopus_q2'],
            "scopus_q3" => (int)$res_au['scopus_q3'],
            "scopus_q4" => (int)$res_au['scopus_q4'],
            "scopus_undefined" => (int)$res_au['scopus_undefined'],

            // SINTA Accreditation
            "sinta_s1" => (int)$res_au['sinta_s1'],
            "sinta_s2" => (int)$res_au['sinta_s2'],
            "sinta_s3" => (int)$res_au['sinta_s3'],
            "sinta_s4" => (int)$res_au['sinta_s4'],
            "sinta_s5" => (int)$res_au['sinta_s5'],
            "sinta_s6" => (int)$res_au['sinta_s6'],
            "sinta_uncategorized" => (int)$res_au['sinta_uncategorized'],

            // Score
            "scopus_docs" => (int)$res_au['scopus_docs'],
            "scopus_citations" => (int)$res_au['scopus_citations'],
            "scopus_i10_idx" => (int)$res_au['scopus_i10_idx'],
            "scopus_g_idx" => (int)$res_au['scopus_g_idx'],
            "google_docs" => (int)$res_au['google_docs'],
            "google_citations" => (int)$res_au['google_citations'],
            "google_i10_idx" => (int)$res_au['google_i10_idx'],
            "google_g_idx" => (int)$res_au['google_g_idx'],
            "wos_docs" => (int)$res_au['wos_docs'],

        )); */

        array_push($departement, $res_au['departemen']);
        array_push($sinta_id, $res_au['sinta_id']);
        array_push($books, $res_au['books']);
        array_push($ipr, $res_au['ipr']);
        array_push($rank_in_national, $res_au['rank_in_national']);
        array_push($three_yr_national_rank, $res_au['three_yr_national_rank']);
        array_push($rank_in_affiliation, $res_au['rank_in_affiliation']);
        array_push($three_yr_affiliation_rank, $res_au['three_yr_affiliation_rank']);

        array_push($scopus_ro_articles, $res_au['scopus_ro_articles']);
        array_push($scopus_ro_conference, $res_au['scopus_ro_conference']);
        array_push($scopus_ro_other, $res_au['scopus_ro_other']);
        array_push($scopus_ro_total, $res_au['scopus_ro_total']);

        array_push($scopus_q1, $res_au['scopus_q1']);
        array_push($scopus_q2, $res_au['scopus_q2']);
        array_push($scopus_q3, $res_au['scopus_q3']);
        array_push($scopus_q4, $res_au['scopus_q4']);
        array_push($scopus_undefined, $res_au['scopus_undefined']);

        array_push($sinta_s1, $res_au['sinta_s1']);
        array_push($sinta_s2, $res_au['sinta_s2']);
        array_push($sinta_s3, $res_au['sinta_s3']);
        array_push($sinta_s4, $res_au['sinta_s4']);
        array_push($sinta_s5, $res_au['sinta_s5']);
        array_push($sinta_s6, $res_au['sinta_s6']);
        array_push($sinta_uncategorized, $res_au['sinta_uncategorized']);

        array_push($scopus_docs, $res_au['scopus_docs']);
        array_push($scopus_citations, $res_au['scopus_citations']);
        array_push($scopus_i10_idx, $res_au['scopus_i10_idx']);
        array_push($scopus_g_idx, $res_au['scopus_g_idx']);
        array_push($google_docs, $res_au['google_docs']);
        array_push($google_citations, $res_au['google_citations']);
        array_push($google_i10_idx, $res_au['google_i10_idx']);
        array_push($google_g_idx, $res_au['google_g_idx']);
        array_push($wos_docs, $res_au['wos_docs']);

        $sql_docs = 'SELECT quartile, publication, details, citation
                    FROM scopus WHERE sinta_id ='.$res_au['sinta_id'];
    
        $result_docs = $database->query($sql_docs);

        $pubs = array();
        while ($res_do = $result_docs->fetchArray()) {
            array_push($pubs, array(
                "quartile" => $res_do['quartile'],
                "publication" => $res_do['publication'],
                "details" => $res_do['details'],
                "citation" => $res_do['citation']
            ));
        }

        array_push($scopus_publications, $pubs);
    }


}

for ($i = 0; $i < count($nama); $i++) {
    array_push($dataGab, array(
        // Author Profile
        "nama" => $nama[$i],
        "nidn" => $nidn[$i],
        "departement" => $departement[$i],
        "sinta_id" => $sinta_id[$i],

        // Scores
        // "overall_score" => (float)$all_yr_score[$i],
        "overall_score_v2" => (float)$overall_score_v2[$i],
        "books" => (int)$books[$i],
        // "3_yr_score" => (float)$three_yr_score[$i],
        "3_yr_score_v2" => (float)$three_yr_score_v2[$i],
        "ipr" => (int)$ipr[$i],
        "rank_in_national" => (int)$rank_in_national[$i],
        "3_yr_national_rank" => (int)$three_yr_national_rank[$i],
        "rank_in_affiliation" => (int)$rank_in_affiliation[$i],
        "3_yr_affiliation_rank" => (int)$three_yr_affiliation_rank[$i],

        // Scopus Research Output
        "scopus_ro_articles" => (int)$scopus_ro_articles[$i],
        "scopus_ro_conference" => (int)$scopus_ro_conference[$i],
        "scopus_ro_other" => (int)$scopus_ro_other[$i],
        "scopus_ro_total" => (int)$scopus_ro_total[$i],

        // Scopus Quartile
        "scopus_q1" => (int)$scopus_q1[$i],
        "scopus_q2" => (int)$scopus_q2[$i],
        "scopus_q3" => (int)$scopus_q3[$i],
        "scopus_q4" => (int)$scopus_q4[$i],
        "scopus_undefined" => (int)$scopus_undefined[$i],

        // SINTA Accreditation
        "sinta_s1" => (int)$sinta_s1[$i],
        "sinta_s2" => (int)$sinta_s2[$i],
        "sinta_s3" => (int)$sinta_s3[$i],
        "sinta_s4" => (int)$sinta_s4[$i],
        "sinta_s5" => (int)$sinta_s5[$i],
        "sinta_s6" => (int)$sinta_s6[$i],
        "sinta_uncategorized" => (int)$sinta_uncategorized[$i],

        // Score
        "scopus_docs" => (int)$scopus_docs[$i],
        "scopus_citations" => (int)$scopus_citations[$i],
        "scopus_h_idx" => (int)$scopus_h_idx[$i],
        "scopus_i10_idx" => (int)$scopus_i10_idx[$i],
        "scopus_g_idx" => (int)$scopus_g_idx[$i],
        "google_docs" => (int)$google_docs[$i],
        "google_citations" => (int)$google_citations[$i],
        "google_h_idx" => (int)$google_h_idx[$i],
        "google_i10_idx" => (int)$google_i10_idx[$i],
        "google_g_idx" => (int)$google_g_idx[$i],
        "wos_docs" => (int)$wos_docs[$i],

        // Scopus Docs
        "scopus_publications" => $scopus_publications[$i]
    ));
}

$file = fopen('result.json', 'w');
fwrite($file, json_encode($dataGab));
fclose($file);

echo '<script type="text/javascript" language="Javascript">'.
    'window.open("result.json", "_self");'.
    '</script>'
;