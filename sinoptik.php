<?php
include("simple_html_dom.php");
$content = file_get_html('https://www.gismeteo.ua/ua/weather-kharkiv-5053');
$city=$content ->find('div[class=page-title]')[0]->innertext;
$date=$content ->find('div[class=date date-1]')[0]->innertext;
$sunrise=$content ->find('div[class=astro-progress]')[0]->innertext;
//$sunset=$content ->find('div[class=date date-1]')[0]->innertext;
//$daytime=$content ->find('div[class=date date-1]')[0]->innertext;

echo $city;
echo $date;
echo $sunrise;
// $date;
//preg_match('date date-1(.*?)', $content, $match);
//$in_stock = $match[1];
//echo $in_stock;
//echo "Price: $price";
//Availability: $in_stock\n
?>
