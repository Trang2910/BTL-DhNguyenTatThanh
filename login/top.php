<body>
	<div class="header">
		<div class="box_notice">
			<?php 
				 		if (isset($_SESSION['Name']) && isset($_SESSION['Pass'])) {

				 			$name=$_SESSION['Name'];
				 			$sql="SELECT * from account where userName='$name'";
				 			$result=mysqli_query($conn,$sql);
				 			$row=mysqli_fetch_assoc($result);
				 			if($row['userLevel']==0){
				 				echo ("<span><i class='fas fa-user-circle'></i> ".$_SESSION['Name']);
					 			echo " | Vai trò: Người dùng</span>";
					 			echo "<style>.hide{display:none;}</style>";
				 			}
				 			else{
				 				echo ("<span><i class='fas fa-user-circle'></i> ".$_SESSION['Name']);
					 			echo " | Vai trò: Quản trị viên</span>";
					 		}
				 		}
				 	 ?>
				 			
		</div>
		<div class="logo">
			<a href="viewsAdmin.php"><img src="http://elib.ntt.edu.vn/App_Themes/ntt/images/ntt-logo.png" alt="ĐHNTT"></a>
			<h3>TRA CỨU THÔNG TIN SINH VIÊN</h3>
			<form method="post">
				<input type="submit" value="Đăng xuất" name="logout">
				<?php 
					if (isset($_POST['logout'])) {
						include_once'logout.php';
					}
				 ?>
			</form>
		</div>