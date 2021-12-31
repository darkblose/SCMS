<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"></head>
<body>
<?php

ini_set('display_errors','0');


	session_start();

	$id = $_POST['id'];
	$pw = $_POST['PW'];


	$conn = oci_connect("b589060", "party", "203.249.87.162:1521/orcl");
	$query = "select * from users where U_ID='$id' AND PASSWORD='$pw'";

	$stmt = oci_parse($conn, $query);
	oci_execute($stmt);
	$row_num = oci_fetch_all($stmt, $row);

	if($row_num == 1)
	{
		echo '<script> alert("SCMS에 오신걸 환영합니다.");</script>';
	 	$_SESSION['id']=$id;
		
		echo "<script>location.href='main.php';</script>";

	} else
	{
			echo "<script>location.href='login_checkout.php';</script>";
	}
	oci_close($conn);
?>

</body>
</html>
