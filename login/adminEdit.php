<?php include'connect.php';	session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap-4.3.1-dist/css/bootstrap.css">
    <link rel="stylesheet" href="css/views.css">
    <link rel="stylesheet" href="css/Sv.css">

    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="bootstrap-4.3.1-dist/js/bootstrap.js"></script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	<title>Trang chủ</title>
</head>
<?php include'top.php' ?>

		<div class="menu">
			<a href="viewsUser.php">Trang chủ</a>
			<a href="viewsU_sv.php" class="active">Tra cứu điểm</a>
			<a href="">Đăng ký học</a>
			<a href="">Tra cứu học phí</a>
		</div>
	</div>
	<div class="main">
		<div class="side">
			<h5>MENU MAIN</h5>
			<a href="" class="active">Tin tức</a>
			<a href="">Hướng dẫn & Trợ giúp</a>
			<a href="">Cài đặt</a>
		</div>
		<div class="content">
			<?php 
				if(isset($_GET['btnEdit'])){
					
				}
				elseif (isset($_GET['btnDel'])) {
					
				}
			 ?>
		</div>
	</div>

<?php include'bottom.php' ?>

<?php 
	function Edit($x){
		$masv=$_GET['masv'];
		$hoten=$_GET['hoten'];
		$ngaysinh=$_GET['ngaysinh'];
		$sql = "SELECT * from list_sv where masv=$masv";
		$result = mysqli_query($conn,$sql);
			echo "<form method='post'>";
			echo "<table border = '1' method='get'><tr><th>Mã sinh viên</th><th>Họ Tên</th><th>Ngày Sinh</th></tr>";
			echo "<tr><td><input disabled type='text' value=".$Masv." name='Ma'></td><td><input type='text' value=".$Hoten." name='Ho'></td><td><input type='date' value=".$Ngaysinh." name='NS'></td></tr>";
	}
 ?>