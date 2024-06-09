<?php
	include "header.php";
	include "dbconnect.php";

	$sql = "SELECT * FROM courses";
	$result = $conn->query($sql);
?>

<h1 align="center">Course List</h1>
<table>
	<tr>
		<th>SL</th>
		<th> Course Title</th>		
		<th>Course Level</th>
		<th>Pre-requisite</th>
		<th>Duration (year)</th>
		<th>Cost(BDT)</th>
	</tr>
	<?php
		while($row=$result->fetch_assoc()){
			
			echo "<tr>"; 
			echo "<td>".$row["id"] ."</td>";	
			echo "<td>".$row["title"] ."</td>";				
			echo "<td>". $row["level"]."</td>";	
			echo "<td>". $row["prerequisite"]."</td>";	
			echo "<td>". $row["duration"]."</td>";	
			echo "<td>". $row["cost"]."</td>";
			echo "</tr>"; 
		}
	
	?>
			
<table>
		
<?php
	include "footer.php";
?>		


