<style>
    .body1 {
        align-items: left;
        text-align: left;
        color: black;
        font-weight: normal;
    }

    span {
        align-items: center;
        text-align: left;
    }

    .btn-send {
      border-radius: 10%;
         width: 100px;
         height: 30px;
         border: 3px solid black;
      font-family: 'Montserrat', sans-serif;
      text-transform: uppercase;
      letter-spacing: 2px;
    }

</style>

<?php
if (isset($_POST['send'])) {
    $ip = htmlspecialchars($_POST['ip']);
    $access_key = '8ae8dd2f1d8e5c49cdc3c59d7a936a55';  //key
    $ch = curl_init('http://api.ipstack.com/' . $ip . '?access_key=' . $access_key . '&format=1');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $json = curl_exec($ch);
    curl_close($ch);
    $api_result = json_decode($json, true);

    $api_address = $api_result['ip'];
    $country_code = $api_result['country_code'];
    $region_name = $api_result['region_name'];
    $region_code = $api_result['region_code'];
    $city = $api_result['city'];
    $postal_code = $api_result['zip'];
    $latitude = $api_result['latitude'];
    $longitude = $api_result['longitude'];
?>

    <body class="body1">
        <div class="m-auto text-center mb-4">
            <form action="" method="POST">
                <input type='text' name='ip' value="<? if (isset($_POST['send'])) {
                                                        echo $api_address;
                                                    } else {
                                                        echo $_SERVER["REMOTE_ADDR"];
                                                    } ?>" placeholder="Enter the IP Address" />
                <button class="btn-send" type="submit" name="send">IP Lookup</button>
            </form>
        </div>

        <div class="container">
            <div class="row" style="justify-content: center;">
                <div class="col-3">
                    <div class="m-auto mb-4">
                        <p class="mt-3">
                            <b style="font-size: 25px;">Geolocation Information</b>
                        </p>
                        <p class="mt-3">
                            <b>IP: </b>
                            <?php if ($api_address == null) { ?>
                                N/A
                            <?php } else { ?>
                                <?= $api_address; ?>
                            <?php } ?>
                        </p>
                        <p class="mt-3">
                            <b>City: </b>
                            <?php if ($city == null) { ?>
                                N/A
                            <?php } else { ?>
                                <?= $city; ?>
                            <?php } ?>
                        </p>
                        <p class="mt-3">
                            <b>Country Code: </b>
                            <?php if ($country_code == null) { ?>
                                N/A
                            <?php } else { ?>
                                <?= $country_code; ?>
                            <?php } ?>
                        </p>
                        <p class="mt-3">
                            <b>Region Name: </b>
                            <?php if ($region_name == null) { ?>
                                N/A
                            <?php } else { ?>
                                <?= $region_name; ?>
                            <?php } ?>
                        </p>
                        <p class="mt-3">
                            <b>Region Code: </b>
                            <?php if ($region_code == null) { ?>
                                N/A
                            <?php } else { ?>
                                <?= $region_code; ?>
                            <?php } ?>
                        </p>
                        <p class="mt-3">
                            <b>Postal Code: </b>
                            <?php if ($postal_code == null) { ?>
                                N/A
                            <?php } else { ?>
                                <?= $postal_code; ?>
                            <?php } ?>
                        </p>
                        <p class="mt-3">
                            <b>Latitude: </b>
                            <?php if ($latitude == null) { ?>
                                N/A
                            <?php } else { ?>
                                <?= $latitude; ?>
                            <?php } ?>
                        </p>
                        <p class="mt-3">
                            <b>Longitude: </b>
                            <?php if ($longitude == null) { ?>
                                N/A
                            <?php } else { ?>
                                <?= $longitude; ?>
                            <?php } ?>
                        </p>
                        <p class="mt-3">
                            <span>
                                <b>Flag: </b>
                            </span>
                            <?php if ($country_code == null) { ?>
                                <img src="./additional/flags/_unitednations.png" alt="unitednations" />
                            <?php } else { ?>
                                <img src="./additional/flags/<?= $country_code; ?>.png" alt="<?= $country_code; ?>" />
                            <?php } ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </body>


<?php } else {
    $ip = $_SERVER["REMOTE_ADDR"];
    $access_key = '8ae8dd2f1d8e5c49cdc3c59d7a936a55'; //key
    $ch = curl_init('http://api.ipstack.com/' . $ip . '?access_key=' . $access_key . '&format=1');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $json = curl_exec($ch);
    curl_close($ch);
    $api_result = json_decode($json, true);

    $api_address = $api_result['ip'];
    $country_code = $api_result['country_code'];
    $region_name = $api_result['region_name'];
    $region_code = $api_result['region_code'];
    $city = $api_result['city'];
    $postal_code = $api_result['zip'];
    $latitude = $api_result['latitude'];
    $longitude = $api_result['longitude'];
?>

    <body class="body1">
        <div class="m-auto text-center mb-4">
            <form action="" method="POST">
                <input type='text' name='ip' value="<? if (isset($_POST['send'])) {
                                                        echo $api_address;
                                                    } else {
                                                        echo $_SERVER["REMOTE_ADDR"];
                                                    } ?>" placeholder="Enter the IP Address" />
                <button class="btn-send" type="submit" name="send">IP Lookup</button>
            </form>
        </div>

        <div class="container">
            <div class="row" style="justify-content: center;">
                <div class="col-3">
                    <div class="m-auto mb-4">
                        <p class="mt-3">
                            <b style="font-size: 14px;">IP Location</b>
                        </p>
                        <p class="mt-3">
                            <b>IP: </b>
                            <?php if ($api_address == null) { ?>
                                N/A
                            <?php } else { ?>
                                <?= $api_address; ?>
                            <?php } ?>
                        </p>
                        <p class="mt-3">
                            <b>City: </b>
                            <?php if ($city == null) { ?>
                                N/A
                            <?php } else { ?>
                                <?= $city; ?>
                            <?php } ?>
                        </p>
                        <p class="mt-3">
                            <b>Country Code: </b>
                            <?php if ($country_code == null) { ?>
                                N/A
                            <?php } else { ?>
                                <?= $country_code; ?>
                            <?php } ?>
                        </p>
                        <p class="mt-3">
                            <b>Region Name: </b>
                            <?php if ($region_name == null) { ?>
                                N/A
                            <?php } else { ?>
                                <?= $region_name; ?>
                            <?php } ?>
                        </p>
                        <p class="mt-3">
                            <b>Region Code: </b>
                            <?php if ($region_code == null) { ?>
                                N/A
                            <?php } else { ?>
                                <?= $region_code; ?>
                            <?php } ?>
                        </p>
                        <p class="mt-3">
                            <b>Postal Code: </b>
                            <?php if ($postal_code == null) { ?>
                                N/A
                            <?php } else { ?>
                                <?= $postal_code; ?>
                            <?php } ?>
                        </p>
                        <p class="mt-3">
                            <b>Latitude: </b>
                            <?php if ($latitude == null) { ?>
                                N/A
                            <?php } else { ?>
                                <?= $latitude; ?>
                            <?php } ?>
                        </p>
                        <p class="mt-3">
                            <b>Longitude: </b>
                            <?php if ($longitude == null) { ?>
                                N/A
                            <?php } else { ?>
                                <?= $longitude; ?>
                            <?php } ?>
                        </p>
                        <p class="mt-3">
                            <span>
                                <b>Flag:</b>
                            </span>
                            <?php if ($country_code == null) { ?>
                                <img src="./additional/flags/_unitednations.png" alt="unitednations" />
                            <?php } else { ?>
                                <img src="./additional/flags/<?= $country_code; ?>.png" alt="<?= $country_code; ?>" />
                            <?php } ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </body>
<?php } ?>
