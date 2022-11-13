<!DOCTYPE html>
<html>

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
	<form method='POST' action='ResultByRegion.php'>
		<?php
		$f = fopen("./additional/oblinfo.txt", "r");
		echo "<div style='margin: 10px;'>
    <select name='city' >";
		$size = fgets($f);
		for ($i = 0; $i < $size; $i++) {
			$city = fgets($f);
			$nas = fgets($f);
			$cont = fgets($f);
			echo "<option value='$city'>$city</option>";
		}
		fclose($f);
		echo " </select></div><div style='margin: 10px;'>
         <button type='submit'>Запит</button>
         </div>";
		?>
	</form>
</body>

</html>
