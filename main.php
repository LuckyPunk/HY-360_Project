<html>
	<title>HY-360 Project</title>
	<head>
		<link rel="stylesheet" type="text/css" href="mystyle.css">
	</head>

	
	<body>
		<div id="form" style="position:absolute;top:25%;left:35%;">
		<!--Connect to a database using php script-->
		<?php
	   		include("Connect/connect_to_database.php");
       		echo "Συνδεθήκατε επιτυχώς στη βάση δεδομένων: $db_name";
		?>
		<p style="text-align:center">
		     Αυτή είναι η επίλυση του project 2013-2014<br>
		     από την ομάδα 8<br><br>
		     Αγαθάγγελος Γιάννης<br>
		     Κλεφτογιώργος Κωνσταντίνος<br>
		     Μουτάφης Γιάννης<br><br>
			 Τι θέλετε να κάνετε;
		</p>
		<form action="auxiliary_main_option_handler.php" method="post" style="text-align:center">
	   	 	<input type="submit" value="Ενημέρωση" name="update"/>
	  	  	<input type="submit" value="Αναζήτηση" name="query" />
		</form>
		</div>
	</body>	
</html>






