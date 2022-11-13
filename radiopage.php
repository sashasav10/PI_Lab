<!DOCTYPE html>
<html>
<meta>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</meta>

<style>
	button {
    float:left;
		margin-top: 10px;
		margin-left: 50px;
		color: black;
		display:table-cell;
		text-align:center;
		font-family: 'Montserrat', sans-serif;
		text-transform: uppercase;
		letter-spacing: 2px;
		cursor: pointer;
		height: 50px;
		width: 150px;
	}
</style>

<body>
	<form action="tableresult.php" method="POST">
		<?php
		$arr = file("./additional/napr.txt");
		sort($arr);
		for ($i = 0; $i < count($arr); $i++) {
			$str = $arr[$i];
			echo "<div style='margin: 5px;'><input type='radio' id='str$i' name='str' value='$str'>
 			  <label for='str'>$str</label></div>";
		}
		?>
		<button type="submit">відшукати</button>
	</form>
</body>
