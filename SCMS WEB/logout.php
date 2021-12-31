<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"></head>
<body>

<?php
ini_set('display_errors','0');
	session_start();
	$res = session_destroy();

if($res)
{
	echo '<script> alert("로그아웃 되었습니다.");</script>';
	echo"<script>location.href='index.php';</script>";
}
else {
}

?>
