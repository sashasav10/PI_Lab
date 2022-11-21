<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Weather</title>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js">
    </script>
</head>
    <style>.meteo-informer {
      width: 40%;
      min-height: auto;
      border-color: #2B2B2B;
      background-color: #2B2B2B;
      display: inline-block;
      top: 30px;
      left: 30px;
      margin-right: 0;
      float: right;
      color: #FFFFFF;
      font-family: Arial, sans-serif
      }
      .meteo-informer__cell, .meteo-informer__interval-night {
        border-bottom-color: #FFFFFF;
        }
        .meteo-informer__cell-info, .meteo-informer__cell-logo {
          border-bottom-color: #2B2B2B;
        }
    </style>
<body>
    <div class="col-12 text-center" style="margin: 2em;">
        <div class="weather">
            <form action="" method="POST">
                <input type="text" name="lat" id="search_box" value="" placeholder="Latitude" autocomplete="off" required>
                <input type="text" name="lon" id="search_box2" value="" placeholder="Longitude" autocomplete="off" required>
                <input type="submit" name="search" value="Search">
            </form>
        </div>
    </div>
    <canvas id="chart" style="width:100%;max-width:40%"></canvas>
    <?php
    if (isset($_POST['search'])) {
        $lat = $_POST['lat'];
        $lon = $_POST['lon'];
        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => "https://weatherbit-v1-mashape.p.rapidapi.com/forecast/hourly?lat=$lat&lon=$lon&hours=24&units=metric",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => [
                "X-RapidAPI-Host: weatherbit-v1-mashape.p.rapidapi.com",
                "X-RapidAPI-Key: 98d303c59fmsh4dc2ae872730e4ap10b972jsn7376f40cdbaf"
            ],
        ]);
        $data = array('total_stud' => 500);
        $response = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);
        $res = json_decode($response, true);
        $val = 'datetime';
        $val2 = 'temp';
        $keys = array_keys($res);
        $arr1 = '[';
        $arr2 = '[';
        $data = $res["data"];
        foreach ($data as $key => $d) {
            $arr1 = $arr1 . explode(":", $d[$val])[1] . ', ';
        }
        $arr1 = $arr1 . "]";
        foreach ($data as $key => $d) {
            $arr2 = $arr2 . $d[$val2] . ', ';
        }
        $arr2 = $arr2 . "]";
        $city = $res["city_name"];
        echo "Сity $city";
        echo "
    <script>
      var xValues = $arr1;
      var yValues = $arr2;
      var chart = new Chart(document.getElementById('chart'), {
      type: 'line',
      data: {
      labels: xValues,
      datasets: [{
       label: 'Tempreture',
       backgroundColor: 'rgba(180, 215, 64, 0.2)',
       borderColor: 'rgba(180, 215, 64, 1)',
      data: yValues,
      borderWidth: 0.8
       }]
        },
       options: {}
       });
     </script>";
    }
    ?>
    <div id="meteo_informer_6593cff320280134093cb806da18a91e"><p><a href="https://meteo.ua/ua/34/kiev">Погода в Києві
    </a></p>
    </div>
    <script async type="text/javascript" charset="utf-8" src="https://meteo.ua/informer-6593cff320280134093cb806da18a91e"></script>

</body>

</html>
