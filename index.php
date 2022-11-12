<!DOCTYPE html>
<html>
<style>
	body {
		background-color: #94E994;
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
	.title {
		text-align: center;
	}

	.text {
		margin-left: 10%;
		margin-right: 10%;
		margin-top: 15px;
		border: 3px salmon;
		background-color: #D5F5D5;
		padding: 10px;
	}

	.il {
		padding-left: 40px;
		margin-top: 1em;
		margin-bottom: 1em;
	}
	.img {
		width: 250px;
		height: 250px;
		display: block;
		margin: 0 auto;
		border-radius: 40%;
		align-self: center;
		}

</style>

<body>
	<h1 class="title">Oleksandr Saveliev</h1>
	<?php
	$imgView = 'https://scontent.fvll1-1.fna.fbcdn.net/v/t39.30808-6/288678749_3382858978596873_7038233161579423658_n.jpg?_nc_cat=108&ccb=1-7&_nc_sid=09cbfe&_nc_ohc=g0WLUjShFRsAX85JQ1w&_nc_ht=scontent.fvll1-1.fna&oh=00_AfBjkOH32NBBlyIC81fti6chPtlTcc0yBm6gzo9-vtWETA&oe=63663349';
	echo "<div class='photo'>
		<img class='img' src='$imgView'>
		</div>";
	?>
	<section class="text-section">
		<div class="text-wrapper">
			<div class="text">
				Bohdan Khmelnytsky National University of Cherkasy
Software engineering, Cherkasy  (Unfinished higher), from 2019 to 2023 (4 years)
<p> Cherkasy Specialized school №27, Secondary, from 2008 to 2019 (11 years)</p>
				<p>Additional education:</p>
				<ul>
					<li class="il">CS50 (2020)</li>
					<li class="il">Google IT Support Professional Certificate (Coursera) (2021)</li>
					<li class="il">Participated in ICPC contests (2020, 2021)</li>
					<li class="il">Android developemnet. Ekreative edu (2022)</li>
					<li class="il">Kotlin developemnet. Triare education (2022)</li>
				</ul>
			</div>
				<form action="sendEmail.php">
					<button class="btn" type="submit">send email </button>
				</form>
				<form action="oblasti.php">
					<button class="btn" type="submit">show info by region </button>
				</form>
		</div>
	</section>
</body>
</html>
