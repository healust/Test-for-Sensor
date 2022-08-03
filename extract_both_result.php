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
   
   
   $lidar_sql ="UPDATE lidar_spec SET id='".$id_lidar."', Manufacturer='".$Manufacturer_lidar;
   $lidar_sql = $lidar_sql."', VerticalFOVLower='".$VerticalFOVLower."', VerticalFOVUpper='".$VerticalFOVUpper."',HorizontalFOVStart='".$HorizontalFOVStart;
   $lidar_sql = $lidar_sql."', HorizontalFOVEnd='".$HorizontalFOVEnd."', RotationsPerSecond='".$RotationsPerSecond."',PointsPerSecond='".$PointsPerSecond;
   $lidar_sql = $lidar_sql."', Range_Min='".$Range_Min."', Range_Max='".$Range_Max."',Range_Accuracy='".$Range_Accuracy;
   $lidar_sql = $lidar_sql."', Range_Precision='".$Range_Precision."',Angular_Accuracy='".$Angular_Accuracy; 
   $lidar_sql = $lidar_sql."', AngularResolution_H='".$AngularResolution_H."', AngularResolution_V='".$AngularResolution_V;
   $lidar_sql = $lidar_sql."', SensorType='".$SensorType."',Enabled='".$Enabled."',NumberOfChannels='".$NumberOfChannels."',X='".$X."',Y='".$Y."',Z='".$Z; 
   $lidar_sql = $lidar_sql."', Roll='".$Roll."',Pitch='".$Pitch."',Yaw='".$Yaw;
   $lidar_sql = $lidar_sql."', DrawDebugPoints='".$DrawDebugPoints."',DataFrame='".$DataFrame."' WHERE Lidar_Name='".$Lidar_Name."'";
   
   
   
   $tof_sql ="UPDATE tof_spec SET id='".$id_tof."', Manufacturer='".$Manufacturer_tof;
   $tof_sql = $tof_sql."', FOV_Degrees='".$FOV_Degrees."', FoV_V='".$FOV_V."',Width='".$Width;
   $tof_sql = $tof_sql."', Height='".$Height."', Working_Range_min='".$Working_Range_min;
   $tof_sql = $tof_sql."', Working_Range_max='".$Working_Range_max."', Frame_Rate='".$Frame_Rate."',Accuracy='".$Accuracy."', ImageType='".$ImageType."' WHERE tof_name='".$tof_name."'";
    
   $lidar_ret = mysqli_query($con, $lidar_sql);
   $tof_ret = mysqli_query($con, $tof_sql);
   /*
   echo "<h1> 수정 결과 </h1>";
   if($lidar_ret && $tof_ret) {
	   echo "데이터가 성공적으로 수정됨.";
   }
   else {
	   echo "데이터 수정 실패!!!"."<br>";
	   echo "실패 원인 :".mysqli_error($con);
   } 
   mysqli_close($con);
   
   echo "<br> <a href='main.html'> <--초기 화면</a> ";
   */
?>
<HTML>
<HEAD>
<META http-equiv="content-type" content="text/html; charset=utf-8">
<META http-equiv="imagetoolbar" content="no">
<META http-equiv="X-UA-Compatible" content="IE=edge">
<script src="https://code.jquery.com/jquery-latest.js"></script>
</HEAD>
<BODY>


<FORM METHOD="post">
	<h1> LiDAR </h1>
	id : <INPUT TYPE ="int" NAME="id_lidar"style="background-color: #e2e2e2" VALUE=<?php echo $id_lidar ?> READONLY> <br>
	Lidar_Name : <INPUT TYPE ="text" NAME="Lidar_Name"style="background-color: #e2e2e2" VALUE="<?php echo $Lidar_Name ?>" READONLY> <br>
	Manufacturer : <INPUT TYPE ="text" NAME="Manufacturer_lidar"style="background-color: #e2e2e2" VALUE=<?php echo $Manufacturer_lidar ?> READONLY> <br>
	VerticalFOVLower : <INPUT TYPE ="smallint" NAME="VerticalFOVLower"style="background-color: #e2e2e2" VALUE=<?php echo $VerticalFOVLower ?> READONLY> <br>
	VerticalFOVUpper : <INPUT TYPE ="smallint" NAME="VerticalFOVUpper"style="background-color: #e2e2e2" VALUE=<?php echo $VerticalFOVUpper ?> READONLY> <br>
	HorizontalFOVStart : <INPUT TYPE ="smallint" NAME="HorizontalFOVStart"style="background-color: #e2e2e2" VALUE=<?php echo $HorizontalFOVStart ?> READONLY> <br>
	HorizontalFOVEnd : <INPUT TYPE ="smallint" NAME="HorizontalFOVEnd"style="background-color: #e2e2e2" VALUE=<?php echo $HorizontalFOVEnd ?> READONLY> <br>
	RotationsPerSecond : <INPUT TYPE ="tinyint" NAME="RotationsPerSecond"style="background-color: #e2e2e2" VALUE=<?php echo $RotationsPerSecond ?> READONLY> <br>
	PointsPerSecond : <INPUT TYPE ="int" NAME="PointsPerSecond"style="background-color: #e2e2e2" VALUE=<?php echo $PointsPerSecond ?> READONLY> <br>
	Range_Min : <INPUT TYPE ="float" NAME="Range_Min"style="background-color: #e2e2e2" VALUE=<?php echo $Range_Min ?> READONLY> <br>
	Range_Max : <INPUT TYPE ="float" NAME="Range_Max"style="background-color: #e2e2e2" VALUE=<?php echo $Range_Max ?> READONLY> <br>
	Range_Accuracy : <INPUT TYPE ="tinyint" NAME="Range_Accuracy"style="background-color: #e2e2e2" VALUE=<?php echo $Range_Accuracy ?> READONLY> <br>
	Range_Precision : <INPUT TYPE ="tinyint" NAME="Range_Precision"style="background-color: #e2e2e2" VALUE=<?php echo $Range_Precision ?> READONLY> <br>
	Angular_Accuracy : <INPUT TYPE ="float" NAME="Angular_Accuracy"style="background-color: #e2e2e2" VALUE=<?php echo $Angular_Accuracy ?> READONLY> <br>
	AngularResolution_H : <INPUT TYPE ="float" NAME="AngularResolution_H"style="background-color: #e2e2e2" VALUE=<?php echo $AngularResolution_H ?> READONLY> <br>
	AngularResolution_V : <INPUT TYPE ="float" NAME="AngularResolution_V"style="background-color: #e2e2e2" VALUE=<?php echo $AngularResolution_V ?> READONLY> <br>
	SensorType : <INPUT TYPE ="int" NAME="SensorType"style="background-color: #e2e2e2" VALUE=<?php echo $SensorType ?> READONLY> <br>
	Enabled : <INPUT TYPE ="text" NAME="Enabled"style="background-color: #e2e2e2" VALUE=<?php echo $Enabled ?> READONLY> <br>
	NumberOfChannels : <INPUT TYPE ="int" NAME="NumberOfChannels"style="background-color: #e2e2e2" VALUE=<?php echo $NumberOfChannels ?> READONLY> <br>
	X : <INPUT TYPE ="int" NAME="X"style="background-color: #e2e2e2" VALUE=<?php echo $X ?> READONLY> <br>
	Y : <INPUT TYPE ="int" NAME="Y"style="background-color: #e2e2e2" VALUE=<?php echo $Y ?> READONLY> <br>
	Z : <INPUT TYPE ="int" NAME="Z"style="background-color: #e2e2e2" VALUE=<?php echo $Z ?> READONLY> <br>
	Roll : <INPUT TYPE ="int" NAME="Roll"style="background-color: #e2e2e2" VALUE=<?php echo $Roll ?> READONLY> <br>
	Pitch : <INPUT TYPE ="int" NAME="Pitch"style="background-color: #e2e2e2" VALUE=<?php echo $Pitch ?> READONLY> <br>
	Yaw : <INPUT TYPE ="int" NAME="Yaw"style="background-color: #e2e2e2" VALUE=<?php echo $Yaw ?> READONLY> <br>
	DrawDebugPoints : <INPUT TYPE ="text" NAME="DrawDebugPoints"style="background-color: #e2e2e2" VALUE=<?php echo $DrawDebugPoints ?> READONLY> <br>
	DataFrame : <INPUT TYPE ="text" NAME="DataFrame"style="background-color: #e2e2e2" VALUE=<?php echo $DataFrame ?> READONLY> <br>	
	<BR>

	<h1> Tof Camera </h1>
	id : <INPUT TYPE ="int" NAME="id_tof"style="background-color: #e2e2e2" VALUE=<?php echo $id_tof ?> READONLY> <br>
	tof_name : <INPUT TYPE ="text" NAME="tof_name"style="background-color: #e2e2e2" VALUE="<?php echo $tof_name ?>" READONLY> <br>
	Manufacturer : <INPUT TYPE ="text" NAME="Manufacturer_tof"style="background-color: #e2e2e2" VALUE=<?php echo $Manufacturer_tof ?> READONLY> <br>
	FOV_Degrees : <INPUT TYPE ="float" NAME="FOV_Degrees"style="background-color: #e2e2e2" VALUE=<?php echo $FOV_Degrees ?> READONLY> <br>
	FOV_V : <INPUT TYPE ="float" NAME="FOV_V"style="background-color: #e2e2e2" VALUE=<?php echo $FOV_V ?> READONLY> <br>
	Width : <INPUT TYPE ="int" NAME="Width"style="background-color: #e2e2e2" VALUE=<?php echo $Width ?> READONLY> <br>
	Height : <INPUT TYPE ="int" NAME="Height"style="background-color: #e2e2e2" VALUE=<?php echo $Height ?> READONLY> <br>
	Working_Range_min : <INPUT TYPE ="float" NAME="Working_Range_min"style="background-color: #e2e2e2" VALUE=<?php echo $Working_Range_min ?> READONLY> <br>
	Working_Range_max : <INPUT TYPE ="float" NAME="Working_Range_max"style="background-color: #e2e2e2" VALUE=<?php echo $Working_Range_max ?> READONLY> <br>
	Frame_Rate : <INPUT TYPE ="int" NAME="Frame_Rate"style="background-color: #e2e2e2" VALUE=<?php echo $Frame_Rate ?> READONLY> <br>
	Accuracy : <INPUT TYPE ="int" NAME="Accuracy"style="background-color: #e2e2e2" VALUE=<?php echo $Accuracy ?> READONLY> <br>
	ImageType : <INPUT TYPE ="int" NAME="ImageType"style="background-color: #e2e2e2" VALUE=<?php echo $ImageType ?> READONLY> <br>
	<BR>
	<label><input type="button" value='내보내기' onclick="insert_click('export to txt.php')"></a><br></label>

	<div id="include_page"></div>
</FORM>	

	 <script type="text/javascript">
		function insert_click(_url){
				$.ajax({
					url : _url,
					type : "post",
					data : $("form").serialize(),
					success: function(data) {
						$('#include_page').html(data);
					},
						error: function() {
						$('#include_page').text('페이지 점검중 입니다.');
					}
				});

			}
	</script>

</BODY>
</HTML>