<!doctype html>
<html lang='en'>
	<head>
		<meta charset='utf-8'>
		<title>Grey Lantern Corps - Magic Classes</title>
		<!--Sets the width to adjust to available screen size-->
		<meta name='viewport' content='width=device-width, initial-scale=1'>
		<!--Bootstrap Code-->
		<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
		<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
		<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>
		<script src='../jquery/Article_Switch.js'></script>
		<link href='https://fonts.googleapis.com/css?family=Audiowide|Black+Ops+One|Fugaz+One|Amita|Griffy' rel='stylesheet'>
		<link rel='stylesheet' href='../Grey_Lantern_About.css'>
		<style>
			/*body {border-style: double; width: 50%; text-align: center;}*/
			p {text-align: center;}
			.colorSet {color:#fff;}
			img {width: 60%; height: 20em;}
			.javascript{display: none;}
		</style>
		<script>
			$(function(){

				var src = '../Images/';
				$('#title').css({
					'color' : '#821583'
				}); // end css

				$('article:first').each(function() {
					
					var this_class = $(this).prev().attr('class');
					$('#title').addClass( this_class );
					$('img').attr('src', src + $(this).prev().text() + '.jpg');
					
				}); // end each

				$('.notJavascript').each(function() {
					$(this).hide();
				}); // end each

				$('.javascript').each(function() {
					$(this).show();
				}); // end each

				$('div a').click(function() {

					$('#title').removeClass();
					var this_link = $(this).attr('href');
					this_link = this_link.slice(1);
					$('#title').addClass( this_link );
					$('img').attr('src', src + $(this).text() + '.jpg');
					$('img').attr('alt', $(this).text());
					$('img').attr('title', $(this).text());

				}); // end click

			}); // end ready
		</script>
	</head>

	<body>
		<?php include('../header.php'); ?>
		<?php require_once('../navbar/folder-top-navbar.php'); ?>
		<?php //require_once('../navbar/side-navbar.php'); ?>
		<?php include_once('../analyticstracking.php') ?>
		<div class='btn-group-vertical sidenav_left'>
			<a href='#top' class='notJavascript'><button type='button' class='btn btn-default btn-md'>Back to Top</button></a>
			<a href='#plasma' class='javascript'><button type='button' class='btn btn-default btn-md plasma'>Pyrokinesis</button></a>
			<a href='#gas' class='javascript'><button type='button' class='btn btn-default btn-md gas'>Aerokinesis</button></a>
			<a href='#liquid' class='javascript'><button type='button' class='btn btn-default btn-md liquid'>Liquikinesis</button></a>
			<a href='#solid' class='javascript'><button type='button' class='btn btn-default btn-md solid'>Geokinesis</button></a>
			<a href='#space' class='javascript'><button type='button' class='btn btn-default btn-md space'>Astrokinesis</button></a>
		</div>
		<main>
		<img src='../Images/Magic%20Classes.jpg' alt='Magic Classes'/>
		<h1 id='title'>Magic Classes</h1>
		<h2 class='plasma' id='plasma'>Pyrokinesis</h2>
			<article>
				<table>
				<tr><th colspan='2' class='plasma colorSet' style='height: 25px'>Pyrokinesis</th></tr>
				<tr>
					<th>About</th>
					<th>Locations Used</th>
				</tr>
				<tr>
					<td rowspan='2'>Fire mages have the ability to bend inorganic plasmic substances. <br>Requires 1 Solar year of schooling.</td>
					<td>Mercury</td>
				</tr>
				<tr><td>Venus</td></tr>
				<tr><th colspan='2' style='height: 25px'>Subclasses</th></tr>
				<tr>
					<td></td>
					<td><b>Pyroner</b></td>
				</tr>
				<tr>
					<td></td>
					<td><b></b></td>
				</tr>
				</table>
			</article>
		<h2 class='gas' id='gas'>Aerokinesis</h2>
			<article>
				<table>
					<tr><th colspan='2' class='gas colorSet' style='height: 25px'>Aerokinesis</th></tr>
					<tr>
						<th>About</th>
						<th>Locations Used</th>
					</tr>
					<tr>
						<td rowspan='4'>Air mages have the ability to bend inorganic gaseous substances. <br> Requires 2 Solar years of schooling.</td>
						<td>Jupiter</td>
					</tr>
					<tr><td>Urunos</td></tr>
					<tr><td>Earth</td></tr>
					<tr><td>Saturn</td></tr>
				</table>
			</article>
		<h2 class='liquid' id='liquid'>Liquikinesis</h2>
			<article>
			<p></p>
				<table>
					<tr><th colspan='2' class='liquid colorSet' style='height: 25px'>Liquikinesis</th></tr>
					<tr>
						<th>About</th>
						<th>Locations Used</th>
					</tr>
					<tr>
						<td rowspan='2'>Water mages have the ability to bend inorganic liquid substances.
							<br>Requires 2 Solar years of schooling.
							<br><strong>Uncommon.</strong></td>
						<td>Earth</td>
					</tr>
					<tr><td>Saturn</td></tr>
				</table>
			</article>
		<h2 class='solid' id='solid'>Geokinesis</h2>
			<article>
			<p></p>
				<table>
					<tr><th colspan='2' class='solid colorSet' style='height: 25px;'>Geokinesis</th></tr>
					<tr>
						<th>About</th>
						<th>Locations Used</th>
					</tr>
					<tr>
						<td rowspan='3'>Stone mages have the ability to bend inorganic solid substances.
							<br>Requires 3 Solar years of schooling.</td>
						<td>Pluto</td>
					</tr>
					<tr><td>Neptune</td></tr>
					<tr><td>Mars</td></tr>
				</table>
			</article>		
		<h2 class='space' id='space'>Astrokinesis</h2>
			<article>
			<p></p>
				<table>
					<tr><th colspan='2' class='space colorSet' style='height: 25px'>Astrokinesis</th></tr>
					<tr>
						<th>About</th>
						<th>Locations Used</th>
					</tr>
					<tr>
						<td rowspan='2'>Astromages have the ability to influence the fabric of spacetime.
							<br>Can utilize the other forms of magic.
							<br><strong>Highly uncommon.</strong></td>
						<td>Ceres</td>
					</tr>
					<tr><td>Makemake</td></tr>
				</table>
			</article>
		 <p> &nbsp; </p>
		</main>
	</body>
</html>