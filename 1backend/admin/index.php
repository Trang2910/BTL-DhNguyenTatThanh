<?php 
	//gọi file kết nối db và session
	require_once'core/init.php';
	require_once'includes/header.php';
	// Nếu đăng nhập
	if ($user)
	{
	 	// Hiển thị sidebar
		require_once 'templates/sidebar.php';
		 
		// Hiển thị content
		require_once 'templates/content.php';
	}
	// Nếu không đăng nhập
	else
	{
	    // Hiển thị form đăng nhập
	    require_once 'templates/signin.php';
	}
	require_once'includes/footer.php';
 ?>