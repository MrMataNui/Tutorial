<?php
$myvar_not_replicated = __FILE__;
require_once('../Database/database.php');

require('../Database/Connections.php');
/*
	$query = 'SELECT * FROM AllInfo
				ORDER BY planetID';

	$result = mysqli_query($query);

	if($result) {
		while($row = mysqli_fetch_array($result)) {
			$name = $row["charName"];
			echo "Name: ".$name."";
		}
*/
// connect the planet type IDs
if (!isset($sort)) {
	$sort = filter_input(INPUT_GET, 'sort',
			FILTER_SANITIZE_STRING);
	if ($sort == NULL || $sort == FALSE) {
		$sort = 'planetID';
	}
}
$queryConnectPlanet = 'SELECT * FROM AllInfo ORDER BY '
	. ($sort == 'charName' ? 'charName'
		:($sort == 'charAge' ? 'charAge'
			:($sort == 'magicID' ? 'magicID'
				:'planetID') ) );
$statement = $db->prepare($queryConnectPlanet);
// $statement->bindValue(':sort', $sort);
$statement->execute();
$connectPlanet = $statement->fetchAll();
$statement->closeCursor();

?>
<!DOCTYPE html>
<html>

	<!-- the head section -->
	<head>
		<title>Planet List</title>
		<!--Sets the width to adjust to available screen size-->
		<meta name='viewport' content='width=device-width, initial-scale=1'>
		<!--Bootstrap Code-->
		<link rel='stylesheet' type='text/css' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'/>

		<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
		<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>
		<script src='http://code.jquery.com/jquery-1.8.3.min.js'></script>
		<link rel='stylesheet' type='text/css' href='../Grey_Lantern_About.css' />
		<link rel='stylesheet' type='text/css' href='../main.css' />
		<style>
			/*main {border-left: none; width: 85%; float: none;}*/
			aside p a {
				margin: .1em 0;
				padding: .1em 0;
				background-color: #09f;
			}
			aside p a:hover {color: #c60;}
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
		</style>
		<script>
		$(function(){
			var keteArray = <?php echo json_encode($keteID); ?>;
			// var engArray = <?php echo json_encode($keteMeaning); ?>;
			console.log(keteArray);
		});
		</script>
	</head>

<!-- the body section -->
	<body>
		<?php include('../header.php'); ?>
		<?php require_once('../navbar/folder-top-navbar.php'); ?>
		<?php include_once("../analyticstracking.php") ?>
		<aside>
			<p>&nbsp;</p>
			<p id='external'><a href='character_list.php'>List of Characters by Planet</a></p>
			<p>&nbsp;</p>
			<ul>
				<li id='planet_sort'><a href='all_character_list.php?sort=planetID'>Sort by Planet</a></li>
				<li id='age_sort'><a href='all_character_list.php?sort=charAge'>Sort by Age</a></li>
				<li id='name_sort'><a href='all_character_list.php?sort=charName'>Sort by Name</a></li>
				<li id='name_sort'><a href='all_character_list.php?sort=magicID'>Sort by Magic Type</a></li>
			</ul>
			<p>&nbsp;</p>
		</aside>

		<main>
			<h1>All Characters</h1>
			<table>
				<tr>
					<th>Character Name			</th>
					<th>Planet Name				</th>
					<th>Age<br>(Soyas) *		</th>
					<th>Age<br>(Earth Years)	</th>
					<th>Magic Type				</th>
					<!-- <th>Identity</th>
					<!-- <th>Language</th>
					<!-- <th>Race</th> -->
				</tr>
			<?php	foreach ($connectPlanet as $charPlanet) : 
						if ($charPlanet['charAge'] != 0 && $charPlanet['star'] == 'Sol' && $charPlanet['charID'] < 11) { ?>
							<tr>
								<td><?php echo $charPlanet['charName'];			?></td>
								<td><?php echo $charPlanet['planetName'];		?></td>
								<td><?php echo $charPlanet['charAge'];	 		?></td>
								<td><?php echo $charPlanet['charAge'] * 60;	 	?></td>
								<td><?php echo $charPlanet['magicName'];		?></td>
								<!-- <td><?php echo $charPlanet['charLanguage'];?></td>
								<!-- <td><?php echo $charPlanet['charIdentity'];?></td>
								<!-- <td><?php echo $charPlanet['charRace'];	?></td> -->
							</tr>
			<?php		}
					endforeach; ?>
			</table>

			<p> &nbsp; </p>
				<h4><strong>*</strong> 1 Solar Year (Soya) &asymp; 60 Earth Years</h4>
		</main>
		<footer>
			<p>&nbsp;</p>
			<!-- <p>&copy; <?php echo date('Y'); ?> Grey Lantern Corps, Inc.</p> -->
		</footer>
	</body>
</html>