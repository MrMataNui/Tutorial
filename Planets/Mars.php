<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Mars - About</title>
		<!--Sets the width to adjust to available screen size-->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!--Bootstrap Code-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="../Grey_Lantern_About.css">
		<link href="https://fonts.googleapis.com/css?family=Audiowide|Black+Ops+One|Fugaz+One" rel="stylesheet">
		<!--<style>iframe{width:1000px; height: 500px;}</style>-->
	</head>

	<body>
		<?php include('../header.php'); ?>
		<?php include('../navbar/folder-top-navbar.php'); ?>
		<?php include('../navbar/side-navbar.php'); ?>
		<main>
			<h1>&#x2642; Mars</h1>
			<table style="width:100%">
				<tr>
					<th>Planet</th>
					<th>Type</th>
					<th>Citizen Class</th>
					<th>Race</th>
				</tr>
				
				<tr>
					<td>Mars</td>
					<td>Planet</td>
					<td>N/A</td>
					<td>Martians</td>
				</tr>
			</table>
			<p>Mars uses a duidecimal system as opposed to decimal.<br><br></p>
			<?php
				$hex = "E196"; 
				echo base_convert($hex,16,8); 
			?>
			<!--<iframe src="https://docs.google.com/spreadsheets/d/116xaXztXOA3ELgBHD2DJwl6LxDDA230ygC0Q1zutI6Q/pubhtml?widget=true&amp;headers=false"></iframe>-->
		 <p>&nbsp;</p>
		</main>
	</body>
</html>