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
   $ImageType = $_POST['ImageType'];

   $tof_sql ="UPDATE tof_spec SET id='".$id_tof."', Manufacturer='".$Manufacturer_tof;
   $tof_sql = $tof_sql."', FOV_Degrees='".$FOV_Degrees."', FoV_V='".$FOV_V."',Width='".$Width;
   $tof_sql = $tof_sql."', Height='".$Height."', Working_Range_min='".$Working_Range_min;
   $tof_sql = $tof_sql."', Working_Range_max='".$Working_Range_max."', Frame_Rate='".$Frame_Rate."',Accuracy='".$Accuracy."',ImageType='".$ImageType."' WHERE tof_name='".$tof_name."'";
    
   $tof_ret = mysqli_query($con, $tof_sql);

   $tof_sql ="INSERT INTO tof_spec VALUES('".$id_tof."', '".$tof_name."', '".$Manufacturer_tof;
   $tof_sql = $tof_sql."', '".$FOV_Degrees."', '".$FOV_V."','".$Width;
   $tof_sql = $tof_sql."', '".$Height."', '".$Working_Range_min."','".$Working_Range_max;
   $tof_sql = $tof_sql."', '".$Frame_Rate."', '".$Accuracy."', '".$ImageType."')";
   
   $tof_ret = mysqli_query($con, $tof_sql);


    echo "<h1> 입력 완료 </h1>";
    if($tof_ret) {
	    echo $tof_name." 성공적으로 추가됨..<br>";
    }
    else {
	    echo "데이터 추가 실패!!!"."<br>";
	    echo "실패 원인 :".mysqli_error($con);
    } 
    mysqli_close($con);
	
	echo "<br> <a href='main.html'> <--초기 화면</a> ";
?>