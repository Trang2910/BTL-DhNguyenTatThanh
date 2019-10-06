<?php include'connect.php'; session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap-4.3.1-dist/css/bootstrap.css">

    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="bootstrap-4.3.1-dist/js/bootstrap.js"></script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <style>
    	button{
			border: none;
			background-color: white;
			-webkit-appearance: none;
		}
    </style>
	<title>Trang chủ</title>
</head>
<body>
<?php 
	if (isset($_SESSION['Name']) && isset($_SESSION['Pass'])) {

		$name=$_SESSION['Name'];
		$result=mysqli_query($conn,"SELECT * from account where userName='$name'");
		$row=mysqli_fetch_assoc($result);
		if($row['userLevel']==0){
			echo "<style>.hide{display:none;}</style>";
		}
	}
 ?>

<?php 
	if (isset($_GET['masv'])) {
			$masv=$_GET['masv'];
			$query="SELECT * from mon,diem where masv = '$masv' and mon.idmon=diem.idmon";
			$query2="SELECT * from list_sv where masv = '$masv'";

			$sql=mysqli_query($conn,$query);
			$sql2=mysqli_query($conn,$query2);

			if (mysqli_num_rows($sql) > 0) {
				$i=0;

				$row2=mysqli_fetch_assoc($sql2);
				echo "<form method='get'><br>Điểm sinh viên <b>".$row2['hoten'];
				echo "</b> là: <br><br>";

				echo "<table border = '1' cellspacing='0' cellpadding='0' style='width: 100%; line-height:3;text-align:center;font-family:verdana;font-size: 13px;'>";
				echo "<tr><th class='hide'>Chọn</th>";
				echo "<th class='hide'>Sửa</th>";
				echo "<th class='hide'>Xóa</th>";
				echo "<th>ID môn học</th>";
				echo "<th>Tên môn học</th>";
				echo "<th>Điểm thi</th>";
				echo "<th>Đợt học</th></tr>";
				
				while($row=mysqli_fetch_assoc($sql)) {
					$i++;
					echo "<tr><td class='hide'><input type='checkbox'>";
					echo "</td><td class='hide'><button name='btnEdit'><i class='fas fa-pencil-alt'></i></button>";
					echo "</td><td class='hide'><button name='btnDel'><i class='fas fa-trash-alt'></i></button>";
					echo "</td><td>".$row['idmon'];
					echo "</td><td>".$row['tenmon'];
					echo "</td><td>".$row['diem'];
					echo "</td><td>".$row['dot'];
					echo "</td></tr>";
				}
				echo "</table></form>";
			}
		}
?>
</body>
</html>
