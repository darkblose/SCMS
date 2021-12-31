<?php

  session_start();
  $con = oci_connect("b589060","party","203.249.87.162:1521/orcl");
  error_reporting(E_ALL);
  ini_set('display_errors', 1); 

  $query = "SELECT U_ID FROM USERS WHERE U_ID='{$_SESSION['id']}'";
  $stmt = oci_parse($con, $query);
  oci_execute($stmt);

  $deletequery2 = "DELETE FROM RES WHERE U_ID IN (SELECT U_ID FROM USERS WHERE U_ID='{$_SESSION['id']}')";
  $dstmt2 = oci_parse($con,$deletequery2);
  oci_execute($dstmt2);



  $deletequery3 = "DELETE FROM USERS WHERE U_ID IN (SELECT U_ID FROM USERS WHERE U_ID='{$_SESSION['id']}')";
  $dstmt3 = oci_parse($con, $deletequery3);
  oci_execute($dstmt3);
  
  session_destroy();
  echo '<script> alert("회원탈퇴를 완료했습니다."); </script>';
  echo "<script>location.href='index.php';</script>";
  
  oci_close($con);
  ?>
