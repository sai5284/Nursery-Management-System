<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>CLEAN AND GREEN | Edit Password</title>
	
	<!-- core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
	<?php session_start();?>
</head><!--/head-->

<body class="homepage">

    <header id="header">
          <nav class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php"><h1>CLEAN AND GREEN</h1></a>
                </div>
				
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li class="active" ><a href="epwu.php">Edit Password</a></li>
                        <li  ><a href="cart.php">Cart</a></li>
                        <li ><a href="orhistory.php">Order History</a></li>
						 <li  ><a href="feedback.php">Feedback</a></li> 
						 <li  ><a href="index.php">Signout</a></li>    
                        
                      
                                           
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
		
    </header>
    <!--/header-->


  
    <!--/#main-slider-->
    <!--/#feature-->
<section id="recent-works">
        <div class="container">
          <div class="center wow fadeInDown">
            <h2 align="center" ><strong>Edit Password</strong></h2>
            <?php
			if (isset($_POST['Submit']))
{
	//session_start();
	//$uname=$_COOKIE['logname'];
//	echo $uname;
	$uname=$_SESSION["user"];
	// echo $uname;
	$op=$_POST["textfield"];
$np=$_POST["textfield2"];
$cp=$_POST["textfield3"];

/////////////////
$mysqli= new mysqli("localhost", "root", "", "nursery2020");

if ($mysqli->connect_errno) 
{
	echo "Failed to connect to MySQL: (". $db->connect_errno . ") " . $db->connect_error;
}

$sql="select * from  signup where Emailid ='{$uname}' and  PWD= '{$op}'";
//echo $sql;
$found=0;
$result=$mysqli->query($sql);


if($result ->num_rows == 1)
{	
	$found=1;
}





////////////////////
if($np==$cp  && $found==1)
{


	$con = mysqli_connect("localhost", "root", "");
	mysqli_select_db($con,"nursery2020");

$query="update signup set PWD='{$np}'  where Emailid='{$uname}'";

//echo $query;

mysqli_query($con,$query);

	
	
echo("<h3 align=center>Password  Updated Successfully" ."<h3>");
						
		
			



	
}

else
{
	echo("<h3 align=center> Some thing Wrong Please try again"."<h3>");
}



}

?>
            <p align="center">&nbsp;</p>
            <p align="justify" class="lead"><br>
            </p>
          </div>
          <!--/.row-->
        </div>
        <!--/.container-->
</section>
<!--/#recent-works-->

<!--/.container-->
<!--/#services-->
<!--/#middle-->
<section id="content">
  <!--/.container-->
</section>
<!--/#content-->
<!--/#partner-->
<!--/#conatcat-info-->
<!--/#bottom-->
<footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                <p style="text-align:right;">&copy; 2020 All Rights Reserved</p></div>
            
            </div>
        </div>
</footer><!--/#footer-->

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/wow.min.js"></script>
</body>
</html>