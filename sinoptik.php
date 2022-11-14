<?php
  include("simple_html_dom.php");
  $content = file_get_html('https://www.gismeteo.ua/ua/weather-kharkiv-5053');
  $city=$content ->find('div[class=page-title]')[0]->plaintext;
  $date=$content ->find('div[class=localedate]')[0]->innertext;
  $sunrise=$content ->find('div[class=astro-times]')[1]->innertext;
  $sunset=$content ->find('div[class=astro-times]')[2]->innertext;
  $daytime=$content ->find('div[class=astro-progress]')[0]->innertext;
  $weathertime=$content ->find('div[class=widget-row widget-row-time]')[0]->outertext;
  $weathertemp=$content ->find('div[class=widget-row-chart widget-row-chart-temperature]')[0]->outertext;

  //echo "$city";
  <p> Kharkiv</p>
  echo "$date";
  echo "$sunrise";
  echo "$sunset";
  echo "$daytime";
  echo "$weathertime";
  echo "$weathertemp";
  // $date;
  //preg_match('date date-1(.*?)', $content, $match);
  //$in_stock = $match[1];
  //echo $in_stock;
  //echo "Price: $price";
  //Availability: $in_stock\n
  ?>
