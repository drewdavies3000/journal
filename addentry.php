<?php
$hostname = "localhost";
$username = "dbuser";
$password = "Bonjour1999$";
$database =  "journal";

	if(isset($_POST['submit'])){
		$dbConnection = new mysqli($hostname, $username, $password, $database);
		$sql = "insert into journal_entries (journal_entry,author_name)values (?,?)";
		$statement = $dbConnection->prepare($sql);
		$statement->bind_param("ss",$_POST['journal_entry'],$_POST['name']);
		$statement->execute();
		$statement->close();
		$dbConnection->close();
		header("Location: index.php");
	}	
?>