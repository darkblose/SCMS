<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"></head>
<body>
<?php

ini_set('display_errors','1');



	$a_id = $_POST['Aid'];
	$a_pw = $_POST['APW'];


	$conn = oci_connect("b589060", "party", "203.249.87.162:1521/orcl");
	$query = "select * from admin where A_ID='$a_id' AND PASSWORD = '$a_pw' ";

	$stmt = oci_parse($conn, $query);
	oci_execute($stmt);
	$row_num = oci_fetch_all($stmt, $row);
	

	if($row_num == 1)
	{
		echo '<script> alert("SCMS 관리자 모드.");</script>';
	 	
		
		echo "<script>location.href='admin.main.php';</script>";

	} else
	{
			echo "<script>location.href='admin_checkout.php';</script>";
	}
	oci_free_statement($stmt);
	oci_close($conn);
?>


</body>
</html>
