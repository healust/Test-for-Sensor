<?php
	session_start();
	$tof_get = $_SESSION['tof_value'];
	//echo $tof_get;
    //echo $lidar_get;
	
	$con=mysqli_connect("localhost", "root", "1234", "tablelist") or die("MySQL 접속 실패 !!");
	
	$tof_sql ="SELECT * FROM tof_spec WHERE tof_name='$tof_get'";
	
	// mysql에 명령 전달 - 해당 하는 이름을 가진 센서 데이터를 전부 가지고 와라
 
	$tof_ret = mysqli_query($con, $tof_sql);   
	
	// 아이디가 존재하는지 확인 (사실상 필요없음)
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

	$column = mysqli_fetch_array($tof_ret);

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
	<INPUT TYPE ="hidden" NAME="Lidar_Name" VALUE="">
	<BR>
	
	<label><input type="button" value='수정' onclick="insert_click('extract_tof_result.php')"</a>&nbsp;</label>
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