<script>
	$(function(){
		$('#change_pass').hide();
		$('#change_btn').click(function(){
		    $('#change_pass').show();
		});
		
	});
</script>
<div style="margin:20px;">
	<button style="color: black; border: none; background-color: white" id="change_btn"><i class="fas fa-key"></i>Đổi mật khẩu?</button>
	<form method="post" id="change_pass">
		<br>
		Mật khẩu cũ:
		<br>
		<input type="password" placeholder="Nhập mật khẩu cũ" name="pw_old">
		<br><br>
		Mật khẩu mới:
		<br>
		<input type="password" placeholder="Nhập mật khẩu mới" name="pw_new">
		<br><br>
		<input type="submit" value="Lưu" name="change_pw" style="border-style:  gray; border-radius: 5px;">
	</form>
</div>
<?php 
	if (isset($_POST['change_pw'])) {
		
		if(!empty($_POST['pw_old']) && !empty($_POST['pw_new'])){
			$pw_old=$_POST['pw_old'];
			$pw_new=$_POST['pw_new'];

			$sql = mysqli_query($conn,"SELECT * from account where userName = '{$user}'");
			$row=mysqli_fetch_assoc($sql);

			if(password_verify($pw_old, $row['passWord'])){

				$pass=password_hash($pw_new, PASSWORD_DEFAULT);
				mysqli_query($conn,"UPDATE account set passWord='$pass' where userName = '{$user}'");
				echo "Đổi mật khẩu thành công!!!";
			}
		}
	}
 ?>
