<!DOCTYPE html>
<html>

<style>
	body {
		background-color: #94E994;
		align-items: center;
	}
	label {
		display: inline-block;
		margin-left: 10px;
	}
	button {
		margin-top: 10px;
		text-decoration: none;
		color: black;
		display: inline-block;
		font-family: 'Montserrat', sans-serif;
		text-transform: uppercase;
		letter-spacing: 2px;
		cursor: pointer;
		height: 50px;
		width: 150px;
	}
	input{
		height: 30px;
		width: 40%;
	}
</style>

<body>

	<form action="emailSender.php" method="POST">
		<label for="email">Email:</label>
		<input type="text" id="email" name="email" placeholder="name@gmail.com"><br><br>
		<label for="message">Message:</label>
		<input type="text" id="message" name="message" placeholder="bla bla bla"><br><br>
		<button class="btn" type="submit">send</button>
	</form>
	<form action="index.php">
		<button class="btn" type="submit">main page</button>
	</form>
</body>

</html>
