<?php
error_reporting(E_ALL);

ini_set("display_errors", 1);

$con = oci_connect("b589060","party","203.249.87.162:1521/orcl");
if(!$con) {
	echo "No Connection";
	exit();
}
?>
<?php
$id=$_POST['id'];
$pw=$_POST['pw'];
$pwc=$_POST['pwc'];
$Fname=$_POST['Fname'];
$Lname=$_POST['Lname'];
$Address1=$_POST['address1'];
$Address2=$_POST['address2'];
$phone=$_POST['phone'];
$mem=$_POST['MEM'];

if($pw!=$pwc)
{
	echo  '<script> alert("패스워드가 일치하지 않음.");</script>';
	echo "<script>location.href='signUp.php';</script>";
	exit();
}
if($id==NULL || $pw==NULL || $Fname==NULL || $Lname==NULL || $Address1==NULL || $Address2==NULL || $phone==NULL)
{
	echo "빈칸을 채워주세요.";
	echo "<script>location.href='signUp.php';</script>";
	exit();
}


$stmt = oci_parse($con, "insert into USERS (U_ID, PASSWORD, FIRST_NAME, LAST_NAME, ADDRESS_1, ADDRESS_2, P_NUM)
 VALUES ('".$id."', '".$pw."', '".$Fname."',  '".$Lname."',  '".$Address1."',  '".$Address2."',  '".$phone."')");

oci_execute($stmt);

$stmt2 = oci_parse($con, "insert into M (U_ID,M_TYPE)
 VALUES('".$id."','".$mem."')");
oci_execute($stmt2);

if($stmt){
	echo '<script> alert("정상적으로 가입되었습니다.");</script>';
	echo "<script>location.href='login.php';</script>";


}

oci_close($con);

?>
<html>


</html>
