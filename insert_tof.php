<HTML>
<HEAD>
<META http-equiv="content-type" content="text/html; charset=utf-8">
<META http-equiv="imagetoolbar" content="no">
<META http-equiv="X-UA-Compatible" content="IE=edge">
<script src="https://code.jquery.com/jquery-latest.js"></script>
</HEAD>
<BODY>



<FORM METHOD="post"  ACTION="insert_result.php">
	<h1> Tof Camera </h1>
	id : <INPUT TYPE ="int" NAME="id_tof"> <br>
	tof_name : <INPUT TYPE ="text" NAME="tof_name"> <br>
	Manufacturer : <INPUT TYPE ="text" NAME="Manufacturer_tof"> <br>
	FOV_Degrees : <INPUT TYPE ="float" NAME="FOV_Degrees"> <br>
	FOV_V : <INPUT TYPE ="float" NAME="FOV_V"> <br>
	Width : <INPUT TYPE ="int" NAME="Width"> <br>
	Height : <INPUT TYPE ="int" NAME="Height"> <br>
	Working_Range_min : <INPUT TYPE ="float" NAME="Working_Range_min"> <br>
	Working_Range_max : <INPUT TYPE ="float" NAME="Working_Range_max"> <br>
	Frame_Rate : <INPUT TYPE ="int" NAME="Frame_Rate"> <br>
	Accuracy : <INPUT TYPE ="int" NAME="Accuracy"> <br>
	ImageType : <INPUT TYPE ="int" NAME="ImageType"> <br>
	<BR>
</FORM>
	 
<label><input type="button" value='submit' onclick="include_click()"></a><br></label>

<div id="include_page"></div>
</form>	

	 <script type="text/javascript">
		function include_click(){
				$.ajax({
					url : "insert_tof_result.php",
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