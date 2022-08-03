<?php   
   $con=mysqli_connect("localhost", "root", "1234", "tablelist") or die("MySQL 접속 실패 !!");

	// 해당되는 데이터 불러오기
	if($_POST["Lidar_Name"] != "") {
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
       $X = $_POST["X"];
       $Y = $_POST["Y"];
       $Z = $_POST["Z"];
       $Roll = $_POST["Roll"];
       $Pitch = $_POST["Pitch"];
       $Yaw = $_POST["Yaw"];
       $DrawDebugPoints = $_POST["DrawDebugPoints"];
       $DataFrame = $_POST["DataFrame"];
	   $NumberOfChannels = $_POST["NumberOfChannels"];
		
	   $lidar_file = fopen("lidar_spec.json", "w") or die("Unable to open file!");
	   // $lidar_file = fopen("lidar_spec.txt", "w") or die("Unable to open file!");

	   $txt = "\"LidarSensor1\" : {\n\t\"SensorType\" : $SensorType,\n\t\"Enabled\" : $Enabled,\n\t\"NumberOfChannels\" : $NumberOfChannels,\n\t\"RotationsPerSecond\" : $RotationsPerSecond,\n\t\"PointsPerSecond\" : $PointsPerSecond,\n\t\"X\" : $X, \"Y\" : $Y, \"Z\" : $Z,\n\t\"Roll\" : $Roll, \"Pitch\" : $Pitch, \"Yaw\" : $Yaw,\n\t\"VerticalFOVUpper\" : $VerticalFOVUpper,\n\t\"VerticalFOVLower\" : $VerticalFOVLower,\n\t\"HorizontalFOVStart\" : $HorizontalFOVStart,\n\t\"HorizontalFOVEnd\" : $HorizontalFOVStart,\n\t\"DrawDebugPoints\" : $DrawDebugPoints,\n\t\"DataFrame\" : $DataFrame\n },";
	   //$txt = "id,Lidar_Name,Manufacturer,VerticalFOVLower,VerticalFOVUpper,HorizontalFOVStart,HorizontalFOVEnd,RotationsPerSecond,PointsPerSecond,Range_Min,Range_Max,Range_Accuracy,Range_Accuracy,Range_Precision,Angular_Accuracy,AngularResolution_H,AngularResolution_V\n";
	   fwrite($lidar_file, $txt);
	   //fwrite($lidar_file, "$id_lidar,$Lidar_Name,$Manufacturer_lidar,$VerticalFOVLower,$VerticalFOVUpper,$HorizontalFOVStart,$HorizontalFOVEnd,$RotationsPerSecond,$PointsPerSecond,$Range_Min,$Range_Max,$Range_Accuracy,$Range_Precision,$Angular_Accuracy,$AngularResolution_H,$AngularResolution_V\n");

	}

	if($_POST["tof_name"] != "") {
	   $id_tof = $_POST['id_tof'];
	   $tof_name = $_POST['tof_name'];
	   $Manufacturer_tof = $_POST['Manufacturer_tof'];
	   $FOV_Degrees = $_POST['FOV_Degrees'];
	   $FOV_V = $_POST['FOV_V'];
	   $Width = $_POST['Width'];
	   $Height = $_POST['Height'];
	   $Working_Range_min = $_POST['Working_Range_min'];
	   $Working_Range_max = $_POST['Working_Range_max'];
	   $Frame_Rate = $_POST['Frame_Rate'];
	   $Accuracy = $_POST['Accuracy'];
	   $ImageType = $_POST["ImageType"];
		
	   $tof_file = fopen("tof_spec.json", "w") or die("Unable to open file!");
	   //$tof_file = fopen("tof_spec.txt", "w") or die("Unable to open file!");
	   
	   $txt = "\"CameraDefaults\" : {\n\t\"CaptureSettings\" : [\n\t\t{\n\t\t\t\"ImageType\" : $ImageType,\n\t\t\t\"Width\" : $Width,\n\t\t\t\"Height\" : $Height,\n\t\t\t\"FOV_Degrees\" : $FOV_Degrees\n\t\t}\n\t]\n},";
	   //$txt = "id,tof_name,Manufacturer,FOV_Degrees,FOV_V,Width,Height,Working_Range_min,Working_Range_max,Frame_Rate,Accuracy\n";
	   fwrite($tof_file, $txt);
	   //fwrite($tof_file, "$id_tof,$tof_name,$Manufacturer_tof,$FOV_Degrees,$FOV_V,$Width,$Height,$Working_Range_min,$Working_Range_max,$Frame_Rate,$Accuracy\n");
	   
	}
   echo "내보내기 완료";
?>