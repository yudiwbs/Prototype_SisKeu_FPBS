<?php

if (file_exists("scrape1.db")) {
    unlink("scrape1.db");
}
if (file_exists("scrape2.db")) {
    unlink("scrape2.db");
}
if (file_exists("scrape3.db")) {
    unlink("scrape3.db");
}
if (file_exists("result.json")) {
    unlink("result.json");
}

echo '<script type="text/javascript" language="Javascript">'.
    'window.open(document.referrer, "_self");'.
    '</script>'
;