<?php 
	include'connect.php'; 
	// session_start();
?>

<?php 

if(isset($_POST['login']))
{

	if (empty($_POST['name']) && empty($_POST['pass'])) {
		echo "<div class='alert alert-info' role='alert' style='text-align: center;padding:2px;'>Vui lòng nhập tên đăng nhập và mật khẩu!";
		echo "<button class='close' data-dismiss='alert' aria-label='Close'>";
		echo "<span aria-hidden='true'>&times;</span></button></div>";
	}
	else{

	$name=$_POST['name'];
	$pass=$_POST['pass'];

	$row_u = mysqli_query($conn,"SELECT * from acc_user where userName = '{$name}' and userPass = '{$pass}'");
	$row_ad = mysqli_query($conn,"SELECT * from acc_admin where adName = '{$name}' and adPass = '{$pass}'");

	$count_u = mysqli_num_rows($row_u);
	$count_ad = mysqli_num_rows($row_ad);

	if($count_u==1){
		header('location:viewsUser.php');
	}
	elseif ($count_ad==1) {
		header('location:viewsAdmin.php');
	}
	else {
		echo "<div class='alert alert-danger' role='alert' style='text-align: center;padding:2px;'>Tên đăng nhập và mật khẩu chưa chính xác!";
		echo "<button class='close' data-dismiss='alert' aria-label='Close'>";
		echo "<span aria-hidden='true'>&times;</span></button></div>";
	}
}
}
?>