<div class="sidebar">
	<div class="row">
	    <div class="col-3">
		    <form class="list-group" method="post">
			    
			    <a class="list-group-item" id="list-profile-list" data-toggle="list" href="#profile" aria-controls="profile" style="background-color: white; color: black">
			     	<?php 
					    echo '<img src="https://cdn2.iconfinder.com/data/icons/users-6/100/USER2-512.png" height="50px" width="50px">
					              	';
					    echo $_SESSION['user'];
				     ?>
			     </a>
			     
		        <a class="list-group-item list-group-item-action" id="list-dashboard-list" data-toggle="list" href="#dashboard"  aria-controls="dashboard">
		        	<i class="fas fa-columns"></i> Bảng điều khiển
		        </a>

		        <a class="list-group-item list-group-item-action active" id="list-posts-list" data-toggle="list" href="#posts" aria-controls="posts">
		        	<i class="fas fa-edit"></i> Bài viết
		        </a>

		        <?php 

		        	if($row['userLevel']==1){
		        		echo'
		        			<a class="list-group-item list-group-item-action" id="list-mng_user-list" data-toggle="list" href="#mng_user" aria-controls="mng_user"><i class="fas fa-user-edit"></i> Quản lý người dùng</a>
		        		';
		        			
		        	}

		         ?>
				<a class="list-group-item list-group-item-action" id="list-setting-list" data-toggle="list" href="#setting" aria-controls="setting">
					<i class="fas fa-cogs"></i> Cài đặt
				</a>

		        <a class="list-group-item list-group-item-action">
		        	<i class="fas fa-power-off"></i>
		        	<input type="submit" name="signout" value="Thoát" style="border: none;background-color: white">
		        </a>

				<?php 
					if(isset($_POST['signout'])){
						include'signout.php';
					}
				 ?>
				 
		    </form>
		</div>
		