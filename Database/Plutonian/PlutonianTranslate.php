<?php
require_once('PlutonianDatabase.php');

// require_once('Connections.php');
?>
<!DOCTYPE html>
<html>

	<!-- the head section -->
	<head>
		<title>Plutonian Translator</title>
		<!--Sets the width to adjust to available screen size-->
		<meta name='viewport' content='width=device-width, initial-scale=1'>
		<!--Bootstrap Code-->
		<link rel='stylesheet' type='text/css' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'/>

		<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
		<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>
		<script src='http://code.jquery.com/jquery-1.8.3.min.js'></script>
		<link rel='stylesheet' type='text/css' href='../../Grey_Lantern_About.css' />
		<link rel='stylesheet' type='text/css' href='../../main.css' />
		<style>
			/*main {border-left: none; width: 85%; float: none;}*/
			aside {color: #000;}
			aside td a {
				margin: 0;
				padding: 0;
				background-color: transparent;
				color: #000;
			}
			aside td a :hover {color: #c60;}
			header {
				margin: 0;
				border-bottom: 2px solid black;
			}
			header h1 {
				margin: 0;
				padding: .5em 0;
				color: black;
				font-family: serif;
				font-weight: none;
			}
			.width {
				width: 60%;
				color:black;
				border:1px solid black;
			}
			.number {
				width: 100%;
				overflow:auto;
				text-align: center;
				padding:10px;
				margin:auto;
				border-radius:20px;
				color:black;
				font-family: Sans-Serif;
				display: block;
			}
			#data input {
				float: left;
				width: 100%;
				margin-bottom: .5em;
			}
	</style>
		<?php include('../TranslateJavaScript.php'); ?>
</head>

<!-- the body section -->
	<body>
		<?php include('../../header.php'); ?>
		<?php require_once('../../navbar/double-folder-top-navbar.php'); ?>
		<?php include_once("../../analyticstracking.php") ?>

		<aside>
			<p>&nbsp;</p>
			<h1>Pronunciation</h1>
			<table>
				<tr>
					<th>Plutonian	</th>
					<th>Pronunciation		</th>
				</tr>
			<?php	foreach ($connectAlph as $AlphEntry) :  ?>
						<tr>
							<td><strong><?php echo $AlphEntry['Letter'];			?></strong></td>
							<td><a style='color:#36b;' href='<?php echo $AlphEntry['Link']; ?>'><?php echo $AlphEntry['Pronunciation'];		?></a></td>
						</tr>
			<?php	endforeach; ?>
			</table>
		</aside>
		<main>
			<h1>Plutonian Language</h1>
			
			<div class='number width'>
				<div id='data'>
					<label>Enter some text:</label>
					<input type='text' id='eng_text'><br>
				</div>
				<!--<div id='buttons'>
					<label>&nbsp;</label>-->
					<input type='submit' class='clear_button' id='calculate' value='Calculate' >
				<!--</div>-->
			</div>
			<div class = 'number width'>
				<p></p>
				<div class = 'div' id = 'div'>
					<h3><strong>Translation</strong></h3>
					<p></p>
				</div>
				<p></p>
			</div>
			
	<!--		<table>
				<tr>
					<th>Word in K&euml;&tcaron;en&euml;	</th>
					<th>Word in English	</th>
				</tr>
			<?php	while ($i>$j) {  ?>
						<tr>
							<td><?php echo $keteWord[$j];			?></td>
							<td><?php echo $keteMeaning[$j];			?></td>
						</tr>
			<?php	$j++;} ?>
			</table> -->
			<p> &nbsp; </p>
		</main>
		<footer>
			<p>&nbsp;</p>
			<!-- <p>&copy; <?php echo date('Y'); ?> Grey Lantern Corps, Inc.</p> -->
		</footer>
	</body>
</html>