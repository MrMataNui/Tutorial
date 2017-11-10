// get the outputs from HTML
var $ = function (id) {
    return document.getElementById(id);
}
/*var $("output_mercury2") = $("$("output_mercury2")");
var $("output_venus2") = $("$("output_venus2")");
var $("output_earth2") = $("$("output_earth2")");
var $("output_mars2") = $("$("output_mars2")");
var $("output_jupiter2") = $("$("output_jupiter2")");
var $("output_saturn2") = $("$("output_saturn2")");
var $("output_uranus2") = $("$("output_uranus2")");
var $("output_neptune2") = $("$("output_neptune2")");
var $("output_pluto2") = $("$("output_pluto2")");
var $("output_ceres2") = $("$("output_ceres2")");
var $("output_eris2") = $("$("output_eris2")");
var $("output_makemake2") = $("$("output_makemake2")");*/
var test = $("test");

var all_planet_outputs = [$("output_mercury2"), $("output_venus2"), $("output_earth2"), $("output_mars2"), $("output_ceres2"), $("output_jupiter2"), $("output_saturn2"), $("output_uranus2"), $("output_neptune2"), $("output_pluto2"), $("output_eris2"), $("output_makemake2")];
var planet_names = ['Mercury', 'Venus', 'Earth', 'Mars', 'Ceres', 'Jupiter', 'Saturn', 'Uranus', 'Neptune', 'Pluto', 'Eris', 'Makemake'];

// define character method
var all_characters = [];
function character(name, planet, language, identity) {
    this.name = name;
	this.planet = planet;
    this.language = language;
    this.identity = identity;
//	if (mage == "") {this.magic = false;}
//	else {this.magic = true;}
    this.change_name = function (change) {this.name = change;};
	this.change_age = function (change) {this.age = change;};
	this.change_race = function (change) {this.race = change;};
	this.change_magic = function (change) {this.mage = change;};
	all_characters.push(this);
}

// give the characters their info
console.log(all_characters);
var Vravag2 = new character("Vravag", "Mercury", "Mercurian", "Saberleaf");
var Qonok2 = new character("Qonok", "Venus", "Venusian", "HammerHead");
var Jalten2 = new character("Jalten", "Earth", "English", "Incognito");
var Swnitu2 = new character("Swnitu", "Mars", "Martian", "The Speaker");
var Borozw2 = new character("Borozw", "Jupiter", "Jovian", "Jupiter");
var Pihoe_Xo2 = new character("Pihoe-Xo", "Saturn", "Saturnal", "Absolute Zero");
var Osa2 = new character("Osa", "Neptune", "Neptutian", "Thornhead");
var Pulof2 = new character("Pulof", "Pluto", "Plutonian", "Sillouette");
var Tenul2 = new character("Tenul", "Ceres", "Ceresian", "Storm");
var Kasil2 = new character("Kasil", "Makemake", "Makemakan", "Prophet");
var test_var = new character("Test", "Earth", "English", "Radar");
/*var UnknownU = new character("Unknown", 0, "Uranusian", "", "Uranus");
var UnknownE = new character("Unknown", 0, "Erisian", "", "Eris");*/
//var user_character = new character("", 0, "", "", "");
//console.log(all_characters);


// onclick function for characters
function planet_clicks(planet_output, character) {
	switch(planet_output.innerHTML) {
    case "Name: " + character.name:
    case character.name:
        planet_output.innerHTML = "Planet of origin: " + character.planet;
        break;
    case "Planet of origin: " + character.planet:
        planet_output.innerHTML = "Language: " + character.language;
        break;
    case "Language: " + character.language:
        planet_output.innerHTML = "Superhero Identity: " + character.identity;
        break;
    case "Superhero Identity: " + character.identity:
        planet_output.innerHTML = character.name;
	}
}

// character function calls
$("output_mercury2").onclick = function () {return planet_clicks($("output_mercury2"), Vravag2);};
$("output_venus2").onclick = function () {return planet_clicks($("output_venus2"), Qonok2);};
$("output_earth2").onclick = function () {return planet_clicks($("output_earth2"), Jalten2);};
$("output_mars2").onclick = function () {return planet_clicks($("output_mars2"), Swnitu2);};
$("output_jupiter2").onclick = function () {return planet_clicks($("output_jupiter2"), Borozw2);};
$("output_saturn2").onclick = function () {return planet_clicks($("output_saturn2"), Pihoe_Xo2);};
//$("output_uranus2").onclick = function () {return planet_clicks($("output_uranus2"));};
$("output_neptune2").onclick = function () {return planet_clicks($("output_neptune2"), Osa2);};
$("output_pluto2").onclick = function () {return planet_clicks($("output_pluto2"), Pulof2);};
$("output_ceres2").onclick = function () {return planet_clicks($("output_ceres2"), Tenul2);};
$("output_makemake2").onclick = function () {return planet_clicks($("output_makemake2"), Kasil2);};
test.onclick = function () {return planet_clicks(test, test_var);};
//$("output_eris2").onclick = function () {planet_clicks($("output_eris2"));};

/*function year_change() {
	if (soya.innerHTML == "Earth Year") {
		for (var i=0; i<all_characters.length; i++) {
			all_characters[i].age *= 60;
			all_planet_outputs[i].innerHTML = planet_names[i];
/*			if (all_planet_outputs[i].innerHTML != planet_names[i]) {
				planet_click(all_planet_outputs[i], all_characters[i], planet_names[i]);
				all_planet_outputs[i].age = all_characters[i].age;
			}
		}
	} else {
		for (var i=0; i<all_characters.length; i++) {
			all_characters[i].age /= 60;
			all_planet_outputs[i].innerHTML = planet_names[i];
/*			if (all_planet_outputs[i].innerHTML != planet_names[i]) {
				planet_click(all_planet_outputs[i], all_characters[i], planet_names[i]);
				all_planet_outputs[i].innerHTML = all_characters[i].age;
			}
		}
	}
}*/

// year message function calls
/*year.onclick = function () {
	switch(year.innerHTML) {
    case year_intro:
        year.innerHTML = year_explain;
        break;
    case year_explain:
        year.innerHTML = year_explain2;
        break;
    case year_explain2:
        year.innerHTML = year_intro;
	}
};
soya.onclick = function () {
	switch(soya.innerHTML) {
    case "Solar Year":
        soya.innerHTML = "Earth Year";
		year_change();
        break;
    case "Earth Year":
        soya.innerHTML = "Solar Year";
        year_change();
		break;
	}
}*/