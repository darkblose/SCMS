<?php

  session_start();
  $con = oci_connect("b589060","party","203.249.87.162:1521/orcl");
  error_reporting(E_ALL);
  ini_set('display_errors', 1); 

  $rn = $_POST['RN'];
  $query = "SELECT R_ID FROM RES WHERE R_ID = '$rn'  AND U_ID='{$_SESSION['id']}'";
  $stmt = oci_parse($con, $query);
  oci_execute($stmt);

  $deletequery2 = "DELETE FROM RES WHERE R_ID IN(SELECT R_ID FROM RES WHERE R_ID='$rn')";
  $dstmt2 = oci_parse($con,$deletequery2);
  oci_execute($dstmt2);


  
  echo '<script> alert("예약이 취소되었습니다."); </script>';
  echo "<script>location.href='mypage.checkReserve.php';</script>";
  
  oci_close($con);
  ?>
