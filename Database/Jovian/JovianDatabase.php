<?php
	//Connect To Database
	
	$dsn = 'mysql:host=localhost;dbname=Jovian';
	$username = 'root';
	$password = '';
	
	try {

		$db = new PDO($dsn, $username, $password);

	} catch (PDOException $e) {
		$backtrack = array();
		foreach (debug_backtrace() as $x => $x_value) :
			$backtrack[] = $x_value;
		endforeach;
		$file = array();
		foreach ($backtrack as $x => $x_value) :
			$file[] = $x_value;
		endforeach;
		$error_message = $e->getMessage();
		if ( isset($myvar_not_replicated) ) {
		foreach ($file as $x) :
			switch ( false ){
				case !strpos($x['file'], 'planet_list.php') :
					include('../Planets/Planets.php');
					break;
				case !strpos($x['file'], 'all_character_list.php') :
					include('../Characters/Grey_Lantern_Characters.php');
					break;
				case !strpos($x['file'], 'Magic_Classes_Database.php') :
					include('../Magic_Classes/Magic_Classes.php');
					break;
				default:
					include('database_error.php');
			}
		endforeach;
		} else {
			include('database_error.php');
		}
		exit();
	}
	
	/******************************
	$hostname = 'localhost';
	$dbname = 'Grey_Lantern_Characters';
	
	$CharInfo = 'AllInfo';
	$P_StarInfo = 'planetStarList';
	$yourfield = 'planetID';
	******************************/

/*	$connection = mysqli_connect($hostname, $username, $password);
	if (!$connection) {
		$error_message = mysqli_connect_error();
		include('database_error.php');
		exit();
	} /*else {
		//mysqli_select_db($dbname, $connection);
	} */

	# Check If Record Exists
/*
	$query = 'SELECT * FROM $usertable';

	$result = mysql_query($query);

	if($result) {
		while($row = mysql_fetch_array($result)) {
			$name = $row['$yourfield'];
			echo 'Name: '.$name.'';
		}
	}
*/
?>
<?php
	// https://gist.github.com/b4oshany/0698d9f32589b77abdcb
/* 	namespace libs\mysql;
	class PDODbImporter{
		private static $keywords = array(
			'ALTER', 'CREATE', 'DELETE', 'DROP', 'INSERT',
			'REPLACE', 'SELECT', 'SET', 'TRUNCATE', 'UPDATE', 'USE',
			'DELIMITER', 'END'
		);
		// *
		// * Loads an SQL stream into the database one command at a time.
		// *
		// * @params $sqlfile The file containing the mysql-dump data.
		// * @params $connection Instance of a PDO Connection Object.
		// * @return boolean Returns true, if SQL was imported successfully.
		// * @throws Exception
		
		public static function importSQL($sqlfile, $connection) {
			$dsn = 'mysql:host=localhost;dbname=Grey_Lantern_Characters';
			$username = 'grey_user';
			$password = 'pa55word';
			# read file into array
			$filename = 'Characters.sql';
			$file = file($filename);
			# import file line by line
			# and filter (remove) those lines, beginning with an sql comment token
			$file = array_filter($file,
							create_function('$line',
									'return strpos(ltrim($line), "--") !== 0;'));
			# and filter (remove) those lines, beginning with an sql notes token
			$file = array_filter($file,
							create_function('$line',
									'return strpos(ltrim($line), "/*") !== 0;'));
			$sql = "";
			$del_num = false;
			foreach($file as $line){
				$query = trim($line);
				try {
					$delimiter = is_int(strpos($query, "DELIMITER"));
					if($delimiter || $del_num){
						if($delimiter && !$del_num ){
							$sql = "";
							$sql = $query."; ";
							echo "OK";
							echo "<br/>";
							echo "---";
							echo "<br/>";
							$del_num = true;
						} else if($delimiter && $del_num) {
							$sql .= $query." ";
							$del_num = false;
							echo $sql;
							echo "<br/>";
							echo "do---do";
							echo "<br/>";
							$connection->exec($sql);
							$sql = "";
						} else {
							$sql .= $query."; ";
						}
					} else {
						$delimiter = is_int(strpos($query, ";"));
						if($delimiter) {
							$connection->exec("$sql $query");
							echo "$sql $query";
							echo "<br/>";
							echo "---";
							echo "<br/>";
							$sql = "";
						} else {
							$sql .= " $query";
						}
					}
				} catch (\Exception $e) {
					echo $e->getMessage() . "<br /> <p>The sql is: $query</p>";
				}
			}
			$db = new PDO($dsn, $username, $password);
		}
	}
 */?>
<?php
/* 	// http://stackoverflow.com/questions/19751354/how-to-import-sql-file-in-mysql-database-using-php
	// Name of the file
	$filename = 'Characters.sql';
	// MySQL host
	$mysql_host = 'localhost';
	// MySQL username
	$mysql_username = 'grey_user';
	// MySQL password
	$mysql_password = 'pa55word';
	// Database name
	$mysql_database = 'Grey_Lantern_Characters';

	$query = file_get_contents($filename);

	// check connection
	if (mysqli_connect_errno()) {
		printf("Connect failed: %s\n", mysqli_connect_error());
		exit();
	}

	// Connect to MySQL server
	$abc = mysqli_connect($mysql_host, $mysql_username, $mysql_password);
//	mysqli_connect($mysql_host, $mysql_username, $mysql_password) or die('Error connecting to MySQL server: ' . mysqli_error());
	// Select database
	mysqli_select_db($abc, $mysql_database) or die('Error selecting MySQL database: ' . mysqli_error($abc));

	// Temporary variable, used to store current query
	$templine = '';
	// Read in entire file
	$lines = file($filename);
	// Loop through each line
	foreach ($lines as $line) {
		// Skip it if it's a comment
		if (substr($line, 0, 2) == '--' || $line == '')
			continue;

		// Add this line to the current segment
		$templine .= $line;
		// If it has a semicolon at the end, it's the end of the query
		if (substr(trim($line), -1, 1) == ';') {
			// Perform the query
			mysqli_query($templine) or print('Error performing query \'<strong>' . $templine . '\': ' . mysqli_error() . '<br /><br />');
			// Reset temp variable to empty
			$templine = '';
		}
	}
	 echo "Tables imported successfully";
 */?>