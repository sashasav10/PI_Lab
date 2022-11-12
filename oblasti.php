<?php
$fp = file_get_contents("./additional/oblinfo.txt");
$lines = explode("\r\n", $fp);
$count = 0;
$total = 0;
?>
<table class="text-center m-auto" border="1">
    <thead>
        <tr>
            <td>№</td>
            <td>Область</td>
            <td>Населення, тис</td>
            <td>Число вузів</td>
            <td>Число вузів на 100 тис населення</td>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($lines as $key => $value) {
            if ($key != 0) {
                if ($key % 3 == 1) { $count++;
        ?>
            <tr>
                <td>
                    <?= $count; ?>
                </td>
                <?php } ?>
                <td>
                    <?= $value; ?>
                </td>
                <?php
                if ($key % 3 == 2) $total = $value;
                if ($key % 3 == 0) {
                ?>
                <td>
                    <?= round($value * 100 / $total, 2); ?>
                </td>
            </tr>
        <?php } } } ?>
    </tbody>
</table>
