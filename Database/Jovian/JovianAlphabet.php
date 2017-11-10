<?php
require_once('JovianDatabase.php');

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
$queryConnect2 = 'SELECT * FROM Alphabet';
$statement = $db->prepare($queryConnect2);
$statement->execute();
$connectAlph = $statement->fetchAll();
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
	</head>

<!-- the body section -->
	<body>
		<?php include('../header.php'); ?>
		<?php require_once('../navbar/folder-top-navbar.php'); ?>
		<?php include_once("../analyticstracking.php") ?>

		<main>
			<h1>Pronunciation</h1>
			<table>
				<tr>
					<th>En&zcaron;&euml;	</th>
					<th>Pronunciation		</th>
				</tr>
			<?php	foreach ($connectAlph as $AlphEntry) :  ?>
						<tr>
							<td><?php echo $AlphEntry['Letter'];			?></td>
							<td><?php echo $AlphEntry['Pronunciation'];		?></td>
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