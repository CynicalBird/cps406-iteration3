<?php
include "registration.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>CPS406</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="custom.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

    
     <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
          
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                          </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li ><a href="index.php"><span class="glyphicon glyphicon-info-sign"></span> About Us</a></li>
                    <li class="activeed"><a href="login.php"><span class="glyphicon glyphicon-user"></span>Login</a></li>
                </ul>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!--End Nav Bar-->
<div class="jumbotron green">
  <div class="container">
  <br/>  
  <br/>  
  <br/>  
  <br/>  
  <h1 style="font-size: 38px;">Government of Ontario</h1>
  <p>Problem Management Website.</p>
  </div>
</div>
    
    <div class="container pageContent">
        <div class="row">
            <div class="col-sm-6 col-md-4 col-md-offset-4">

           

                <div class="account-wall">
                        <h1 class="text-center login-title">Please Register an Account</h1>
                        <hr>
                        <form class="form-signin" action="register.php" method="post" enctype="multipart/form-data" autocomplete="off"/><br/>
                            <input type="text" class="form-control" placeholder="Name" name="username" required autofocus/><br/>
                            <input type="email" class="form-control" placeholder="Email" name="email" required /><br/>
                            <input type="password" class="form-control" placeholder="Password" name="password" autocomplete="new-password" required /><br/>
                            <input type="password" class="form-control" placeholder="Confirm Password" name="confirmpassword" autocomplete="new-password" required /><br/>
                            <input type="password" class="form-control" placeholder="Enter Authentication PIN" name="vendorAuth" required/><br/>
                            <input type="submit" value="Register" name="register" class="btn btn-lg btn-success btn-block"/><br/>
                            <div class="alert"> <?= $_SESSION['message'] ?></div>
                        </form>
                        
                    </div>
                
            </div>
        </div>
        <!--End Side-->
    </div>  
    

</body>
</html>

<!-- This page uses sources from http://bootsnipp.com/snippets/featured/google-style-login -->