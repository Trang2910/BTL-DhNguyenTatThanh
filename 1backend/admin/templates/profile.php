<h4><b>THÔNG TIN NGƯỜI DÙNG</b></h4>
<form method="get">
	<?php 
		$p=mysqli_query($conn,"SELECT * from account where userName='$user'");
		$re=mysqli_fetch_assoc($p);
		// echo "Tên người dùng: <input type='text' value=".$re['userName'].">";
		echo "
			<table border='1' style='width: 50%;'>
				<tr>
					<td style='padding: 20px;font-weight: bold;'>Tên người dùng: <br>Email: <br>Ngày sinh: <br>Giới tính: <br>Số điện thoại:  </td>
					<td style ='padding: 20px;'>".$re['userName']."<br>".$re['email']."<br>".$re['birthday']."<br>".$re['sex']."<br>".$re['phone']."</td>
				</tr>
			</table>

		";
	 ?>
</form>
			