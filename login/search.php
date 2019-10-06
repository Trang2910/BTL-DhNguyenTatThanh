<?php include'connect.php';	?>

<?php 
	if(isset($_GET['ok'])){
		$search = $_GET['Search'];
		if(!empty($search)){
			$query = "SELECT * from list_sv where hoten like '%$search%'";
			$sql = mysqli_query($conn, $query);
			$count = mysqli_num_rows($sql);
			if($count>0){
				$i=0;
				echo "<form method='get'>$count kết quả trả về với từ khóa <b>$search</b>";
				echo "<table border='1' width='100%' style='line-height:3;'>";
				echo "<tr><th class='hide'>Chọn</th>";
				echo "<th class='hide'>Sửa</th>";
				echo "<th class='hide'>Xóa</th>";
				echo "<th>Mã sinh viên</th>";
				echo "<th>Họ tên</th><th>Giới tính</th>";
				echo "<th>Ngày sinh</th></tr>";
                    while ($row = mysqli_fetch_assoc($sql)){
                    		$i++;
                    		echo "<tr><td class='hide'><input type='checkbox'>";
							echo "</td><td class='hide'><button name='btnEdit'><i class='fas fa-pencil-alt'></i></button>";
							echo "</td><td class='hide'><button name='btnDel'><i class='fas fa-trash-alt'></i></button>";
                        	echo "</td><td><a target='detail' href='details.php?masv=".$row['masv']."'>".$row['masv'];
                            echo "</a></td><td>".$row['hoten'];
                            echo "</td><td>".$row['gioitinh'];
                            echo "</td><td>".$row['ngaysinh'];
                            echo "</td></tr>";
                    }
                    echo "</table></form>";
            } 
            else{
                echo "Không tìm thấy kết quả!";
            }
			
		}
	}
 ?>
