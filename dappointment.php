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
	<h2>Appointments</h2>
</div>
<div class="content">

<form name="form" action="dappointment.php" method="POST">
<table><tr><td>
<input type="submit" name="alot" value="Alloted"></td>  <td>
  <input type="submit" name="pend" value="Pending">
<td><tr></table>
</form>






<strong>
<?php
$email=$_SESSION['email'];





if(isset($_POST["alot"])){
    
    $q = "SELECT * FROM doctoraccount WHERE email='$email'";
    $r=mysqli_query($con, $q);
$u=mysqli_fetch_array($r);

    $query = "SELECT * FROM appointment WHERE email='$email'and status='Aloted'";
    $result = mysqli_query($con, $query);
while ($user = mysqli_fetch_array($result))
{
    echo "<table border='5'><tr><td>";
        echo $user['patient'];
        
    echo "</td>";
    echo "<td>";
        echo $user['mobile'];
       
        echo "</td>";
    echo "<td>";
        echo $user['time'];
      
        echo "</td>";
    echo "<td>";
        echo $user['date'];
        
        echo "</td>";
    echo "<td>";
        echo $user['status'];
       
        echo "</td>";
        echo "</tr>";
        echo "</table>";
        echo "<br>";
}
    mysqli_close($con);
}


if(isset($_POST["pend"])){
    
        $q = "SELECT * FROM doctoraccount WHERE email='$email'";
    $r=mysqli_query($con, $q);
$u=mysqli_fetch_array($r);
//echo $u['name'];
$doctor=$u['name'];

    $query = "SELECT * FROM appointment WHERE doctor='$doctor' AND email='$email' and status='pending'";
    $result = mysqli_query($con, $query);
while ($user= mysqli_fetch_array($result))
{
    echo "<table border='1' ><tr><td>";
        echo $user['patient'];
        echo "  .";
    echo "</td>";
    echo "<td>";
        echo $user['mobile'];
        echo "   .";
        echo "</td>";
    echo "<td>";
        echo $user['time'];
        echo "    .";
        echo "</td>";
    echo "<td>";
        echo $user['date'];
        echo "   .";
        echo "</td>";
    echo "<td>";
        echo $user['status'];
        echo "   .";
        echo "</td>";
        echo "</tr>";
        echo "</table>";
        echo "<br>";
        
       
        
       ?><form name="form1" action="dappointment.php" method="POST">

<input type="submit" name="alotd" value="ALOT"></form><?php 


        
}

    mysqli_close($con);
}
if(isset($_POST["alotd"])){


    $q = "SELECT * FROM doctoraccount WHERE email='$email'";
    $r=mysqli_query($con, $q);
$u=mysqli_fetch_array($r);
//echo $u['name'];
$doctor=$u['name'];

    $query = "SELECT * FROM appointment WHERE doctor='$doctor' AND email='$email' and status='pending'";
    $result = mysqli_query($con, $query);
$user= mysqli_fetch_array($result);
    $p=$user['patient'];
    
    $qu = "UPDATE appointment
    SET status = 'Aloted'
    WHERE patient='$p'";
$r=mysqli_query($con, $qu)  ;
if($r){
echo "appointment aloted";
}
else{
echo "error";
}
}
 
 
 ?> 








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
                                                <li><a href="home1.php">HOME</a></li>
                                                <li><a href="dprofile.php">My Profile</a></li>
												
                                                
												
                                                <li><a href="dappointment.php">Appointment</a></li>
                                                <li><a href="feedback.php">Feedback</a></li>
                                        
<li><a href="#contact"><?php
$con=mysqli_connect("localhost","root","","hellodoc"); 
$e=$_SESSION['email'];
    $a="select * from doctoraccount where email='$e'";
            $result=mysqli_query($con,$a);
            $user=mysqli_fetch_array($result);
            ?><?php
                echo $user['name'];
                ?></a></li>



    <li><?php  if (isset($_SESSION['email'])) :
    	 ?><a href="doctorcreate.php?logout='1'" style="color: red;">LOGOUT</a>
    <?php endif ?></li>
    
                                                  
                 

																	
																	
															
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


