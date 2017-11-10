var planet_names = [];
var all_planets = [];
var $ = function(id) {return document.getElementById(id);}
// onclick function for abouts
function planet_click (planet_output, about) {
//	console.log(planet_output);
	switch (planet_output.innerHTML) {
		case about.planet:
			planet_output.innerHTML = about.type;
			break;
		case about.type:
			planet_output.innerHTML = about.citizens;
			break;
		case about.citizens:
			planet_output.innerHTML = about.race;
			break;
		case about.race:
			planet_output.innerHTML = about.planet;
			break;
		default: 
			console.log('There has been an error in planet_click');
	}
}
function Round (value, decimals) {
  return Number(Math.round(value+'e'+decimals)+'e-'+decimals);
}
// define about method
function about (type, citizens, race, planet) {
	this.type = 'Planet Type: ' + type;  
	this.citizens = 'Citizen Class: ' + citizens;
	this.race = 'Race: ' + race;
	this.planet = 'Planet: ' + planet;
	all_planets.push(this);
	planet_names.push(this.planet);
}	
// give the abouts their info
var Mercury =	new about('Planet',		'Geneticists',		'Mercurian',	'Mercury');
var Venus =		new about('Planet',		'Geneticists',		'Venusian',		'Venus');
var Earth =		new about('Planet',		'N/A',				'Earther',		'Earth');
var Mars = 		new about('Planet',		'N/A',				'Martian',		'Mars');
var Jupiter =	new about('Moon',		'Transhumanists',	'Jovian',		'Jupiter');
var Saturn =	new about('Moon',		'Ecologists',		'Saturnal',		'Saturn');
var Uranus =	new about('Moon',		'Biologists',		'Uranusian',	'Uranus');
var Neptune =	new about('Moon',		'Technologists',	'Neptutian',	'Neptune');
var Pluto =		new about('Dwarf',		'Biotechnologists',	'Plutonian',	'Pluto');
var Charon =	new about('Dwarf',		'Biotechnologists',	'Plutonian',	'Charon');
var Ceres =		new about('Dwarf',		'',					'Ceresian',		'Ceres');
var Eris =		new about('Dwarf',		'',					'Erisian',		'Eris');
var Makemake =	new about('Dwarf',		'',					'Makemakan',	'Makemake');
// about function calls
$('output_mercury_ex').onclick =	function () {planet_click($('output_mercury_ex'),	Mercury);};
$('output_venus_ex').onclick =		function () {planet_click($('output_venus_ex'),		Venus);};
$('output_earth_ex').onclick =		function () {planet_click($('output_earth_ex'),		Earth);};
$('output_mars_ex').onclick =		function () {planet_click($('output_mars_ex'),		Mars);}
$('output_jupiter_ex').onclick =	function () {planet_click($('output_jupiter_ex'),	Jupiter);};
$('output_saturn_ex').onclick =		function () {planet_click($('output_saturn_ex'),	Saturn);};
$('output_uranus_ex').onclick =		function () {planet_click($('output_uranus_ex'),	Uranus);};
$('output_neptune_ex').onclick =	function () {planet_click($('output_neptune_ex'),	Neptune);};
$('output_pluto_ex').onclick =		function () {planet_click($('output_pluto_ex'),		Pluto);};
$('output_charon_ex').onclick =		function () {planet_click($('output_charon_ex'),	Charon);};
/*************************************************************
//$('output_ceres_ex').onclick =	function () {planet_click($('output_ceres_ex'),		Ceres);};
//$('output_eris_ex').onclick =		function () {planet_click($('output_eris_ex'),		Eris);};
//$('output_makemake_ex').onclick = function () {planet_click($('output_makemake_ex'),	Makemake);};
*************************************************************/