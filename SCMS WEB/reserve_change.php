
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
$id = $_SESSION['id'];
$rn=$_POST['RN'];
$st=$_POST['ST'];
$et=$_POST['ET'];
$people = $_POST['PEOPLE'];
$facility = $_POST['Facility'];

$query = "SELECT R_ID,U_ID FROM RES WHERE U_ID = '$id' and R_ID = '$rn'";
$stmt=oci_parse($con, $query);
oci_execute($stmt);

if($row = oci_fetch_array($stmt)){
	$updatequery1 = "UPDATE RES SET START_T='$st' WHERE R_ID='$rn'";
		$stmt2 = oci_parse($con, $updatequery1);
	oci_execute($stmt2);
	$updatequery2 = "UPDATE RES SET END_T='$et' WHERE R_ID='$rn'";
		$stmt3 = oci_parse($con, $updatequery2);
	oci_execute($stmt3);
	$updatequery3 = "UPDATE RES SET PEOPLE='$people' WHERE R_ID='$rn'";
		$stmt4 = oci_parse($con, $updatequery3);
	oci_execute($stmt4);
	$updatequery4 = "UPDATE RES SET F_ID='$facility' WHERE R_ID='$rn'";
		$stmt5 = oci_parse($con, $updatequery4);
	oci_execute($stmt5);
	
		echo '<script> alert("예약변경 완료.");</script>';
		echo "<script>location.href='mypage.checkReserve.php';</script>";
	
	

}

else
	{
		
		
		echo '<script> alert("예약번호 없음.");</script>';
		echo "<script>location.href='mypage.changeReserve.php';</script>";

	
	}







oci_close($con);

?>
<html>


</html>