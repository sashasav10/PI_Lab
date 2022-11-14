<?php
  include("simple_html_dom.php");
  $content = file_get_html('https://www.gismeteo.ua/ua/weather-kharkiv-5053');
  $city=$content ->find('div[class=breadcrumbs-links]')[2]->plaintext;
  $date=$content ->find('div[class=localedate]')[0]->plaintext;
  $sunrise=$content ->find('div[class=astro-times]')[1]->plaintext;
  $sunset=$content ->find('div[class=astro-times]')[2]->plaintext;
  $daytime=$content ->find('div[class=astro-progress]')[0]->plaintext;

  echo "$city";
  echo "$date";
  echo "$sunrise";
  echo "$sunset";
  echo "$daytime";
  // $date;
  //preg_match('date date-1(.*?)', $content, $match);
  //$in_stock = $match[1];
  //echo $in_stock;
  //echo "Price: $price";
  //Availability: $in_stock\n
  ?>
