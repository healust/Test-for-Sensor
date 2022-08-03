<?php
   
   $con=mysqli_connect("localhost", "root", "1234", "tablelist") or die("MySQL 접속 실패 !!");

   $id_lidar = $_POST["id_lidar"];
   $Lidar_Name = $_POST["Lidar_Name"];
   $Manufacturer_lidar = $_POST["Manufacturer_lidar"];
   $VerticalFOVLower = $_POST["VerticalFOVLower"];
   $VerticalFOVUpper = $_POST["VerticalFOVUpper"];
   $HorizontalFOVStart = $_POST["HorizontalFOVStart"];
   $HorizontalFOVEnd = $_POST["HorizontalFOVEnd"];
   $RotationsPerSecond = $_POST["RotationsPerSecond"];
   $PointsPerSecond = $_POST["PointsPerSecond"];
   $Range_Min = $_POST["Range_Min"];
   $Range_Max = $_POST["Range_Max"];
   $Range_Accuracy = $_POST["Range_Accuracy"];   
   $Range_Precision = $_POST["Range_Precision"];
   $Angular_Accuracy = $_POST["Angular_Accuracy"];   
   $AngularResolution_H = $_POST["AngularResolution_H"];   
   $AngularResolution_V = $_POST["AngularResolution_V"];   
   $SensorType = $_POST["SensorType"];
   $Enabled = $_POST["Enabled"];
   $NumberOfChannels = $_POST["NumberOfChannels"];
   $X = $_POST["X"];
   $Y = $_POST["Y"];
   $Z = $_POST["Z"];
   $Roll = $_POST["Roll"];
   $Pitch = $_POST["Pitch"];
   $Yaw = $_POST["Yaw"];
   $DrawDebugPoints = $_POST["DrawDebugPoints"];
   $DataFrame = $_POST["DataFrame"];
   
   
   
   
   
   $lidar_sql ="INSERT INTO lidar_spec VALUES('".$id_lidar."', '".$Lidar_Name."', '".$Manufacturer_lidar;
   $lidar_sql = $lidar_sql."', '".$VerticalFOVLower."', '".$VerticalFOVUpper."','".$HorizontalFOVStart;
   $lidar_sql = $lidar_sql."', '".$HorizontalFOVEnd."', '".$RotationsPerSecond."','".$PointsPerSecond;
   $lidar_sql = $lidar_sql."', '".$Range_Min."', '".$Range_Max."','".$Range_Accuracy;
   $lidar_sql = $lidar_sql."', '".$Range_Precision."', '".$Angular_Accuracy; 
   $lidar_sql = $lidar_sql."', '".$AngularResolution_H."', '".$AngularResolution_V;
   $lidar_sql = $lidar_sql."', '".$SensorType."', '".$Enabled."', '".$NumberOfChannels."','".$X."','".$Y."','".$Z;
   $lidar_sql = $lidar_sql."', '".$Roll."', '".$Pitch."', '".$Yaw."', '".$DrawDebugPoints."', '".$DataFrame."')";
   
   $lidar_ret = mysqli_query($con, $lidar_sql);


    echo "<h1> 입력 완료 </h1>";
    if($lidar_ret) {
	    echo $Lidar_Name." 성공적으로 추가됨..<br>";
    }
    else {
	    echo "데이터 추가 실패!!!"."<br>";
	    echo "실패 원인 :".mysqli_error($con);
    } 
    mysqli_close($con);
	
	echo "<br> <a href='main.html'> <--초기 화면</a> ";
?>



