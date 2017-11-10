/*$(document).ready(function(){
	$('#output_vravag').click(function(){
	});
	$('#').on('click', function(){
	});
});*/
var all_characters = [];
var planet_names = [];
var $ = function(id) {return document.getElementById(id);}
// define character method
function character(name, planet, language, identity) {
	this.name = 'Name: ' + name;
	this.planet = 'Planet of origin: ' + planet;
	this.language = 'Language: ' + language;
	this.identity = 'Superhero Identity: ' + identity;
}
// onclick function for characters
function planet_clicks(planet_output, character) {
	switch(planet_output.innerHTML) {
		case character.name:
			planet_output.innerHTML = character.planet;
			break;
		case character.planet:
			planet_output.innerHTML = character.language;
			break;
		case character.language:
			planet_output.innerHTML = character.identity;
			break;
		case character.identity:
			planet_output.innerHTML = character.name;
			break;
		default: 
			console.log('There has been an error');
	}
}
// give the characters their info
var Vravag_char = new character("Vravag", "Mercury", "Mercurian", "Saberleaf");
var Qonok_char = new character("Qonok", "Venus", "Venusian", "HammerHead");
var Jalten_char = new character("Jalten", "Earth", "English", "Incognito");
var Swnitu_char = new character("Swnitu", "Mars", "Martian", "The Speaker");
var Borozw_char = new character("Borozw", "Jupiter", "Jovian", "Dollmaker");
var Pihoe_Xo_char = new character("Pihoe-Xo", "Saturn", "Saturnal", "Absolute Zero");
var Osa_char = new character("Osa", "Neptune", "Neptutian", "Thornhead");
var Pulof_char = new character("Pulof", "Pluto", "Plutonian", "Sillouette");
var Tenul_char = new character("Tenul", "Ceres", "Ceresian", "Unknown");
var Kasil_char = new character("Kasil", "Makemake", "Makemakan", "Unknown");

output_vravag.onclick = function () {planet_clicks(output_vravag, Vravag_char);};
output_qonok.onclick = function () {planet_clicks(output_qonok, Qonok_char);};
output_jalten.onclick = function () {planet_clicks(output_jalten, Jalten_char);};
output_swnitu.onclick = function () {planet_clicks(output_swnitu, Swnitu_char);};
output_borozw.onclick = function () {planet_clicks(output_borozw, Borozw_char);};
output_pihoe_xo.onclick = function () {planet_clicks(output_pihoe_xo, Pihoe_Xo_char);};
output_osa.onclick = function () {planet_clicks(output_osa, Osa_char);};
output_pulof.onclick = function () {planet_clicks(output_pulof, Pulof_char);};
output_tenul.onclick = function () {planet_clicks(output_tenul, Tenul_char);};
output_kasil.onclick = function () {planet_clicks(output_kasil, Kasil_char);};