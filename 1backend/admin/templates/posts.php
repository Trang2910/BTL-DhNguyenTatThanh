<script>
	$(function(){
		$('#add_post').hide();
		$('#add_btn').click(function(){
		    $('#add_post').show();
		});
		
	});
</script>
	<br>
	<input type="submit" value="Thêm bài viết mới" style="border-style:  gray; border-radius: 5px;" id="add_btn">
	<br>
	<form method="get" id="add_post">
		<iframe src="templates/add_post.php" frameborder="0" width="100%" height="350px">
			<?php include'templates/add_post.php' ?>
		</iframe>
	</form>
    <br>

<form method="get">
	<input type="text" placeholder="Tìm kiếm ID, Tiêu đề, Tác giả ..." style="width: 90%; border-style:  gray; border-radius: 5px;" name="txtsearch">
	<input type="submit" value="Tìm kiếm" style="border-style: gray; border-radius: 5px;" name="search">
	<br><br>
	<input type="submit" value="Xem bài viết" name="view" style="border-style:  gray; border-radius: 5px;">
<?php 
	if(isset($_GET['view'])){
		if($user){
			//admin đăng nhập xem đc tất cả các bài viết
			if($row['userLevel']==1){

				$query=mysqli_query($conn,"SELECT * from posts");
				
			}
			//người dùng bt đăng nhập chỉ xem được bài viết mà người dùng đã đăng và chỉnh sửa lúc đầu.
			else{
				$query=mysqli_query($conn,"SELECT * from posts where userEdit = '{$user}'");
			}

				if (mysqli_num_rows($query) > 0) {
						$i=0;
						
						echo '
								<table border="1" style="width: 100%; line-height:3;text-align:center;font-size: 13px;">
									<tr>
										<th style="width: 5%">ID</th>
										<th style="width: 10%">Tiêu đề</th>
										<th style="width: 30%">Nội dung</th>
										<th style="width: 10%">Tác giả</th>
										<th style="width: 10%">Ngày cập nhật</th>
										<th style="width: 10%">Người chỉnh sửa</th>
										<th style="width: 15%">Ảnh</th>
										<th style="width: 5%">Xóa</th>
										<th style="width: 5%">Sửa</th>
									</tr>
						';
						
						while($res=mysqli_fetch_assoc($query)) {

							$i++;
							echo "
								<tr>
								 	<td>".$res['id']."</td>
								 	<td>".$res['title']."</td>
								 	<td>".$res['content']."</td>
								 	<td>".$res['author']."</td>
								 	<td>".$res['dateEdit']."</td>
								 	<td>".$res['userEdit']."</td>
								 	<td><img style='height:auto;width:100%;' src='".$res['image']."'></td>

									<td><a style='color: darkblue;' href='index.php?id=".$res['id']."'><i class='far fa-trash-alt'></i></a></td>
									<td><a style='color: darkblue;' href='templates/edit.php?id=".$res['id']."&title=".$res['title']."&content=".$res['content']."&author=".$res['author']."'><i class='far fa-edit'></i></a></td>
								 </tr>
							";
						}
				}
				else echo "Không tìm thấy bài viết nào!";

				echo "</table>";
				
		}
	}
	else if(isset($_GET['search'])){
		if(!empty($_GET['txtsearch'])){
			if($user){
				$txtsearch=$_GET['txtsearch'];
				if($row['userLevel']==1){

					$result=mysqli_query($conn,"SELECT * from posts where userEdit like '%$txtsearch%' or id like '%$txtsearch%' or title like '%$txtsearch%' or content like '%$txtsearch%' or author like '%$txtsearch%'");
					
				}
				
				else{
					$result=mysqli_query($conn,"SELECT * from posts where userEdit like '{$user}' and id like '%$txtsearch%' or title like '%$txtsearch%' or content like '%$txtsearch%' or author like '%$txtsearch%'");
				}

				$count = mysqli_num_rows($result);
						if($count>0){
							$i=0;
							echo '
								<table border="1" style="width: 100%; line-height:3;text-align:center;font-size: 13px;">
									<tr>
										<th style="width: 5%">ID</th>
										<th style="width: 10%">Tiêu đề</th>
										<th style="width: 30%">Nội dung</th>
										<th style="width: 10%">Tác giả</th>
										<th style="width: 10%">Ngày cập nhật</th>
										<th style="width: 10%">Người chỉnh sửa</th>
										<th style="width: 15%">Ảnh</th>
										<th style="width: 5%">Xóa</th>
										<th style="width: 5%">Sửa</th>
									</tr>
								';
			                    while ($r = mysqli_fetch_assoc($result)){
			                    		$i++;
			                    		echo "
											<tr>
											 	<td>".$r['id']."</td>
											 	<td>".$r['title']."</td>
											 	<td>".$r['content']."</td>
											 	<td>".$r['author']."</td>
											 	<td>".$r['dateEdit']."</td>
											 	<td>".$r['userEdit']."</td>
											 	<td><img style='height:auto;width:100%;' src='".$r['image']."'></td>
												<td><a style='color: darkblue;' href='index.php?id=".$r['id']."'><i class='far fa-trash-alt'></i></a></td>
												<td><a style='color: darkblue;' href='index.php?id=".$r['id']."'><i class='far fa-edit'></i></a></td>
											</tr>
										";
			                    }
			                    echo "</table></form>";
			            } 
			            else{
			                echo "Không tìm thấy kết quả!";
			            }
			}
		}
		else echo "Bạn chưa nhập từ khóa tìm kiếm!!!";
	}
?>

	<?php function location($url) { ?>
	    <script type="text/javascript">
	    	window.location = "<?=$url?>";
	    </script>
	<?php } ?>
	<?php
	//xóa một bản ghi 
        if(isset($_GET['id'])){
            $id=$_GET['id'];
            mysqli_query($conn,"DELETE from posts where id = $id") or die(mysqli_error($conn));
            location("index.php");
        }
    //xóa tất cả
        if(isset($_GET['all']) && isset($_GET['delete'])){
        	$id=$_GET['id'];
        	mysqli_query($conn,"DELETE from posts where id = $id");
        }
     ?>
	<script>

		$("#select_all").change(function(){
			//chọn tất cả
		    var status = this.checked;
		    $('.checkbox').each(function(){
		        this.checked = status; 
		    });

		});

		$('.checkbox').change(function(){ 
		    //bỏ chọn tất cả
		    if(this.checked == false){
		        $("#select_all")[0].checked = false;
		    }
		    
		    if ($('.checkbox:checked').length == $('.checkbox').length ){ 
		        $("#select_all")[0].checked = true;
		    }
		});
	</script>
</form>
