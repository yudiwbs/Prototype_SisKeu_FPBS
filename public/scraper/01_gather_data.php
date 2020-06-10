<?php

set_time_limit(0);


// $sql = 'CREATE TABLE coba (
//             id INTEGER PRIMARY KEY,
//             nama TEXT,
//             jk CHAR
//         )';
// $database->exec($sql);

// $nama = "Fachri";
// $jk = "L";
// $sql = 'INSERT INTO coba (nama, jk) VALUES ("' . $nama .'", "' . $jk . '")';
// $database->exec($sql);

// $sql = 'SELECT * FROM coba ORDER BY nama, jk';
// $result = $database->query($sql);
// while ($res = $result->fetchArray()) {
    //     echo $res['nama'] . " " . $res['jk'] . "</br>";
// }

$sql1 = 'CREATE TABLE IF NOT EXISTS affiliations (
            id INTEGER PRIMARY KEY,
            page_num INTEGER,
            nama TEXT,
            nidn TEXT,
            h_indeks INTEGER,
            google_h_indeks INTEGER,
            three_yr_score_v2 INTEGER,
            all_yr_score_v2 INTEGER,
            author_link INTEGER,
            auth_ok INTEGER,
            docs_ok INTEGER
        )';

$sql2 = 'CREATE TABLE IF NOT EXISTS author (
            id INTEGER PRIMARY KEY,
            departemen TEXT,
            sinta_id TEXT,
            books INTEGER,
            ipr INTEGER,
            rank_in_national INTEGER,
            three_yr_national_rank INTEGER,
            rank_in_affiliation INTEGER,
            three_yr_affiliation_rank INTEGER,
            scopus_ro_articles INTEGER,
            scopus_ro_conference INTEGER,
            scopus_ro_other INTEGER,
            scopus_ro_total INTEGER,
            scopus_q1 INTEGER,
            scopus_q2 INTEGER,
            scopus_q3 INTEGER,
            scopus_q4 INTEGER,
            scopus_undefined INTEGER,
            sinta_s1 INTEGER,
            sinta_s2 INTEGER,
            sinta_s3 INTEGER,
            sinta_s4 INTEGER,
            sinta_s5 INTEGER,
            sinta_s6 INTEGER,
            sinta_uncategorized INTEGER,
            scopus_docs INTEGER,
            scopus_citations INTEGER,
            scopus_i10_idx INTEGER,
            scopus_g_idx INTEGER,
            google_docs INTEGER,
            google_citations INTEGER,
            google_i10_idx INTEGER,
            google_g_idx INTEGER,
            wos_docs INTEGER
        )';

$sql3 = 'CREATE TABLE IF NOT EXISTS scopus (
            id INTEGER PRIMARY KEY,
            sinta_id TEXT,
            quartile TEXT,
            publication TEXT,
            details TEXT,
            citation INTEGER
        )';

$database = new SQLite3('scrape1.db');
$database->exec($sql1);
$database->exec($sql2);
$database->exec($sql3);

$database = new SQLite3('scrape2.db');
$database->exec($sql1);
$database->exec($sql2);
$database->exec($sql3);

$database = new SQLite3('scrape3.db');
$database->exec($sql1);
$database->exec($sql2);
$database->exec($sql3);

echo '<script type="text/javascript" language="Javascript">'.
    'window.open("get_affiliation_page_data.php?page=1&part=1");'.
    '</script>'
;
echo '<script type="text/javascript" language="Javascript">'.
    'window.open("get_affiliation_page_data.php?page=51&part=2");'.
    '</script>'
;
echo '<script type="text/javascript" language="Javascript">'.
    'window.open("get_affiliation_page_data.php?page=101&part=3");'.
    '</script>'
;

echo '<script type="text/javascript" language="Javascript">'.
    'close();'.
    '</script>'
;

