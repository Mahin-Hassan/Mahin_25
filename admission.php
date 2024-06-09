<?php
    include "header.php";
	include "dbconnect.php";
	
	$sql="SELECT * FROM test";
	$result=$conn->query($sql);

?>


    <div class="amir">
		<h3>Syllabus :</h3>
		<p><ul><li>MCQ and Written Test on <b>English,General Mathematics, General Knowlegde.</b></li></ul></p>
		<p><ul><li>Wieght:80%, Viva-voce:20%</li></ul></p>		
		<h3>Exam Date :</h3>
		<p><ul><li>Will be notified later</li></ul></p>
		<h3>Exam Venue :</h3>
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

