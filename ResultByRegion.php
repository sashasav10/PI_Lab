<!doctype html>

<style>
  table, td, th {
  	table-layout: fixed;
  	width: auto;
  	border-collapse: collapse;
  	border: 3px solid black;
  	text-align: left;
  }
</style>

<table>
	<thead>
		<tr>
			<th>Область</th>
			<th>Населення, тис.</th>
			<th>К-ть вузів</th>
			<th>Кть вузів на 100 тис.</th>
		</tr>
	</thead>
	<tbody>
		<?php
		$city = htmlspecialchars($_POST['city']);
		$arr = fopen("oblinfo.txt", "r");
		echo "Регіон: $city";
		while (!feof($arr)) {
			$row = fgets($arr);
			if (strcasecmp($row, $city) == -3) {
				$population = (int)fgets($arr);
				$university = (int)fgets($arr);
				$calc = round($university / $population * 100, 2);
				echo "<tr>
                <th scope='row'>$row</th>
                <td>$population</td>
                <td>$university</td>
                <td>$calc</td>
                </tr>";
				break;
			}
		}
		fclose($arr);
		echo "</tbody></table>";
		?>
</table>

</html>
