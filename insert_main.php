
<?php
/*
   $con=mysqli_connect("localhost", "root", "1234", "tablelist") or die("MySQL 접속 실패 !!");
   $sql ="SELECT * FROM lidar WHERE id='".$_GET['id']."'";

   $ret = mysqli_query($con, $sql);   
   if($ret) {
	   $count = mysqli_num_rows($ret);
	   if ($count==0) {
		   echo $_GET['id']." No data"."<br>";
		   echo "<br> <a href='main.html'> <--초기 화면</a> ";
		   exit();	
	   }		   
   }
   else {
	   echo "데이터 조회 실패!!!"."<br>";
	   echo "실패 원인 :".mysqli_error($con);
	   echo "<br> <a href='main.html'> <--초기 화면</a> ";
	   exit();
   }   
   $row = mysqli_fetch_array($ret);
   $id = $row['id'];
   #$name = $row["name"];
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

<!-- ajax를 이용해 페이지 이동 없이 특정 위치에 다른 페이지를 불러오기 -->
<label><input type="radio" id="tof" name="chk" value='1' onclick='insert_click()' style="display:none">Tof Camera&nbsp;</label>
<label><input type="radio" id="lidar" name="chk" value='2' onclick='insert_click()' style="display:none">Lidar</a><br></label>



<div id="insert_page"></div>


<!-- ajax 스크립트 -->
<script type="text/javascript">
    function insert_click(){
		if($("input:radio[id='tof']").is(":checked")==true){
			$.ajax({
				url : "insert_tof.php",
				type : "post",
				success: function(data) {
					$('#insert_page').html(data);
				},
					error: function() {
					$('#insert_page').text('페이지 점검중 입니다.');
				}
			});

		}
		
		if($("input:radio[id='lidar']").is(":checked")==true ){
			$.ajax({
				url : "insert_lidar.php",
				type : "post",
				success: function(data) {
					$('#insert_page').html(data);
				},
					error: function() {
					$('#insert_page').text('페이지 점검중 입니다.');
				}
			});
		}
		
    }
</script>


</BODY>
</HTML>