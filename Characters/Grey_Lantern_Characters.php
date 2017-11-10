<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Grey Lantern Corps - Characters</title>
		<link href="https://fonts.googleapis.com/css?family=Audiowide|Black+Ops+One|Fugaz+One|Amita|Atomic+Age" rel="stylesheet">
		<!--Sets the width to adjust to available screen size-->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!--Bootstrap Code-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script async src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script async src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script src='http://code.jquery.com/jquery-1.8.3.min.js'></script>
		<link rel="stylesheet" href="../Grey_Lantern_About.css">
		<link rel="stylesheet" href="Grey_Lantern_Characters.css">
		<link rel="shortcut icon" href="../Images/Grey_lantern_general_emblem.jpg">
		<!-- Place this tag in your head or just before your close body tag. -->
		<script src="https://apis.google.com/js/platform.js" async defer></script>
<!--		<script src="Random_Roll.js"></script>-->
		<script async src="../Extra/Random_Roll/Number%20Formatting/NumFormat.js"></script>
	</head>

	<body>
		<?php include('../header.php'); ?>
		<?php include('../navbar/folder-top-navbar.php'); ?>
		<?php include('../navbar/side-navbar.php'); ?>
			
		<main>
			<h1>Planetary Characters</h1>
			<h3>Click on one of the planet names to find out more about its champion.</h3>
			
			
			
			<br/><br/>
			 
			<table class="clear">
				<tr>
					<th><button type="button" class="planet" id="soya">Solar Year</button></th>
					<th><button type="button" class="planet" id="year">**Solar Year Definition**</button></th>
				</tr>
				
				<tr>
					<td><button type="button" class="rocky planet" id="output_mercury">Mercury</button></td>
					<td><button type="button" class="rocky planet" id="output_venus">Venus</button></td>
				</tr>
				<tr>
					<td><button type="button" class="rocky planet" id="output_earth">Earth</button></td>
					<td><button type="button" class="rocky planet" id="output_mars">Mars</button></td>
				</tr>
				<tr>
					<td><button type="button" class="asteroid planet" id="output_ceres">Ceres</button></td>
					<td><button type="button" class="gas_giant planet" id="output_jupiter">Jupiter</button></td>
				</tr>
				<tr>
					<td><button type="button" class="gas_giant planet" id="output_saturn">Saturn</button></td>
					<td><button type="button" class="ice_giant planet" id="output_uranus">Uranus</button></td>
				</tr>
				<tr>
					<td><button type="button" class="ice_giant planet" id="output_neptune">Neptune</button></td>
					<td><button type="button" class="dwarf planet" id="output_pluto">Pluto</button></td>
				</tr>
				<tr>
					<td><button type="button" class="dwarf planet" id="output_eris">Eris</button></td>
					<td><button type="button" class="dwarf planet" id="output_makemake">Makemake</button></td>
				</tr>
				<tr>
					<td><button type="button" class="planet" id="new_output">Create Your Own Character</button></td>
					<td><button type="button" class="planet" id="new_output2">Last Character Created</button></td>
				</tr>
			</table>
				<br/><br/>
			<h2>Characters</h2>
			<table class="clear">
				<tr>
					<td><button type="button" class="rocky planet" id="output_vravag">Name: Vravag</button></td>
					<td><button type="button" class="rocky planet" id="output_qonok">Name: Qonok</button></td>
				</tr>
				<tr>
					<td><button type="button" class="rocky planet" id="output_jalten">Name: Jalten</button></td>
					<td><button type="button" class="rocky planet" id="output_swnitu">Name: Swnitu</button></td>
				</tr>
				<tr>
					<td><button type="button" class="asteroid planet" id="output_tenul">Name: Tenul</button></td>
					<td><button type="button" class="gas_giant planet" id="output_borozw">Name: Borozw</button></td>
				</tr>
				<tr>
					<td><button type="button" class="gas_giant planet" id="output_pihoe_xo">Name: Pihoe-Xo</button></td>
					<td><button type="button" class="ice_giant planet" id="output_osa">Name: Osa</button></td>
				</tr>
				<tr>
					<td><button type="button" class="dwarf planet" id="output_pulof">Name: Pulof</button></td>
					<td><button type="button" class="dwarf planet" id="output_kasil">Name: Kasil</button></td>
				</tr>
			</table>
<!--				<table>
				<tr>
					<th>Given Name</th>
					<th>Planet of Origin</th>
					<th>Native Language</th>
					<th>Ring Wielded</th>
					<th>Superhero Identity</th>
				</tr>
				
					<tr>
						<td>Vravag</td>
						<td><a href="Planets/Mercury.html">Mercury</a></td>
						<td>Mercurian</td>
<!--						<td><a href="https://sites.google.com/site/comiclanterns/about/courage" target="_blank">Courage</a></td>
						<td>Saberleaf</td>
					</tr>
					<tr>
						<td>Qonok</td>
						<td><a href="Planets/Venus.html">Venus</a></td>
						<td>Venusian</td>
<!--						<td><a href="https://sites.google.com/site/comiclanterns/about/strength" target="_blank">Strength</a></td>
						<td>HammerHead</td>
					</tr>
					<tr>
						<td>Jalten</td>
						<td><a href="Planets/Earth.html">Earth</a></td>
						<td>English</td>
<!--						<td><a href="https://sites.google.com/site/comiclanterns/about/confusion" target="_blank">Confusion</a></td>
						<td>Incognito</td>
					</tr>
					<tr>
						<td>Swnitu</td>
						<td><a href="Planets/Mars.html">Mars</a></td>
						<td>Martian</td>
<!--						<td><a href="https://sites.google.com/site/comiclanterns/about/alliance" target="_blank">Alliance</a></td>
						<td>The Speaker</td>
					</tr>
					<tr>
						<td>Borozw</td>
						<td><a href="Planets/Ganymede.html">Ganymede</a></td>
						<td>Jovian</td>
<!--						<td><a href="https://sites.google.com/site/comiclanterns/about/tenacity" target="_blank">Tenacity</a></td>
						<td>Dollmaker</td>
					</tr>
					<tr>
						<td>Pihoe-Xo</td>
						<td><a href="Planets/Titan.html">Titan</a></td>
						<td>Saturnal</td>
<!--						<td><a href="https://sites.google.com/site/comiclanterns/about/compromise" target="_blank">Compromise</a></td>
						<td>Absolute Zero</td>
					</tr>
					<tr>
						<td>Osa</td>
						<td><a href="Planets/Triton.html">Triton</a></td>
						<td>Neptutian</td>
<!--						<td><a href="https://sites.google.com/site/comiclanterns/about/nervousness" target="_blank">Nervousness</a></td>
						<td>Thornhead</td>
					</tr>
					<tr>
						<td>Pulof</td>
						<td><a href="Planets/Pluto_Charon.html">Charon</a></td>
						<td>Plutonian</td>
<!--						<td><a href="https://sites.google.com/site/comiclanterns/about/misery" target="_blank">Misery</a></td>
						<td>Sillouette</td>
					</tr>
				</table>-->

				<!--<p style="height: auto;"></p><p></p>-->
			
			<!-- Place this tag where you want the widget to render. -->
			<!--<div class="g-follow" data-annotation="bubble" data-height="20" data-href="//plus.google.com/u/0/113144635205362307656" data-rel="author"><p>Google+</p></div>-->
		</main>
	<!--<button type="button" onclick="my_function()">Test Input</button>-->
		
		<script async src="Character_Info.js"></script>
		<script async src="Grey_Lantern_Characters.js"></script>
	</body>
</html>