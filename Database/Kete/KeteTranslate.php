<?php
require_once('KeteDatabase.php');

// require_once('Connections.php');

$queryConnect2 = 'SELECT * FROM Alphabet';
$statement = $db->prepare($queryConnect2);
$statement->execute();
$connectAlph = $statement->fetchAll();
$statement->closeCursor();

$queryConnectPlanet = "SELECT * FROM Word ORDER BY AlphabetID";
$statement = $db->prepare($queryConnectPlanet);
// Put the percentage sing on the keyword
// $sort = "%".$sort."%";
// $statement->bindParam(':sort', $sort);
$statement->execute();
$connectDict = $statement->fetchAll();
$statement->closeCursor();
$keteWord=array();
$keteMeaning=array();
$i=$j=0;
foreach ($connectDict as $DictEntry) : 
	$keteWord[$i] = $DictEntry['Word'];
	$keteMeaning[$i] = $DictEntry['Meaning'];
	$i++;
endforeach;

?>
<!DOCTYPE html>
<html>

	<!-- the head section -->
	<head>
		<title>K&euml;&tcaron;er&euml; Translator</title>
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
	<script>
	$(function(){
		var keteArray = <?php echo json_encode($keteWord); ?>;
		var engArray = <?php echo json_encode($keteMeaning); ?>;
		function makeElement (id) {return document.createElement(id);}
		console.log(keteArray);
		console.log(engArray);
		// console.log(engArray[1]);
		$.each(engArray, function (i, value) {
			engArray[i] = engArray[i].toUpperCase();
		});
		var i;
		console.log(engArray);
		function new_p (number, first_num, /*t_class, */second_num, base_from, base_to, loc) {
			clear_div(loc);
			var par = makeElement('p');
			par.setAttribute('id', number);

			par.appendChild(solutionArray.join(' '));
		}
		function clear_div (div) {
			if ($('#number')) {
				while (getId(div).firstChild) {
					getId(div).removeChild(getId(div).firstChild);
				}
			}
		}
		$('#eng_text').focus();
		$('#calculate').click(function(){

			var user_text = $('#eng_text').val().toUpperCase();
			var split_text = user_text.split(' ');

			var solutionArray = [];
			
			
			console.log(user_text);
			console.log(split_text);
			$.each(split_text, function (i, value) {
				if(engArray.indexOf(split_text[i]) >= 0 ) {
					var num = engArray.indexOf(split_text[i]);
					
					solutionArray[i] = keteArray[num];
				}
				else {
					solutionArray[i] = '--';
				}
			});
			// $.each(solutionArray, function (i, value) {
				// if(solutionArray[i] >= 0 ) {
					// var num = engArray.indexOf(split_text[i]);
					
					// solutionArray[i] = keteArray[num];
				// }
			// });
			var solution = solutionArray.join(' ');
			solution = solution.toLowerCase();
			$('#div').find('p').html(solution);
			$('#div').find('p').text(function(_, txt) {
				return txt.charAt(0).toUpperCase() + txt.slice(1).toLowerCase();
			});
			$('#div').find('p').wrapInner('<strong><em></em></strong>');
			console.log(solutionArray);
			console.log(solution);
		});
	});

	</script>
</head>

<!-- the body section -->
	<body>
		<?php include('../../header.php'); ?>
		<?php require_once('../../navbar/folder-top-navbar.php'); ?>
		<?php include_once("../../analyticstracking.php") ?>

		<aside>
			<p>&nbsp;</p>
			<h1>Pronunciation</h1>
			<table>
				<tr>
					<th>K&euml;&tcaron;er&euml;	</th>
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
			<h1>Ke&tcaron;e&tcaron;&euml; Language</h1>
			
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
				<input type='button' class='clear_button' id='clear_buttons' value='Clear' ><br>
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