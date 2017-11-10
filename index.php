<!doctype html>
<html lang='en'>
	<head>
		<meta charset='utf-8'>
		<title>Grey Lantern Corps - Home</title>
		<!--Sets the width to adjust to available screen size-->
		<meta name='viewport' content='width=device-width, initial-scale=1'>
		<!--Bootstrap Code-->
		<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
		<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
		<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>
		<link href='https://fonts.googleapis.com/css?family=Audiowide|Black+Ops+One|Fugaz+One|Amita|Atomic+Age|Griffy' rel='stylesheet'>
		<link rel='stylesheet' href='Grey_Lantern_About.css'>
		<script src='http://code.jquery.com/jquery-1.8.3.min.js'></script>
		<link rel='stylesheet' href='Characters/Grey_Lantern_Characters.css'>
		<link rel='shortcut icon' href='Images/Grey_lantern_general_emblem.jpg'>
		<!-- Place this tag in your head or just before your close body tag. -->
		<script src='https://apis.google.com/js/platform.js' async defer></script>
		<!--<script src='Random_Roll.js'></script>-->
		<script src='jquery/jquery-3.2.0.js'></script>
		<script src='jquery/jquery-3.2.0.min.js'></script>
		<script async src='Extra/Random_Roll/Number%20Formatting/NumFormat.js'></script>
		<style>
			h1{color: purple; font-family: 'Atomic Age', serif, cursive;}
			h2{font-family: 'Black Ops One', serif, cursive;}
			.BSSYM7 {color: purple;}
		</style>
	</head>

	<body>
		<?php include('header.php'); ?>
		<?php require_once('navbar/top-navbar.php'); ?>
		<?php require_once('navbar/side-navbar.php'); ?>
		<?php include_once("analyticstracking.php") ?>
		<main>
		<!-- <img href='Oort's Conundrum(2).png'>-->
			<img src='Images/The%20Oort%20Conundrum.jpg' alt='Grey Lantern Emblem' width='150%;' height='150%;'/>
			<!-- <h1>The Oort Conundrum</h1> -->
			<h2>About<!-- the Grey Lantern Corps --></h2>
			<p>The Grey Lantern Corps is a science fiction story set 1,000 years in the future, where humans have colonized the Solar System, yet there is a threat coming from outside the Solar System. One resident of each planet has been chosen to combat this threat if only they can all rally together instead of trying to solve it themselves. Only then might they discover the real reason that they've been brought together.</p>
			
			<h2><a href='Grey_Lantern_Story.php'>History</a></h2>
			<!-- <h2 id='liquid'>Prologue</h2> -->
			<?php include('Prologue.php'); ?>
			<script src='jquery/Chitika.js'></script>
			<!-- <script type='text/javascript' src='//cdn.chitika.net/getads.js' async></script> -->

			<h2><a href='Characters/all_character_list.php'>Character Info</a></h2>
			<article>
				<table class='clear'>
					<tr>
						<td><button type='button' class='rocky planet' id='output_vravag'>Name: Vravag</button></td>
						<td><button type='button' class='rocky planet' id='output_qonok'>Name: Qonok</button></td>
					</tr>
					<tr>
						<td><button type='button' class='rocky planet' id='output_jalten'>Name: Jalten</button></td>
						<td><button type='button' class='rocky planet' id='output_swnitu'>Name: Swnitu</button></td>
					</tr>
					<tr>
						<td><button type='button' class='asteroid planet' id='output_tenul'>Name: Tenul</button></td>
						<td><button type='button' class='gas_giant planet' id='output_borozw'>Name: Borozw</button></td>
					</tr>
					<tr>
						<td><button type='button' class='gas_giant planet' id='output_pihoe_xo'>Name: Pihoe-Xo</button></td>
						<td><button type='button' class='ice_giant planet' id='output_osa'>Name: Osa</button></td>
					</tr>
					<tr>
						<td><button type='button' class='dwarf planet' id='output_pulof'>Name: Pulof</button></td>
						<td><button type='button' class='dwarf planet' id='output_kasil'>Name: Kasil</button></td>
					</tr>
				</table>
				<br/><br/>
			<!-- <td><button type='button' class='planet' id='test'>Test</button></td> -->
			</article>
			<!--<section>
				<h2>About</h2>
				<p>Each planet tends to produce lanterns of the same class. The concepts that each of them represent were designed by the Old Scientists when they discovered an alien artifact well before the lanterns were created. The Old Scientists artificially extended their lifespans to thousands of years in order to verify the Corps were progressing to their specifications.</p>
			</section>-->

			<h2><a href='Planets/planet_list.php'>Planets</a></h2>
			<table class='clear'>
				<tr>
					<td><button type='button' class='rocky planet' id='output_mercury_ex'>Planet: Mercury</button></td>
					<td><button type='button' class='rocky planet' id='output_venus_ex'>Planet: Venus</button></td>
				</tr>
				<tr>
					<td><button type='button' class='rocky planet' id='output_earth_ex'>Planet: Earth</button></td>
					<td><button type='button' class='rocky planet' id='output_mars_ex'>Planet: Mars</button></td>
				</tr>
				<tr>
					<td><button type='button' class='gas_giant planet' id='output_jupiter_ex'>Planet: Jupiter</button></td>
					<td><button type='button' class='gas_giant planet' id='output_saturn_ex'>Planet: Saturn</button></td>
				</tr>
				<tr>
					<td><button type='button' class='ice_giant planet' id='output_uranus_ex'>Planet: Uranus</button></td>
					<td><button type='button' class='ice_giant planet' id='output_neptune_ex'>Planet: Neptune</button></td>
				</tr>
				<tr>
					<td><button type='button' class='dwarf planet' id='output_pluto_ex'>Planet: Pluto</button></td>
					<td><button type='button' class='dwarf planet' id='output_charon_ex'>Planet: Charon</button></td>
				</tr>
			</table>
			<!-- Place this tag where you want the widget to render. -->
			<!--<div class='g-follow' data-annotation='bubble' data-height='20' data-href='//plus.google.com/u/0/113144635205362307656' data-rel='author'></div>-->
			
			<p></p>
			<p></p>
		</main>
	<!--<button type='button' onclick='my_function()'>Test Input</button>-->
			<script async src='Characters/Character_Info.js'></script>
			<script async src='Characters/Grey_Lantern_Planets.js'></script>
		
	</body>
</html>