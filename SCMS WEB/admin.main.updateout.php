<?php

  $con = oci_connect("B589060","party","203.249.87.162:1521/orcl");
  error_reporting(E_ALL);
  ini_set('display_errors', 1); 

  
   $cn = $_POST['CN'];
    $sd = $_POST['SD'];
        $ed = $_POST['ED'];

  $query = "SELECT Con_NUM FROM CON WHERE CON_NUM='$cn'";
  $stmt = oci_parse($con, $query);
  oci_execute($stmt);

	($row = oci_fetch_array($stmt));

     if($cn!=$row[0]){
	     echo ' <script> alert("해당계약번호가 없음.");</script>';
     echo "<script>location.href='admin.main.update.php';</script>";


}


   $updatequery1 = "UPDATE CON SET START_DATE='$sd' where CON_NUM = '$cn'";
     $stmt2 = oci_parse($con, $updatequery1);
     oci_execute($stmt2);
       $updatequery2 = "UPDATE CON SET END_DATE='$ed' where CON_NUM = '$cn'";
     $stmt3 = oci_parse($con, $updatequery2);
     oci_execute($stmt3);

     echo ' <script> alert("계약 갱신됨.");</script>';
     echo "<script>location.href='admin.main.check.php';</script>";






  oci_close($con);
  ?>
