<?php
session_start();
$errors=0;
$con=mysqli_connect("localhost","root","","hellodoc");
// REGISTER USER
if (isset($_POST['signin'])) {
  // receive all input values from the form
  $name = mysqli_real_escape_string($con, $_POST['name']);
  $age = mysqli_real_escape_string($con, $_POST['age']);
  $address = mysqli_real_escape_string($con, $_POST['address']);
  $mobile = mysqli_real_escape_string($con, $_POST['mobile']);
  $password = mysqli_real_escape_string($con, $_POST['password']);
  $aadhar = mysqli_real_escape_string($con, $_POST['aadhar']);
  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM patientaccount WHERE mobile='$mobile' LIMIT 1";
  $result = mysqli_query($con, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['mobile'] === $mobile) {
      $errors=$errors+1; 
      echo "mobile no already exists";
    }
  }
  // Finally, register user if there are no errors in the form
  if ($errors== 0) {
    $query="INSERT INTO `patientaccount` (`name`, `age`, `address`, `mobile`, `pwd`, `aadhar`) 
  VALUES ('$name', $age, '$address', '$mobile', '$password', '$aadhar')";
  
    mysqli_query($con, $query);
    
  	$_SESSION['mobile'] = $mobile;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: patientcreated.php');
  }
}

?>





<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../assets/ico/favicon.ico">


    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap theme -->
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="theme.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<style type ="text/css">
	body {
	margin-top: 100px;
	}
	</style>
  </head>

  <body role="document">

    <!-- Fixed navbar -->
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="navbar-collapse collapse">
           <ul class="nav navbar-nav navbar-right">
                                           
            <li class="active"><a href="home1.php">Home</a></li>
            <li><a href="doctorlogin.php">DOCTOR LOGIN/SIGNUP</a></li>
            
		   <!--<li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li class="dropdown-header">Nav header</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>-->
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
                            </div>	
                        </div>

                    </div>

                </div>
            </header> <!--End of header -->





  <h1> <marquee>Welcome Patients To Create Account </marquee> </h1>
  
  <header class = "page-header">
  
  <ul class = "nav nav-pills pull-right ">
	
  
            
            </ul>
			

    

 <div class="page-header">
 <div class ="jumbotron">
 
 <div  class ="row">
		<div   class =" col-lg-12" " col-lg-6" " col-lg-4"> 
		
		
		
		
		
        <h1> Welcome Patients/Clients </h2>
		
				
        
		<h2> Create An Account</h2>
		<div   class =" col-lg-6" " col-md-6" " col-sm-6"> 
		
		<img src ="image/imgp.jpg" class ="img-responsive" alt="Patient Login">
		</div>
		<div   class =" col-lg-6" " col-md-6" " col-sm-6"> 
		<h2>  </h2>

		
		
		
        
		<h2> Fill Yours Details</h2>
		
 
 
 
 
 
 <div  class ="row"><center>
		<div   class =" col-lg-12" " col-lg-6" " col-lg-4"> 
		
       
		

		<!--<div  class ="row">
		
		<div   class =" col-lg-6" " col-md-6" " col-sm-6"> 
		<h2> Create An Account</h2>
		-->
<!DOCTYPE html>
<html>
<head>
<title> Registration form </title>
<script type="text/javascript">
function check()
{
  

   var nametest=/[A-Za-z]$/;
  var name = document.getElementById("name").value;
  if(name=="" || nametest.test(name)==false)
  {
   document.getElementById("vname").innerHTML="Insert valid name";
   document.getElementById("vname").style.color="red";
   document.getElementById("name").focus();
  }
  else
  {
  document.getElementById("vname").innerHTML="";
  }
}
 function validate()
 {
  var nametest=/[A-Za-z]$/;
  var name = document.getElementById("name").value;
  if(name=="" || nametest.test(name)==false)
  {
   document.getElementById("vname").innerHTML="Insert valid name";
   document.getElementById("vname").style.color="red";
   return false;
  }
  var agetest=/^[0-9]{1,2}$/;
  var age = document.getElementById("age").value;
  if(agetest.test(age)==false)
  {
   document.getElementById("vage").innerHTML="Insert age(0-99)";
   document.getElementById("vage").style.color="red";
   return false;
  }
   var addresstest=/[A-Za-z0-9]$/;
  var address = document.getElementById("address").value;
  if(addresstest.test(address)==false)
  {
   document.getElementById("vaddress").innerHTML="Insert address";
   document.getElementById("vaddress").style.color="red";
   return false;
  }
  var numbertest=/^[0-9]{10,12}$/;
  var number = document.getElementById("number").value;
  if(numbertest.test(number)==false)
  {
   document.getElementById("vmob").innerHTML="Insert valid number";
   document.getElementById("vmob").style.color="red";
   return false;
  }
  var pass = document.getElementById("pwd").value;
  var pass1 = document.getElementById("pwd1").value;
  
  
  /*var passw=/^[A-Za-z]\w{7-15}$/;
  if(passw.test(pass))
  {
    alert('Correct, try another...')
    return true;
  }
  else{
    alert('Wrong!')
    return false;
  }*/
  var passtest=/^[A-Za-z0-9]{7,15}$/;
  
  var pwd = document.getElementById("pwd").value;
  if(pwd==""||passtest.test(pwd)==false)
  {
    document.getElementById("vpass").innerHTML="Insert correct password";
  
    document.getElementById("vpass").style.color="red";
  return false;
  }

  if(pass!=pass1)
  {
   alert("confirm password and password doesn't match");
   return false;
  }

  
 return true;
 }

</script>
</head>
<body>

<form name="reg" action="patientcreate.php" method="post" onsubmit="return validate()">
<table >
<tr>
<td>Name:</td><td><input type="text" name="name" id="name" onblur="check()"></td><td><b id="vname"></b></td>
</tr>
<tr>
<td>Age:</td><td><input type="text" name="age" id="age"></td><td><b id="vage"></b></td>

<tr>
<td>Address:</td><td><input type="text" name="address" id="address" ></td><td><b id="vaddress"></b></td>
</tr>
<tr>
<td>Mobile:</td><td><input type="text" name="mobile" id="number"></td><td><b id="vmob"></b></td>
</tr>
<tr>
<td>Password:</td><td><input type="password" name="password" id="pwd"></td><td><b id="vpass"></b></td>
</tr>
<tr>
<td> Confirm Password:</td><td><input type="password" name="pwd1" id="pwd1"></td><td><b id="vpass1"></b></td>
</tr>
<tr><td>Aadhar:</td><td><input type="text" name="aadhar" id="aadhar"></td><td><b id="vaadhar"></b></td>
<tr>
<td><input type="submit" name="signin"></td>
</tr>
</table>

<br>
<br>
<div class="btn-group">
<a href="patientlogin.php" class="btn btn-default"> Back To Login</a>
</div>





</body>

</html>

</div>
<!--
		<div   class =" col-lg-6" " col-md-6" " col-sm-6"> 
		
		
		
		
		
		
		



-->
</body>
</html>














		</div>
		</div>
    </div>
	</div><P>
	
	
	
   <div class="page-header">
        
<FOOTER class="footer">	
<P>&COPY:2018 ONLINE APPOINTMENT DESIGN BY: sanjeev</P>
</FOOTER>    </div> <!-- /container -->
	


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="/js/docs.min.js"></script>
  </body>
</html>
