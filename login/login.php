<?php include'connect.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap-4.3.1-dist/css/bootstrap.css">
    <link rel="stylesheet" href="css/login.css">

    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="bootstrap-4.3.1-dist/js/bootstrap.js"></script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	<title>Login</title>
</head>
<body>
	<div class="header">
		<div class="logo">
			<a href="..\index.php"><img src="http://elib.ntt.edu.vn/App_Themes/ntt/images/ntt-logo.png" alt="ĐHNTT"></a>
		</div>
	</div>
	<div class="main">
		<form method="post">
			<div style="text-align: right;">
				<br><br>Tên đăng nhập: <input type="text" placeholder="  Tên đăng nhập" name="name"><br><br>
				Mật khẩu: <input type="password" placeholder="  Mật khẩu" name="pass"><br><br>
				<input type="submit" value="Đăng nhập" name="login"><br><br>
				<a href="">Đăng ký?</a><a href="">Quên mật khẩu?</a><br><br>
				<?php include'checkLogin.php' ?> 
			</div>
			 
		</form>
	</div>
	<div class="footer">
		<p style="padding: 0px 30px;">Copyright © 2019 NTT-TTT Nguyễn Tất Thành - Khoa CNTT. Designed by NTT-TTT.</p>
	</div>
</body>
</html>