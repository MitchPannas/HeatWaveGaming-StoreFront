<?php
	require "../database/connect.php";
		
	$searchVal = $_POST['search'];
		
	$query = mysql_query("SELECT * FROM products WHERE genre LIKE '%$searchVal%'");
	
	# Displaying what the query retrieved
	while ($row = mysql_fetch_assoc($query)) {
		echo "<div class='prodContainer'>"; # Starting the container
		echo "<p>" . $row["name"] . "</p>";
		echo "<p>$" . $row["price"] . "</p>";
		echo "<p>" . $row["description"] . "</p>";
		echo "<p>" . $row["rating"] . "</p>";
		echo "<form name='addButton' action='' method='POST'><input type='submit' name='addToC' value='Add to Cart'></input></form>";
		echo "</div>"; # Ending the container
	}
	#echo (mysql_num_rows($query) !== 0) ? mysql_result($query, 0, "name") : "Not found";
	
?>