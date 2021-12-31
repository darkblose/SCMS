
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
$pwc=$_POST['PWC'];
$id = $_SESSION['id'];

$query = "SELECT * FROM USERS WHERE U_ID = '$id' and PASSWORD= '$pwc'";
$stmt=oci_parse($con, $query);
oci_execute($stmt);

if($row = oci_fetch_array($stmt)){
	echo "<script>location.href='mypage.changePassword.php';</script>";

}

	
else
	{
		
		
		echo '<script> alert("비밀번호 틀림.");</script>';
		echo "<script>location.href='mypage.checkPassword.php';</script>";

	
	}








oci_close($con);

?>
<html>


</html>