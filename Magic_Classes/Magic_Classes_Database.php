<?php
$myvar_not_replicated = __FILE__;
require_once('../Database/database.php');

require_once('../Database/Connections.php');

// Get magic ID
if (!isset($magicID)) {
	$magicID = filter_input(INPUT_GET, 'magicID',
			FILTER_VALIDATE_INT);
	if ($magicID == NULL || $magicID == FALSE) {
		$magicID = 1;
	}
}

// Get magic id for selected magic
$queryCategory = 'SELECT * FROM magic
				WHERE magicID = :magicID';
$statement = $db->prepare($queryCategory);
$statement->bindValue(':magicID', $magicID);
$statement->execute();
$category = $statement->fetch();
$magic_name = $category['magicName'];
$magic_type = $category['magicType'];
$statement->closeCursor();

// Get magic id for selected magic
$queryCategory = 'SELECT * FROM magicLoc
				WHERE magicID = :magicID';
$statement = $db->prepare($queryCategory);
$statement->bindValue(':magicID', $magicID);
$statement->execute();
$magicLoc = $statement->fetch();
$statement->closeCursor();

// Get all magic
$query = 'SELECT * FROM magic
				ORDER BY magicID';
$statement1 = $db->prepare($query);
$statement1->execute();
$all_magic = $statement1->fetchAll();
$statement1->closeCursor();

$magic = array();
$i = 0;
foreach ($all_magic as $magicType) :
	if ($magicType['magicID'] == $magicID) {
		$magic[$i] = $magicType;
		$i++;
	}
endforeach;

foreach ($magic as $magicType) :
	switch ($magicType['magicID']) {
		case 1:
			$magic_loc = array('Mercury', 'Venus');
			$style = 'color:red';
			break;
		case 2:
			$magic_loc = array('Jupiter', 'Urunos', 'Earth', 'Saturn');
			$style = 'color:#36f';
			break;
		case 3:
			$magic_loc = array('Earth', 'Saturn');
			$style = 'color:#7f7f7f';
			break;
		case 4:
			$magic_loc = array('Pluto', 'Neptune', 'Mars');
			$style = 'color:#892A2A';
			break;
		case 5:
			$magic_loc = array('Ceres', 'Makemake');
			$style = 'color:#000';
			break;
	}
endforeach;

?>
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
		<link href='https://fonts.googleapis.com/css?family=Audiowide|Black+Ops+One|Fugaz+One|Amita|Griffy' rel='stylesheet'>
		<link rel='stylesheet' href='../Grey_Lantern_About.css'>
		<link rel='stylesheet' href='../main.css'>
		<style>
			/*body {border-style: double; width: 50%; text-align: center;}*/
			p {text-align: center;}
			img {width: 60%; height: 20em;}
			aside, main {
				font-family: Arial, Helvetica, serif;
				margin: auto;
				padding: .5em 2em;
				background-color: #bbb;
				/*font-family: serif;*/
				border: double black;
			}
			aside ul {
				border-right: none;
				margin: none;
				padding: none;
			}
		</style>
	</head>

	<body>
		<?php include('../header.php'); ?>
		<?php require_once('../navbar/folder-top-navbar.php'); ?>
		<?php //require_once('../navbar/side-navbar.php'); ?>
		<?php include_once("../analyticstracking.php") ?>
		<article>
			<aside>
				<!-- display a list of magic types -->
				<nav>
					<h2>Magic Types</h2>
					<ul>
						<?php foreach ($all_magic as $magicType) : ?>
						<?php if ($magicType['magicID'] > 5 ) {break;} ?>
							<li class='<?php echo $magicType['magicType']; ?>'>
								<a href='Magic_Classes.php?magicID=<?php echo $magicType['magicID']; ?>'>
									<?php echo $magicType['magicName']; ?>
								</a>
							</li>
						<?php endforeach; ?>
					</ul>
				</nav>
			</aside>
			
			<main>
				<img src='../Images/<?php echo $magic_name; ?>.jpg' alt='<?php echo $magic_name; ?>'/>
				<h1 class='<?php echo $magic_type ?>'>Magic Classes</h1>
				<h2 style='<?php echo $style; ?>' class='<?php echo $magic_type ?>'>
					<?php echo $magic_name; ?>
				</h2>
					<section>
						<table style='width:100%'>
						<tr>
							<th colspan='2' style='height: 25px'><?php echo $magic_name; ?></th>
						</tr>
						<tr>
							<th>About</th>
							<th>Primary Locations Used</th>
						</tr>
						<tr>
							<td rowspan='<?php echo sizeof($magic_loc); ?>'>
								<?php echo $magicLoc['magicDesc1'] . '<br>' . $magicLoc['magicDesc2']; ?>
								<?php if ($magicLoc['magicDesc3'] != '') echo  '<br><strong>' . $magicLoc['magicDesc3'] . '</strong>'; ?>
							</td>
							<td><?php echo $magic_loc[0]; ?></td>
						</tr>
						<?php for ($i = 1; $i < sizeof($magic_loc); $i++) { ?>
							<tr>
								<td><?php echo $magic_loc[$i]; ?></td>
							</tr>
						<?php } ?>
						</table>
					</section>
				 <p> &nbsp; </p>
			</main>
		</article>
	</body>
</html>