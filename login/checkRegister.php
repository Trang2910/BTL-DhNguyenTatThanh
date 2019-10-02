<?php include'connect.php' ?>

<?php 
if(isset($_POST['register']))
{
	if (empty($_POST['name']) && empty($_POST['email']) && empty($_POST['pass1']) && empty($_POST['pass2'])) {
		echo "<div class='alert alert-info' role='alert' style='text-align: center;padding:2px;'>Vui lòng nhập đầy đủ thông tin!";
		echo "<button class='close' data-dismiss='alert' aria-label='Close'>";
		echo "<span aria-hidden='true'>&times;</span></button></div>";
	}
	else {
		$name=$_POST['name'];
		$email=$_POST['email'];
		$pass1=$_POST['pass1'];
		$pass2=$_POST['pass2'];

		if($pass1!=$pass2){
			echo "<div class='alert alert-warning' role='alert' style='text-align: center;padding:2px;'>Mật khẩu bạn nhập chưa khớp!";
			echo "<button class='close' data-dismiss='alert' aria-label='Close'>";
			echo "<span aria-hidden='true'>&times;</span></button></div>";
		}

		else{
			$pass=password_hash($pass1, PASSWORD_DEFAULT);

			$row = mysqli_query($conn,"SELECT * from account where userName = '{$name}' and email = '{$email}'");
			$count = mysqli_num_rows($row);
			
			if($count==0){

				mysqli_query($conn,"INSERT into account(userName,passWord,email) values('$name','$pass','$email')") or die(mysqli_error($conn));

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

