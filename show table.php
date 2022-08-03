<?php
    $con=mysqli_connect("localhost", "root", "1234", "tablelist") or die("MySQL 접속 실패 !!");
	$lidar ="SELECT * FROM lidar_spec";
	$tof ="SELECT * FROM tof_spec";
 
	$lidar_result = mysqli_query($con, $lidar);
	$tof_result = mysqli_query($con, $tof); 
    if($lidar_result) {
 	   //echo mysqli_num_rows($lidar_result), "건이 조회됨..<br><br>";
 	   $count = mysqli_num_rows($lidar_result);
    }
	if($tof_result) {
 	   //echo mysqli_num_rows($tof_result), "건이 조회됨..<br><br>";
 	   $count = mysqli_num_rows($tof_result);
    }
    else {
	    echo "userTBL 데이터 조회 실패!!!"."<br>";
	    echo "실패 원인 :".mysqli_error($con);
	    exit();
    } 
   
    echo "<h1> Sensor DB Look up</h1>";
	//echo "<a href='main.html'> 메인으로 </a><br><br>";
    echo "<TABLE border=1>";
    echo "<TR>";
    echo "<TH>id</TH><TH>Lidar_Name</TH><TH>Manufacturer</TH><TH>VerticalFOVLower</TH><TH>VerticalFOVUpper</TH>";
    echo "<TH>HorizontalFOVStart</TH><TH>HorizontalFOVEnd</TH><TH>RotationsPerSecond</TH><TH>PointsPerSecond</TH><TH>Range_Min</TH>";
    echo "<TH>Range_Max</TH><TH>Range_Accuracy</TH><TH>Range_Precision</TH><TH>Angular_Accuracy</TH><TH>AngularResolution_H</TH>";
    echo "<TH>AngularResolution_V</TH><TH>SensorType</TH><TH>Enabled</TH><TH>NumberOfChannels</TH><TH>X</TH><TH>Y</TH><TH>Z</TH><TH>Roll</TH><TH>Pitch</TH><TH>Yaw</TH><TH>DrawDebugPoints</TH><TH>DataFrame</TH>";
	echo "</TR>";
   
    while($row = mysqli_fetch_array($lidar_result) ) {
 	  echo "<TR>";
	  echo "<TD>", $row['id'], "</TD>";
	  echo "<TD>", $row['Lidar_Name'], "</TD>";
	  echo "<TD>", $row['Manufacturer'], "</TD>";
	  echo "<TD>", $row['VerticalFOVLower'], "</TD>";
	  echo "<TD>", $row['VerticalFOVUpper'], "</TD>";
	  echo "<TD>", $row['HorizontalFOVStart'], "</TD>";
	  echo "<TD>", $row['HorizontalFOVEnd'], "</TD>";
	  echo "<TD>", $row['RotationsPerSecond'], "</TD>";
	  echo "<TD>", $row['PointsPerSecond'], "</TD>";
	  echo "<TD>", $row['Range_Min'], "</TD>";
	  echo "<TD>", $row['Range_Max'], "</TD>";
	  echo "<TD>", $row['Range_Accuracy'], "</TD>";
	  echo "<TD>", $row['Range_Precision'], "</TD>";
	  echo "<TD>", $row['Angular_Accuracy'], "</TD>";
	  echo "<TD>", $row['AngularResolution_H'], "</TD>";
	  echo "<TD>", $row['AngularResolution_V'], "</TD>";
	  echo "<TD>", $row['SensorType'], "</TD>";
	  echo "<TD>", $row['Enabled'], "</TD>";
	  echo "<TD>", $row['NumberOfChannels'], "</TD>";
	  echo "<TD>", $row['X'], "</TD>";
	  echo "<TD>", $row['Y'], "</TD>";
	  echo "<TD>", $row['Z'], "</TD>";
	  echo "<TD>", $row['Roll'], "</TD>";
	  echo "<TD>", $row['Pitch'], "</TD>";
	  echo "<TD>", $row['Yaw'], "</TD>";
	  echo "<TD>", $row['DrawDebugPoints'], "</TD>";
	  echo "<TD>", $row['DataFrame'], "</TD>";
	  /*
	  echo "<TD>", "<a href='update.php?userID=", $row['userID'], "'>수정</a></TD>";
	  echo "<TD>", "<a href='delete.php?userID=", $row['userID'], "'>삭제</a></TD>";
	  */
	  echo "</TR>";		  
   }
	echo "</TABLE>";
	
	echo "<TABLE border=1>";
	echo "<br>";
	
	echo "<TR>";
	echo "<TR>";
    echo "<TH>id</TH><TH>Tof_name</TH><TH>Manufacturer</TH><TH>FOV_Degrees</TH><TH>FOV_V</TH>";
    echo "<TH>Width</TH><TH>Height</TH><TH>Working_Range_min</TH><TH>Working_Range_max</TH>";
    echo "<TH>Frame_Rate</TH><TH>Accuracy</TH><TH>ImageType</TH>";
	echo "</TR>";	
    while($row = mysqli_fetch_array($tof_result) ) {
 	  echo "<TR>";
	  echo "<TD>", $row['id'], "</TD>";
	  echo "<TD>", $row['tof_name'], "</TD>";
	  echo "<TD>", $row['Manufacturer'], "</TD>";
	  echo "<TD>", $row['FOV_Degrees'], "</TD>";
	  echo "<TD>", $row['FOV_V'], "</TD>";
	  echo "<TD>", $row['Width'], "</TD>";
	  echo "<TD>", $row['Height'], "</TD>";
	  echo "<TD>", $row['Working_Range_min'], "</TD>";
	  echo "<TD>", $row['Working_Range_max'], "</TD>";
	  echo "<TD>", $row['Frame_Rate'], "</TD>";
	  echo "<TD>", $row['Accuracy'], "</TD>";
	  echo "<TD>", $row['ImageType'], "</TD>";
	  /*
	  echo "<TD>", "<a href='update.php?userID=", $row['userID'], "'>수정</a></TD>";
	  echo "<TD>", "<a href='delete.php?userID=", $row['userID'], "'>삭제</a></TD>";
	  */
	  echo "</TR>";		  
   }	
   mysqli_close($con);
   echo "</TABLE>"; 
   
?>
