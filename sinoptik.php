<?php
$content = file_get_contents('https://www.gismeteo.ua/ua/weather-kharkiv-5053/');

preg_match('date date-1', $content, $match);
$price = $match[1];
echo "0 $match[0]";
echo "1 $match[1]";
echo "2 $match[2]";
echo "3 $match[3]";
echo "4 $match[4]";
echo "5 $match[5]";
echo "6 $match[6]";
echo "7 $match[7]";

//preg_match('#<input type="hidden" name="quantity_on_hand" value="(.*?)">#', $content, $match);
//$in_stock = $match[1];

echo "Price: $price";
//Availability: $in_stock\n
