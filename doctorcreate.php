<?php
session_start();
$error=0;
$conn=mysqli_connect("localhost","root","","hellodoc");
if(isset($_POST["submit"]))
{		$name= mysqli_real_escape_string($conn,$_POST["name"]);
		$age= mysqli_real_escape_string($conn,$_POST["age"]);
		$email= mysqli_real_escape_string($conn,$_POST["email"]);
		$mobile= mysqli_real_escape_string($conn,$_POST["number"]);
		$category= mysqli_real_escape_string($conn,$_POST["category"]);
		$qualification= mysqli_real_escape_string($conn,$_POST["qualification"]);
		$address= mysqli_real_escape_string($conn,$_POST["address"]);
    $caddress= mysqli_real_escape_string($conn,$_POST["caddress"]);
    $cpin= mysqli_real_escape_string($conn,$_POST["cpin"]);
		$disease= mysqli_real_escape_string($conn,$_POST["disease"]);
    $experience= mysqli_real_escape_string($conn,$_POST["experience"]);
    $fee= mysqli_real_escape_string($conn,$_POST["fee"]);
		$gender= mysqli_real_escape_string($conn,$_POST["gender"]);
		$time= mysqli_real_escape_string($conn,$_POST["time"]);
		$times= mysqli_real_escape_string($conn,$_POST["times"]);
		$pwd= mysqli_real_escape_string($conn,$_POST["pwd"]);
    
    //checking user is new
    $user_check_query = "SELECT * FROM doctoraccount WHERE email='$email' LIMIT 1";
    $result = mysqli_query($conn, $user_check_query);
    $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists

    if ($user['email'] === $email) {
	  echo "email already exists";
	  $error=$error+1;
    } 
  }


  if($error==0){

  	$query="INSERT INTO `doctoraccount` (`name`, `age`, `email`, `number`, `category`, `qualification`, `address`, `caddress`,`cpin` ,`disease`, `experience`,  `fee`, `gender`, `time`, `times`, `pwd`) 
 VALUES ('$name', $age, '$email', '$mobile', '$category', '$qualification', '$address', '$caddress', '$cpin','$disease', $experience,'$fee' ,'$gender', '$time', '$times', '$pwd')";
	  mysqli_query($conn, $query);
		  
	  
  	$_SESSION['email'] = $email;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: doctorcreated.php');
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
            <li><a href="patientlogin.php">PATIENT LOGIN/SIGNUP</a></li>
            <li><a href="#contact">ABOUT</a></li>
            <li><a href="#contact">ADMIN</a></li>
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




  
  <h1> <marquee>welcome doctor login or signup </marquee> </h1>
  
  <header class = "page-header">
  
  <ul class = "nav nav-pills pull-right ">
	
  
            
            </ul>
			

 <div class="page-header">
 
 <div class ="jumbotron">
 <div  class ="row">
		<div   class =" col-lg-12" " col-lg-6" " col-lg-4"> 
		
		
		
		
		
        <h1> Welcome Doctors </h2>
		
				
        
		<h2> Create An Account</h2>
		<div   class =" col-lg-6" " col-md-6" " col-sm-6"> 
		
		<img src ="image/images3.jpg" class ="img-responsive" alt="Patient Login">
		</div>
		<div   class =" col-lg-6" " col-md-6" " col-sm-6"> 
		<h2>  </h2>

		
		
		
        
		<h2> Fill Yours Details</h2>
		
<!DOCTYPE html>
<html><div class="container">
 <title>Create A New Account form</title>
 

	
  
          

<head>

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
  elsef
  {
  documfent.getElementById("vname").innerHTML="";
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
  var mailtest=/[A-Za-z0-9._-]+@[A-Za-z]+\.[a-z]{2,3}$/;
  var mail = document.getElementById("email").value;
  if(mail =="" || mailtest.test(mail)==false)
  {
   document.getElementById("vmail").innerHTML="Insert valid mail id";
   document.getElementById("vmail").style.color="red";
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
  
  
   /*var categorytest=/[A-Za-z]$/;
  var category = document.getElementById("category").value;
  if(category=="" || categorytest.test(category)==false)
  {
   document.getElementById("vcat").innerHTML="Insert valid category";
   document.getElementById("vcat").style.color="red";
   return false;
 }
 */
 
 var qualificationtest=/[A-Za-z]$/;
  var qualification = document.getElementById("qualification").value;
  if(qualification=="" || qualificationtest.test(qualification)==false)
  {
   document.getElementById("vqual").innerHTML="Insert qualification";
   document.getElementById("vqual").style.color="red";
   return false;
 }
 
 var addresstest=/[A-Za-z0-9]$/;
  var address = document.getElementById("address").value;
  if(addresstest.test(address)==false)
  {
   document.getElementById("vadd").innerHTML="Insert address";
   document.getElementById("vadd").style.color="red";
   return false;
  }
  
  
 var caddresstest=/[A-Za-z0-9]$/;
  var caddress = document.getElementById("caddress").value;
  if(caddresstest.test(caddress)==false)
  {
   document.getElementById("cvadd").innerHTML="Insert clinic address";
   document.getElementById("cvadd").style.color="red";
   return false;
  }
  var diseasetest=/[A-Za-z]$/;
  var disease = document.getElementById("disease").value;
  if(disease=="" || diseasetest.test(disease)==false)
  {
   document.getElementById("vdisease").innerHTML="Insert disease";
   document.getElementById("vdisease").style.color="red";
   return false;
 }
  
 /*var diseasetest=/[A-Za-z]$/;
  var disease = document.getElementById("disease").value;
  if(disease=="" || diseasetest.test(disease)==false)
  {
   document.getElementById("vdisease").innerHTML="Insert disease";
   document.getElementById("vdisease").style.color="red";
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
  
  /*if(pass.test(passw))
  {
    alert('Correct, try another...')
    return true;
  }
  else{
    alert('Wrong Password!')
    return false; 
  }*/
  if(pass!=pass1)
  {
   alert("enter password doesn't match");
   return false;
  }
 return true;
 }
</script>
</head>
<body>
<form  action="doctorcreate.php" method="post" onsubmit="return validate()">
<table><center>
<tr>
<td>Name</td><td><input type="text" name="name" id="name" onblur="check()"></td><td><b id="vname"></b></td>
</tr>
<tr>
<td>Age</td><td><input type="text" name="age" id="age"></td><td><b id="vage"></b></td>
<tr>
<td>Email</td><td><input type="email" name="email" id="email"></td><td><b id="vmail"></b></td>
</tr>
<tr>
<td>Mobile</td><td><input type="text" name="number" id="number"></td><td><b id="vmob"></b></td>
</tr>
<tr>
<td>Category</td><td>
<select name="category">
<option value="Allergists"> Allergists</option>
<option value="Anesthesiologists"> Anesthesiologists</option>
<option value="Cardiologist"> Cardiologist</option>
<option value="Dermatologist"> Dermatologist</option>
<option value="Endocrinologist">Endocrinologist </option>
<option value="Gastroenteritis">Gastroenteritis </option>
<option value="Oncologist">Oncologist </option>
<option value="Osteopath">Osteopath </option>
<option value="Neurologist">Neurologist </option>
<option value="Gynecologist">Gynecologist </option>
</select>
</td>
</tr>
<tr>
<td>Qualification</td><td>
<input type="text"name="qualification"id= "qualification"id="qualification"></td><td><b id="vqual"></b></td>

</tr>
<td>Address</td>
<td><input type="text"name="address"id="address"></td><td><b id="vadd"></b></td>
</tr>
<td>Clinic Address</td>
<td><input type="text"name="caddress"id="caddress"></td><td><b id="vcadd"></b></td>
</tr>
<td>PIN Code(Clinic)</td>
<td><input type="text"name="cpin"id="cpin"></td><td><b id="cpin"></b></td>
</tr>



<tr>
<td>Disease Speciality</td>
<td><input type="text" name="disease"id="disease"></td><td><b id="vdisease"></b></td>
<tr><td>Experience</td>
<td><input type="number"name="experience"id="experiance"></td><td><b id="vexp"></b></td>
</tr>

<tr><td>Fee charge</td>
<td><input type="number"name="fee" id="fee"></td><td></b></td>
</tr>



<td>gender</td>
<td><select name="gender">
<option value="male">male</option>
<option value="female">female</option>
</select></td>
</tr>





<tr>
<td>Timing</td>
<td><input type="time" name="time">to<input type="time" name="times"><br></td>

</tr>
<tr>
<td>Password</td><td><input type="password" name="pwd" id="pwd"></td><td><b id="vpass"></b></td>
</tr>
<tr>
<td>Confirm Password</td><td><input type="password" name="pwd1" id="pwd1"></td><td><b id="vpass1"></b></td>
</tr>
<tr>
<td><input type="submit" name="submit"></td><th><div class ="btn-group ">


<a href="doctorlogin.php" class="btn btn-default"> Back To Login</a>
</form>





	
	
</tr>
</tr></center>
</table>

</body>
</html>






















		</div>
		</div>
     </div>
	</div><P>
	
   <div class="page-header">
        
<FOOTER class="footer">	
<P>&COPY:2018 COLLEGESITE DESIGN BY: TEAM MASS</P>
</FOOTER>    </div> <!-- /container -->
	
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="/js/docs.min.js"></script>
  </body>
</html>
