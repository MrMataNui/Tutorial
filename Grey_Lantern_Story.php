<!doctype html>
<html lang='en'>
	<head>
		<meta charset='utf-8'>
		<title>Grey Lantern Corps - History</title>
		<link href='https://fonts.googleapis.com/css?family=Audiowide|Black+Ops+One|Fugaz+One|Amita' rel='stylesheet'>
		<link rel='shortcut icon' href='Images/Grey_lantern_general_emblem.jpg'>
		<!--Sets the width to adjust to available screen size-->
		<meta name='viewport' content='width=device-width, initial-scale=1'>
		<!--Bootstrap Code-->
		<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
		<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
		<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>
		<script src='http://code.jquery.com/jquery-1.8.3.min.js'></script>
		<script src='jquery/Article_Switch.js'></script>
		<script src='jquery/jquery-3.2.0.min.js'></script>
		<link rel='stylesheet' href='Grey_Lantern_About.css'>
		<style>
			.BSSYM7 {color: purple;}
		</style>
		<script>
			$(function(){

				$('h2').each(function() {});
				var count;
				$('section').each(function() {
					if ( $(this).children().length <= 1 ) {
						$(this).prevUntil('section').hide();
						$(this).hide();
					}
					// $(this).is(':hidden');
					if ($(this).is(':visible') && $(this).next().is(':hidden')) {
						count = true;
					}
					if (count == true){
						count = false;
						var end = $('<h3></h3>').text('More to come later!'); 
						$(this).parent().parent().append(end);
					}
					
					var block_el = $(this).find('blockquote span');
					var p_el = $(this).find('p span');
					var span_el = $(this).find('span');
					
					if ( block_el.hasClass('xeheixw') ) {
						var translate = translate_block( 'xeheixw', block_el );
						// text_enter( translate, $(this) );
					} else if ( p_el.hasClass('xeheixw') ) {
						var translate = translate_block( 'xeheixw', p_el );
						// text_enter( translate, $(this) );
					} else if ( span_el.hasClass() ) {
						var span_class = span_el.attr('class');
						var translate = span_class.charAt(0).toUpperCase() + span_class.slice(1);
						// text_enter( translate, span_el );
					}

				}); // end each
				$('#Schools').each(function() {
					for (var i = 2; i <= 5; i++)
						$(this).find('tr:nth-of-type(' + i + ') td:nth-of-type(2)').addClass('xeheixw');
					for (var i = 6; i <= 7; i++)
						$(this).find('tr:nth-of-type(' + i + ') td:nth-of-type(2)').addClass('jovian');
					$(this).find('tr:nth-of-type(8) td:nth-of-type(2)').addClass('plutonian');
					
					$(this).find('tr:nth-of-type(1)').css({'height': '20px'})
					$(this).find('tr:nth-of-type(1) th:nth-of-type(2)').css({'font-style': 'italic'})
					for (var i = 2; i <= 8; i++)
						$(this).find('tr:nth-of-type(' + i + ') td:nth-of-type(3)').css({'font-style': 'italic'})
				}); // end each
				function translate_block (span_class, loc) {
					return (loc.parent().is('blockquote') ? 'Martian' : 'Mercurian');
				}
				function text_enter (translate, loc) {
					var span = $('<blockquote></blockquote>').text('(Translated from ' + translate + '.)'); 
					span.wrapInner('<em></em>').addClass('translate');
					loc.append(span);
				}

				$('.javascript').hide();
				$('.xeheixw').each(function() {
					if ( $(this).next().is('sup') )
						$(this).next().css({'color' : '#909'});
				});
				$('p:contains(///)').hide();
				$('table').hide();

			});
		</script>
	</head>

	<body>
		<?php require('header.php'); ?>
		<?php require('navbar/top-navbar.php'); ?>
		<?php require('analyticstracking.php') ?>
		<?php //include_once('analyticstracking.php') ?>
		<div class='btn-group-vertical sidenav_left'>
			<a href='#top' class='javascript'><button type='button' class='btn btn-default btn-md'>Back to Top</button></a>
			<a href='#Prologue'><button type='button' class='btn btn-default btn-md'>Prologue</button></a>
			<a href='#Part 1'><button type='button' class='btn btn-default btn-md'>Part 1</button></a>
			<a href='#Part 2'><button type='button' class='btn btn-default btn-md dropdown-toggle'>Part 2</button></a>
			<a href='#Part 3'><button type='button' class='btn btn-default btn-md'>Part 3</button></a>
			<!-- <a href='#Part 4'><button type='button' class='btn btn-default btn-md'>Part 4</button></a>
			<!-- <a href='#Schools'><button type='button' class='btn btn-default btn-md'>Schools</button></a> -->
		</div>

		
		<main>
			<img src='Images/The%20Oort%20Conundrum%20-%20Sol.jpg' alt='Grey Lantern Emblem'/>
			<h1>History</h1>
			<script src='jquery/Chitika.js'></script>
			<!-- <script type='text/javascript' src='//cdn.chitika.net/getads.js' async></script> -->

			<?php include('Prologue.php'); ?>
			<h2 id='Part 1'>Part 1</h2>
			<article>
				<h3 id='Chapter 1'>Chapter 1</h3>
				<h4>The Tournament</h4>
				<!--<p>Pluto and Ganymede Introduction</p>-->
				<section>
					<p>The year is 3240, and the planetary colonies are thriving, and the Plutonians are celebrating due to their victory over the Jovians in that year's Olympics. The star was a Charonite named Pulof. Being from Charon, Pulof was a graveler, able to control stone. He would need some protection whenever he had need to go to another world, and made a stone exoskeleton around himself that would allow him to walk on larger worlds. </p>
					<p>To his surprise, a Jovian named Boroz&euml; came to congratulate him on his performance.</p>
					<p>When Boroz&euml; came up to him, Pulof asked why he was helping. Boroz&euml; responded that he was able to help at least with his interfacing problem due to having similar problems in the past and that he was displeased that his team was lied to about the enhancements. They tried to go to the Jovian team coach about it, but they didn't receive a reply. Since Boroz&euml; and Pulof were practically out of luck, mostly due to tournament regulations, they saw that the only course was to submitting a letter to the tournament committee. ///. </p>
					<p>After the failed attempt, the two went to go to the Solar Academy in order to try to get whoever would listen to their objections. ///. </p>
				</section>
				<h3 id='Chapter 2'>Chapter 2</h3>
				<h4>The Meeting</h4>
				<!--<p>Mars and Triton Introduction</p>-->
				<section>
					<p>Swnitu worked in the Martian tourist facility which filters tourists throughout Olympus Mons and Valles Marineris, the Solar System's largest mountain and valley respectively. He is a stone mage, able to move objects up to 50 tonnes. His job there was to move the transport vehicles to and from the attractions. Working there since he was 4 Solar years (Soyas), he was starting to feel exhausted and felt sluggish from doing the same thing for nearly 2 Soyas and was craving excitement. On slow days he would often think about the ancient stories he used to hear when he was younger. He was told about the time before the colonies when there was only one race of humans. He was always fond of those stories. At least they felt the excitement of building the adaptable colonies and setting them off. Swnitu, however, couldn't have known that an adventure would soon come his way.</p>
					<p>One day, a Tritonite, named Osa, was on board and felt wonderful to finally be visiting the inner system. They felt exasperated as he witnessed the opening banner:</p>
					<blockquote><span class='xeheixw'>&ldquo;Tyaz, zatihi Wnisi Cahuns.Ze lundoy, yun enehody.Qal, wligu enehidi.&rdquo;</span><sup> [1]</sup></blockquote>
					<p>He saw Swnitu using geokinesis and asks him a few questions about being a stone mage. Swnitu explained how his abilities work and that he had to study the philosophy and ethics, had a technological implant, and then needed to be trained to learn how to use the ability. The total process takes 3 Soyas to accomplish. Swnitu was a duster, able to manipulate sand, and was <!-- --> .</p>
					<blockquote class='translate'><sup>[1]</sup><em>Hello, and welcome to the Enisi Stadium. If you need to the bathroom, then turn left. Otherwise, go right.</em></blockquote>
				</section>
				<h3 id='Chapter 3'>Chapter 3</h3>
				<h4>The Scholars</h4>
				<!--<p>Earth and Titan Introduction</p>-->
				<section>
					<p>Ever since the adaptable colonies were first deployed, most Earthers rejected the notion that the human body should be tampered with. Jalten didn't agree because he was set on becoming an aeronaut, which requires them to have bionic implants. Against his parent's wishes, he enrolled in the Aeronaut Academy, studied hard, and is getting ready to graduate within the next 3 years.</p>
					<p>Aeronauts, people with the ability to control the wind, need implants in order to master the art, as without them, they would be unable to see air currents with any clarity. The implants are most commonly placed in either their fingertips, knees, or earlobes underneath the skin, depending on which profession the aeronaut plans on pursuing. The implants in the fingertips are required for turbulence, the implants in the knees are required for external aerodynamics, and the implants in the earlobes are required for internal aerodynamics.</p>
					<p>Jalten had always had a fondness for turbulence, if only to use it to help him cut down on travel time. ///. <!--  --> </p>
					<p>Jalten and one of his classmates, Pihoe-Xo, were going to a graduation party, but when they got into the building, they found out that thy weren't allowed in due to them not being final-years. They decided to contact Boroz&euml; since he used to be one of the advisors at the Academy and was a major player in keeping them motivated for their first few Soyas. Boroz&euml; wanted to bring Pulof along so that they could both congratulate them <!-- and so that they could decide on how the problem of Pulof's broken bones could be solved, so they all met up at Pihoe-Xo's place. --> </p>
					<p><em><strong>Boroz&euml;</strong></em>: 'Pihoe-Xo! Jalten! Glad to see you guys again! Pihoe-Xo, How was your trip to the Kuiper belt?'</p>
					<p><em><strong>Pihoe-Xo</strong></em>: 'I had a fine time there. Eris was just ok, but I like Pluto this time of year. You know, I haven't been that far out-system since Mercury was colonized 8 Soyas ago. And this is...?'</p>
					<p><em><strong>Boroz&euml;</strong></em>: 'This is is the guy I told you about, Pulof.'</p>
					<p><em><strong>Pihoe-Xo</strong></em>: 'Hey, Pulof! You're from Pluto, right?'</p>
					<p><em><strong>Boroz&euml;</strong></em>: 'He ///'</p>
					<p><em><strong>Pulof</strong></em>: 'It's Charon. Why is it that everyone forgets that Pluto also has a moon system?<!--, but I understand the confusion, they're basically the same place. Well, the main difference is that Pluto has less ice.-->'</p>
					<p><em><strong>Pihoe-Xo</strong></em>: 'That's fine, people keep asking me if I actually live on the surface of the planet. I keep telling them no, but they keep on asking. <!--Anyway, -->'</p>
					<p><em><strong>Boroz&euml;</strong></em>: 'The problem that has surfaced is that some of the Jovians were acting unfairly to the Plutonians during the last Solar Olympics. We tried telling the Jovian coaches, but they wouldn't respond to any form of contact, making it seems that thy might have been involved. Now, we need your help to...'///</p>
					<p>Boroz&euml; then noticed a few items in the room started to glow a musky yellow colour. First, Jalten's timepiece, then Pulof's cast, Pihoe-Xo's cane, and Boroz&euml;'s coat. They were all startled by this, mainly due to the seeming randomness of the items involved. The items themselves then start changing to a light greyish colour. Then, they started to rise into the air, and Boroz&euml; had rushed over to Pulof in order to prevent his cast from breaking. The group rose further into the air, went through the ceiling, and traveling towards the Asteroid Belt, finding other people who seem to have had a similar experience.</p>
				</section>
			</article>
			
			<h2 id='Part 2'>Part 2</h2>
			<article>
				<h3 id='Chapter 4'>Chapter 4</h3>
				<h4>The Players</h4>
					<section>
						<p>Once the group had gotten to Ceres, they started communicated with the others there. The met with Swnitu from Mars, Osa from Triton, Vravag from Mercury, and Qonok from Venus. They shared how each of them got to their current position.</p>
						<p>Vravag and Qonok were in the middle of the Ven-Mercurian Pyroner Championship when they were lifted off-world. They were furious, as Mercurians and Venusians are highly competitive, and abandoning a competition is deemed insulting. They were blaming each other for getting into this mess and ignoring the others there. Being pyroners meant that they had the ability to harness temperature.</p>
						<p>Mercurians and Venusians tend to have more pride due to them being able to live on more hospitible worlds. because of this, as mages started to be introduced, those two worlds decided to host fire mages, or pyroners for short, due to the control of high temperatures being one of the most prevalent issues. The average pyroner can create flames up to 2,000 Kelvin, while experts can handle 15,000 Kelvin. <!-- To make sure that pyroners don't accidently burn themselves, --></p>
						<p>Swnitu and Osa were on the way back from the summit of Olympus Mons when they started to be pulled into the sky, but Swnitu was able to keep both of them in the transit bus while going to the bottom of the mountain. They then decided to figure out where they were being pulled to.</p>
						<p>While Boroz&euml; and Swnitu discussed how they got into this situation, Osa saw Jalten's aeronautics and wanted to learn how it worked.</p>
						<p><em><strong>Jalten</strong></em>: 'I'm not quite finished with my training yet, but basically I had to do a lot of studying about air and how to control air for a while, then got some sort of  enhancement that helped me see air currents, and then learned how to actually move air.'</p>
						<p><em><strong>Pihoe-Xo</strong></em>: 'Yeah, we're just 3 Ea-years away from graduation.'</p>
						<p><em><strong>Osa</strong></em>: 'How similar is it to geokinesis?'</p>
						<p><em><strong>Jalten</strong></em>: 'I presume they're pretty similar, but I don't know anyone who is a stone mage.'</p>
						<p>Everyone's conversation was halted when another person suddenly arrived in the center of the room. When he appeared, everyone felt a large and strange shockwave going outward that everyone felt, but no one could notice any effects from it.</p>
						<p><em><strong>???</strong></em>: 'Welcome, everyone, to Ceres. You have been called here because all of you are needed in order to...'</p>
						<p><em><strong>Vravag</strong></em>: <span class='xeheixw'>&ldquo;Zak, swnenondoo et swneid ijedoo derin?&rdquo;</span><sup> [1]</sup></p>
						<p><em><strong>???</strong></em>: 'I came here using an ability none of you are currently aware of.'</p>
						<p><em><strong>Boroz&euml;</strong></em>: 'Either way, why did you bring all of us here? And why did you also bring along a Mercurian and a Venusian in the middle of their competition?'</p>
						<p><em><strong>???</strong></em>: 'I have brought you here because the fate of the Solar System is at stake.'</p>
						<blockquote class='translate'><sup>[1]</sup><em>Wait, who are you and how did you get here?</em></blockquote>
						<!-- <p>Zhak, sunenonshoo eth suneish ijesho sherin</p> -->
					</section>
				<h3 id='Chapter 5'>Chapter 5</h3>
				<h4>The Visitor</h4>
					<section>
						<p> The unknown visitor shows everyone a map of the Solar System using his unknown brand of magic. He had first swept up every spec of dust in the room and used them to form the terrestrial worlds. He then brought in different gasses from chambers around the room and used them to form the gaseous worlds. Following this, he created a fireball to represent Sol. This suprised everyone, as mastering multiple forms of magic wasn't thought to be possible.</p>
						<p><em><strong>???</strong></em>: 'This is the Solar System. At a glance, it may not seem like anything is wrong. However, there are multiple unknown crafts coming from outside the Solar System, heading straight for Sol and each of the worlds. They're currently 2 light years away, and ...'</p>
						<p><em><strong>Boroz&euml;</strong></em>: 'Wait, wait. So you're saying that there are unknown spacecraft that are almost here, no one noticed, and that there's one of them for each world, and you want us to just believe you?'</p>
						<p><em><strong>???</strong></em>: 'Yes, Boroz&euml;, and I hope that it is not as grave as I imagine.'</p>
						<p><em><strong>Boroz&euml;</strong></em>: 'How did you know my name?'</p>
						<p><em><strong>???</strong></em>: 'I know all of you, and I know that you will prevail in this venture. I shall leave you with my assistant.'</p>
						<p>The visitor vanishes with the same effect as he entered, except that the shockwaves were moving towards the place where he was just standing.</p>
					</section>
				<h3 id='Chapter 6'>Chapter 6</h3>
				<h4>The Decision</h4>
					<section>
						<p>As everyone started to calm down, they noticed that there was an extra person in the room. Vravag and Qonok stopped arguing for a moment while the assistant explains himself.</p>
						<p><em><strong>Kasil</strong></em>: 'Hello, everyone. My name is Kasil, and I am truly sorry for the vagueness of the Tenul a moment ago. I will explain everything you need to know. Firstly, ...'</p>
						<p><em><strong>Boroz&euml;</strong></em>: 'So that guy’s name is Tenul?'</p>
						<p><em><strong>Kasil</strong></em>: 'Yes, he is an astrokinetic, able to use other forms of magic and able to bend space itself. I know you’ll ask next why he can’t fix the problem himself, and I can’t answer that because he has not given me that information.'</p>
						<p><em><strong>Vravag</strong></em>: <span class='xeheixw'>&ldquo;Kubure? &ldquo;Zuneve xeiyo, qa bini zunul fonoto!&rdquo;</span><sup> [1]</sup></p>
						<p><em><strong>Qonok</strong></em>: <span class='xeheixw'>&ldquo;Zam, de bini!&rdquo;</span><sup> [2]</sup></p>
						<p><em><strong>Kasil</strong></em>: 'I understand your concern, but I have been instructed to show you how to work as a team.'</p>
						<p><em><strong>Swnitu</strong></em>: 'Boroz&euml;, should we trust this guy?'</p>
						<p><em><strong>Boroz&euml;</strong></em>: 'Well, they did figure out a way to bring us all here, somehow.'</p>
						<p><em><strong>Swnitu</strong></em>: 'Ok, I guess.'</p>
						<p><em><strong>Boroz&euml;</strong></em>: 'It's settled, then. We agree to be trained.'</p>
						<p><em><strong>Kasil</strong></em>: 'Ok. Your training will begin at sunrise tomorrow.'</p>
						<p><em><strong>Vravag</strong></em>: <span class='xeheixw'>&ldquo;Din ko-tamev kogud.&rdquo;</span><sup> [3]</sup></p>
						<p><em><strong>Qonok</strong></em>: <span class='xeheixw'>&ldquo;Bin den zo-kutu.&rdquo;</span><sup> [4]</sup></p>
						
						<blockquote class='translate'><sup>[1]</sup><em>What? Explain yourself, or I’ll burn you where you stand!</em></blockquote>
						<blockquote class='translate'><sup>[2]</sup><em>Yes, and so will I!</em></blockquote>
						<blockquote class='translate'><sup>[3]</sup><em>This had better be worth it.</em></blockquote>
						<blockquote class='translate'><sup>[4]</sup><em>I don't trust this guy.</em></blockquote>
						<!--<p><sup>[1]</sup>'Kubure? Zhuneve cheiyo, qa bini zhunul fonoto!'</p>
						<p><sup>[2]</sup>'Zham, she bini!'</p>
						<p><sup>[3]</sup>'Shin ko-tameve kongush.'</p>
						<p><sup>[4]</sup>'Bin shen zho-kutu.'</p>-->
					</section>
			</article>
			
			<h2 id='Part 3'>Part 3</h2>
			<article>
				<h3 id='Chapter 7'>Chapter 7</h3>
				<h4>The Training</h4>
					<section>
						<p>Kasil took everyone on a tour of the premises and showed them the rooms that they would be staying in. Each room replicated the environment of its inhabitant’s home planet. For Vravag and Qonok, the rooms had to be heated to the high temperatures of their planets. Jalten, Vravag and Pihoe-Xo’s rooms were positioned closest to the artificial atmosphere generators, and Jalten and Boroz&euml;’s rooms were nearest to the artificial gravity generators, due to them being from the largest inhabited bodies.<sup class='explain'>[1]</sup> Jalten was at first stunned, because he didn't think that an outpost on such a small dwarf planet would be able to replicate Earth-like gravity, but then again, in school he wasn’t paying attention to anything other than aeronautics. After they got settled in, Swnitu went to ask Kasil a few questions about the upcoming events.</p>
						<p><em><strong>Swnitu</strong></em>: 'Do you know who the Tenul actually is, and why he doesn't just explain to us why he's bringing us all together, or at least who he is?'</p>
						<p><em><strong>Kasil</strong></em>: 'The Tenul is an old friend of mine, and I could say that he was one of the best mages of his time, but he has instructed me not to inform you of much until the current situation has been dealt with. However, I am at the liberty of saying that we knew each other for many soyas and that for as long as we’ve known each other, he had been an astromage, able to influence spacetime itself.'</p>
						<p><em><strong>Swnitu</strong></em>: 'Astromage? Those tests were terminated nearly 20 soyas ago. Why would he think that astromages would actually exist?'</p>
						<p><em><strong>Kasil</strong></em>: 'To this day he refuses to tell me. Whenever I ask him about him about it, he keeps changing the topic. In the meantime, you need to get rested so that you can start your training.'</p>
						<p><em><strong>Swnitu</strong></em>: 'Fine, then. I’ll go.'</p>
						<p><em><strong>Kasil</strong></em>: '///'</p>
						<p><em><strong>Swnitu</strong></em>: '///'</p>
						<p>The next day, Kasil led the group into the training grounds so that they could hone their skills to combat the upcoming threat and to make sure that everyone knew the full extent of the situation.</p>
						<p><em><strong>Kasil</strong></em>: 'This will be your training grounds. The Tenul wanted to make sure that all of you are aware of the trials that lay before you.'</p>
						<p> There are different practice areas that were designed to test each of their abilities. For Vravag and Qonok, there are flame-resistant /// so that they would be able to produce fires up to 5,000 Kelvin. For Jalten, Boroz&euml;, and Pihoe-Xo, there are several airbourne drones so that they would be able to ///. For Swnitu and Pulof, there are different /// so that they would be able to ///. Since Osa is not a mage, there are ///.</p>
						<p> ///.</p>
						<p> ///.</p>
						<blockquote class='explain'><sup>[1]</sup><em>Venus isn't considered here due to its inhabitants living in cloud cities high above the surface.</em></blockquote>
						<!--<blockquote><sup>[2]</sup><em></em></blockquote>-->
					</section>
				<h3 id='Chapter 8'>Chapter 8</h3>
				<h4>The Trial</h4>
					<section>
						<p></p>
					</section>
				<h3 id='Chapter 9'>Chapter 9</h3>
				<h4>The Confrontation</h4>
					<section>
						<p></p>
					</section>
			</article>
			
			<h2 id='Part 4'>Part 4</h2>
			<article>
				<h3 id='Chapter 10'>Chapter 10</h3>
				<h4></h4>
					<section>
						<p></p>
					</section>
				<h3 id='Chapter 11'>Chapter 11</h3>
				<h4></h4>
					<section>
						<p></p>
					</section>
				<h3 id='Chapter 12'>Chapter 12</h3>
				<h4></h4>
					<section>
						<p></p>
					</section>
			</article>
			<table id='Schools'>
				<tr>
					<th colspan='2'>Schools</th>
					<th>(Pronunciation)</th>
				</tr>
				<tr>
					<td>Mercurian pyroner school</td>
					<td>Yokosox</td>
					<td>(Yokosoch)</td>
				</tr>
				<tr>
					<td>Venusian pyroner school</td>
					<td>Nocorox</td>
					<td>(Nocoroch)</td>
				</tr>
				<tr>
					<td>Earther aeronaut school</td>
					<td>Glulset</td>
					<td>(Glulseth)</td>
				</tr>
				<tr>
					<td>Martian graveler school</td>
					<td>Ozemxetin</td>
					<td>(Ozhemchethin)</td>
				</tr>
				<tr>
					<td>Jovian aeronaut school</td>
					<td>Beknezetx</td>
					<td>(Beknezetch)</td>
				</tr>
				<tr>
					<td>Saturnal aeronaut school</td>
					<td>Ankuzetx</td>
					<td>(Ankuzetch)</td>
				</tr>
				<tr>
					<td>Plutonian graveler school</td>
					<td>Konoubi</td>
					<td>(Konoubi)</td>
				</tr>
			</table>
			<p>&nbsp;</p>
		</main>
	</body>
</html>