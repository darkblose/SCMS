<!DOCTYPE html>
<html lang="en">


<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Shop Homepage - Start Bootstrap Template</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/shop-homepage.css" rel="stylesheet">

</head>

<body>


  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-bottom">
    <div class="container">
      <a class="navbar-brand" href="main.php">SCMS</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="main.php">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="main.about.php">About</a>
          </li>
	<li class="nav-item">
            <a class="nav-link" href="reserve.php">Reserve</a>
          </li>
	  <li class="nav-item">
            <a class="nav-link" href="mypage.php">MyPage</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="logout.php">Logout</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>



  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <div class="col-lg-3">

        <h1 class="my-4">AdminPage</h1>
        <div class="list-group">
 <a href="admin.main.check.php" class="list-group-item">Check Contract</a>
	<a href="admin.main.update.php" class="list-group-item">Update Contract</a>
        </div>
	</div>



	
	


<div class="col-lg-9">
<form action="admin.main.checkout.php" method="post">
<h2> Check Contract</h2>
</br></br></br>

 <div id="carouselExampleIndicators" class="class-indicator" data-ride="carousel">
 <div class="form-label-group">
	<?php
session_start();
if( !$con = oci_connect("B589060","party","203.249.87.162:1521/orcl")) exit();

$sql = "SELECT con.con_num,center.c_id, center.c_name, con.start_date,con.end_date FROM con, con_m, center where con.con_num=con_m.con_num and con_m.c_id=center.c_id";
$stmt = oci_parse($con, $sql);
$ret = oci_execute($stmt);

if(!$ret) {
echo "오류"."<br>";
exit();
}




//echo "<h1> Check Contract </h1>";
echo "<TABLE border=4>";
echo "<TR>";
echo "<TH>계약 번호</TH><TH>센터 번호</TH><TH>센터 이름</TH><TH>시작 날짜</TH><TH>종료 날짜</TH>";
echo "</TR>";

while (($row = oci_fetch_array($stmt)) != false) {
echo "<TR>";
echo "<TD>", $row[0], "</TD>";
echo "<TD>", $row[1], "</TD>";
echo "<TD>", $row[2], "</TD>";
echo "<TD>", $row[3], "</TD>";
echo "<TD>", $row[4], "</TD>";

echo "</TR>";
}
?>
     
	<button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">계약 조회</button>

              </div>
	</br></br>
</div>
</div>
</form>

</div>





  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
