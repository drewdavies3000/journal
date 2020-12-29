<?php
session_start();
$hostname = "localhost";
$username = "dbuser";
$password = "Bonjour1999$";
$database =  "journal";


	if(isset($_GET['submit'])){
		$dbConnection = new mysqli($hostname, $username, $password, $database);
		$sql = 'SELECT * FROM journal_entries WHERE date LIKE ? ORDER BY date asc';
		$statement = $dbConnection->prepare($sql);
		$querystring = "%" . $_GET['date'] . "%";
		$statement->bind_param("s", $querystring);     
		$statement->execute();
		$result = $statement->get_result();
		$_SESSION['return'] = $result->fetch_all($resulttype = MYSQLI_ASSOC);
		$statement->close();
		$dbConnection->close();
		header("Location: index.php");
	}
?>