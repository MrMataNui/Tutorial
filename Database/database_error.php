<!DOCTYPE html>
<html>

<!-- the head section -->
	<head>
		<title>Grey Lantern Corps</title>
		<!-- Sets the width to adjust to available screen size -->
		<meta name='viewport' content='width=device-width, initial-scale=1'>
		<!-- Bootstrap Code -->
		<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'> 
		<link rel='stylesheet' type='text/css' href='../Grey_Lantern_About.css' />
		<link rel='stylesheet' type='text/css' href='../main.css' />
		<style>
			body {
				margin-top: 0;
				font-family: Arial, Helvetica, serif;
				margin: 0 auto;
				padding: .5em 2em;
				background-color: #bbb;
				/*font-family: serif;*/
				margin: auto;
				border: double black;
			}
			.small, .thanks {
				color: black;
				font-size: 130%;
			}
			.thanks {color: purple;}
		</style>
	</head>

<!-- the body section -->
	<body>
		<?php include('../header.php'); ?>
		<?php require_once('../navbar/folder-top-navbar.php'); ?>
		<?php //require_once('../side-navbar.php'); ?>

		<h1>Database Error</h1>
		<h1 class ='small'>There was an error connecting to the database.</h1>
		<h1 class ='small'>Please come back later as this problem gets fixed.</h1>
		<p>&nbsp;</p>
		<h1 class ='thanks'>Thank you for your patience!</h1>
		<script>
			var error = '<?php echo json_encode($error_message); ?>';
			console.log( 'Error Message: ' + error + '.' );
		</script>
		<p>&nbsp;</p>

	<!--    <footer>
			<p>&copy; <?php echo date("Y"); ?> My Guitar Shop, Inc.</p>
		</footer> -->
	</body>
</html>