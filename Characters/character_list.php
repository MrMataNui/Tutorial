<?php
require_once('../Database/database.php');
//require_once('Connections.php');

// Get planet ID
if (!isset($planet_id)) {
	$planet_id = filter_input(INPUT_GET, 'planet_id',
			FILTER_VALIDATE_INT);
	if ($planet_id == NULL || $planet_id == FALSE) {
		$planet_id = 1;
	}
}

// Get planet id for selected planet
$queryCategory = 'SELECT * FROM planets
				WHERE planetID = :planet_id';
$statement = $db->prepare($queryCategory);
$statement->bindValue(':planet_id', $planet_id);
$statement->execute();
$category = $statement->fetch();
$planet_name = $category['planetName'];
$statement->closeCursor();

// Get all planets
$query = 'SELECT * FROM planets
				ORDER BY planetID';
$statement1 = $db->prepare($query);
$statement1->execute();
$planets = $statement1->fetchAll();
$statement1->closeCursor();

// connect the planet type IDs
$queryConnectChar = 'SELECT * FROM AllInfo
						ORDER BY charID';
$statement = $db->prepare($queryConnectChar);
$statement->execute();
$connectChar = $statement->fetchAll();
$statement->closeCursor();

$planet_char = array();
$i = 0;
foreach ($connectChar as $charPlanet) :
	if ($charPlanet['planetID'] == $planet_id) {
		$planet_char[$i] = $charPlanet;
		$i++;
	}
endforeach;

?>
<!DOCTYPE html>
<html>

	<!-- the head section -->
	<head>
		<title>Planet List</title>
		<!-- Sets the width to adjust to available screen size -->
		<meta name='viewport' content='width=device-width, initial-scale=1'>
		<!-- Bootstrap Code -->
		<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'> 

		<link rel='stylesheet' type='text/css' href='../Grey_Lantern_About.css' />
		<link rel='stylesheet' type='text/css' href='../main.css' />
		<style>
			aside{border-right: 1px solid #ddd;}
			main{border-left: none;}
			aside a {
				margin: 0 auto;
				padding: 0 auto;
			}
			aside p a {
				background-color: #09f;
			}
			aside p a:hover {color: #c60;}
		</style>
	</head>

	<!-- the body section -->
	<body>
		<?php include('../header.php'); ?>
		<?php require_once('../navbar/folder-top-navbar.php'); ?>
		<?php //require_once('../side-navbar.php'); ?>
		<?php include_once("../analyticstracking.php") ?>

		<aside>
			<!-- display a list of planets -->
			<p>&nbsp;</p>
			<p>&nbsp;</p>
			<p><a href='all_character_list.php'>List of All Characters</a></p>
			<p>&nbsp;</p>
			<nav>
				<h2>Solar System Planets</h2>
				<ul>
					<?php foreach ($planets as $planet) : ?>
						<?php if ($planet['starListID'] == 1) { ?>
						<li id='<?php //echo $planet['planetID']; ?>'>
							<a href='character_list.php?planet_id=<?php echo $planet['planetID']; ?>'>
								<?php echo $planet['planetName']; ?>
							</a>
						</li>
						<?php } ?>
					<?php endforeach; ?>
				</ul>
				<!-- <h2>Exoplanets</h2>
				<ul>
					<?php foreach ($planets as $planet) : ?>
						<?php if ($planet['starListID'] != 1) { ?>
						<li id='<?php //echo $planet['planetID']; ?>'>
							<a href='character_list.php?planet_id=<?php echo $planet['planetID']; ?>'>
								<?php echo $planet['planetName']; ?>
							</a>
						</li>
						<?php } ?>
					<?php endforeach; ?>
				</ul> -->
			</nav>
		</aside>

		<main>

			<h1>Character List</h1>
			<h2>
				<?php
					echo 'Planet: ' . $planet_name;
				?>
			</h2>
			<h3>
				<?php
					foreach ($connectChar as $character) :
							if ($character['planetID'] == $planet_id) {
								echo $character['planetType'] .
								(	$character['planetType'] == 'Rocky' ||
									$character['planetType'] == 'Dwarf'
									? ' Planet': '' );
								break;
							}
					endforeach;
				?>
			</h3>
			<h4>
				<?php
					foreach ($planet_char as $x) :
							echo 'Home Star: ' . $x['star'];
							break;
					endforeach;
				?>
			</h4>
				<!-- display a table of characters -->
				<?php 
					$planet_check = array();
					$i = 0;
					foreach ($planet_char as $character) :
							$planet_check[$i] = ($character['charAge'] == 0 ? true : false);
							$i++;
					endforeach; 

					for ($i = 0; $i < sizeof($planet_char); $i++) {
						if ($planet_check[$i] == true)
							array_splice($planet_char, $i, 1);
					}
						
					if (empty($planet_char)) {
						echo'<h4>This planet currently has no notable characters.</h4>';
					} else { ?>
						<h4>Character Specifications</h4>
						<table>
							<tr>
								<th>Name</th>
								<!-- <th>Language</th> -->
								<th>Age (Soyas) *</th>
								<th>Age (Earth Years)</th>
								<th>Magic Type</th>
								<!-- <th>Identity</th>
								<!-- <th>Race</th> -->
							</tr>
						<?php foreach ($planet_char as $character) : ?>
							<tr>
								<td><?php echo $character['charName'];		?></td>
								<!-- <td><?php echo $character['charLanguage'];	?></td> -->
								<td><?php echo $character['charAge'];		?></td>
								<td><?php echo $character['charAge'] * 60;	?></td>
								<td><?php echo $character['magicName'];		?></td>
								<!-- <td><?php echo $character['charIdentity'];	?></td>
								<!-- <td><?php echo $character['charRace'];	?></td> -->
							</tr>
						<?php endforeach; ?>
						</table>
						<p> &nbsp; </p>
						<h4><strong>*</strong> 1 Solar Year (Soya) &asymp; 60 Earth Years</h4>
			<?php	} ?>
				<p> &nbsp; </p>
		</main>
		<footer>
			<p>&nbsp;</p>

			<!-- <p>&copy; <?php echo date('Y'); ?> Grey Lantern Corps, Inc.</p> -->
		</footer>
	</body>
</html>