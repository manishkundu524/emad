<?php 
  session_start();
  $con=mysqli_connect("localhost","root","","hellodoc");
  $m=$_SESSION['mobile'];
$my=$_GET['id'];
$demail=$_GET['emailid'];
$time=$_GET['time'];
?>
<?php  if (!isset($_SESSION['mobile'])) :
    header('location: patientlogin.php');
    echo "kindly log in first";
    
    
    ?>
    
    
<?php endif ?> 





<?php


  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['mobile']);
    header("location: patientlogin.php");
}

?>
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

    <!-- logged in user information -->

   



<?php


if(isset($_POST["btn"])){
    $doctor=$_POST['doctor'];
    $demail=$_POST['demail'];
    $patient=$_POST["patient"];
    $time=$_POST["time"];
    $date=$_POST["date"];
    $mobile=$_SESSION['mobile'];
    

 //checking user is new
 $user_check_query = "SELECT * FROM appointment WHERE patient='$patient' AND email='$demail' LIMIT 1";
 $result = mysqli_query($con, $user_check_query);
 $user = mysqli_fetch_assoc($result);

if ($user) { // if user exists

 if ($user['patient'] === $patient) {
   echo "patient already exists";
   $error=$error+1;
 } 
}


if($error==0){

   $query=" INSERT INTO appointment (`doctor`,`email`,`patient`,`mobile`,`time`,`date`,`status`)
   VALUES ('$doctor','$demail','$patient',$mobile,'$time', '$date' , 'pending')";
   $res=mysqli_query($con, $query);
if($res==1){
        echo "successful";

        
    }else{
        echo "Error! Please Try Again";
    }
}
}

//$my=$_GET['id'];




?>
    <form name="details" action="edetails.php" method="POST">
    <table><tr><td>
    <strong>Doctor Name </strong></td><td> <input type="text" name="doctor" readonly="true" value= "<?php echo $my; ?>" >
    </td></tr><tr><td>

    
    <strong>Doctor Email</strong></td><td> <input type="text" name="demail" readonly="true" value= "<?php echo $demail; ?>" >
    

    </td></tr><tr><td>
    <strong>Patient Name</strong></td><td> <input type="text" name="patient"></td></tr>
 <tr><td><strong>Time</strong></td><td> <input type="time" name="time"readonly="true"value="<?php echo $time; ?>"></td> </tr>
     <tr> <td><strong>Date</strong></td><td> <input type="date" name="date"> </td></tr>
    <tr><td></td><td><input type="submit" name="btn"></td></tr>
    </table>
    </form>
    



<html>
<center>

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
                                            
                                                <li><a href="pprofile.php">My Profile</a></li>
												
                                                <li><a href="namesearch.php">Search Doctor By Name</a></li>
                                                <li><a href="categorysearch.php">Search Doctor By Category</a></li>
												
                                                <li><a href="diseasesearch.php">Search Doctor By Disease</a></li>
                                                <li><a href="feedback.php">FEEDBACK</a></li>	                              


                                                  
                 

																	
																	
												
                                                <li><a href="#home"><?php
    $a="select * from patientaccount where mobile='$m'";
            $result=mysqli_query($con,$a);
            $user=mysqli_fetch_array($result);
            ?><?php
                echo $user['name'];
                ?></a></li>	
                <li><a href="feedback.php">Feedback</a></li>
                <li><?php  if (isset($_SESSION['mobile'])) :
    	 ?><a href="patientcreated.php?logout='1'" style="color: red;">LOGOUT</a>
    <?php endif ?>  </li>		
                                                                </div>
        
		
</ul></div>
</div>

    

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



		
</body>
</html>




