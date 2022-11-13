<!DOCTYPE html>
<html>
<meta>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</meta>

<style>
	button {
		margin-top: 10px;
		text-decoration: none;
		display: inline-block;
		color: white;
		padding: 20px 30px;
		margin: 10px 20px;
		border-radius: 10px;
		font-family: 'Montserrat', sans-serif;
		text-transform: uppercase;
		letter-spacing: 2px;
		background-image: linear-gradient(to right, #9EEFE1 0%, #4830F0 51%, #9EEFE1 100%);
		background-size: 200% auto;
		box-shadow: 0 0 20px rgba(0, 0, 0, .1);
		transition: .5s;
		cursor: pointer;
	}
</style>

<body>
	<form action="tableresult.php" method="POST">
		<?php
		$arr = file("./additional/napr.txt");
		sort($arr);
		for ($i = 0; $i < count($arr); $i++) {
			$str = $arr[$i];
			echo "<div style='margin: 10px;'><input type='radio' id='str$i' name='str' value='$str'>
 			  <label for='str'>$str</label></div>";
		}
		?>
		<button type="submit">відшукати</button>
	</form>
</body>
