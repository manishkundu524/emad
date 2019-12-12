<?php 
  session_start();
  
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
                                           
            
            <li><a href="doctorlogin.php">DOCTOR LOGIN/SIGNUP</a></li>
            <li><a href="diseasesearch.php">Search by disease</a></li>            
            <li><a href="categorysearch.php">Search by Category</a></li>
            <li class="active"><a href="feedback.php">FEEDBACK</a></li>
            <li><a href="#contact"><?php
            $con=mysqli_connect("localhost","root","","hellodoc");
            $m=$_SESSION['mobile'];
    $a="select * from patientaccount where mobile='$m'";
            $result=mysqli_query($con,$a);
            $user=mysqli_fetch_array($result);
            ?><?php
                echo $user['name'];
                ?></a></li>


        <li><?php  if (isset($_SESSION['mobile'])) :
    	 ?><a href="patientcreated.php?logout='1'" style="color: red;">LOGOUT</a>
    <?php endif ?>  </li>


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





 <div class="page-header">
 <div class ="jumbotron">
  <div  class ="row">
		<div   class =" col-lg-12" " col-lg-6" " col-lg-4"> 
		
        <h1> Welcome Patients    </h1><h3> <?php  if (!isset($_SESSION['mobile'])) :
    
    echo "Log in first to book an appointment";
    
    
    ?>
    
    
<?php endif ?>     </h3>
				

		<div  class ="row">
		
		<div   class =" col-lg-6" " col-md-6" " col-sm-6"> 
		
        <img src ="image/imagesp.jpg" class ="img-responsive" alt="Patient Login">

        


		</div>
    <div><form action="namesearch.php" method="post">
<table><tr> <td>
    <strong>Enter Doctor's name</strong> </td><td><input type="text" name="name">
    </td></tr>
    <tr><td>
    <strong>Enter Pin Code</strong> </td><td><input type="text" name="pin">
    </td></tr>
    


    <tr><td>
    <input type="submit" name="submit" value="search"></td></tr>
    </table>
    </form></div>
		
<html>
<head>

</head> 
<body>
</body>

    <?php

$con=mysqli_connect("localhost","root","","hellodoc");
if(isset($_POST["submit"])){
    $name=$_POST["name"];
    $pin=$_POST["pin"];
    $query = "SELECT * FROM doctoraccount WHERE name='$name' and cpin='$pin'";
    $result = mysqli_query($con, $query);
    
   
        
 
    while ($user = mysqli_fetch_array($result))
{
        
        $doc_name=$user['name']; 
        $doc_email=$user['email'];
        $doc_add=$user['caddress'];
        $doc_fee=$user['fee'];
        $doc_timing=$user['time'];
        
?>


<table border="/2"><strong>
<tr><td>Name: <a href="edetails.php?id=<?php echo $doc_name;?>&emailid=<?php echo $doc_email;?>&time=<?php echo $doc_timing;?>"><?php echo $doc_name;?></a></td>
<td>Address: <?php echo $doc_add;?></td>
<td>fee: <?php echo $doc_fee;?></td>
<td>timing: <?php echo $doc_timing;?></td>
</tr> </strong>
</table>

        
               
        <br>
<?php
}
    mysqli_close($con);
}
    ?>














<div  class ="row">
		<div   class =" col-lg-12" " col-lg-6" " col-lg-4"> 
		
       
				
</div>
		





</body>







</html>














		</div>
		</div>
    -  </div>
	</div><P>
	
	
	
   <div class="page-header">
        
<FOOTER class="footer">	
<P>&COPY:2018 ONLINE APPOINTMENT DESIGN BY: TEAM MASS</P>
</FOOTER>    </div> <!-- /container -->
	


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="/js/docs.min.js"></script>
  </body>
</html>
