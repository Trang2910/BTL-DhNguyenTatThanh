<?php 
	require_once'core/init.php';
	require_once'includes/header.php'; 
?>

 <div class="main">
		<form method="post">
			<div style="text-align: center;width: 60%">
				<h4>Đăng ký tài khoản</h4>
				<br><br>
				<i class="fa fa-user icon"></i> 
				<input type="text" placeholder="    Nhập tên người dùng" name="name" class="input">
				<br><br>
				<i class="fas fa-envelope"></i> 
				<input type="email" placeholder="    Nhập email người dùng" name="email" class="input">
				<br><br>
				<i class="fas fa-calendar-alt"></i>
				<input type="date" name="birthday" class="input">
				<br><br>
				<i class="fas fa-female" style="font-size: 18px;"></i>
				<input type="radio" name="sex" value="Nữ" checked>
				<i class="fas fa-male" style="font-size: 18px;"></i>
				<input type="radio" name="sex" value="Nam">
				<br><br>
				<i class="fas fa-phone"></i>
				<input type="tel" placeholder="    Nhập số điện thoại" name="phone" class="input">
				<br><br>
				<i class="fa fa-key icon"></i> 
				<input type="password" placeholder="    Nhập mật khẩu" name="pass1" class="input">
				<br><br>
				<i class="fa fa-key icon"></i> 
				<input type="password" placeholder="    Xác nhận mật khẩu" name="pass2" class="input"> 
				<br><br>
				
				<input type="submit" value="Đăng ký" name="register"><br><br>
				<a href="index.php">Trở lại trang đăng nhập?</a>
				<br><br>

				<?php 
					if(isset($_POST['register']))
					{
						if (empty($_POST['name']) && empty($_POST['email']) && empty($_POST['birthday']) && empty($_POST['phone']) && empty($_POST['pass1']) && empty($_POST['pass2'])) {

							echo "<div class='alert alert-info' role='alert' style='text-align: center;padding:2px;'>Vui lòng nhập đầy đủ thông tin!";
							echo "<button class='close' data-dismiss='alert' aria-label='Close'>";
							echo "<span aria-hidden='true'>&times;</span></button></div>";

						}
						else {

							$name=$_POST['name'];
							$email=$_POST['email'];
							$birthday=$_POST['birthday'];
							$sex=$_POST['sex'];
							$phone=$_POST['phone'];
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

									mysqli_query($conn,"INSERT into account(userName,passWord,email,birthday,sex,phone) values('$name','$pass','$email','$birthday','$sex','$phone')") or die(mysqli_error($conn));

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
			</div>
		</form>
</div>

<?php require_once'includes/footer.php'; ?>