<?php
   
   $con=mysqli_connect("localhost", "root", "1234", "tablelist") or die("MySQL 접속 실패 !!");

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
   
   $tof_sql ="UPDATE tof_spec SET id='".$id_tof."', Manufacturer='".$Manufacturer_tof;
   $tof_sql = $tof_sql."', FOV_Degrees='".$FOV_Degrees."', FoV_V='".$FOV_V."',Width='".$Width;
   $tof_sql = $tof_sql."', Height='".$Height."', Working_Range_min='".$Working_Range_min;
   $tof_sql = $tof_sql."', Working_Range_max='".$Working_Range_max."', Frame_Rate='".$Frame_Rate."',Accuracy='".$Accuracy."', ImageType='".$ImageType."' WHERE tof_name='".$tof_name."'";
    
   $tof_ret = mysqli_query($con, $tof_sql);

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
	<INPUT TYPE ="hidden" NAME="Lidar_Name" VALUE="">
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