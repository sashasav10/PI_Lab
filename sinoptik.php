<?php
include(./additional/simplehtmldom_1_9_1/simple_html_dom.php);
$content = file_get_html('https://www.gismeteo.ua/ua/weather-kharkiv-5053');
$date=$content->find("div#date date-1",0)->plaintext;

echo $date;

//preg_match('#<input type="hidden" name="quantity_on_hand" value="(.*?)">#', $content, $match);
//$in_stock = $match[1];

//echo "Price: $price";
//Availability: $in_stock\n
?>
