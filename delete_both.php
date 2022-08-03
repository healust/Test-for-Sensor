
<?php
	// 선택된 Lidar 종류 : $_POST['Lidar_Name']
	// 선택된 tof 종류 : $_POST['tof_name']
	session_start();
	$tof_get = $_SESSION['tof_value'];
	$lidar_get = $_SESSION['$lidar_value'];

     
	$con=mysqli_connect("localhost", "root", "1234", "tablelist") or die("MySQL 접속 실패 !!");
	
	$lidar_sql ="DELETE FROM lidar_spec WHERE Lidar_Name='".$lidar_get."'"; 
	$tof_sql ="DELETE FROM tof_spec WHERE tof_name='".$tof_get."'";
	
	$lidar_ret = mysqli_query($con, $lidar_sql);
	$tof_ret = mysqli_query($con, $tof_sql);
 
    echo "<h1> 삭제 완료 </h1>";
    if($lidar_ret && $tof_ret) {
	    echo $lidar_get." 성공적으로 삭제됨..<br>";
		echo $tof_get." 성공적으로 삭제됨..";
    }
    else {
	    echo "데이터 삭제 실패!!!"."<br>";
	    echo "실패 원인 :".mysqli_error($con);
    } 
    mysqli_close($con);
	
	echo "<br><br><br> <a href='main.html'> <--초기 화면</a> ";
?>

