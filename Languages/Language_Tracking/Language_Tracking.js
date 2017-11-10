			var martian = getElementById("martian");
			var mercurian = getElementById("mercurian");

//			(function loading () {martian.innerHTML = prompt("Enter a Martian word.","Swnitu");})()
			martian.onclick = function () {
				martian.innerHTML = prompt("Enter a Martian word.","Swnitu");
				martian_script();
			}
			function change_script(letters) {
				letters = martian.innerHTML.toLowerCase().split("");
			}

			function martian_script () {
				
				var martian_letters;
				change_script(martian_letters);
				for (var i=0; i<martian_letters.length; i++) {
					if (martian_letters[i] == 't') {
						martian_letters[i].push = "h";
					} else if (martian_letters[i] == 'k' && martian_letters[i+1] != 'i') {
						martian_letters[i].push = "y";
					} else if (martian_letters[i] == 'c' && martian_letters[i+1] != 'h') {
						martian_letters[i] = "n";
						martian_letters[i].push = "y";
					} else if (martian_letters[i] == 'x') {
						martian_letters[i] = "c";
						martian_letters[i].push = "h";
					} else if (martian_letters[i] == 'z') {
						martian_letters[i].push = "h";
					} else if (martian_letters[i] == 'd') {
						martian_letters[i] = "s";
						martian_letters[i].push = "h";
					} else if (martian_letters[i] == 'g') {
						martian_letters[i-1].push = "n";
					} else if (martian_letters[i] == 'h') {
						if (martian_letters[i-1] != 'c' && martian_letters[i-1] != 't' && martian_letters[i-1] != 'z' && martian_letters[i-1] != 's') {
							martian_letters[i] = "'";
						} 
					}
				}
			}
			function mercurian_script () {
				
			var mercurian_letters;
			change_script(mercurian_letters);
			}
