<?php include'connect.php' ?>

<?php 
if(isset($_POST['register']))
{
	if (empty($_POST['name']) && empty($_POST['pass'])) {
		echo "<div class='alert alert-info' role='alert' style='text-align: center;padding:2px;'>Vui lòng nhập tên người dùng và mật khẩu!";
		echo "<button class='close' data-dismiss='alert' aria-label='Close'>";
		echo "<span aria-hidden='true'>&times;</span></button></div>";
	}
	else {
		$name=$_POST['name'];
		$pass1=$_POST['pass1'];
		$pass2=$_POST['pass2'];

		if($pass1!=$pass2){
			echo "<div class='alert alert-warning' role='alert' style='text-align: center;padding:2px;'>Mật khẩu bạn nhập chưa khớp!";
			echo "<button class='close' data-dismiss='alert' aria-label='Close'>";
			echo "<span aria-hidden='true'>&times;</span></button></div>";
		}

		else{
			$row = mysqli_query($conn,"SELECT * from acc_user where userName = '{$name}'");
			$count = mysqli_num_rows($row);

			if($count==0){
				mysqli_query($conn,"INSERT into acc_user values('$name','$pass1')");
				echo "<div class='alert alert-info' role='alert' style='text-align: center;padding:2px;'>Đăng ký tài khoản thành công! Vui lòng quay lại trang đăng nhập để đăng nhập lại!";
				echo "<button class='close' data-dismiss='alert' aria-label='Close'>";
				echo "<span aria-hidden='true'>&times;</span></button></div>";
			}
			
			else{
				echo "<div class='alert alert-danger' role='alert' style='text-align: center;padding:2px;'>Tên người dùng đã tồn tại!";
				echo "<button class='close' data-dismiss='alert' aria-label='Close'>";
				echo "<span aria-hidden='true'>&times;</span></button></div>";
			}
		}


	}
}
?>