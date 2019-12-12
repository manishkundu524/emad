<?php 
  session_start(); 
  $con=mysqli_connect("localhost","root","","hellodoc");
 $m=$_SESSION['mobile'];
  if (!isset($_SESSION['mobile'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: patientlogin.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['mobile']);
  	header("location: patientlogin.php");
  }
  if (isset($_GET['home'])) {
    session_destroy();
    unset($_SESSION['mobile']);
    header("location: patientlogin.php");
}
?>





<html>
<center>
<h2>patient Section</h2>
</center>
<head>
 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../assets/ico/favicon.ico">

    <title> patient </title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/bootstrap-theme.min.css" rel="stylesheet">
	 <link href="css/style.css" rel="stylesheet">
	<style type ="text/css">
	body {
	margin-top: 100px;
	}
	</style>
</head>


  <div class="navbar navbar-inverse navbar-fixed-top">
  <div class ="container">
  
  
	<ul class = "nav navbar-nav navbar-right">
<body>




<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                            <ul class="nav navbar-nav navbar-right">
                                                
                                                
                                                <li><a href="pprofile.php">My Appointment</a></li>
												
                                                <li><a href ="namesearch.php">Search Doctor By Name</a></li>
                                                <li><a href="categorysearch.php">Search Doctor By Category</a></li>
												
                                                <li><a href="diseasesearch.php">Search Doctor By Disease</a></li>
												                               <!--<li><a href="#">ITEMS</a></li>


                                                  
                 

																	
																	
												<li><a href="#feedback">Feedback</a></li>-->				
                                                                </div>
        
		
</ul></div>
</div>

<div class="page-header">
            </div><!-- /container -->
    

</body>
<script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="/js/docs.min.js"></script>
 
</html>






<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="header">
	<h2>         <?php
    $a="select * from patientaccount where mobile='$m'";
            $result=mysqli_query($con,$a);
            $user=mysqli_fetch_array($result);
            ?><br><?php
                echo "WELCOME";?><br><?php
                echo $user['name'];
                ?></h2>
</div>
<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>
            <?php
    $a="select * from patientaccount where mobile='$m'";
            $result=mysqli_query($con,$a);
            $user=mysqli_fetch_array($result);
            ?><br><?php
                echo $user['name'];
                ?> 
 <!-- logged in user information -->
    <?php  if (isset($_SESSION['mobile'])) : ?>
    	<p><strong><?php echo $_SESSION['mobile']; ?></strong></p>
    	<p> <a href="patientcreated.php?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?>
</div>
		
</body>
</html>


