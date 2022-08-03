<?php
    $con=mysqli_connect("localhost", "root", "1234", "") or die("MySQL 접속 실패 !!");
	echo "MYSQL 접속 완료";
	mysqli_close($con);
?>