<?php 

	@ob_start();
	session_start();

	if(!empty($_SESSION['owner'])){
		require 'config.php';
		include $view;
		$lihat = new view($config);
		$toko = $lihat -> toko();
		
			include 'owner/template/header.php';
			include 'owner/template/sidebar.php';
				if(!empty($_GET['page'])){
					include 'owner/module/'.$_GET['page'].'/index.php';
				}else{
					include 'owner/template/home.php';
				}
			include 'owner/template/footer.php';
	
	}else{
		echo '<script>window.location="login.php";</script>';
	}
?>

