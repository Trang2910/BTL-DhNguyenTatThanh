<?php include'connect.php';	?>

<?php 
	if(isset($_REQUEST['ok'])){
		$search = $_GET['Search'];
		if(!empty($search)){
			$query = "SELECT * from list_sv where hoten like '{%$Search%}'";
			$sql = mysqli_query($conn, $query);
			$count = mysqli_num_rows($sql);
			if($count>0){
				echo "$num ket qua tra ve voi tu khoa <b>'$Search'</b>";
				echo "<table border='1' cellspacing='0' cellpadding='10'>";
				echo "<tr><th>Mã sinh viên</th>";
				echo "<th>Họ tên</th><th>Giới tính</th>";
				echo "<th>Ngày sinh</th></tr>";
                    while ($row = mysqli_fetch_assoc($sql)){
                        	echo "<tr>";
                            echo "<td>{$row['masv']}</td>";
                            echo "<td>{$row['hoten']}</td>";
                            echo "<td>{$row['gioitinh']}</td>";
                            echo "<td>{$row['ngaysinh']}</td>";
                        	echo "</tr>";
                    }
                    echo "</table>";
            } 
            else{
                echo "Khong tim thay ket qua!";
            }
			
		}
	}
 ?>
