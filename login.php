<!DOCTYPE html>
<html>
<head>
 <title> Dictionary : Login Page</title>
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
                    <form style="margin-top:100px">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" name="password" id="password" placeholder="Password">
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