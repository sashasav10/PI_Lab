<?php
if (!file_exists("./additional/oblinfo.txt")) {
    echo "The file from above cannot be found!";
    exit;
}

$fp = fopen("./additional/oblinfo.txt", "r");

if (!$fp) {
    echo "File cannot be opened";
    exit;
}

// a bit of styling...
echo <<<EOF
<style>
table, td, th {
  table-layout: fixed;
  width: 100%;
  border-collapse: collapse;
  border: 3px solid black;
  text-align: left;
}
</style>
EOF;

$count = 0;
$cols = 3; // the number of data items per row
echo '<table>'; // open table
// render headers
echo '<tr><th>№</th><th>Область</th><th>Населення, тис</th>
        <th>Кількість ВНЗ</th><th>Число вузів на 100 тис населення</th></tr>';
echo '<tr>'; // open first row
while(!feof($fp))
{
    if($count < $cols) {
        $info = fgets($fp);
        echo "<td>$info</td>"; // render data item
        $count++;
    } else {
        $count = 0; // reset counter
        echo '</tr><tr>'; // close current row, start new row
    }
}
echo "</tr></table>"; // close final row, close table
fclose($fp); // close file handle
