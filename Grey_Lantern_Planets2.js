var planet_names = [];
var all_planets = [];
var planets_sym_enco = [];
var planets_sym_deco = [];


var planets_sym = [
	"&#x263F;",	//planets_sym[0]
	"&#x2640;",	//planets_sym[1]
	"&#x2641;",	//planets_sym[2]
	"&#x2642;",	//planets_sym[3]
	"&#x2643;",	//planets_sym[4]
	"&#x2644;",	//planets_sym[5]
	"&#x2645;",	//planets_sym[6]
	"&#x2646;",	//planets_sym[7]
	"&#x2647;",	//planets_sym[8]
];

function encode () {
	for (var x in planets_sym) {
		planets_sym_enco.push(encode_utf8(planets_sym[x]));
	}
}

function decode () {
	for (var x in planets_sym) {
		planets_sym_deco.push(decode_utf8(planets_sym_enco[x]));
	}
}

function encode_utf8(s) {
  return /*unescape(*/encodeURIComponent(s)/*)*/;
}

function decode_utf8(s) {
  return decodeURIComponent(/*escape(*/s/*)*/);
}
// click function for abouts
var planet_click = function (planet_output, about) {
	$(".planet").each(function() {
		//$(this).append("<p>Here's a note</p>");
		/*if (about.planet == encode_utf8(this.text()) ) {
			encode_utf8(this.text());
		}*/
		switch (planet_output.text()) {
			case encode_utf8( this.text() ) :
				planet_output.html(about.type);
				break;
			case about.type:
				planet_output.html(about.citizens);
				break;
			case about.citizens:
				planet_output.html(about.race);
				break;
			case about.race:
				planet_output.html(about.planet);
				break;
			default: 
				console.log('There has been an error in planet_click');
		}
	});
}
// define about method
function about (type, citizens, race, planet) {
	this.planet = planet;
	this.type = type;
	this.citizens = citizens;
	this.race = race;
	all_planets.push(this);
	planet_names.push(this.planet);
	console.log(this.planet);
}	
$(document).ready(function(){
	encode();
	decode();

	// give the abouts their info
	var Mercury =	new about("Planet",	"Geneticists",		"Mercurian",	planets_sym_enco[0]);
	var Venus =		new about("Planet",	"Geneticists",		"Venusian",		planets_sym_enco[1]);
	var Earth =		new about("Planet",	"N/A",				"Earther",		planets_sym_enco[2]);
	var Mars =		new about("Planet",	"N/A",				"Martian",		planets_sym_enco[3]);
	var Jupiter =	new about("Moon",	"Transhumanists",	"Jovian",		planets_sym_enco[4]);
	var Saturn =	new about("Moon",	"Ecologists",		"Saturnal",		planets_sym_enco[5]);
	var Uranus =	new about("Moon",	"Biologists",		"Uranusian",	planets_sym_enco[6]);
	var Neptune =	new about("Moon",	"Technologists",	"Neptutian",	planets_sym_enco[7]);
	var Pluto =		new about("Dwarf",	"Biotechnologists",	"Plutonian",	planets_sym_enco[8]);
	var Charon =	new about("Dwarf",	"Biotechnologists",	"Plutonian",	planets_sym_enco[8]);
	var Ceres =		new about("Dwarf",	"",					"Ceresian",		"Ceres");
	var Eris =		new about("Dwarf",	"",					"Erisian",		"Eris");
	var Makemake =	new about("Dwarf",	"",					"Makemakan",	"Makemake");

	// about function calls
	$("#output_mercury_ex").click(function () 	{planet_click($("#output_mercury_ex"), 	Mercury);});
	$("#output_venus_ex").click(function () 	{planet_click($("#output_venus_ex"), 	Venus);});
	$("#output_earth_ex").click(function () 	{planet_click($("#output_earth_ex"), 	Earth);});
	$("#output_mars_ex").click(function () 		{planet_click($("#output_mars_ex"), 	Mars);});
	$("#output_jupiter_ex").click(function () 	{planet_click($("#output_jupiter_ex"), 	Jupiter);});
	$("#output_saturn_ex").click(function () 	{planet_click($("#output_saturn_ex"), 	Saturn);});
	$("#output_uranus_ex").click(function () 	{planet_click($("#output_uranus_ex"), 	Uranus);});
	$("#output_neptune_ex").click(function () 	{planet_click($("#output_neptune_ex"), 	Neptune);});
	$("#output_pluto_ex").click(function () 	{planet_click($("#output_pluto_ex"), 	Pluto);});
	$("#output_charon_ex").click(function () 	{planet_click($("#output_charon_ex"), 	Charon);});
});