<?php
include(./additional/simple_html_dom.php);
$content = file_get_contents('https://www.gismeteo.ua/ua/weather-kharkiv-5053');


echo $content;

//preg_match('#<input type="hidden" name="quantity_on_hand" value="(.*?)">#', $content, $match);
//$in_stock = $match[1];

//echo "Price: $price";
//Availability: $in_stock\n
?>
