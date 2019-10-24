<?php function location($url) { ?>
    <script type="text/javascript">
    	window.location = "<?=$url?>";
    </script>
<?php } ?>
<?php
 
	// Require database & thông tin chung
	require_once 'core/init.php';
	 
	// Xoá session
	destroy();
	
	location("index.php");
 
?>