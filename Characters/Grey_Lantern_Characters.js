//var $ = function (id) {return document.getElementById(id);}
var all_characters = [];
var planet_names = [];
var user_outputs = [];

// give the characters their info
var Vravag = new character('Vravag', 5, 'Mercurian', 'Pyro', 'Mercury');
var Qonok = new character('Qonok', 5, 'Venusian', 'Pyro', 'Venus');
var Jalten = new character('Jalten', 7, 'Earther', 'Aero', 'Earth');
var Swnutu = new character('Swnutu', 9, 'Martian', 'Geo', 'Mars');
var Borozw = new character('Borozw', 10, 'Jovian', 'Aero', 'Jupiter');
var Pihoe_Xo = new character('Pihoe-Xo', 7, 'Saturnal', 'Aero', 'Saturn');
var UnknownU = new character('Unknown', 0, 'Uranusian', '', 'Uranus');
var Osa = new character('Osa', 7, 'Neptutian', '', 'Neptune');
var Pulof = new character('Pulof', 9, 'Plutonian', 'Geo', 'Pluto');
var Tenul = new character('Tenul', 20, 'Ceresian', 'Astro', 'Ceres');
var UnknownE = new character('Unknown', 0, 'Erisian', '', 'Eris');
var Kasil = new character('Kasil', 18, 'Makemakan', '', 'Makemake');
var user_character = new character('', 0, '', '', 'Create Your Own Character');

// define character method
function character (name, age, race, mage, planet) {
	this.name = name;
	this.age = age;
	this.race = race;
	this.mage = mage;
	this.planet = planet;
	if (mage == '') {this.magic = false;}
	else {this.magic = true;}
	this.change_name = function (change) {this.name = change;};
	this.change_age = function (change) {this.age = change;};
	this.change_race = function (change) {this.race = change;};
	this.change_magic = function (change) {this.mage = change;};
	all_characters.push(this);
	planet_names.push(this.planet);
}
// get the outputs from HTML
var output = [ $('#output_mercury'), $('#output_venus'), $('#output_earth'), $('#output_mars'), $('#output_jupiter'), $('#output_saturn'), $('#output_uranus'), $('#output_neptune'), $('#output_pluto'), $('#output_ceres'), $('#output_eris'), $('#output_makemake'), $('#new_output'), $('#new_output2')];
// character function calls
$('#output_mercury').click(function(){	planet_click($('#output_mercury'), Vravag);});
$('#output_venus').click(function(){	planet_click($('#output_venus'), Qonok);});
$('#output_earth').click(function(){	planet_click($('#output_earth'), Jalten);});
$('#output_mars').click(function(){		planet_click($('#output_mars'), Swnutu);})
$('#output_jupiter').click(function(){	planet_click($('#output_jupiter'), Borozw);});
$('#output_saturn').click(function(){	planet_click($('#output_saturn'), Pihoe_Xo);});
$('#output_uranus').click(function(){	planet_click($('#output_uranus'), UnknownU);});
$('#output_neptune').click(function(){	planet_click($('#output_neptune'), Osa);});
$('#output_pluto').click(function(){	planet_click($('#output_pluto'), Pulof);});
$('#output_ceres').click(function(){	planet_click($('#output_ceres'), Tenul);});
$('#output_eris').click(function(){		planet_click($('#output_eris'), UnknownE);});
$('#output_makemake').click(function(){	planet_click($('#output_makemake'), Kasil);});

$('#new_output').onclick = function () {return new_planet($('#new_output'), user_character);};
$('#new_output2').onclick = function () {return print_character($('#new_output2'), user_character, 'Last Character Created');};
$('#year').onclick = function () {return year_message($('#year'), output, year_intro);};
$('#soya').onclick = function () {return year_message($('#soya'), output, year_intro);};

var year_intro = [
	'**Solar Year Definition**', 												// year_intro[0]
	'The standard unit of time is the Solar years, often shortened to Soya(s).',// year_intro[1]
	'1 Solar year is equal to about 60 Earth years.'							// year_intro[2]
];
var year_output = ['Earth Year', 'Solar Year'];

// onclick function for characters
var planet_click = function (planet_output, character) {
	if (planet_output.innerHTML == character.planet){
		if (character.age == 0) {
		planet_output.innerHTML = 'A character from ' + character.planet + ' has not entered the story at this time.';
		} else {
			planet_output.innerHTML = character.name + ' is a ';
			planet_output.innerHTML += addCommas(character.age) + ' year old ';
			planet_output.innerHTML += character.race;
			if (character.magic){
				planet_output.innerHTML += ' and is ';
				planet_output.innerHTML += character.mage.toLowerCase() + 'kinetic.';
			} else {
				planet_output.innerHTML += ' and is not a mage.';
			}
		}
	} else {planet_output.innerHTML = character.planet;}
}
// user character onclick
var new_planet = function (planet_output, character) {
	if (planet_output.innerHTML == character.planet){
		character.name = prompt("What is the character's name?", 'Swnitu');
		character.age = prompt("What is the character's age?", '5');
		character.race = prompt('What is the character from?', 'Mars');
		character.mage = prompt('What is the character good at?', 'Geokinesis');
		character.age = Round(character.age, 2);
		user_outputs.push(character);
		planet_output.innerHTML = character.name + ' is a ';
		planet_output.innerHTML += character.age + ' year old from ';
		planet_output.innerHTML += character.race + ' and is good at ';
		planet_output.innerHTML += character.mage + '.';
	} else {planet_output.innerHTML = character.planet;}
}
var print_character = function (planet_output, character, message) {
	if (planet_output.innerHTML == message) {
			if (character.name != '') {
				planet_output.innerHTML = character.name + ' is a ';
				planet_output.innerHTML += character.age + ' year old from ';
				planet_output.innerHTML += character.race + ' and is good at ';
				planet_output.innerHTML += character.mage + '.';
			} else {planet_output.innerHTML = 'There was no preveous input.';}
	} else {planet_output.innerHTML = message;}
}

var Round = function (value, decimals) {
  return Number(Math.round(value+'e'+decimals)+'e-'+decimals);
}
// year message function calls
function year_message(message, output, year_intro) {
	if (message.innerHTML == year_output[1] || message.innerHTML == year_output[0]) {
		switch(message.innerHTML) {
			case year_output[1]:
				message.innerHTML = year_output[0];
				year_change(message, output);
				break;
			case year_output[0]:
				message.innerHTML = year_output[1];
				year_change(message, output);
				break;
		}
	} else {
		switch(message.innerHTML) {
			case year_intro[0]:
				message.innerHTML = year_intro[1];
				break;
			case year_intro[1]:
				message.innerHTML = year_intro[2];
				break;
			case year_intro[2]:
				message.innerHTML = year_intro[0];
		}
	}
}
function year_change(message, output) {
	if (message.innerHTML == year_output[0]) {
		for (var i=0; i<all_characters.length; i++) {
			all_characters[i].age *= 60;
			output[i].innerHTML = planet_names[i];
		}
	} else if (message.innerHTML == year_output[1]) {
		for (var i=0; i<all_characters.length; i++) {
			all_characters[i].age /= 60;
			output[i].innerHTML = planet_names[i];
		}
	} else {
		console.log('There is an error in the year_change function');
	}
}