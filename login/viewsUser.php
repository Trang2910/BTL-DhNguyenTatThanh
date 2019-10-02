<?php include'connect.php';	session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap-4.3.1-dist/css/bootstrap.css">
    <link rel="stylesheet" href="css/Views.css">

    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="bootstrap-4.3.1-dist/js/bootstrap.js"></script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	<title>Trang chủ</title>
</head>
<?php include'top.php'; ?>

		<div class="menu">
			<a href="viewsUser.php" class="active">Trang chủ</a>
			<a href="viewsU_sv.php">Sinh viên</a>
			<a href="">Tra cứu điểm</a>
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
			<div class="news">
				<img src="http://ntt.edu.vn/web/upload/images/Tin_Tuc/201909_TIN/DSC06510.jpg" alt="">
				<a href="">Lễ bảo vệ Khóa luận tốt nghiệp và tuyển dụng trực tiếp của sinh viên khoa Luật ĐH Nguyễn Tất Thành</a>
			</div>
			<hr>
			<div class="news">
				<img src="http://ulis.vnu.edu.vn/files/uploads/2016/11/dhsd.jpg" alt="">
				<a href="">Khóa 17 đã sẵn sàng tốt nghiệp</a>
			</div>
			<hr>
			<div class="news">
				<img src="http://ntt.edu.vn/web/upload/images/banner/HTVL4.jpg" alt="">
				<a href="">Hội thảo về cơ hội việc làm thu nhập cao và tọa đàm với các đối tác CHLB Đức</a>
			</div>
			<hr>
			<div class="news">
				<img src="http://ntt.edu.vn/web/upload/images/Tin_Tuc/201906_tin/6756_111_wvfj_zjwk.jpg" alt="">
				<a href="">ĐH Nguyễn Tất Thành mách bạn "bí quyết" ôn luyện kỳ thi THPTQG 2019</a>
			</div>
			<br>
			<!-- <iframe src="register.php" frameborder="1" width="100%" height="1000px"></iframe> -->
		</div>
	</div>

<?php include'bottom.php' ?>