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

   $lidar_sql ="UPDATE lidar_spec SET id='".$id_lidar."', Manufacturer='".$Manufacturer_lidar;
   $lidar_sql = $lidar_sql."', VerticalFOVLower='".$VerticalFOVLower."', VerticalFOVUpper='".$VerticalFOVUpper."',HorizontalFOVStart='".$HorizontalFOVStart;
   $lidar_sql = $lidar_sql."', HorizontalFOVEnd='".$HorizontalFOVEnd."', RotationsPerSecond='".$RotationsPerSecond."',PointsPerSecond='".$PointsPerSecond;
   $lidar_sql = $lidar_sql."', Range_Min='".$Range_Min."', Range_Max='".$Range_Max."',Range_Accuracy='".$Range_Accuracy;
   $lidar_sql = $lidar_sql."', Range_Precision='".$Range_Precision."',Angular_Accuracy='".$Angular_Accuracy; 
   $lidar_sql = $lidar_sql."', AngularResolution_H='".$AngularResolution_H."', AngularResolution_V='".$AngularResolution_V;
   $lidar_sql = $lidar_sql."', SensorType='".$SensorType."',Enabled='".$Enabled."',NumberOfChannels='".$NumberOfChannels."',X='".$X."',Y='".$Y."',Z='".$Z; 
   $lidar_sql = $lidar_sql."', Roll='".$Roll."',Pitch='".$Pitch."',Yaw='".Yaw;
   $lidar_sql = $lidar_sql."', DrawDebugPoints='".$DrawDebugPoints."',DataFrame='".$DataFrame."' WHERE Lidar_Name='".$Lidar_Name."'";
   
   $lidar_ret = mysqli_query($con, $lidar_sql);

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
	
	
	
	
	<INPUT TYPE ="hidden" NAME="tof_name" VALUE="">
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