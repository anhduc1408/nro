<?php
	$local_db = "localhost";
	$user_db = "root";
	$pass_db = "";
	$name_db = "umi";
	# đừng đụng vào 
  $conn = new mysqli( $_ENV['DB_HOST'], $_ENV['DB_USER'], $_ENV['DB_PASS'], $_ENV['DB_NAME'], $_ENV['DB_PORT'] );
  $conn->set_charset("utf8");
    
?>
