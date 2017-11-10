<?php
$myvar_not_replicated = __FILE__;
require_once('../Database/database.php');

require_once('../Database/Connections.php');

// Get planet ID
if (!isset($starListID)) {
	$starListID = filter_input(INPUT_GET, 'starListID',
			FILTER_VALIDATE_INT);
	if ($starListID == NULL || $starListID == FALSE) {
		$starListID = 1;
	}
}

// Get planet id for selected planet
$queryCategory = 'SELECT * FROM planetStarList
				WHERE starListID = :starListID';
$statement = $db->prepare($queryCategory);
$statement->bindValue(':starListID', $starListID);
$statement->execute();
$category = $statement->fetch();
$star_name = $category['star'];
$star_mass = $category['stellarMass'];
$star_dist = $category['distance'];
$multi_star = $category['multiStar'];
$statement->closeCursor();

// Get all planets
$query = 'SELECT * FROM planetStarList
				ORDER BY planetListID';
$statement1 = $db->prepare($query);
$statement1->execute();
$planets = $statement1->fetchAll();
$statement1->closeCursor();

// Get all planets
$query = 'SELECT * FROM starList
				ORDER BY starListID';
$statement1 = $db->prepare($query);
$statement1->execute();
$stars = $statement1->fetchAll();
$statement1->closeCursor();

// connect the planet type IDs
/*$queryConnectPlanet = 'SELECT * FROM planetStarList
						ORDER BY planetListID';
$statement = $db->prepare($queryConnectPlanet);
$statement->execute();
$connectPlanet = $statement->fetchAll();
$statement->closeCursor();*/

// connect the planet type IDs
$queryConnectChar = 'SELECT * FROM planetStarList
						ORDER BY AU';
$statement = $db->prepare($queryConnectChar);
$statement->execute();
$connectChar = $statement->fetchAll();
$statement->closeCursor();

$star_planet = array();
$i = 0;
foreach ($connectChar as $planet) :
	if ($planet['starListID'] == $starListID) {
		$star_planet[$i] = $planet;
		$i++;
	}
endforeach;
$dist_check = ($starListID != 1 ? true : false );
function year_calc ($year, $earth_year) {
	return 	($year >= $earth_year) 
			? ($year % $earth_year !=0)
				? floor($year / $earth_year)
					. ( floor($year / $earth_year) > 1 ? ' years' : ' year' )
					. '<br>'
					. ($year % $earth_year)
					. ( ($year % $earth_year) > 1 ? ' days' : ' day' )
				: floor($year / $earth_year)
					. (floor( $year / $earth_year) > 1 ? ' years' : ' year')
			: round($year) . ' days';
}
function Soya_calc ($num_days, $starListID, $soya) {
	if ($starListID == 1) {
		return  ($num_days > $soya)
			? ($num_days % $soya !=0)
				? floor($num_days / $soya)
					. (floor($num_days / $soya) > 1 ? ' soyas' : ' soya')
					. '<br>'
					. year_calc ($num_days % $soya, 365)
				: floor($num_days / $soya) . ' years'
			: /*round($num_days / $soya, 2) . ' soyas'*/'';
	// } else {
		// /* if ( round( ($num_days / $soya), 2) !=0 )
			// echo round( ($num_days / $soya), 2) . ' Soyas'; */
	// }
	}
}
?>
<!DOCTYPE html>
<html>

	<!-- the head section -->
	<head>
		<title>Star List</title>
		<!--Sets the width to adjust to available screen size-->
		<meta name='viewport' content='width=device-width, initial-scale=1'>
		<!--Bootstrap Code-->
		<link rel='stylesheet' type='text/css' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>

		<link rel='stylesheet' type='text/css' href='../Grey_Lantern_About.css' />
		<link rel='stylesheet' type='text/css' href='../main.css' />
		<style>
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
			aside {/*border: none;*/display : none;}
			main {border: none; width: 100%;}
		</style>
		<script>
			$('aside').each(function() {
				$(this).css({'display' : 'none'});
			}); // end each
			$('.hide').each(function() {
				$(this).hide();
			}); // end each
		</script>
	</head>

<!-- the body section -->
	<body>
		<!-- <header>
			<h1>Grey Lantern Planets</h1>
		</header> -->
		<?php include('../header.php'); ?>
		<?php require_once('../navbar/folder-top-navbar.php'); ?>
		<?php include_once("../analyticstracking.php") ?>

		<!-- <div class='btn-group-vertical sidenav_left btn'>
			<a href='#top'><button type='button' class='btn btn-default btn-md'>Back to Top</button></a>
		</div> -->

		<aside>
			<!-- display a list of planets -->
			<p></p>
			<nav>
				<h2>Stars</h2>
				<ul>
					<?php foreach ($stars as $star) : ?>
						<li id='<?php //echo $planet['planetID']; ?>'>
							<a href='planet_list.php?starListID=<?php echo $star['starListID']; ?>'>
								<?php echo $star['star']; ?>
							</a>
						</li>
					<?php endforeach; ?>
				</ul>
			</nav>
		</aside>

		<main>
		<?php
				//check for number of confirmed planets
				$status_check = array();
				$i = 0;
				foreach ($star_planet as $planet) : 
					$status_check[$i] = ($planet['status'] == '*' ? true : false);
					$i++;
				endforeach;

				$counter = 0;
				foreach ($status_check as $check) :
					if ($check)
						$counter++;
				endforeach;
		?>
			<h1>
				Star: <?php echo $star_name; ?>
			</h1>
			<h2>
				Stellar Mass: <?php echo $star_mass; ?>
			</h2>
			<h2 class='hide'>
				<?php
					echo	($dist_check
							? 'Distance from the Sun: ' . $star_dist . '(LY) **'
							: '<br>');
				?>
			</h2>
			<h2 class='hide'>
				<?php
					echo	($multi_star
							? $star_name . ' is part of a multiple star system'
							: '<br>');
				?>
			</h2>
				<h3>All Planets</h3>
				<table style='width:90%'>
					<tr>
						<th>Planet Name</th>
						<?php if ($counter != sizeof($star_planet)) { echo '<th>Status</th>'; } ?>
						<th>Orbital Period</th>
						<?php if ($starListID == 1) { echo '<th>Soyas *</th>'; } ?>
						<th>Discovery Year</th>
						<th>Planet Type</th>
						<th>Distance from <?php echo $star_name . '<br>(AU)'; if ($starListID == 1) {echo '**';}else{echo '*';} ?></th>
					</tr>
				<?php	foreach ($star_planet as $planet) :  
							$num_days = $planet['period']; 
							$soya = 365 * 60;
							$num_year = $num_days % $soya; ?>
							<tr>
								<td>
									<?php	echo 
											( strlen($planet['planetName']) == 1
												? $planet['star']
													. ' '
													. $planet['planetName']
												: $planet['planetName'] );
									?>
								</td>
								<?php
								if ($counter != sizeof($star_planet)) { 
									echo '<td>';
										echo ($planet['status'] == '*'
											? ''
											: $planet['status']);
									echo '</td>';
								} ?>
								<td>
									<?php echo year_calc($num_days, 365); ?>
								</td>
								<td>
									<?php echo Soya_calc ($num_days, $starListID, $soya);?>
								</td>
								<td>
									<?php	echo
												($planet['discoveryYear'] == 0
												? ''
												: $planet['discoveryYear']);	?>
								</td>
								<td>
									<?php	echo $planet['planetType'] .
												(	$planet['planetType'] == 'Rocky' ||
														$planet['planetType'] == 'Dwarf'
													? ' Planet': '' );
									?>
								</td>
								<td><?php echo round($planet['AU'], 2);	?></td>
							</tr>
				<?php	endforeach; ?>
				</table>
				<p> &nbsp; </p>
				<?php if ($counter != sizeof($star_planet)) { ?><h4>If the status is blank, then it is confirmed</h4><?php } ?>
				<?php if ($starListID == 1) { ?>
					<h4><strong>*</strong> 1 Solar Year (Soya) &asymp; 60 Earth Years</h4>
				<?php } ?>
				<h4>
					<strong>
						<?php echo ($starListID == 1 ? '**' : '*'); ?>
					</strong>
					1 astronomical unit (AU) &asymp; 149.6 million kilometers
				</h4>
				<?php if ($dist_check) { ?>
					<h4><strong>**</strong> 1 light year (LY) &asymp; 9.5 trillion kilometres, or 63,240 AU</h4>
				<?php } ?>


		</main>
		<footer>
			<p><strong>Information gotten from <a href="https://solarsystem.nasa.gov/planets/ceres/facts">https://solarsystem.nasa.gov/planets/ceres/facts<a/>,
			<a href="https://solarsystem.nasa.gov/planets/ceres/indepth">https://solarsystem.nasa.gov/planets/ceres/indepth</a>,
			<a href="http://space-facts.com/makemake/">http://space-facts.com/makemake/</a>,
			and <a href="http://www.openexoplanetcatalogue.com/planet/Gliese%20687%20b/">http://www.openexoplanetcatalogue.com/planet/Gliese%20687%20b/</a>.</strong></p>
			<p>&nbsp;</p>
			<p>&nbsp;</p>
			<!-- <p>&copy; <?php echo date('Y'); ?> Grey Lantern Corps, Inc.</p> -->
		</footer>
	</body>
</html>