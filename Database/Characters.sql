/*****************************************
* Create the id3536633_grey_lantern_characters database
*****************************************/
DROP DATABASE IF EXISTS id3536633_grey_lantern_characters;
CREATE DATABASE id3536633_grey_lantern_characters;
USE id3536633_grey_lantern_characters;  -- MySQL command

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
CREATE TABLE languages (
	langID				INT(11)	 		NOT NULL	 	AUTO_INCREMENT,
	langName			VARCHAR(255) 	NOT NULL,
	langDict			VARCHAR(255) 	NOT NULL,
	langTranslate		VARCHAR(255) 	NOT NULL,
	PRIMARY KEY (langID)
);
CREATE TABLE characters (
	charID					INT(11)		 	NOT NULL	 	AUTO_INCREMENT,
	charName				VARCHAR(255) 	NOT NULL,
	charIdentity			VARCHAR(255) 	NOT NULL,
	charAge					INT(11)		 	NOT NULL,
	charRace				VARCHAR(255) 	NOT NULL,
	planetID				INT(11)		 	NOT NULL,
	magicID					INT(11)		 	NOT NULL,
	langID					INT(11)	 		NOT NULL,
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
INSERT INTO planetType VALUES (1, 	'Rocky'			);
INSERT INTO planetType VALUES (2, 	'Gas Giant'		);
INSERT INTO planetType VALUES (3, 	'Ice Giant'		);
INSERT INTO planetType VALUES (4, 	'Dwarf'			);
INSERT INTO planetType VALUES (5, 	'Asteroid'		);
INSERT INTO planetType VALUES (6, 	'Hot Jupiter'	);
INSERT INTO planetType VALUES (7, 	'Super Earth'	);


INSERT INTO magic VALUES (1, 	'Pyrokinesis',		'plasma'	);
INSERT INTO magic VALUES (2, 	'Aerokinesis',		'gas'		);
INSERT INTO magic VALUES (3, 	'Liquikinesis',		'liquid'	);
INSERT INTO magic VALUES (4, 	'Geokinesis',		'solid'		);
INSERT INTO magic VALUES (5, 	'Astrokinesis',		'space'		);
INSERT INTO magic VALUES (6, 	'N/A',				'N/A'		);
INSERT INTO magic VALUES (7, 	'Unknown',			'Unknown'	);

INSERT INTO planets VALUES (1, 	'Mercury',		1,	1	);
INSERT INTO planets VALUES (2, 	'Venus',		1,	1	);
INSERT INTO planets VALUES (3, 	'Earth',		1,	1	);
INSERT INTO planets VALUES (4, 	'Mars', 		1,	1	);
INSERT INTO planets VALUES (5, 	'Jupiter',		2,	1	);
INSERT INTO planets VALUES (6, 	'Saturn',		2,	1	);
INSERT INTO planets VALUES (7, 	'Uranus',		3,	1	);
INSERT INTO planets VALUES (8, 	'Neptune',		3,	1	);
INSERT INTO planets VALUES (9, 	'Pluto',		4,	1	);
INSERT INTO planets VALUES (10, 'Ceres',		4,	1	);
INSERT INTO planets VALUES (11,	'Makemake',		4,	1	);
INSERT INTO planets VALUES (12,	'Qenove',		7,	7	);	-- Gliese 687 b		Random seed: 1076976194 on https://donjon.bin.sh/scifi/world/
INSERT INTO planets VALUES (13,	'Qixan',		7,	8	); 	-- Gliese 674 b

INSERT INTO languages VALUES (1, 	'Jovian',					'JovianDict.php',		'JovianTranslate.php');
INSERT INTO languages VALUES (2, 	'Plutonian',				'PlutonianDict.php',	'PlutonianTranslate.php');
INSERT INTO languages VALUES (3, 	'K&euml;&tcaron;er&euml;',	'KeteDict.php',			'KeteTranslate.php');
INSERT INTO languages VALUES (4, 	'Other',					'N/A',					'N/A');

INSERT INTO characters VALUES (1, 	'Vravag',	'Saberleaf',		5,		'Mercurian',	1,		1,		4);
INSERT INTO characters VALUES (2, 	'Qonok',	'HammerHead',		5,		'Venusian',		2,		1,		4);
INSERT INTO characters VALUES (3, 	'Jalten',	'Incognito',		7,		'Earther',		3,		2,		4);
INSERT INTO characters VALUES (4, 	'Swnitu',	'The Speaker',		9,		'Martian',		4,		4,		4);
INSERT INTO characters VALUES (5, 	'Borozw',	'Dollmaker',		10,		'Jovian',		5,		2,		1);
INSERT INTO characters VALUES (6, 	'Pihoe-Xo',	'Absolute Zero',	7,		'Saturnal',		6,		2,		1);
INSERT INTO characters VALUES (7, 	'Osa',		'Thornhead',		7,		'Neptutian',	8,		6,		1);
INSERT INTO characters VALUES (8, 	'Pulof',	'Sillouette',		9,		'Plutonian',	9,		4,		2);
INSERT INTO characters VALUES (9, 	'Tenul',	'Unknown',			20,		'Ceresian',		10,		5,		2);
INSERT INTO characters VALUES (10, 	'Kasil',	'Unknown',			18,		'Makemakan',	11,		6,		2);
INSERT INTO characters VALUES (11, 	'Xaknel',	'Unknown',			25,		'Qenovan',		12,		7,		3);
INSERT INTO characters VALUES (12, 	'Joex',		'Unknown',			25,		'Xulde',		13,		7,		3);
INSERT INTO characters VALUES (13, 	'Fraq',		'Unknown',			25,		'Qenovan',		12,		7,		3);
INSERT INTO characters VALUES (14, 	'Kirasw',	'Unknown',			10,		'Martian',		4,		3,		4);
INSERT INTO characters VALUES (15, 	'Doxen',	'Unknown',			8,		'Plutonian',	9,		2,		2);
INSERT INTO characters VALUES (16, 	'Nula',		'Unknown',			0,		'Uransian',		7,		6,		1);
-- INSERT INTO characters VALUES (17, 	'Unknown',	'Unknown',			0,		'Unknown',		7,		6,		4);

										-- http://www.johnstonsarchive.net/astro/extrasolarplanets.html
INSERT INTO planetList VALUES (1,		1,	'Mercury',	'*',			87.97,		0,			0.3870,		1);
INSERT INTO planetList VALUES (2,		1,	'Venus',	'*',			224.98,		0,			0.7230,		1);
INSERT INTO planetList VALUES (3,		1,	'Earth',	'*',			365.25,		0,			1.0000,		1);
INSERT INTO planetList VALUES (4,		1,	'Mars',		'*',			686.76,		0,			1.5240,		1);
INSERT INTO planetList VALUES (5,		1,	'Jupiter',	'*',			4334.82,	0,			5.2030,		2);
INSERT INTO planetList VALUES (6,		1,	'Saturn',	'*',			10757.41,	0,			9.5370,		2);
INSERT INTO planetList VALUES (7,		1,	'Uranus',	'*',			30702.00,	1781,		19.1890,	3);
INSERT INTO planetList VALUES (8,		1,	'Neptine',	'*',			60227.00,	1846,		30.0700,	3);
INSERT INTO planetList VALUES (9,		1,	'Pluto',	'*',			90613.00,	1930,		39.4820,	4);
INSERT INTO planetList VALUES (10,		1,	'Eris',		'*',			205132.00,	2003,		68.0710,	4);
INSERT INTO planetList VALUES (11,		2,	'b',		'*',			3.24,		2012,		0.0400,		1);
INSERT INTO planetList VALUES (12,		3,	'b',		'*',			2502.00,	2000,		3.3900,		2);
INSERT INTO planetList VALUES (13,		3,	'c',		'Unconfirmed',	102270.00,	0,			40.0000,	3);
INSERT INTO planetList VALUES (14,		4,	'b',		'*',			61.12,		1998,		0.2083,		2);
INSERT INTO planetList VALUES (15,		4,	'c',		'Unconfirmed',	30.09,		2000,		0.1296,		2);
INSERT INTO planetList VALUES (16,		4,	'd',		'*',			1.94,		2005,		0.0208,		2);
INSERT INTO planetList VALUES (17,		4,	'e',		'*',			124.26,		2010,		0.3343,		3);
INSERT INTO planetList VALUES (18,		5,	'b',		'*',			5.37,		2005,		0.0410,		3);
INSERT INTO planetList VALUES (19,		5,	'c',		'*',			12.93,		2005,		0.0730,		1);
INSERT INTO planetList VALUES (20,		5,	'd',		'*',			66.80,		2005,		0.2200,		1);
INSERT INTO planetList VALUES (21,		5,	'e',		'*',			3.35,		2005,		0.0280,		1);
INSERT INTO planetList VALUES (22,		6,	'd',		'*',			91.61,		2013,		0.2760,		1);
INSERT INTO planetList VALUES (23,		6,	'e',		'*',			62.24,		2013,		0.2130,		1);
INSERT INTO planetList VALUES (24,		6,	'f',		'*',			39.03,		2013,		0.1560,		1);
INSERT INTO planetList VALUES (25,		6,	'g',		'*',			256.20,		2013,		0.5490,		1);
INSERT INTO planetList VALUES (26,		1,	'Ceres',	'*',			1682.00,	1801,		2.7653,		4);		-- https://solarsystem.nasa.gov/planets/ceres/facts	https://solarsystem.nasa.gov/planets/ceres/indepth
INSERT INTO planetList VALUES (27,		1,	'Makemake',	'*',			113113.5,	2005,		45.7900,	4);		-- http://space-facts.com/makemake/
INSERT INTO planetList VALUES (28,		7,	'e',		'*',			38.140,		2014,		0.1635,		3);		-- http://www.openexoplanetcatalogue.com/planet/Gliese%20687%20b/
INSERT INTO planetList VALUES (29,		8,	'e',		'*',			4.69,		2007,		0.0390,		3);		-- http://www.openexoplanetcatalogue.com/planet/Gliese%20674%20b/


INSERT INTO starList VALUES (1,	'Sol', 					0.00,	1.0,	false	);
INSERT INTO starList VALUES (2,	'Alpha Centauri B', 	4.40,	0.93,	true	);
INSERT INTO starList VALUES (3,	'Epsilon Eridani', 		10.50,	0.83,	false	);
INSERT INTO starList VALUES (4,	'Ross 780', 			15.30,	0.32,	false	);
INSERT INTO starList VALUES (5,	'Wolf 562', 			20.70,	0.31,	false	);
INSERT INTO starList VALUES (6,	'GJ 667 C', 			22.30,	0.33,	true	);
INSERT INTO starList VALUES (7,	'Gliese 687', 			14.70,	0.41,	false	);
INSERT INTO starList VALUES (8,	'Gliese 674', 			14.81,	0.41,	false	);

CREATE TABLE AllInfo AS (
SELECT
	characters.charID,
	characters.charName,
	characters.charIdentity,
	characters.charAge,
	characters.charRace,
	
	planets.planetID,
	planets.planetName,
	
	planetType.planetType,
	
	starList.starListID,
	starList.star,
	
	magic.magicName,
	magic.magicID,
	magic.magicType
	
FROM ((((characters
	INNER JOIN magic ON characters.magicID = magic.magicID)
	INNER JOIN planets ON characters.planetID = planets.planetID)
	INNER JOIN planetType ON planets.planetTypeID = planetType.planetTypeID)
	INNER JOIN starList ON planets.starListID = starList.starListID)
);
CREATE TABLE LangInfo AS (
SELECT
	languages.langName,
	languages.langDict,
	languages.langTranslate,

	characters.charIdentity
	
FROM (languages
	INNER JOIN characters ON languages.langID = characters.langID)
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
ON id3536633_grey_lantern_characters.*
TO id3536633_grey_user@localhost
IDENTIFIED BY 'pa55word';

/*****************************************
* Sources for True Exoplanets
*****************************************/
/******************************************************************
* http://www.openexoplanetcatalogue.com/planet/Gliese%20687%20b/
* http://www.openexoplanetcatalogue.com/planet/Gliese%20674%20b/
******************************************************************/
