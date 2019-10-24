<form method="get">
	<h4><label><b>Danh sách thông tin Tài khoản người dùng</b></label></h4>
	<?php 
		$s=mysqli_query($conn,"SELECT * from account where userLevel=0")or die(mysqli_error($conn));
		if (mysqli_num_rows($s) > 0) {
						$i=0;
						echo '
								<table border="1" style="width: 100%; line-height:3;text-align:center;font-size: 13px;">
									<tr>
										<th style="width: 10%">ID</th>
										<th style="width: 15%">Tên tài khoản</th>
										<th style="width: 35%">Email</th>
										<th style="width: 10%">Ngày sinh</th>
										<th style="width: 10%">Giới tính</th>
										<th style="width: 10%">Số điện thoại</th>
										<th style="width: 10%">Xóa</th>
									</tr>
						';
						
						while($r=mysqli_fetch_assoc($s)) {
							$i++;
							echo "
								<tr>
								 	<td>".$r['id']."</td>
								 	<td>".$r['userName']."</td>
								 	<td>".$r['email']."</td>
								 	<td>".$r['birthday']."</td>
								 	<td>".$r['sex']."</td>
								 	<td>".$r['phone']."</td>
									<td><a style='color: darkblue;' href='index.php?userName=".$r['userName']."'><i class='far fa-trash-alt'></i></a></td>
								 </tr>
							";
						}
						echo "</table>";
		}
		else echo "Danh sách người dùng trống!";

		
	 ?>

	<?php
        if(isset($_GET['userName'])){
            $userName=$_GET['userName'];
            mysqli_query($conn,"DELETE from account where userName = '{$userName}'") or die(mysqli_error($conn));
            location("index.php");
        }
     ?>
</form>
	