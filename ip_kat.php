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
			$result = mysql_query("SELECT υπουργός.Όνομα,χαρτοφυλάκιο.Όνομα_Υπουργού,χαρτοφυλάκιο.Κατηγορία,επάγγελμα_ατόμων.Όνομα_Ατόμου,επάγγελμα_ατόμων.Επάγγελμα,επάγγελμα.Όνομα,επάγγελμα.Θεματική_κατηγορία
									FROM υπουργός 
										INNER JOIN χαρτοφυλάκιο 
											ON υπουργός.Όνομα=χαρτοφυλάκιο.Όνομα_Υπουργού
										LEFT JOIN επάγγελμα_ατόμων
											ON χαρτοφυλάκιο.Όνομα_Υπουργού=επάγγελμα_ατόμων.Όνομα_Ατόμου
										JOIN επάγγελμα
			 							WHERE επάγγελμα_ατόμων.Επάγγελμα=επάγγελμα.Όνομα and επάγγελμα.Θεματική_κατηγορία=χαρτοφυλάκιο.Κατηγορία") or die('Invalid query: ' . mysql_error());
			echo "<table border='1'>
				<tr><th>Όνομα Υπουργού</th><th>Επάγγελμα</th><th>Χαρτοφυλάκιο</th></tr>";
				while($row = mysql_fetch_array($result)){
					echo "<tr><td>".$row['Όνομα_Υπουργού']."</td>";
					echo "<td>".$row['Επάγγελμα']."</td>";
					echo "<td>".$row['Κατηγορία']."</td></tr>";
				}
			echo "</table>";	
		?>
	</body>
</html>