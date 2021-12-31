<?php

ini_set('display_errors','0');
	session_start();
	$check_id = $_SESSION['login_aid'];

	$conn = oci_connect("b589060", "party", "203.249.87.162:1521/orcl");

	$checkquery = "select * from admin where ID = '$a_id'";

	$row = oci_fetch_array($checkquery);
	$check_session = $row['ID'];

	if(!isset($check_session))
	{
			echo '<script> alert("로그인에 실패하였습니다.");</script>';
			echo"<script>location.href='admin.php';</script>";
	}
oci_close($conn);
?>
