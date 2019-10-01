<body>
	<div class="header">
		<div class="box_notice">
			<?php 
				 		if (isset($_SESSION['Name']) && isset($_SESSION['Pass'])) {
				 			echo ("<span><i class='fas fa-user-circle'></i> ".$_SESSION['Name']);
				 			echo " | Vai trò: Người dùng</span>";
				 		}
				 	 ?>
		</div>
		<div class="logo">
			<a href="viewsUser.php"><img src="http://elib.ntt.edu.vn/App_Themes/ntt/images/ntt-logo.png" alt="ĐHNTT"></a>
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