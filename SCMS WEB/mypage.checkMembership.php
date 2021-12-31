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

        <h1 class="my-4">MyPage</h1>
        <div class="list-group">
          <a href="mypage.memberWithdrawal.php" class="list-group-item">회원탈퇴</a>
	<a href="mypage.checkPassword.php" class="list-group-item">비밀번호 변경</a>
          <a href="mypage.checkReserve.php" class="list-group-item">예약 조회</a>
          <a href="mypage.changeReserve.php" class="list-group-item">예약 변경</a>
	<a href="mypage.cancelReserve.php" class="list-group-item">예약 취소</a>
	<a href="mypage.checkMembership.php" class="list-group-item">멤버쉽 조회</a>
        </div>
	</div>



	
	


<div class="col-lg-9">
<form action="mypage.checkoutMembership.php" method="post">
<h2> Member Withdrawal</h2>
</br></br></br>

 <div id="carouselExampleIndicators" class="class-indicator" data-ride="carousel">
 <div class="form-label-group">
     
	<button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">멤버십조회</button>

              </div>
	</br></br>
</div>
</div>
</form>
</div>




  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2019</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
