<!DOCTYPE html>
<html>
<head>
 <title> Dictionary :  Signup</title>
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>
<body>

    <!-- Navigation -->

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">

<div class="container">

  <a class="navbar-brand" href="#">Dictionary</a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">

    <span class="navbar-toggler-icon"></span>

  </button>

  <div class="collapse navbar-collapse" id="navbarResponsive">

    <ul class="navbar-nav ml-auto">

      <li class="nav-item active">

        <a class="nav-link" href="#">Login

          <span class="sr-only">(current)</span>

        </a>

      </li>

      <li class="nav-item">

        <a class="nav-link" href="#">Account</a>

      </li>

      <li class="nav-item">

        <a class="nav-link" href="#">About</a>

      </li>


    </ul>

  </div>

</div>

</nav>



<!-- Page Content -->

<div class="container">

<div class="row">

  	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<!-- Start form -->
                    <form style="margin-top:100px" action="validate.php" method="POST">
                      <div class="form-group">
                        <label for="exampleInputFirstname">First Name</label>
                        <input type="first name" class="form-control" id="exampleInputFirstname" aria-describedby="emailHelp" placeholder="Enter First Name">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputLastname">Last Name</label>
                        <input type="last name" class="form-control"  id="exampleInputLastname" placeholder="Enter Last Name">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmailAddress">Email Address</label>
                        <input type="emailaddress" class="form-control" name="email" id="email" placeholder="Enter Email Address">                      
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmailAddress">Birth Date</label>
                        <input type="birthdate" class="form-control" name="birthdate" id="email" placeholder="Enter Birth Date">                      
                      </div>                      
                      <div class="form-group">
                        <label for="exampleInputEmailAddress">Gender</label>
                        <select>
<option value="male">Male</option>
<option value="female">Female</option>
</select>                      
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmailAddress">Password</label>
                        <input type="password" class="form-control" name="password" id="email" placeholder="Enter Password">                      
                      </div>
                      <div class="form-check">
                        <button class="btn btn-info" type="button" name="showpassword" id="showpassword" value="Show Password"> Reset password</button> 
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="signup.php"> Dont have an account? Register </a>
                      </div>
                      
                      
                      
                      
                    </form>


			<!-- End form -->
		</div>

</div>

</div>


</body>
</html> 