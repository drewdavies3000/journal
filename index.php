<?php
	session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>french_app Add Verb to DB</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </head>
<body>
<div class="container bg-light mb-4 mt-4 p-4">
	<h1>Simple Journal</h1>
	
	<form class="bg-secondary p-3 text-light" action="addentry.php" method="post">
	  <div class="form-group">
		<label for="name">Name:</label>
			<input type="text" class="form-control" id="name" name="name">
	    </div>
	    <div class="form-group">
			<label for="">Journal Entry:</label>
			<textarea class="form-control" rows="5" id="journal_entry" name="journal_entry"></textarea>
		</div> 
	  <button type="submit" class="btn btn-default btn-success" name="submit">Submit</button>
	</form> 
	<br>
	<br>
	
	<form class="bg-secondary p-3 text-light" action="getentry.php" method="get">
	  <div class="form-group">
		<label for="name">Select a date to retrieve:</label>
			<input type="date" class="form-control" id="date" name="date">
	    </div>
	  <button type="submit" class="btn btn-default btn-success" name="submit">Submit</button>
	</form>
		
	<?php 
		
		if(isset($_SESSION['return'])){
			echo '<div class="bg-secondary p-3">';
			foreach($_SESSION['return'] as $obj) {
				echo '<div class="bg-info p-3">';
				echo "<h3><b>Date of Entry: " . $obj['date'] . "</b></h3>";
				echo "<br>";
				echo "<h4> Author Name: </h4>";
				echo '<div class="bg-light p-3">' . $obj['author_name'] . "</div>";
				echo "<br>";
				echo "<h4> Journal Entry: </h4>";
				echo '<div class="bg-light p-3">' . $obj['journal_entry'] . "</div>";
				echo "</div>";
				echo "<br>";
				echo "<br>";
			}
			echo "</div>";
			unset($_SESSION['return']);
		}
		
		
		
	?>
</div>
</body>
</html>