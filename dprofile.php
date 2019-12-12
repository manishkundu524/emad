<?php 
  session_start(); 
  $con=mysqli_connect("localhost","root","","hellodoc");
 $e=$_SESSION['email'];
  if (!isset($_SESSION['email'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: doctorlogin.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['email']);
  	header("location: doctorlogin.php");
  }
?>
<?php if (isset($_SESSION['success'])) : ?>
	        	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      
  	<?php endif ?>

    <!-- logged in user information -->
    









    

<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="header">
	<h2>Profile</h2>
</div>
<div class="content">



















<table>
<tr><td>Name:</td>
<td> <?php $con=mysqli_connect("localhost","root","","hellodoc");
            $m=$_SESSION['mobile'];
    $a="select * from doctoraccount where email='$e'";
            $result=mysqli_query($con,$a);
            $user=mysqli_fetch_array($result);
            ?><?php
                echo $user['name'];
                ?></a>
</td></tr>
<tr><td>Age:</td>
<td><?php $con=mysqli_connect("localhost","root","","hellodoc");
            $m=$_SESSION['mobile'];
    $a="select * from doctoraccount where email='$e'";
            $result=mysqli_query($con,$a);
            $user=mysqli_fetch_array($result);
            ?><?php
                echo $user['age'];
                ?></a></td></tr>
<tr><td>email:</td>
<td><?php  if (isset($_SESSION['email'])) : ?>
    	<?php echo $_SESSION['email']; ?></strong></p>
    	 </p>
    <?php endif ?></td></tr>
<tr><td>Mobile:</td>
<td><?php $con=mysqli_connect("localhost","root","","hellodoc");
            $m=$_SESSION['mobile'];
    $a="select * from doctoraccount where email='$e'";
            $result=mysqli_query($con,$a);
            $user=mysqli_fetch_array($result);
            ?><?php
                echo $user['number'];
                ?></a></td></tr>
<tr><td>Address:</td>
<td><?php $con=mysqli_connect("localhost","root","","hellodoc");
            $m=$_SESSION['mobile'];
    $a="select * from doctoraccount where email='$e'";
            $result=mysqli_query($con,$a);
            $user=mysqli_fetch_array($result);
            ?><?php
                echo $user['caddress'];
                ?></a></td></tr>
<tr><td>Fee charge:</td>
<td><?php $con=mysqli_connect("localhost","root","","hellodoc");
            $m=$_SESSION['mobile'];
    $a="select * from doctoraccount where email='$e'";
            $result=mysqli_query($con,$a);
            $user=mysqli_fetch_array($result);
            ?><?php
                echo $user['fee'];
                ?></a></td></tr>
<tr><td>Timing:</td>
<td><?php $con=mysqli_connect("localhost","root","","hellodoc");
            $m=$_SESSION['mobile'];
    $a="select * from doctoraccount where email='$e'";
            $result=mysqli_query($con,$a);
            $user=mysqli_fetch_array($result);
            ?><?php
                echo $user['time'];
                echo $user['times'];
                ?></a></td></tr>




</table>

</div>
<body>
  	
		
</body>
</html>








<html>
<center>
<h2></h2>
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
                                                
                                                <li><a href="dprofile.php">My Profile</a></li>
												
                                                
												
                                                <li><a href="dappointment.php">Appointment</a></li>
												                               

	
                                                  
                 

																	
																	
												<li><a href="feedback.php">Feedback</a></li>
                                                <li><a href="dprofile.php"><?php
            $con=mysqli_connect("localhost","root","","hellodoc");
            $e=$_SESSION['email'];
    $a="select * from doctoraccount where email='$e'";
            $result=mysqli_query($con,$a);
            $user=mysqli_fetch_array($result);
            ?>
            
           
            
            <?php
                echo $user['name'];
                ?></a></li>


        <li>
        <?php  if (isset($_SESSION['email'])) :
    	 ?><a href="doctorcreate.php?logout='1'" style="color: red;">LOGOUT</a>
    <?php endif ?>  </a></li>				
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

</html>


