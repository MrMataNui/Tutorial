<?php

	$queryConnect2 = 'SELECT * FROM Alphabet';
	$statement = $db->prepare($queryConnect2);
	$statement->execute();
	$connectAlph = $statement->fetchAll();
	$statement->closeCursor();

	$queryConnectPlanet = "SELECT * FROM Word ORDER BY AlphabetID";
	$statement = $db->prepare($queryConnectPlanet);
	// Put the percentage sing on the keyword
	// $sort = "%".$sort."%";
	// $statement->bindParam(':sort', $sort);
	$statement->execute();
	$connectDict = $statement->fetchAll();
	$statement->closeCursor();

	$keteWord=array();
	$keteMeaning=array();
	$i=$j=0;
	var $LangDict = array();
	foreach ($connectDict as $DictEntry) : 
		$LangDict [ strtoupper($DictEntry['Meaning']) ] = strtoupper($DictEntry['Word']);
		$keteWord[$i] = $DictEntry['Word'];
		$keteMeaning[$i] = $DictEntry['Meaning'];
		$i++;
	endforeach;

?>
<script>
$(function(){
	var keteArray = <?php echo json_encode($keteWord); ?>;
	var engArray = <?php echo json_encode($keteMeaning); ?>;
	var LangDict = <?php echo json_encode($LangDict); ?>;
	$.each(engArray, function (i, value) {
		engArray[i] = engArray[i].toUpperCase();
		keteArray[i] = keteArray[i].toUpperCase();
	});
	$.each(engArray, function (i, value) {
		if (value == 'YOU') {
			if (keteArray[i] == 'U&SCARON;E') { // i = 1335
				singular['youN'] = true;
				youlist['singYouN'] = value;
			}
			else if (keteArray[i] == 'U&SCARON;UY') {// i = 1345
				singular['youA'] = true;
				youlist['singYouA'] = value;
			}
			else if (keteArray[i] == 'QO') { // i = 1873
				plural['youN'] = true;
				youlist['plurYouN'] = value;
			}
			else if (keteArray[i] == 'QU&SCARON;') { // i = 1874
				plural['youA'] = true;
				youlist['plurYouA'] = value;
			}
			
		} else if (value == 'TO YOU') {
			if (keteArray[i] == 'U&SCARON;O') {// i = 1338
				singular['toYou'] = true;
				youlist['singToYou'] = value;
			}
			else if (keteArray[i] == 'QU'){ // i = 1875
				plural['toYou'] = true;
				youlist['plurToYou'] = value;
			}
			
		}
		engArray[i] = engArray[i].toUpperCase();
		keteArray[i] = keteArray[i].toUpperCase();
	});
	// console.log(youlist);
	// console.log(singular);
	// console.log(plural);

	// console.log(keteArray);
	// console.log(engArray);
	
	var dict = {};
	$.each(engArray, function (i, value) {
		dict[engArray[i]] = keteArray[i];
	});
	$.each(dict, function (i, value) {
		i = i.toUpperCase();
		dict[i] = value.toUpperCase();
	});
/*	$.each(dict, function (i, value) {
		// if (i == 'singYouN')
		// if (i == 'singYouA')
		// if (i == 'plurYouN')
		// if (i == 'plurYouA')
		// if (i == 'singToYou')
		// if (i == 'plurToYou')
	});
*/
	
	// console.log(dict);
	// console.log(dict);
	// console.log(dict1);
	var punctuation = ['!', '.', '?' /*, ';', ':', '"', "'" */ ];
	var toWho = ['ME','YOU','HIM', 'HER', 'IT', 'US', 'THEM'];
	var punc;

	$('#eng_text').focus();
	$('#calculate').click(function(){

		var user_text = $.trim($('#eng_text').val().toUpperCase());
		// user_text = $.trim(user_text);
		var split_text = user_text.split(' ');

		var solutionArray = [];
		var stringPunc = [];
		var solutionVar = '';
		
		$.each(split_text, function (i, split_val) {
			$.each(punctuation, function (j, punct_val) {
				if (split_val == 'TO') {
					$.each(toWho, function (k, value) {
						if (split_text[i+1] == toWho[k] && split_text[i+1] != '') {
							split_text[i] += ' '+split_text[i+1];
							split_text[i+1] = '';
							return false;
						} else if (split_text[i+1] == toWho[k]+punct_val && split_text[i+1] != '') {
							split_text[i] += ' '+split_text[i+1];
							split_text[i+1] = '';
							return false;
						}
					});
				}
				// console.log(stringPunc);
				if (split_text[i].indexOf(punct_val) >= 0) {
					stringPunc[i] = split_val;
					stringPunc[i] = stringPunc[i].split(punct_val);
					punc = punct_val;
					$.each(stringPunc, function (k, value) {
						if (stringPunc[i][k] != ''){
							split_val = stringPunc[i][k];
						}
					});
				}
			});
				// console.log('');
		});
				// console.log(split_text);
		// console.log(user_text);
		// console.log(stringPunc);
		// console.log(punc);
		console.log(split_text);
		// I will give it to you
		// Why do you talk
		function punctu (solutionVar, dict, key) {
			solutionVar += dict[key];
			solutionVar = $.trim(solutionVar);
			solutionVar += punc;
			return solutionVar;
		}
		var nouns = {To_me: 'TO ME', /*To_him: ['TO HIM', 'TO HER', 'TO IT'],*/ To_us: 'TO US', To_them: 'TO THEM'}
		$.each(split_text, function (i, split_val) {
			// console.log(split_val);
			$.each(dict, function (dict_key, dict_val) {
					var key = dict_key.charAt(0).toUpperCase() + dict_key.slice(1).toLowerCase();
					if (stringPunc[i]) {
						if (split_val == (dict_key + punc) ) {
							solutionVar = punctu (solutionVar, dict, key);
							return false;
						}
						else if (split_val == ('YOU' + punc) ) {
							solutionVar = punctu (solutionVar, dict, 'singYouN');
							return false;
						}
						else if (split_val == ('TO YOU' + punc) ) {
							solutionVar = punctu (solutionVar, dict, 'singToYou');
							return false;
						}
						else if (split_val == 'TO HIM' + punc
									|| split_val == 'TO HER' + punc
									|| split_val == 'TO IT' + punc) {
							solutionVar = punctu (solutionVar, dict, 'To_him');
							return false;
						}
						return;
					} else if (split_val == dict_key) {
						solutionVar += dict[key] + ' ';
						return false;
					} else if (split_val == 'YOU') {
						solutionVar += dict['singYouN'] + ' ';
						return false;
					} else if (split_val == 'TO YOU') {
						solutionVar += dict['singToYou'] + ' ';
						return false;
					} else if (split_val == 'TO HIM' || split_val == 'TO HER' || split_val == 'TO IT') {
						solutionVar += dict['To_him'] + ' ';
						return false;
					}
					return;
			});
			// $.each(jovPlace, function (place_key, place_val) {
					// if (stringPunc[i]) {
						// if (split_val == place_key && place_key == 'verb') {
							// solutionVar = punctu (solutionVar, dict, noun_key);
							// return false;
						// }
						// return;
					// } else if (split_val == noun_val) {
					// solutionVar += dict[noun_key] + ' ';
					// return false;
				// } else if (split_val)
					// solutionArray[i] = '--';
			// });
			$.each(nouns, function (noun_key, noun_val) {
					if (stringPunc[i]) {
						if (split_val == (noun_val + punc) ) {
							solutionVar = punctu (solutionVar, dict, noun_key);
							return false;
						}
						return;
					} else if (split_val == noun_val) {
					solutionVar += dict[noun_key] + ' ';
					return false;
				} else if (split_val)
					solutionArray[i] = '--';
			});
		});
		console.log(user_text);
		console.log(solutionVar);
		console.log(solutionArray);
		// $.each(solutionArray, function (i, value) {
			// if(solutionArray[i] >= 0 ) {
				// var num = engArray.indexOf(split_text[i]);
				
				// solutionArray[i] = keteArray[num];
			// }
		// });
		// var solution = $.trim(solutionArray.join(' '));
		var solution = $.trim(solutionVar);
		// solution = solution.toLowerCase();
		var html = $.parseHTML( solution );
		// solution = solution.text();
		var divC = $('#div').children('p');
		$('#div').children('p').html(solution)/*.text()*/;
		$('#div').children('p').text(function(_, txt) {
			return txt.charAt(0).toUpperCase() + txt.slice(1).toLowerCase();
		});

		$('#div').find('h3').text(user_text);
		$('#div').find('h3').text(function(_, txt) {
			if (txt.indexOf(' i ') >= 0 || txt.indexOf(' I ') >= 0) {
				if (txt.indexOf(' i ') >= 0)
					var textFind = txt.indexOf(' i ')+1;
				else if (txt.indexOf(' I ') >= 0)
					var textFind = txt.indexOf(' I ')+1;
				var english = txt.charAt(0).toUpperCase();
				english += txt.slice(1, textFind).toLowerCase();
				english += txt.charAt(textFind).toUpperCase();
				english += txt.slice(textFind + 1).toLowerCase();
				$('#eng_text').val(english);
				// return english;
			/* } else if (txt.indexOf(' i') >= 0 || txt.indexOf(' I') >= 0) {
				if (txt.indexOf(' i') >= 0)
					var textFind = txt.indexOf(' i')+1;
				else if (txt.indexOf(' I') >= 0)
					var textFind = txt.indexOf(' I')+1;

				if (textFind == (txt.indexOf(punc)-1)) {
					var textFind = txt.indexOf(punc)-1;
					var english = txt.charAt(0).toUpperCase();
					english += txt.slice(1, textFind).toLowerCase();
					english += txt.charAt(textFind).toUpperCase();
					english += txt.slice(textFind + 1).toLowerCase();
					$('#eng_text').val(english);
					// return english;
					
				} else if (textFind == (txt.length-1)) {
					var textFind = txt.length-1;
					var english = txt.charAt(0).toUpperCase();
					english += txt.slice(1, textFind).toLowerCase();
					english += txt.charAt(textFind).toUpperCase();
					english += txt.slice(textFind + 1).toLowerCase();
					$('#eng_text').val(english);
					return english;
					
				}*/
			} else {
				$('#eng_text').val(txt.charAt(0).toUpperCase() + txt.slice(1).toLowerCase());
				return txt.charAt(0).toUpperCase() + txt.slice(1).toLowerCase();
			}
		});
		$('#div').find('p').wrapInner('<strong><em></em></strong>');
		// console.log(solutionArray);
		// console.log(solution);
		$('#eng_text').focus();
	});
});

</script>