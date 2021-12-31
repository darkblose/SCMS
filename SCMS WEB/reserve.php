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
            <a class="nav-link" href="index.php">Home
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

 </div>


	<!-- Booking -->
	<div class="col-lg-9" id="contact">
		<div class="container">
			<h3>RESERVE</h3>
			  <div class="booking-form-aits">
			  <form action="reserve_finish.php" method="post">
        <div class="col-lg-9">
	    	<label for="ST"> START TIME </label>                  
	      	<div>
            <input type="text" Name="ST" placeholder="00:00" class="margin-right" required="">
	      	</div>
        <label for="ET"> END TIME </label>
		    	<div>
			      <input type="text" name="ET" placeholder="24:00" required=""/>
		      </div>
   
	     	</br>
      	</br>
	     	</br>
	     	</br>
	      <label for="PEOPLE"> THE NUMBER OF PEOPLE </label>
	    	  <div>
            <input type="text" Name="PEOPLE" placeholder="THE NUMBER" class="margin-right" required="">
	      	</div>
        <label for="Facility"> Facility </label>
		    	<div class="selectbox">
			      <select name="Facility"/>
               <option value="7">Bowling</option>
               <option value="3">Cafe</option>
               <option value="1">Climbing</option>
               <option value="4">Golf</option>
               <option value="2">Gym</option>
               <option value="10">Pilates</option>
               <option value="5">Pool</option>
               <option value="8">Spinning</option>
               <option value="6">Squash</option>
               <option value="9">Table Tennis</option>
               </select>
		      </div>
		
       	</br>
      	</br>
	     	</br>
	     	</br>
				<div class="send-button agileits w3layouts">
					   <button class="btn btn-primary" input type ="submit" value = "submit">SUBMIT<span class="fa fa-long-arrow-right" aria-hidden="true"></span></button>
	    	</div>
	   	</form>
</br></br></br>
     </div>
	</div>
</div>
</div>
</div>
			<!-- //header --> 

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
