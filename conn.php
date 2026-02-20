
	 <?php
        $username = "root"; // Khai báo username
        $password = "";      // Khai báo password
        $server   = "localhost";   // Khai báo server
        $dbname   = "nro";      // Khai báo database


        $connect = new mysqli( $_ENV['DB_HOST'], $_ENV['DB_USER'], $_ENV['DB_PASS'], $_ENV['DB_NAME'], $_ENV['DB_PORT'] );
        if ($connect->connect_error) {
            die("Không kết nối :" . $connect->connect_error);
        }
        ?>
