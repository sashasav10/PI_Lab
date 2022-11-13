<!DOCTYPE html>
<html>

<style>
	html {
		font: 0.75em/1.5 sans-serif;
		color: #333;
		background-color: #fff;
		padding: 1em;
	}

	table {
		text-align: center;
		width: 100%;
		margin-bottom: 1em;
		border-collapse: collapse;
	}

	th {
		font-weight: bold;
		background-color: #ddd;
	}

	th,
	td {
		padding: 0.5em;
		border: 1px solid #ccc;
	}
</style>

<body>
	<table>
		<col style="width:5%">
		<col style="width:15%">
		<col style="width:15%">
		<col style="width:10%">
		<col style="width:10%">
		<col style="width:45%">
		<thead>
			<tr>
				<th scope='col'>№</th>
				<th scope='col'>Середній бал</th>
				<th scope='col'>Число поступивших на бюджет</th>
				<th scope='col'>Недобор</th>
				<th scope='col'>К-ть котрактників</th>
				<th scope='col'>ВНЗ</th>
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
