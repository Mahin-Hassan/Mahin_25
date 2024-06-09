<?php
	include "header.php";
	include "dbconnect.php";
	
	$sql="SELECT * FROM facility";
	$result=$conn->query($sql);
	
?>
	<div class="announce">
		<h2> FOR WHOM?</h2>
		<p>Business and Non-Business Graduates from any discipline with at least a bachelor's or an equivalent degree.</p>
		<h2>WHY?</h2>
		<ul>
		<?php
			while($row=$result->fetch_assoc()){
				echo "<li>".$row["description"]."</li>";
			}
		?>
		</ul>
	</div>
		
<?php
	include "footer.php";
?>

