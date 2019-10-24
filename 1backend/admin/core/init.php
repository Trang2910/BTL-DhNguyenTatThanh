<?php 

	require_once 'classes/db.php';
	require_once 'classes/session.php';


	//gọi hàm session
	start();

	// Kiểm tra session
	if (get() != '')
	{
	    $user = get();
	}
	else
	{
	    $user = '';
	}
 ?>