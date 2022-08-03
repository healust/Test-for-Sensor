
<?php
	// 선택된 Lidar 종류 : $_POST['Lidar_Name']
	// 선택된 tof 종류 : $_POST['tof_name']
	session_start();
	$Lidar_get = $_POST['Lidar_Name'];
	$tof_get = $_POST['tof_name'];
	$_SESSION['$lidar_value'] = $Lidar_get;
	$_SESSION['tof_value'] = $tof_get;
	/*
	if($_POST['Lidar_Name']=='None' && $_POST['tof_name']!='None' )
	{
		echo "<script> javascript: btnclick('extract_tof.php')</script>";
	}
	
	else if($_POST['Lidar_Name']!='None' && $_POST['tof_name']=='None' )
	{
		echo "<script>location.replace('extract_lidar.php')</script>";
	}
	
	else if (($_POST['Lidar_Name']!="" && $_POST['tof_name']!="") && ($_POST['Lidar_Name']!="None" && $_POST['tof_name']!="None")) {
			echo htmlentities($_POST['Lidar_Name'], ENT_QUOTES, "UTF-8");
			echo '<br><br>';
			echo htmlentities($_POST['tof_name'], ENT_QUOTES, "UTF-8");
			echo "<script>location.replace('extract_both.php')</script>";
	}
   	else {
		echo "task option is required";
		exit; 
	}
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

<div id="include_page"></div>

<script type="text/javascript">
    function btnclick(_url){		
			$.ajax({
				url : _url,
				type : "post",
				success: function(data) {
					$('#include_page').html(data);
				},
					error: function() {
					$('#include_page').text('페이지 점검중 입니다.');
				}
			});
	}
</script>

<script type="text/javascript">

	
	function wrongchoose(){		
			$.ajax({
				url : 'extract_main.php',
				type : "post",
				success: function(data) {
					var sum = 3;
					var timer = setInterval(function() {				
						$('#include_page').text('입력을 확인해주세요.\n'+ sum + '초 후에 extract 초기화면으로 넘어갑니다.');
						sum--;
						if(sum == 0) { clearInterval(timer); }

					}, 1000);
						setTimeout(() => $('#include_page').html(data), 4000);
				},
					error: function() {
					$('#include_page').text('페이지 점검중 입니다.');
				}
			});
	}
</script>

<script type="text/javascript">
	var lidar_html = '<?=$Lidar_get;?>';
	var tof_html = '<?=$tof_get;?>';
	
	if(lidar_html=='None' && tof_html !='None' )
	{

		btnclick('delete_tof.php');
	}
	else if(lidar_html !='None' && tof_html =='None' )
	{
		btnclick('delete_lidar.php');
	}
	
	else if ((lidar_html !="" && tof_html !="") && (lidar_html!="None" && tof_html!="None")) 
	{
		btnclick('delete_both.php');
	}
   	else {
		wrongchoose();
	}
</script>




</BODY>
</HTML>
