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
    "/<div class=\"listing__body-wrap image-switch\"(.*)<\/div>/s",
    $rozetka_html,
    $matches
);
$matches[0][0] = substr($matches[0][0], 0, 119165);
if (!empty($matches[0][0])) {
    echo $matches[0][0];
} else {
    echo "$search_term not found";
}
