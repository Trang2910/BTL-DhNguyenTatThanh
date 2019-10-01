<?php include'connect.php' ?>
<?php 
	if(isset($_GET['view'])){
		if(isset($_GET['20HT']) && isset($_GET['1'])){
			echo "oke";
		}
		else{
			echo "<div class='alert alert-info' role='alert' style='text-align: center;padding:2px;'>Vui lòng chọn lớp và đợt học!";
			echo "<button class='close' data-dismiss='alert' aria-label='Close'>";
			echo "<span aria-hidden='true'>&times;</span></button></div>";
		}
	}
	
 ?>