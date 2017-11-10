
/*****************************************
* Create the grey_user_Grey_Lantern_Characters database
*****************************************/
DROP DATABASE IF EXISTS grey_user_Grey_Lantern_Characters;
CREATE DATABASE grey_user_Grey_Lantern_Characters;
USE grey_user_Grey_Lantern_Characters;  -- MySQL command

-- create the tables
CREATE TABLE planetType (
	planetTypeID			INT(11)			NOT NULL		AUTO_INCREMENT,
	planetType				VARCHAR(255)	NOT NULL,
	PRIMARY KEY (planetTypeID)
);
CREATE TABLE planets (
	planetID				INT(11)	 		NOT NULL	 	AUTO_INCREMENT,
	planetName				VARCHAR(255) 	NOT NULL,
	planetTypeID			INT(11)  		NOT NULL,
	starListID				INT(11)	 		NOT NULL,
	PRIMARY KEY (planetID)
);
CREATE TABLE magic (
	magicID					INT(11)	 		NOT NULL	 	AUTO_INCREMENT,
	magicName				VARCHAR(255) 	NOT NULL,
	magicType				VARCHAR(255) 	NOT NULL,
	PRIMARY KEY (magicID)
);
CREATE TABLE characters (
	charID					INT(11)		 	NOT NULL	 	AUTO_INCREMENT,
	charName				VARCHAR(255) 	NOT NULL,
	charLanguage			VARCHAR(255) 	NOT NULL,
	charIdentity			VARCHAR(255) 	NOT NULL,
	charAge					INT(11)		 	NOT NULL,
	charRace				VARCHAR(255) 	NOT NULL,
	planetID				INT(11)		 	NOT NULL,
	magicID					INT(11)		 	NOT NULL,
  PRIMARY KEY (charID)
);
CREATE TABLE planetList (
	planetListID			INT(11)		 	NOT NULL	 	AUTO_INCREMENT,
	starListID				INT(11)		 	NOT NULL,
	planetName				VARCHAR(255) 	NOT NULL,
	status					VARCHAR(255) 	NOT NULL,
	period					FLOAT(11)	 	NOT NULL,		-- rotational period in days
	discoveryYear			INT(11)		 	NOT NULL,
	AU						FLOAT(11)	 	NOT NULL,
	planetTypeID			INT(11)		 	NOT NULL,
  PRIMARY KEY (planetListID)
);
CREATE TABLE starList (
	starListID				INT(11)		 	NOT NULL 		AUTO_INCREMENT,
	star					VARCHAR(255) 	NOT NULL,
	distance				FLOAT(11)	 	NOT NULL,		-- in light years 
	stellarMass				FLOAT(11)	 	NOT NULL,
	multiStar				BOOLEAN		 	NOT NULL,
  PRIMARY KEY (starListID)
);

-- insert data into the database
INSERT INTO magic VALUES (
	(1, 	'Pyrokinesis',		'plasma'	),
	(2, 	'Aerokinesis',		'gas'		),
	(3, 	'Liquikinesis',		'liquid'	),
	(4, 	'Geokinesis',		'solid'		),
	(5, 	'Astrokinesis',		'space'		),
	(6, 	'N/A',				'N/A'		),
	(7, 	'Unknown',			'Unknown'	)
);
INSERT INTO planetType VALUES (
	(1, 	'Rocky'			),
	(2, 	'Gas Giant'		),
	(3, 	'Ice Giant'		),
	(4, 	'Dwarf'			),
	(5, 	'Asteroid'		),
	(6, 	'Hot Jupiter'	),
	(7, 	'Super Earth'	)
);
INSERT INTO planets VALUES(
	(1, 	'Mercury',		1,	1	),
	(2, 	'Venus',		1,	1	),
	(3, 	'Earth',		1,	1	),
	(4, 	'Mars', 		1,	1	),
	(5, 	'Jupiter',		2,	1	),
	(6, 	'Saturn',		2,	1	),
	(7, 	'Uranus',		3,	1	),
	(8, 	'Neptune',		3,	1	),
	(9, 	'Pluto',		4,	1	),
	(10, 	'Ceres',		4,	1	),
	(11,	'Makemake',		4,	1	),
	(12,	'Qenove',		7,	7	),	-- Gliese 687 b		Random seed: 1076976194 on https://donjon.bin.sh/scifi/world/
	(13,	'Qixan',		7,	8	) 	-- Gliese 674 b
);
INSERT INTO characters VALUES (
	(1, 	'Vravag',	'Mercurian',	'Saberleaf',		5,		'Mercurian',	1,		1),
	(2, 	'Qonok',	'Venusian',		'HammerHead',		5,		'Venusian',		2,		1),
	(3, 	'Jalten',	'English',		'Incognito',		7,		'Earther',		3,		2),
	(4, 	'Swnitu',	'Martian',		'The Speaker',		9,		'Martian',		4,		4),
	(5, 	'Borozw',	'Jovian',		'Dollmaker',		10,		'Jovian',		5,		2),
	(6, 	'Pihoe-Xo',	'Saturnal',		'Absolute Zero',	7,		'Saturnal',		6,		2),
	(7, 	'Osa',		'Neptutian',	'Thornhead',		7,		'Neptutian',	8,		6),
	(8, 	'Pulof',	'Plutonian',	'Sillouette',		9,		'Plutonian',	9,		4),
	(9, 	'Tenul',	'Ceresian',		'Unknown',			20,		'Ceresian',		10,		5),
	(10, 	'Kasil',	'Makemakan',	'Unknown',			18,		'Makemakan',	11,		6),
	(11, 	'Xaknel',	'Xekla',		'Unknown',			25,		'Qenovan',		12,		7),
	(12, 	'Joex',		'Xekla',		'Unknown',			25,		'Xulde',		13,		7),
	(13, 	'Fraq',		'Qenovan',		'Unknown',			25,		'Qenovan',		12,		7),
	(14, 	'Kirasw',	'Martian',		'Unknown',			10,		'Martian',		4,		3),
	(15, 	'Doxen',	'Plutonian',	'Unknown',			8,		'Plutonian',	9,		2),
	(16, 	'Nula',		'Uransian',		'Unknown',			0,		'Uransian',		7,		6)/*,
	(17, 	'Unknown',	'Unknown',		'Unknown',			0,		'Unknown',		7,		6)*/
);
INSERT INTO planetList VALUES (										-- http://www.johnstonsarchive.net/astro/extrasolarplanets.html
	(1,		1,	'Mercury',	'*',			87.97,		0,			0.3870,		1),
	(2,		1,	'Venus',	'*',			224.98,		0,			0.7230,		1),
	(3,		1,	'Earth',	'*',			365.25,		0,			1.0000,		1),
	(4,		1,	'Mars',		'*',			686.76,		0,			1.5240,		1),
	(5,		1,	'Jupiter',	'*',			4334.82,	0,			5.2030,		2),
	(6,		1,	'Saturn',	'*',			10757.41,	0,			9.5370,		2),
	(7,		1,	'Uranus',	'*',			30702.00,	1781,		19.1890,	3),
	(8,		1,	'Neptine',	'*',			60227.00,	1846,		30.0700,	3),
	(9,		1,	'Pluto',	'*',			90613.00,	1930,		39.4820,	4),
	(10,	1,	'Eris',		'*',			205132.00,	2003,		68.0710,	4),
	(11,	2,	'b',		'*',			3.24,		2012,		0.0400,		1),
	(12,	3,	'b',		'*',			2502.00,	2000,		3.3900,		2),
	(13,	3,	'c',		'Unconfirmed',	102270.00,	0,			40.0000,	3),
	(14,	4,	'b',		'*',			61.12,		1998,		0.2083,		2),
	(15,	4,	'c',		'Unconfirmed',	30.09,		2000,		0.1296,		2),
	(16,	4,	'd',		'*',			1.94,		2005,		0.0208,		2),
	(17,	4,	'e',		'*',			124.26,		2010,		0.3343,		3),
	(18,	5,	'b',		'*',			5.37,		2005,		0.0410,		3),
	(19,	5,	'c',		'*',			12.93,		2005,		0.0730,		1),
	(20,	5,	'd',		'*',			66.80,		2005,		0.2200,		1),
	(21,	5,	'e',		'*',			3.35,		2005,		0.0280,		1),
	(22,	6,	'd',		'*',			91.61,		2013,		0.2760,		1),
	(23,	6,	'e',		'*',			62.24,		2013,		0.2130,		1),
	(24,	6,	'f',		'*',			39.03,		2013,		0.1560,		1),
	(25,	6,	'g',		'*',			256.20,		2013,		0.5490,		1),
	(26,	1,	'Ceres',	'*',			1682.00,	1801,		2.7653,		4),		-- https://solarsystem.nasa.gov/planets/ceres/facts	https://solarsystem.nasa.gov/planets/ceres/indepth
	(27,	1,	'Makemake',	'*',			113113.5,	2005,		45.7900,	4),		-- http://space-facts.com/makemake/
	(28,	7,	'e',		'*',			38.140,		2014,		0.1635,		3),		-- http://www.openexoplanetcatalogue.com/planet/Gliese%20687%20b/
	(29,	8,	'e',		'*',			4.69,		2007,		0.0390,		3)		-- http://www.openexoplanetcatalogue.com/planet/Gliese%20674%20b/
);
INSERT INTO starList VALUES (
	(1,	'Sun', 					0.00,	1.0,	false	),
	(2,	'Alpha Centauri B', 	4.40,	0.93,	true	),
	(3,	'Epsilon Eridani', 		10.50,	0.83,	false	),
	(4,	'Ross 780', 			15.30,	0.32,	false	),
	(5,	'Wolf 562', 			20.70,	0.31,	false	),
	(6,	'GJ 667 C', 			22.30,	0.33,	true	),
	(7,	'Gliese 687', 			14.70,	0.41,	false	),
	(8,	'Gliese 674', 			14.81,	0.41,	false	)
);

CREATE TABLE AllInfo AS (
SELECT
	characters.charID,
	characters.charName,
	characters.charLanguage,
	characters.charIdentity,
	characters.charAge,
	characters.charRace,
	
	planets.planetID,
	planets.planetName,
	
	planetType.planetType,
	
	starList.star,
	
	magic.magicName,
	magic.magicType
	
FROM ((((characters
	INNER JOIN magic ON magic.magicID = characters.magicID)
	INNER JOIN planets ON characters.planetID = planets.planetID)
	INNER JOIN planetType ON planets.planetTypeID = planetType.planetTypeID)
	INNER JOIN starList ON planets.starListID = starList.starListID)
);
CREATE TABLE planetStarList AS (
SELECT
	planetList.planetListID,
	planetList.planetName,
	planetList.status,
	planetList.period,
	planetList.discoveryYear,
	planetList.AU,
	
	planetType.planetType,
	
	starList.starListID,
	starList.star,
	starList.distance,
	starList.multiStar,
	starList.stellarMass

FROM ((planetList
	INNER JOIN planetType ON planetList.planetTypeID = planetType.planetTypeID)
	INNER JOIN starList ON planetList.starListID = starList.starListID)
);

-- create the users and grant priveleges to those users
GRANT SELECT, INSERT, DELETE, UPDATE
ON grey_user_Grey_Lantern_Characters.*
TO grey_user@localhost
IDENTIFIED BY 'pa55word';

GRANT SELECT
ON planets
TO mgs_tester@localhost
IDENTIFIED BY 'pa55word';

GRANT SELECT, INSERT, DELETE, UPDATE
ON grey_user_Grey_Lantern_Characters.*
TO cpses_mrGUDyuWGJ@localhost
IDENTIFIED BY 'pa55word';

GRANT SELECT, INSERT, DELETE, UPDATE
ON grey_user_Grey_Lantern_Characters.*
TO cpses_mrGUDyuWGJ@localhost
IDENTIFIED BY '';

/*****************************************
* Sources for True Exoplanets
*****************************************/
/******************************************************************
* http://www.openexoplanetcatalogue.com/planet/Gliese%20687%20b/
* http://www.openexoplanetcatalogue.com/planet/Gliese%20674%20b/
******************************************************************/