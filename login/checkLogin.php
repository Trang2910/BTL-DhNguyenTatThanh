<?php 
	include'connect.php'; 
	session_start();
?>

<?php 

if(isset($_POST['login']))
{

	if (empty($_POST['name']) && empty($_POST['pass'])) {
		echo "<div class='alert alert-info' role='alert' style='text-align: center;padding:2px;'>Vui lòng nhập tên người dùng và mật khẩu!";
		echo "<button class='close' data-dismiss='alert' aria-label='Close'>";
		echo "<span aria-hidden='true'>&times;</span></button></div>";
	}
	else{

		$name=$_POST['name'];
		$pass=$_POST['pass'];

		$_SESSION['Name'] = $name;
        $_SESSION['Pass'] = $pass;

		$sql = mysqli_query($conn,"SELECT * from account where userName = '{$name}'");
		$row=mysqli_fetch_assoc($sql);

		if(password_verify($pass, $row['passWord'])){
			if($row['userLevel']==0){
				header('location:viewsUser.php');
			}
			else if($row['userLevel']==1){
				header('location:viewsAdmin.php');
			}
		}

		else{
			echo "<div class='alert alert-danger' role='alert' style='text-align: center;padding:2px;'>Tên người dùng và mật khẩu chưa chính xác!";
			echo "<button class='close' data-dismiss='alert' aria-label='Close'>";
			echo "<span aria-hidden='true'>&times;</span></button></div>";
		}
	}
}
?>