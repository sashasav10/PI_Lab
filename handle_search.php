<?php
$search_term = $_GET["search_term"];
$search_term_encoded = urlencode($search_term);

if (empty($search_term)) {
    echo "$search_term not found";
    return;
}



$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://www.foxtrot.com.ua/uk/search?query={$search_term_encoded}");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);


$rozetka_html = curl_exec($ch);
curl_close($ch);

// parse the html using regex
preg_match_all(
    '/<article\s>(.*)<\/article>/',
    $rozetka_html,
    $matches
);

echo "<pre>";
foreach ($matches[1] as $realtitle) {
    echo $realtitle . "\n";
}
echo "</pre>";
