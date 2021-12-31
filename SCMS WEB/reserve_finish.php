<?php
 function GenerateString($length)  
{  
    $characters  = "0123456789";  
    $characters .= "ABCDEFGHIJKLMNOPQRSTUVWXYZ";  
      
    $string_generated = "";  
      
    $nmr_loops = $length;  
    while ($nmr_loops--)  
    {  
        $string_generated .= $characters[mt_rand(0, strlen($characters) - 1)];  
    }  
      
    return $string_generated;  
}  


 session_start();
 $con = oci_connect("b589060","party","203.249.87.162:1521/orcl");
 error_reporting(E_ALL);
 ini_set('display_errors', 0); 
 error_reporting(E_ALL);

if(!$con) {
	echo "No Connection";
	exit();
}
$ST=$_POST['ST'];
$ET=$_POST['ET'];
$PEOPLE=$_POST['PEOPLE'];
$FACILITY=$_POST['Facility'];

$USER_ID = $_SESSION['id'];
$RID= GenerateString(4);

$select_query = "SELECT C_ID FROM F_M WHERE F_ID='{$FACILITY}'";
$result_set = oci_parse($con, $select_query);
oci_execute($result_set);
$PARTNERSHIP_ID = oci_fetch_array($result_set);

$stmt = oci_parse($con, "insert into RES (R_ID, START_T, END_T, PEOPLE, F_ID, C_ID, U_ID)
 VALUES ('".$RID."', '".$ST."', '".$ET."',  '".$PEOPLE."',  '".$FACILITY."',  '".$PARTNERSHIP_ID[C_ID]."',  '".$USER_ID."')");

oci_execute($stmt);

if($stmt){
	echo '<script> alert("정상적으로 예약되었습니다.");</script>';
	echo "<script>location.href='main.php';</script>";


}

oci_close($con);

?>
<html>


</html>
