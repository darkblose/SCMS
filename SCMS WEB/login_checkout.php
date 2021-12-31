<?php

ini_set('display_errors','0');
	session_start();
	$check_id = $_SESSION['login_id'];

	$conn = oci_connect("b589060", "party", "203.249.87.162:1521/orcl");

	$checkquery = "select * from users where U_ID = '$id'";

	$row = oci_fetch_array($checkquery);
	$check_session = $row['U_ID'];

	if(!isset($check_session))
	{
			echo '<script> alert("로그인에 실패하였습니다.");</script>';
			echo"<script>location.href='login.php';</script>";
	}
oci_close($conn);
?>
