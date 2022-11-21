<?php
if (isset($_POST['search'])) {
    $input = $_POST['query'];
    $s = 'http://forecastfox.accuweather.com/adcbin/forecastfox/weather_data.asp?&partner=forecastfox&par=1234567&location=' . $input . '&metric=1';
    $x = simplexml_load_string(file_get_contents($s));
}

?>
<div class="col-12 text-center">
    <div class="weather">
        <form action="" method="POST">
            <input type="text" name="query" id="search_box" value="" placeholder="Введіть код міста" autocomplete="off"
                   required>
            <input type="submit" name="search" value="Search">
        </form>
        <?php if (isset($_POST['search'])) { ?>
            <h2 class="weather__title">Погода <?= $x->local->city; ?></h2>
            <div class="weather__time">
                <p class="weather__time">Час: <?= $x->local->time; ?></p>
            </div>
            <div class="weather__forecast">
                <span class="weather__min">Температура: <?= $x->currentconditions->temperature; ?>°C</span>
            </div>
            <p class="weather__humidity">Вологість: <?= $x->currentconditions->humidity; ?></p>
            <p class="weather__wind">Вітер: <?= $x->currentconditions->windspeed; ?> км/ч</p>
        <?php } ?>
    </div>
</div>