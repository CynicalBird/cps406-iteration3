<?php session_start();if(!isset($_SESSION['username'])){   header("Location:../login.php");} ?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <!--HTML5 encoding -->
        <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
        

        <title>Gov C.Servent Dash</title>
        <link rel="shortcut icon" href="#" />
        <!--mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="FoodBAE Homepage">
        <meta name="author" content="Food, Daily Deals">

        
        <!--[if lt IE 9]>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
        <![endif]-->

        <!--Load Bootstrap CDN-->
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        
        <!--Load custom css-->
        <link rel="stylesheet" href="customCSS.css">
        
        <link rel="stylesheet" href="../custom.css">
    </head>


<body>

    
     <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
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
                    <li ><a href="#"><span class="glyphicon glyphicon-info-sign"></span>About Us</a></li>
                    <li class="activeed"><a href="../login.php"><span class="glyphicon glyphicon-user"></span>Login</a></li>
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
  <p>Welcome, <?= $_SESSION['username'] ?>.</p>
  </div>
</div>

    <!-- Page Content -->
    <div class="container pageContent" >
        
        <div class="row">

            <div class="col-md-3">
                <div class="list-group">
                    <h4 class="lead text-center">Control Panel</h4>
                    <a href="dashboard.php" class="list-group-item activeed"> Dashboard<a>
                    <a href="dashboardStoreInfo.php" class="list-group-item"><span class="glyphicon glyphicon-pencil"></span> Open Tickets <a>
                    <a href="dashboardDealInfo.php" class="list-group-item"><span class="glyphicon glyphicon-pencil"></span> Closed Tickets <a>
                </div>
            </div>

            <div class="col-md-9">




            </div>

        </div>

    </div>
    <!-- /.container -->

    <div class="container text-center">

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->
    </body>
</html>