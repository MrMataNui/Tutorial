<?php
require_once('JovianDatabase.php');

// require_once('Connections.php');

?>
<!DOCTYPE html>
<html>

	<!-- the head section -->
	<head>
		<title>Jovian Translator</title>
		<!--Sets the width to adjust to available screen size-->
		<meta name='viewport' content='width=device-width, initial-scale=1'>
		<!--Bootstrap Code-->
		<link rel='stylesheet' type='text/css' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'/>

		<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
		<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>
		<script src='http://code.jquery.com/jquery-1.8.3.min.js'></script>
		<script src='../TranslateTable.js'></script>
		<link rel='stylesheet' type='text/css' href='../../Grey_Lantern_About.css' />
		<link rel='stylesheet' type='text/css' href='../../main.css' />
		<style>
			/*main {border-left: none; width: 85%; float: none;}*/
			aside {color: #000;}
			aside td a {
				margin: 0;
				padding: 0;
				background-color: transparent;
				color: #000;
			}
			aside td a :hover {color: #c60;}
			header {
				margin: 0;
				border-bottom: 2px solid black;
			}
			header h1 {
				margin: 0;
				padding: .5em 0;
				color: black;
				font-family: serif;
				font-weight: none;
			}
			.width {
				width: 60%;
				color:black;
				border:1px solid black;
			}
			.number {
				width: 100%;
				overflow:auto;
				text-align: center;
				padding:10px;
				margin:auto;
				border-radius:20px;
				color:black;
				font-family: Sans-Serif;
				display: block;
			}
			#data input {
				float: left;
				width: 100%;
				margin-bottom: .5em;
			}
			tr:nth-child(odd) {background-color: #ccc}
			tr:nth-child(even) {background-color: #f2f2f2}
		</style>
		<?php include('../TranslateJavaScript.php'); ?>
	</head>

<!-- the body section -->
	<body>
		<?php include('../../header.php'); ?>
		<?php require_once('../../navbar/double-folder-top-navbar.php'); ?>
		<?php include_once('../../analyticstracking.php') ?>

		<aside>
			<p>&nbsp;</p>
			<h1>Pronunciation</h1>
			<table>
				<tr>
					<th>Jovian	</th>
					<th>Pronunciation		</th>
				</tr>
			<?php	foreach ($connectAlph as $AlphEntry) :  ?>
						<tr>
							<td><strong><?php echo $AlphEntry['Letter'];			?></strong></td>
							<td><a style='color:#36b;' href='<?php echo $AlphEntry['Link']; ?>'><?php echo $AlphEntry['Pronunciation'];		?></a></td>
						</tr>
			<?php	endforeach; ?>
			</table>
		</aside>
		<main>
			<h1>Jovian Translator</h1>
			<h2>Please enter in simple phrases.</h2>
			<h2>Does not work with contractions.</h2>
			
			<div class='number width'>
				<div id='data'>
					<label>Enter some text:</label>
					<input type='text' id='eng_text'><br>
				</div>
				<!--<div id='buttons'>
					<label>&nbsp;</label>-->
					<input type='submit' class='clear_button' id='calculate' value='Calculate' >
				<!--</div>-->
			</div>
			<div class = 'number width'>
				<p></p>
				<div class = 'div' id = 'div'>
					<h2><strong>Translation</strong></h2>
					<h3></h3>
					<p></p>
				</div>
				<p></p>
			</div>
				<p></p>
			
			<table id='nouns' class='evenWrap'>
				<tr>
					<th colspan='9' >Nouns</th>
				</tr>
				<tr>
					<th></th>
					<th colspan='2' >Nominative</th>
					<th colspan='2' >Accusative</th>
					<th colspan='2' >Genitive</th>
					<th colspan='2' >Dative</th>
				</tr>
				<tr>
					<td>First Person Singular</td>
					<td>I</td>
					<td><?php echo $LangDict['I'];?></td>
					<td>me</td>
					<td><?php echo $LangDict['ME'];?></td>
					<td>mine</td>
					<td><?php echo $LangDict['MINE'];?></td>
					<td>to me</td>
					<td><?php echo $LangDict['TO ME'];?></td>
				</tr>
				<tr>
					<td>Second Person Singular</td>
					<td>you</td>
					<td><?php echo $LangDict['YOU'];?></td>
					<td>you</td>
					<td><?php echo $LangDict['YOU'];?></td>
					<td>yours</td>
					<td><?php echo $LangDict['YOURS'];?></td>
					<td>to you</td>
					<td><?php echo $LangDict['TO YOU'];?></td>
				</tr>
				<tr>
					<td>Third Person Singular</td>
					<td>he/she/it</td>
					<td><?php echo $LangDict['HE'];?></td>
					<td>him/her/it</td>
					<td><?php echo $LangDict['HIM'];?></td>
					<td>his/hers/its</td>
					<td>HIS</td>
					<td>to him/her/it</td>
					<td><?php echo $LangDict['TO HIM'];?></td>
				</tr>
				<tr>
					<td>First Person Plural</td>
					<td>we</td>
					<td><?php echo $LangDict['WE'];?></td>
					<td>us</td>
					<td><?php echo $LangDict['US'];?></td>
					<td>ours</td>
					<td><?php echo $LangDict['OURS'];?></td>
					<td>to us</td>
					<td><?php echo $LangDict['TO US'];?></td>
				</tr>
				<tr>
					<td>Second Person Plural</td>
					<td>you</td>
					<td><?php echo $LangDict['YOU'];?></td>
					<td>you</td>
					<td><?php echo $LangDict['YOU'];?></td>
					<td>yours</td>
					<td><?php echo $LangDict['YOURS'];?></td>
					<td>to you</td>
					<td><?php echo $LangDict['TO YOU'];?></td>
				</tr>
				<tr>
					<td>Third Person Plural</td>
					<td>they</td>
					<td><?php echo $LangDict['THEY'];?></td>
					<td>them</td>
					<td><?php echo $LangDict['THEM'];?></td>
					<td>theirs</td>
					<td><?php echo $LangDict['THEIRS'];?></td>
					<td>to them</td>
					<td><?php echo $LangDict['TO THEM'];?></td>
				</tr>
			</table>
			<p>&nbsp;</p>
			<table id='verbs'>
				<tr>
					<th colspan='4'>Verbs</th>
				</tr>
				<tr>
					<th>&nbsp;</th>
					<th>Past</th>
					<th>Present</th>
					<th>Future</th>
					</tr>
				<tr>
					<td>First Person Singular</td>
					<td>-(a)n&euml;</td>
					<td>-(o)fi</td>
					<td>-o</td>
				</tr>
				<tr>
					<td>Second Person Singular</td>
					<td>-u</td>
					<td>-(&euml;)b</td>
					<td>-(o)ma</td>
				</tr>
				<tr>
					<td>Third Person Singular</td>
					<td>-(u)t</td>
					<td>-(e)t</td>
					<td>-(u)&scaron;</td>
				</tr>
				<tr>
					<td>First Person Plural</td>
					<td>-(i)s</td>
					<td>-a</td>
					<td>-(&euml;)v</td>
				</tr>
				<tr>
					<td>Second Person Plural</td>
					<td>-a</td>
					<td>-(&euml;)b</td>
					<td>-(u)d</td>
				</tr>
				<tr>
					<td>Third Person Plural</td>
					<td>-(&euml;)zu</td>
					<td>-(e)&scaron;o</td>
					<td>-a</td>
				</tr>
			</table>
			<p>&nbsp;</p>
			<table id='defArticle' class='article evenWrap'>
				<tr>
					<th colspan='5' rowspan='1'>Definite article</th>
				</tr>
				<tr>
					<th>&nbsp;</th>
					<th colspan='2' rowspan='1'>Singular</th>
					<th colspan='2' rowspan='1'>Plural</th>
				</tr>
				<tr>
					<td>Nominative</td>
					<td>the [man]</td>
					<td><strong>A</strong></td>
					<td>the [men]</td>
					<td>I</td>
				</tr>
				<tr>
					<td>Accusative</td>
					<td>the [man]</td>
					<td>E</td>
					<td>the [men]</td>
					<td>Ew</td>
				</tr>
				<tr>
					<td>Genitive</td>
					<td>the [man's]</td>
					<td>Oj</td>
					<td>the [men's]</td>
					<td>Ew</td>
				</tr>
				<tr>
					<td>Dative</td>
					<td>to the [man]</td>
					<td>Aj</td>
					<td>to the [men]</td>
					<td>O&scaron;</td>
				</tr>
				<tr>
					<td>Locative</td>
					<td>in/at/by the [man]</td>
					<td>Ej</td>
					<td>in/at/by the [men]</td>
					<td>Od</td>
				</tr>
			</table>
			<p>&nbsp;</p>
			<table id='indefArticle' class='article evenWrap'>
				<tr>
					<th colspan='5'>Indefinite article</th>
				</tr>
				<tr>
					<th>&nbsp;</th>
					<th colspan='2'>Singular</th>
					<th colspan='2'>Plural</th>
				</tr>
				<tr>
					<td>Nominative</td>
					<td>a [man]</td>
					<td>So</td>
					<td>some [men]</td>
					<td>So&zcaron;</td>
				</tr>
				<tr>
					<td>Accusative</td>
					<td>a [man]</td>
					<td>Sun</td>
					<td>some [men]</td>
					<td>Suo</td>
				</tr>
				<tr>
					<td>Genitive</td>
					<td>a [man's]</td>
					<td>Suk</td>
					<td>some [men's]</td>
					<td>En</td>
				</tr>
				<tr>
					<td>Dative</td>
					<td>to a [man]</td>
					<td>U&zcaron;</td>
					<td>to some [men]</td>
					<td>Us</td>
				</tr>
			</table>
			<p>&nbsp;</p>
			<table id='nounMorph' class='article'>
				<tr>
					<th colspan='5'>Noun morphology</th>
				</tr>
				<tr>
					<th>&nbsp;</th>
					<th colspan='2'>Singular</th>
					<th colspan='2'>Plural</th>
				</tr>
				<tr>
					<td rowspan='2'>Nominative</td>
					<td rowspan='2'>man</td>
					<td>--</td>
					<td rowspan='2'>men</td>
					<td>-(o)j</td>
				</tr>
				<tr>
					<td class='nMorph'>&Scaron;yev&euml;</td>
					<td class='nMorph'>&Scaron;yev&euml;j</td>
				</tr>
				<tr>
					<td rowspan='2'>Accusative</td>
					<td rowspan='2'>man</td>
					<td>-o</td>
					<td rowspan='2'>men</td>
					<td>-(e)v</td>
				</tr>
				<tr>
					<td class='nMorph'>&Scaron;yev&euml;o</td>
					<td class='nMorph'>&Scaron;yev&euml;v</td>
				</tr>
				<tr>
					<td rowspan='2'>Genitive</td>
					<td rowspan='2'>man's</td>
					<td>-e</td>
					<td rowspan='2'>men's</td>
					<td>-(i)y</td>
				</tr>
				<tr>
					<td class='nMorph'>&Scaron;yev&euml;e</td>
					<td class='nMorph'>&Scaron;yev&euml;y</td>
				</tr>
				<tr>
					<td rowspan='2'>Dative</td>
					<td rowspan='2'>to [the/a] man</td>
					<td>-o</td>
					<td rowspan='2'>to men</td>
					<td>-o</td>
				</tr>
				<tr>
					<td class='nMorph'>&Scaron;yev&euml;o</td>
					<td class='nMorph'>&Scaron;yev&euml;o</td>
				</tr>
				<tr>
					<td rowspan='2'>Locative</td>
					<td rowspan='2'>in/at/by [the/a] man</td>
					<td>-(e)y</td>
					<td rowspan='2'>in/at/by [the/some] men</td>
					<td>-(ai)y</td>
				</tr>
				<tr>
					<td class='nMorph'>&Scaron;yev&euml;y</td>
					<td class='nMorph'>&Scaron;yev&euml;y</td>
				</tr>
			</table>
			<p>&nbsp;</p>
			<table id='derivMorph'>
				<tr>
					<th colspan="2">Derivational morphology</th>
				</tr>
				<tr>
					<td>Noun &rarr; adjective: (-al)</td>
					<td>-e</td>
				</tr>
				<tr>
					<td>Adjective &rarr; noun: (-ness)</td>
					<td>-&euml;</td>
				</tr>
				<tr>
					<td>Noun &rarr; verb: (-fy)</td>
					<td>-(u)k</td>
				</tr>
				<tr>
					<td>Verb &rarr; noun: (-ance)</td>
					<td>-(&euml;)d</td>
				</tr>
				<tr>
					<td>Verb &rarr; adjective: (-able)</td>
					<td>-e</td>
				</tr>
				<tr>
					<td>Adjective &rarr; adverb: (-ly)</td>
					<td>-(&euml;)q</td>
				</tr>
				<tr>
					<td>One who Xs (e.g. paint &rarr; painter):</td>
					<td>-(i)b</td>
				</tr>
				<tr>
					<td>Place where (e.g. wine &rarr; winery):</td>
					<td>-(o)f</td>
				</tr>
				<tr>
					<td>Diminutive:</td>
					<td>-(o)de</td>
				</tr>
				<tr>
					<td>Augmentative:</td>
					<td>-&euml;</td>
				</tr>
			</table>
			<p>&nbsp;</p>
		</main>
		<footer>
			<p>&nbsp;</p>
			<!-- <p>&copy; <?php echo date('Y'); ?> Grey Lantern Corps, Inc.</p> -->
		</footer>
	</body>
</html>