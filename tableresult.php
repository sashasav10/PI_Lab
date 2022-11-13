<!DOCTYPE html>
<html>

<style>

table, td, th {
	table-layout: fixed;
	width: auto;
	border-collapse: collapse;
	border: 3px solid black;
	text-align: left;
}
</style>

<body>
	<table>
		<thead>
			<tr>
				<th>№</th>
				<th>Середній бал</th>
				<th>К-ть бюджетників</th>
				<th>Недобор</th>
				<th>К-ть котрактників</th>
				<th>ВНЗ</th>
			</tr>
			</tr>
		</thead>
		<tbody>
			<?php
			$str = htmlspecialchars($_POST['str']);
			$f = fopen("./additional/dataUni.txt", "r");
			while (!feof($f)) {
				$row = fgets($f);
				if (strcasecmp($row, $str) == -3) {
					$size = fgets($f);
					for ($i = 0; $i < $size; $i++) {
						$avg = (float)fgets($f);
						$ent = (int)fgets($f);
						$contract = (int)fgets($f);
						$univ = fgets($f);
						echo "<tr>
				  <th scope='row'>$i</th>
				  <td>$avg</td>
				  <td>$ent</td>
				  <td>-</td>
				  <td>$contract</td>
				  <td>$univ</td>
				 </tr>";
					}
					break;
				}
			}
			fclose($f);
			?>
		</tbody>
	</table>
</body>
