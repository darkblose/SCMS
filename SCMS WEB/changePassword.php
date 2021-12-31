
<?php
session_start();

error_reporting(E_ALL);

ini_set("display_errors", 1);

$con = oci_connect("b589060","party","203.249.87.162:1521/orcl");
if(!$con) {
	echo "No Connection";
	exit();
}
?>

<?php
$query = "SELECT * FROM USERS WHERE U_ID = '{$_SESSION['id']}'";
$stmt=oci_parse($con, $query);
oci_execute($stmt);

$npw=$_POST['EPW'];
$npwc=$_POST['EPWC'];
if($npw != $npwc)
	{
		echo '<script> alert("변경할 패스워드가 다름.");</script>';
		echo "<script>location.href='mypage.changePassword.php';</script>";
		exit();
	}
else
	{
		
		$updatequery = "UPDATE USERS SET PASSWORD='$npw' WHERE U_ID='{$_SESSION['id']}'";
		$stmt2 = oci_parse($con, $updatequery);
		oci_execute($stmt2);
		echo '<script> alert("비밀번호 변경됨.");</script>';
		echo "<script>location.href='main.php';</script>";

	
	}








oci_close($con);

?>
<html>


</html>