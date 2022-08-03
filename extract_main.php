<html>
<head>
<meta charset="utf-8">
<META http-equiv="content-type" content="text/html; charset=utf-8">
<META http-equiv="imagetoolbar" content="no">
<META http-equiv="X-UA-Compatible" content="IE=edge">
<script src="https://code.jquery.com/jquery-latest.js"></script>
</head>
<body>
<form  method='post'>
	 LiDAR<br><br>
     <select name="Lidar_Name" >
         <option value="" hidden="hidden">Select Option</option>
         <?php
		 // mysql과 연결
		 $con=mysqli_connect("localhost", "root", "1234", "tablelist") or die("MySQL 접속 실패 !!");
         // mysql 명령어를 저장한 변수 생성
		 $lidar = mysqli_query($con, "select Lidar_Name from lidar_spec")or die(mysqli_error());
           // mysql에 저장된 데이터를 전부 부를 때까지 반복
		   while($row=mysqli_fetch_array($lidar)){
              // 변수에 Lidar_Name을 불러오기
			  $optionid=$row['Lidar_Name'];
              echo "<option value='$optionid'>" . $optionid . "</option>";
           }
		   echo "<option value='None'>" . "None" . "</option>";
		   
		 ?>
	 </select>
	 <br><br><br>

	Tof_Camera<br><br>
	 <select name="tof_name">
         <option value="" hidden="hidden">Select Option</option>
         <?php
		 // mysql과 연결
         // mysql 명령어를 저장한 변수 생성

		 $tof = mysqli_query($con, "select tof_name from tof_spec")or die(mysqli_error());
			 // mysql에 저장된 데이터를 전부 부를 때까지 반복
			 while($row=mysqli_fetch_array($tof)){
				// 변수에 tof_name을 불러오기
				$optionid=$row['tof_name'];
				echo "<option value='$optionid'>" . $optionid . "</option>";
			 }
		 echo "<option value='None'>" . "None" . "</option>";
         ?>
     
	 </select>
	 <br><br><br>
	 
	 <label><input type="button" value='submit' onclick="include_click()"></a><br></label>
	 
 
	 <div id="include_page"></div>
</form>	

	 <script type="text/javascript">
		function include_click(){
				$.ajax({
					url : "extract_check.php",
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


	 
	 


	 

