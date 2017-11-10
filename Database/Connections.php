<?php
	// connect the planet type IDs
	$queryConnectChar = 'DROP TABLE IF EXISTS AllInfo
						CREATE TABLE AllInfo AS
							(SELECT
								characters.charID,
								characters.charName,
								characters.charLanguage,
								characters.charIdentity,
								characters.charAge,
								characters.charRace,
								planets.planetID,
								planets.planetName,
								planets.homeSystem,
								planetType.planetType,
								magic.magicID,
								magic.magicName,
								magic.magicType
							FROM (((planets
							INNER JOIN planetType ON planets.planetTypeID = planetType.planetTypeID)
							INNER JOIN characters ON characters.planetID = planets.planetID)
							INNER JOIN magic ON magic.magicID = characters.magicID))
							ORDER BY charID';
	$stmt1 = $db->prepare($queryConnectChar);
	$stmt1->execute();
	$stmt1->closeCursor();
/*
	// connect the planet type IDs
	$queryConnectPlanet = 'SELECT * FROM AllInfo'
	$stmt2 = $db->prepare($queryConnectPlanet);
	$stmt2->execute();
	$connectChar = $stmt2->fetchAll();
	$stmt2->closeCursor();
*/
	//http://www.plus2net.com/sql_tutorial/sql_linking_table.php
?>
