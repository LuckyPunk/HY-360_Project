<html>
	<head></head>
	<body>
		<?php
			$db_host = "localhost";
			$db_username = "root";
			$db_pass = "";
			$db_base = "hy360";
			//comment
			//Connect to SQL
			@mysql_connect($db_host, $db_username, $db_pass) or die ("Could not connect to MySQL...");
		    //Connect to specific database
			@mysql_select_db($db_base) or die ("No database");
			@mysql_query('SET NAMES utf8');
			$search1= $_POST["kivernisi"];	
			if( $search1 != NULL ){
				$result = mysql_query("SELECT υπουργός.Όνομα,χαρτοφυλάκιο.Όνομα_Υπουργού,χαρτοφυλάκιο.Κατηγορία 
										FROM υπουργός INNER JOIN χαρτοφυλάκιο ON υπουργός.Όνομα=χαρτοφυλάκιο.Όνομα_Υπουργού
				 							WHERE Όνομα_κυβέρνησης='".$search1."'") or die('Invalid query: ' . mysql_error());
				echo "<table border='1'>
					<tr><th>Όνομα Υπουργού</th><th>Επάγγελμα</th><th>Χαρτοφυλάκιο</th></tr>";
					while($row = mysql_fetch_array($result)){
						echo "<tr><td>".$row['Όνομα_Υπουργού']."</td>";
						echo "<td>ΝΑ</td>";
						echo "<td>".$row['Κατηγορία']."</td></tr>";
					}
				echo "</table>";
			}
			else{
				echo "DOESNOT EXIST";
			}

				
		?>
	</body>
</html>