<?php
	session_start();
	$tof_get = $_SESSION['tof_value'];
	$lidar_get = $_SESSION['$lidar_value'];
	//echo $tof_get;
    //echo $lidar_get;
	
	$con=mysqli_connect("localhost", "root", "1234", "tablelist") or die("MySQL 접속 실패 !!");
	
	$lidar_sql ="SELECT * FROM lidar_spec WHERE Lidar_Name='$lidar_get'"; 
	$tof_sql ="SELECT * FROM tof_spec WHERE tof_name='$tof_get'";
	
	// mysql에 명령 전달 - 해당 하는 이름을 가진 센서 데이터를 전부 가지고 와라
	$lidar_ret = mysqli_query($con, $lidar_sql);   
	$tof_ret = mysqli_query($con, $tof_sql);   
	
	// 아이디가 존재하는지 확인 (사실상 필요없음)
	if($lidar_ret) {
		$count = mysqli_num_rows($lidar_ret);
		if ($count==0) {
			echo $lidar_get." 아이디의 회원이 없음!!!"."<br>";	
			exit();	
		}		   
	}
	if($tof_ret) {
		$count = mysqli_num_rows($tof_ret);
		if ($count==0) {
			echo $lidar_get." 아이디의 회원이 없음!!!"."<br>";	
			exit();	
		}		   
	}
	else {
		echo "데이터 조회 실패!!!"."<br>";
		echo "실패 원인 :".mysqli_error($con);
		echo "<br> <a href='main.html'> <--초기 화면</a> ";
		exit();
	}   	

    $row = mysqli_fetch_array($lidar_ret);
	$column = mysqli_fetch_array($tof_ret);

	$id_lidar = $row['id'];
	$Lidar_Name = $row['Lidar_Name'];
	$Manufacturer_lidar = $row['Manufacturer'];
	$VerticalFOVLower = $row['VerticalFOVLower'];
	$VerticalFOVUpper = $row['VerticalFOVUpper'];
	$HorizontalFOVStart = $row['HorizontalFOVStart'];
	$HorizontalFOVEnd = $row['HorizontalFOVEnd'];
	$RotationsPerSecond = $row['RotationsPerSecond'];
	$PointsPerSecond = $row['PointsPerSecond'];
	$Range_Min = $row['Range_Min'];
	$Range_Max = $row['Range_Max'];
	$Range_Accuracy = $row['Range_Accuracy'];
	$Range_Precision = $row['Range_Precision'];
	$Angular_Accuracy = $row['Angular_Accuracy'];
	$AngularResolution_H = $row['AngularResolution_H'];
	$AngularResolution_V = $row['AngularResolution_V'];
    $SensorType = $row["SensorType"];
    $Enabled = $row["Enabled"];
	$NumberOfChannels = $row["NumberOfChannels"];
    $X = $row["X"];
    $Y = $row["Y"];
    $Z = $row["Z"];
    $Roll = $row["Roll"];
    $Pitch = $row["Pitch"];
    $Yaw = $row["Yaw"];
    $DrawDebugPoints = $row["DrawDebugPoints"];
    $DataFrame = $row["DataFrame"];
	
	$id_tof = $column['id'];
	$tof_name = $column['tof_name'];
	$Manufacturer_tof = $column['Manufacturer'];
	$FOV_Degrees = $column['FOV_Degrees'];
	$FOV_V = $column['FOV_V'];
	$Width = $column['Width'];
	$Height = $column['Height'];
	$Working_Range_min = $column['Working_Range_min'];
	$Working_Range_max = $column['Working_Range_max'];
	$Frame_Rate = $column['Frame_Rate'];
	$Accuracy = $column['Accuracy'];
	$ImageType = $column['ImageType'];

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
	id : <INPUT TYPE ="int" NAME="id_lidar" VALUE=<?php echo $id_lidar ?> READONLY> <br>
	Lidar_Name : <INPUT TYPE ="text" NAME="Lidar_Name" VALUE="<?php echo $Lidar_Name ?>" READONLY> <br>
	Manufacturer : <INPUT TYPE ="text" NAME="Manufacturer_lidar" VALUE=<?php echo $Manufacturer_lidar ?> READONLY> <br>
	VerticalFOVLower : <INPUT TYPE ="smallint" NAME="VerticalFOVLower" VALUE=<?php echo $VerticalFOVLower ?>> <br>
	VerticalFOVUpper : <INPUT TYPE ="smallint" NAME="VerticalFOVUpper" VALUE=<?php echo $VerticalFOVUpper ?>> <br>
	HorizontalFOVStart : <INPUT TYPE ="smallint" NAME="HorizontalFOVStart" VALUE=<?php echo $HorizontalFOVStart ?>> <br>
	HorizontalFOVEnd : <INPUT TYPE ="smallint" NAME="HorizontalFOVEnd" VALUE=<?php echo $HorizontalFOVEnd ?>> <br>
	RotationsPerSecond : <INPUT TYPE ="tinyint" NAME="RotationsPerSecond" VALUE=<?php echo $RotationsPerSecond ?>> <br>
	PointsPerSecond : <INPUT TYPE ="int" NAME="PointsPerSecond" VALUE=<?php echo $PointsPerSecond ?>> <br>
	Range_Min : <INPUT TYPE ="float" NAME="Range_Min" VALUE=<?php echo $Range_Min ?>> <br>
	Range_Max : <INPUT TYPE ="float" NAME="Range_Max" VALUE=<?php echo $Range_Max ?>> <br>
	Range_Accuracy : <INPUT TYPE ="tinyint" NAME="Range_Accuracy" VALUE=<?php echo $Range_Accuracy ?>> <br>
	Range_Precision : <INPUT TYPE ="tinyint" NAME="Range_Precision" VALUE=<?php echo $Range_Precision ?>> <br>
	Angular_Accuracy : <INPUT TYPE ="float" NAME="Angular_Accuracy" VALUE=<?php echo $Angular_Accuracy ?>> <br>
	AngularResolution_H : <INPUT TYPE ="float" NAME="AngularResolution_H" VALUE=<?php echo $AngularResolution_H ?>> <br>
	AngularResolution_V : <INPUT TYPE ="float" NAME="AngularResolution_V" VALUE=<?php echo $AngularResolution_V ?>> <br>
	SensorType : <INPUT TYPE ="int" NAME="SensorType" VALUE=<?php echo $SensorType ?>> <br>
	Enabled : <INPUT TYPE ="text" NAME="Enabled" VALUE=<?php echo $Enabled ?>> <br>
	NumberOfChannels : <INPUT TYPE ="int" NAME="NumberOfChannels" VALUE=<?php echo $NumberOfChannels ?>> <br>
	X : <INPUT TYPE ="int" NAME="X" VALUE=<?php echo $X ?>> <br>
	Y : <INPUT TYPE ="int" NAME="Y" VALUE=<?php echo $Y ?>> <br>
	Z : <INPUT TYPE ="int" NAME="Z" VALUE=<?php echo $Z ?>> <br>
	Roll : <INPUT TYPE ="int" NAME="Roll" VALUE=<?php echo $Roll ?>> <br>
	Pitch : <INPUT TYPE ="int" NAME="Pitch" VALUE=<?php echo $Pitch ?>> <br>
	Yaw : <INPUT TYPE ="int" NAME="Yaw" VALUE=<?php echo $Yaw ?>> <br>
	DrawDebugPoints : <INPUT TYPE ="text" NAME="DrawDebugPoints" VALUE=<?php echo $DrawDebugPoints ?>> <br>
	DataFrame : <INPUT TYPE ="text" NAME="DataFrame" VALUE=<?php echo $DataFrame ?>> <br>
	<BR>

	<h1> Tof Camera </h1>
	id : <INPUT TYPE ="int" NAME="id_tof" VALUE=<?php echo $id_tof ?> READONLY> <br>
	tof_name : <INPUT TYPE ="text" NAME="tof_name" VALUE="<?php echo $tof_name ?>" READONLY> <br>
	Manufacturer : <INPUT TYPE ="text" NAME="Manufacturer_tof" VALUE=<?php echo $Manufacturer_tof ?> READONLY> <br>
	FOV_Degrees : <INPUT TYPE ="float" NAME="FOV_Degrees" VALUE=<?php echo $FOV_Degrees ?>> <br>
	FOV_V : <INPUT TYPE ="float" NAME="FOV_V" VALUE=<?php echo $FOV_V ?>> <br>
	Width : <INPUT TYPE ="int" NAME="Width" VALUE=<?php echo $Width ?>> <br>
	Height : <INPUT TYPE ="int" NAME="Height" VALUE=<?php echo $Height ?>> <br>
	Working_Range_min : <INPUT TYPE ="float" NAME="Working_Range_min" VALUE=<?php echo $Working_Range_min ?>> <br>
	Working_Range_max : <INPUT TYPE ="float" NAME="Working_Range_max" VALUE=<?php echo $Working_Range_max ?>> <br>
	Frame_Rate : <INPUT TYPE ="int" NAME="Frame_Rate" VALUE=<?php echo $Frame_Rate ?>> <br>
	Accuracy : <INPUT TYPE ="int" NAME="Accuracy" VALUE=<?php echo $Accuracy ?>> <br>
	ImageType : <INPUT TYPE ="int" NAME="ImageType" VALUE=<?php echo $ImageType ?>> <br>
	<BR>
	
	<label><input type="button" value='수정' onclick="insert_click('extract_both_result.php')"</a>&nbsp;</label>
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