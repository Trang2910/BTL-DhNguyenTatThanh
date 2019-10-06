<?php include'connect.php' ?>

<?php 
	if(isset($_GET['view'])){
		if(isset($_GET['Lop'])){
			
			$lop=$_GET['Lop'];

			$query="SELECT * from list_sv where lop like '$lop'";

			$result=mysqli_query($conn,$query);

			if (mysqli_num_rows($result) > 0) {
				$i=0;
				echo "<form method='get'><br><table border = '1'>";
				echo "<tr><th class='hide'>Chọn</th>";
				echo "<th class='hide'>Sửa</th>";
				echo "<th class='hide'>Xóa</th>";
				echo "<th>Mã sinh viên</th>";
				echo "<th>Họ tên</th>";
				echo "<th>Giới tính</th>";
				echo "<th>Ngày sinh</th>";
				echo "<th>Lớp</th></tr>";
				
				
				while($row=mysqli_fetch_assoc($result)) {
					$i++;
					echo "<tr><td class='hide'><input type='checkbox'></td>";
					echo "</td><td class='hide'><button name='btnEdit'><i class='fas fa-pencil-alt'></i></button>";
					echo "</td><td class='hide'><button name='btnDel'><i class='fas fa-trash-alt'></i></button>";
					echo "<td><a target='detail' href='details.php?masv=".$row['masv']."'>".$row['masv'];
					echo "</a></td><td>".$row['hoten'];
					echo "</td><td>".$row['gioitinh'];
					echo "</td><td>".$row['ngaysinh'];
					echo "</td><td>".$row['lop'];
					echo "</td></tr>";
				}
				echo "</table></form>";
			}
			else echo "Không có sinh viên nào!";
		}
		else{
			echo "<div class='alert alert-info' role='alert' style='text-align: center;padding:2px;'>Vui lòng chọn lớp và đợt học!";
			echo "<button class='close' data-dismiss='alert' aria-label='Close'>";
			echo "<span aria-hidden='true'>&times;</span></button></div>";
		}
	}
	
 ?>