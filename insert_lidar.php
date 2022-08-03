<HTML>
<HEAD>
<META http-equiv="content-type" content="text/html; charset=utf-8">
<META http-equiv="imagetoolbar" content="no">
<META http-equiv="X-UA-Compatible" content="IE=edge">
<script src="https://code.jquery.com/jquery-latest.js"></script>
</HEAD>
<BODY>


<FORM METHOD="post"  ACTION="insert_result.php">
	<h1> LiDAR </h1>
	id : <INPUT TYPE ="int" NAME="id_lidar"> <br>
	Lidar_Name : <INPUT TYPE ="text" NAME="Lidar_Name"> <br>
	Manufacturer : <INPUT TYPE ="text" NAME="Manufacturer_lidar"> <br>
	VerticalFOVLower : <INPUT TYPE ="smallint" NAME="VerticalFOVLower"> <br>
	VerticalFOVUpper : <INPUT TYPE ="smallint" NAME="VerticalFOVUpper"> <br>
	HorizontalFOVStart : <INPUT TYPE ="smallint" NAME="HorizontalFOVStart"> <br>
	HorizontalFOVEnd : <INPUT TYPE ="smallint" NAME="HorizontalFOVEnd"> <br>
	RotationsPerSecond : <INPUT TYPE ="tinyint" NAME="RotationsPerSecond"> <br>
	PointsPerSecond : <INPUT TYPE ="int" NAME="PointsPerSecond"> <br>
	Range_Min : <INPUT TYPE ="float" NAME="Range_Min"> <br>
	Range_Max : <INPUT TYPE ="float" NAME="Range_Max"> <br>
	Range_Accuracy : <INPUT TYPE ="tinyint" NAME="Range_Accuracy"> <br>
	Range_Precision : <INPUT TYPE ="tinyint" NAME="Range_Precision"> <br>
	Angular_Accuracy : <INPUT TYPE ="float" NAME="Angular_Accuracy"> <br>
	AngularResolution_H : <INPUT TYPE ="float" NAME="AngularResolution_H"> <br>
	AngularResolution_V : <INPUT TYPE ="float" NAME="AngularResolution_V"> <br>
	SensorType : <INPUT TYPE ="int" NAME="SensorType"> <br>
	NumberOfChannels : <INPUT TYPE ="int" NAME="NumberOfChannels"> <br>
	Enabled : <INPUT TYPE ="text" NAME="Enabled"> <br>
	X : <INPUT TYPE ="int" NAME="X"> <br>
	Y : <INPUT TYPE ="int" NAME="Y"> <br>
	Z : <INPUT TYPE ="int" NAME="Z"> <br>
	Roll : <INPUT TYPE ="int" NAME="Roll"> <br>
	Pitch : <INPUT TYPE ="int" NAME="Pitch"> <br>
	Yaw : <INPUT TYPE ="int" NAME="Yaw"> <br>
	DrawDebugPoints : <INPUT TYPE ="text" NAME="DrawDebugPoints"> <br>
	DataFrame : <INPUT TYPE ="text" NAME="DataFrame"> <br>
	<BR>
</FORM>

	 
<label><input type="button" value='submit' onclick="include_click()"></a><br></label>

<div id="include_page"></div>
</form>	

	 <script type="text/javascript">
		function include_click(){
				$.ajax({
					url : "insert_lidar_result.php",
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

</body>
</html>