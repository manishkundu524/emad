<?php

$error=0;
$conn=mysqli_connect("localhost","root","","hellodoc");
if(isset($_POST["submit"]))
{		
    
    
    
    $user_check_query = "SELECT * FROM doctoraccount WHERE email='$email' LIMIT 1";
    $result = mysqli_query($conn, $user_check_query);
    $user = mysqli_fetch_assoc($result);
  
  

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




  
  <h1> <Titile>Doctor Details</title> </h1>
  
  <header class = "page-header">
  
  <ul class = "nav nav-pills pull-right ">
	
  
            
            </ul>
			

 <div class="page-header">
 
 <div class ="jumbotron">
 <div  class ="row">
		<div   class =" col-lg-12" " col-lg-6" " col-lg-4"> 
		
		
		
		
		
         
		
				
        
		
		<div   class =" col-lg-6" " col-md-6" " col-sm-6"> 
		
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
		
		</div>
		<div   class =" col-lg-6" " col-md-6" " col-sm-6"> 
		<h2>  </h2>

		
		
		
        
		<!DOCTYPE html>
 

	
  
          

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
  
  
  
  var pass = document.getElementById("pwd").value;
  var pass1 = document.getElementById("pwd1").value;
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
