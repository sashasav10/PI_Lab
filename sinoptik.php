
  <!DOCTYPE html>
  <html>
  <style>

  	.title {
  		text-align: center;
  	}
  	.text {
  		margin-left: 10%;
  		margin-right: 10%;
  		margin-top: 15px;
  		border: 3px salmon;
  		background-color: #D5F5D5;
  		padding: 10px;
  	}

  </style>
  <body>
      <p> Kharkiv</p>
    <?php
      include("simple_html_dom.php");
      $content = file_get_html('https://www.gismeteo.ua/ua/weather-kharkiv-5053');
      $city=$content ->find('div[class=page-title]')[0]->plaintext;
      $date=$content ->find('div[class=localedate]')[0]->innertext;
      $sunrise=$content ->find('div[class=astro-times]')[1]->innertext;
      $sunset=$content ->find('div[class=astro-times]')[2]->innertext;
      $daytime=$content ->find('div[class=astro-progress]')[0]->innertext;
      $weathertemp=$content ->find('//div[class=widget-row-chart widget-row-chart-temperature]//div[class=chart]//div[class=values]')[0]->outertext;

      //echo "$city";
      echo "$date";
      echo "$sunrise";
      echo "$sunset";
      echo "$daytime";
      echo "$weathertemp";
      // $date;
      //preg_match('date date-1(.*?)', $content, $match);
      //$in_stock = $match[1];
      //echo $in_stock;
      //echo "Price: $price";
      //Availability: $in_stock\n
      ?>
  	<section class="text-section">
  			]
  	</section>
  </body>
  </html>
