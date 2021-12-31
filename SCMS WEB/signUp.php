<!DOCTYPE html>
<html lang="en">
<style>
	:root {
  --input-padding-x: 1.5rem;
  --input-padding-y: .75rem;
}

body {
  background-image: url("./img/ba.jpg");
 
}

.card-signin {
  border: 0;
  border-radius: 1rem;
  box-shadow: 0 0.5rem 1rem 0 rgba(0, 0, 0, 0.1);
}

.card-signin .card-title {
  margin-bottom: 2rem;
  font-weight: 300;
  font-size: 1.5rem;
}

.card-signin .card-body {
  padding: 2rem;
}

.form-signin {
  width: 100%;
}

.form-signin .btn {
  font-size: 80%;
  border-radius: 5rem;
  letter-spacing: .1rem;
  font-weight: bold;
  padding: 1rem;
  transition: all 0.2s;
}

.form-label-group {
  position: relative;
  margin-bottom: 1rem;
}

.form-label-group input {
  height: auto;
  border-radius: 2rem;
}

.form-label-group>input,
.form-label-group>label {
  padding: var(--input-padding-y) var(--input-padding-x);
}

.form-label-group>label {
  position: absolute;
  top: 0;
  left: 0;
  display: block;
  width: 100%;
  margin-bottom: 0;
  /* Override default `<label>` margin */
  line-height: 1.5;
  color: #495057;
  border: 1px solid transparent;
  border-radius: .25rem;
  transition: all .1s ease-in-out;
}

.form-label-group input::-webkit-input-placeholder {
  color: transparent;
}

.form-label-group input:-ms-input-placeholder {
  color: transparent;
}

.form-label-group input::-ms-input-placeholder {
  color: transparent;
}

.form-label-group input::-moz-placeholder {
  color: transparent;
}

.form-label-group input::placeholder {
  color: transparent;
}

.form-label-group input:not(:placeholder-shown) {
  padding-top: calc(var(--input-padding-y) + var(--input-padding-y) * (2 / 3));
  padding-bottom: calc(var(--input-padding-y) / 3);
}

.form-label-group input:not(:placeholder-shown)~label {
  padding-top: calc(var(--input-padding-y) / 3);
  padding-bottom: calc(var(--input-padding-y) / 3);
  font-size: 12px;
  color: #777;
}

.btn-google {
  color: white;
  background-color: #ea4335;
}



/* Fallback for Edge
-------------------------------------------------- */

@supports (-ms-ime-align: auto) {
  .form-label-group>label {
    display: none;
  }
  .form-label-group input::-ms-input-placeholder {
    color: #777;
  }
}

/* Fallback for IE
-------------------------------------------------- */

@media all and (-ms-high-contrast: none),
(-ms-high-contrast: active) {
  .form-label-group>label {
    display: none;
  }
  .form-label-group input:-ms-input-placeholder {
    color: #777;
  }
}
</style>


<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SCMS-LOGIN</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min2.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
    <div class="container">
      <a class="navbar-brand" href="index.php">SCMS</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
      <li class="nav-item ">
            <a class="nav-link" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.about.php">About</a>
          </li>
          <li class="nav-item active">
             <a class="nav-link" href="login.php">Login
              <span class="sr-only">(current)</span>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
 <!-- This snippet uses Font Awesome 5 Free as a dependency. You can download it at fontawesome.io! -->

<body>
  <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center">SignUp</h5>
             <form action="signUp_finish.php" method="post" class="form-signin">
              <div >
<label for="inputEmail">ID</label>
                <input type="text" id="inputEmail" name="id" class="form-control" placeholder="ID" required autofocus>
                
              </div>


              <div >
	  <label for="inputPassword">Password</label>
                <input type="password" id="inputPassword" name="pw" class="form-control" placeholder="Password" required>
              
              </div>
	  <div >
	 <label for="inputPassword">ConfirmPassword</label>
                <input type="password" id="inputPasswordC" name="pwc" class="form-control" placeholder="Confirm Password" required>
               
              </div>
 <hr class="my-4">
	   <div >
	<label for="inputEmail">FNAME</label>
                <input type="text" id="inputF" name="Fname" class="form-control" placeholder="FIRST NAME" required >
                
              </div>
	   <div >
    <label for="inputEmail">LNAME</label>
                <input type="text" id="inputL" name="Lname" class="form-control" placeholder="LAST NAME" required >
            
              </div>
	   <hr class="my-4">
	   <div>
	   <label for="inputEmail">ADDRESS1</label>
                <input type="text" id="inputA1" name="address1" class="form-control" placeholder="ADDRESS1" required >
             
              </div>
	  <div >
	<label for="inputEmail">ADDRESS2</label>
                <input type="text" id="inputA2" name="address2" class="form-control" placeholder="ADDRESS2" required >
                
              </div>
 <hr class="my-4">
	  <div>
	  <label for="inputEmail">01x-xxxx-xxxx</label>
                <input type="text" id="inputPn" name="phone" class="form-control" placeholder="01X-XXXX-XXXX" required >
              
              </div>
<label for="Facility"> MemberShip</label>
		    	<div class="selectbox">
			      <select class="form_control" name="MEM"/>
               <option value="1">BRONZE</option>
               <option value="2">SILVER</option>
               <option value="3">GOLD</option>
               <option value="4">PLATINUM</option>
               <option value="5">DIAMOND</option>
                            </select>
		      </div>

	    
	  

          </br>
              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Sign up</button>
              <hr class="my-4">
                           
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.slim2.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle2.min.js"></script>

</body>

</html>
