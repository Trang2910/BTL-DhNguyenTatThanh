<div class="main">
		<form method="post">
			<div style="text-align: center;width: 60%" id="signin">
				<h4>Đăng nhập tài khoản</h4>
				<br><br>
				<i class="fa fa-user icon"></i>
				<input type="text" placeholder="    Nhập tên người dùng" name="name" class="input">
				<br><br>
				<i class="fa fa-key icon"></i> 
				<input type="password" placeholder="    Nhập mật khẩu" name="pass" class="input">
				<br><br>
				<input type="submit" value="Đăng nhập" name="signin">
				<br><br>
				<a href="register.php">Đăng ký?</a>
				<a href="">Quên mật khẩu?</a>
				<br><br>
				<?php function location($url)
                        { ?>
                            <script type="text/javascript">
                            window.location = "<?=$url?>";
                            </script>
                <?php } ?>
				<?php 
	
					require_once 'core/init.php';

					if(isset($_POST['signin'])){

						$user=$_POST['name'];
						$pass=$_POST['pass'];

						if(empty($user) || empty($pass)){

							echo "<div class='alert alert-info' role='alert' style='text-align: center;padding:2px;'>Vui lòng nhập tên người dùng và mật khẩu!";
							echo "<button class='close' data-dismiss='alert' aria-label='Close'>";
							echo "<span aria-hidden='true'>&times;</span></button></div>";

						}
						else{

							$sql = mysqli_query($conn,"SELECT * from account where userName = '{$user}'");
							$row=mysqli_fetch_assoc($sql);

							if(password_verify($pass, $row['passWord'])){
								//gọi hàm lưu session
								send($user);
								mysqli_close($conn);
								location("index.php");
							}

							else{
								echo "<div class='alert alert-danger' role='alert' style='text-align: center;padding:2px;'>Tên người dùng và mật khẩu chưa chính xác!";
								echo "<button class='close' data-dismiss='alert' aria-label='Close'>";
								echo "<span aria-hidden='true'>&times;</span></button></div>";
							}
						}
					}

				 ?>
			</div>
		</form>
</div>