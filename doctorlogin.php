<?php
session_start();
$con=mysqli_connect("localhost","root","","hellodoc");
if (isset($_POST['btn'])) {
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $pwd = mysqli_real_escape_string($con, $_POST['abc']);
        if (count($errors) == 0) {
        $password = $pwd;
        $query = "SELECT * FROM doctoraccount WHERE email='$email' AND pwd='$password'";
        $results = mysqli_query($con, $query);    
        if (mysqli_num_rows($results) == 1) {
          $_SESSION['email'] = $email;
          $_SESSION['name']=$name;
          $_SESSION['success'] = "You are now logged in";
          header('location: doctorcreated.php');
        }else {
            echo "Wrong username/password combination";
        }
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






 <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="/js/docs.min.js"></script>
  </body>
  
</html>


 <div class="page-header">
 <div class ="jumbotron">
 <div  clas ="row">
		<div   class =" col-lg-12" " col-lg-6" " col-lg-4"> 
		
        <h1> Welcome Doctors </h2>
		<div  class ="row">
		
		<div   class =" col-lg-6" " col-md-6" " col-sm-6"> 
		<h2> Login</h2>
		<img src ="image/images3.jpg" class ="img-responsive" alt="Patient Login">
		</div>
		<div   class =" col-lg-6" " col-md-6" " col-sm-6"> 
		<h2>  </h2>
<html>
<head>

<script type="text/javascript">
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
</script></head> 
<body>

<form name="reg" action="doctorlogin.php" method="post" onclick="return validate()">

<table>
<center>
<tr>
<td>Email:</td><td><input type="email" name="email" id="email"></td><td><b id="vmail"></b></td>
</tr>
<tr>
<td>Password:</td><td>
<input type="password"name="abc"></td><br><br>

</tr><tr>
<td><input type="submit" name="btn" value="Login"></td>

</form>



<td><u><font size="4"><a href=createaccount.html >   Forget Password </a><//u></font>
</td></tr></center></table>
<table><tr></tr>
<tr>
<td><u><b><font size="4"><a href=doctorcreate.php >   Create A New Account </a></font></b></u>
</td></tr>
</tr>

</center></table>
</body>


</html>






















		</div>
		</div>
    -  </div>
	</div><P>
	
   <div class="page-header">
        
<FOOTER class="footer">	
<P>&COPY:2018 COLLEGESITE DESIGN BY: TEAM MASS</P>
</FOOTER>    </div> <!-- /container -->
	


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="/js/docs.min.js"></script>
  </body>
</html>

