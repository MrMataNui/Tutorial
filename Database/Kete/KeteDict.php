<?php
require_once('KeteDatabase.php');

// require_once('Connections.php');

	// $query = 'SELECT * FROM AllInfo
				// ORDER BY WordType';

	// $result = mysqli_query($query);

	// if($result) {
		// while($row = mysqli_fetch_array($result)) {
			// $name = $row["charName"];
			// echo "Name: ".$name."";
		// }


		// $statement->bindValue(':sort', $sort);
if (!isset($sort)) {
	$sort = filter_input(INPUT_GET, 'sort',
			FILTER_VALIDATE_INT);
	if ($sort == NULL || $sort == FALSE) {
		$sort = 'AlphabetID';
		// $queryConnectPlanet = 'SELECT * FROM AllInfo ORDER BY planetID';
	}
}
// $queryConnect = 'SELECT * FROM Word';
// $statement = $db->prepare($queryConnect);
// $statement->execute();
// $connectDict = $statement->fetchAll();
// $statement->closeCursor();

$queryConnect2 = 'SELECT * FROM Alphabet';
$statement = $db->prepare($queryConnect2);
$statement->execute();
$connectAlph = $statement->fetchAll();
$statement->closeCursor();

// $queryConnectPlanet = 'SELECT * FROM Word ORDER BY '
	// . ($sort == 'wordType' ? 'wordType'
		// :($sort == 'Meaning' ? 'Meaning'
			// :'Word') );
// if ($sort == 'wordType')
	// $queryConnectPlanet = 'SELECT * FROM Word ORDER BY wordType';
// else if ($sort == 'Meaning')
	// $queryConnectPlanet = 'SELECT * FROM Word ORDER BY Meaning';
// else
	$queryConnectPlanet = "SELECT * FROM Word ORDER BY AlphabetID";
$statement = $db->prepare($queryConnectPlanet);
// Put the percentage sing on the keyword
// $sort = "%".$sort."%";
// $statement->bindParam(':sort', $sort);
$statement->execute();
$connectDict = $statement->fetchAll();
$statement->closeCursor();
?>
<!DOCTYPE html>
<html>

	<!-- the head section -->
	<head>
		<title>K&euml;&tcaron;er&euml; Dictionary</title>
		<!--Sets the width to adjust to available screen size-->
		<meta name='viewport' content='width=device-width, initial-scale=1'>
		<!--Bootstrap Code-->
		<link rel='stylesheet' type='text/css' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'/>

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
		</style>
	</head>

<!-- the body section -->
	<body>
		<?php include('../../header.php'); ?>
		<?php require_once('../../navbar/folder-top-navbar.php'); ?>
		<?php include_once("../../analyticstracking.php") ?>

		<aside>
			<!-- <h1>Sort</h1>
			<ul>
				<li id='planet_sort'><a href='JovianDict.php?sort=Word'>Sort by En&zcaron;&euml; Word</a></li>
				<li id='name_sort'><a href='JovianDict.php?sort=wordType'>Sort by Word Type</a></li>
				<li id='age_sort'><a href='JovianDict.php?sort=Meaning'>Sort by English Word</a></li>
			</ul> -->
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
			<table>
				<tr>
					<th>Word in K&euml;&tcaron;er&euml;	</th>
					<th>Word Type		</th>
					<th>Word in English	</th>
				</tr>
			<?php	foreach ($connectDict as $DictEntry) :  ?>
						<tr>
							<td><?php echo $DictEntry['Word'];			?></td>
							<td><?php echo $DictEntry['WordType'];		?></td>
							<td><?php echo $DictEntry['Meaning'];	 	?></td>
						</tr>
			<?php	endforeach; ?>
			</table>

			<p> &nbsp; </p>
		</main>
		<footer>
			<p>&nbsp;</p>
			<!-- <p>&copy; <?php echo date('Y'); ?> Grey Lantern Corps, Inc.</p> -->
		</footer>
	</body>
</html>