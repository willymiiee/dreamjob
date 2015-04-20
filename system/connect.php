<?php
	$username = "root";
	$password = "";
	$hostname = "localhost"; 

	$conn = mysql_connect($hostname, $username, $password) 
		or die("Unable to connect to MySQL");
		
	$selected = mysql_select_db("hrd",$conn) 
		or die("Could not select database");
	
	// $result = mysql_query("SELECT * FROM question");
	// while ($row = mysql_fetch_array($result)) {
	   // echo "ID:".$row{'id'}." Name:".$row{'question'}."<br>";
	// }
?>