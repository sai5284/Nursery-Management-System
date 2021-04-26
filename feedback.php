<!DOCTYPE html>
<html lang="en">
<head>
<?php 
session_start(); 

?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>CLEAN AND GREEN | User feedback </title>
	
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
	
<link href="style1.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style8 {font-size: 12px}
-->
input[type=submit], input[type=reset] {
  background-color: #555555; 
  border: none;
  color: white;
  padding: 5px 10px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 15px;
  margin: 5px 2px;
  cursor: pointer;
}
</style>
</head>
<!--/head-->

<body class="homepage">
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
                      <li  ><a href="epwu.php">Edit Password</a></li>
                        <li  ><a href="cart.php">Cart</a></li>
                        <li ><a href="orhistory.php">Order History</a></li>
						 <li class="active"  ><a href="feedback.php">Feedback</a></li> 
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
        <div class="container" ">
            <div class="center wow fadeInDown">
                <h2 align="center">FeedBack</h2>
                <form name="form1" method="post" action="">
                <table width="36%" border="0" align="center" cellpadding="10" cellspacing="5" >
                    <tr>
                      <td width="173"><div align="center"><span class="style8"><strong>Full Name</strong> </span></div></td>
                      <td width="510"></label>
                          <div align="left">
                            <input type="text" name="textfield7" id="textfield7" value="<?php $n=$_SESSION["name"]; echo $n;  ?>">
                        </div></td>
                    </tr>
                    <tr>
                      <td height="28"><div align="center"><span class="style8"><strong>Feedback</strong></span></div></td>
                      <td>
                        <div align="left">
                          <input type="text" name="feedback" required="required" />
                          </div></td>
                    </tr>
                    <tr>
                      <td><div align="center"><span class="style8"><strong>Phone No</strong></span></div></td>
                      <td>
                        <div align="left">
                          <input type="text" name="textfield6" id="textfield6" value="<?php $m=$_SESSION["mobile"]; echo $m;  ?>">
                        </div></td>
                    </tr>
                    <tr>
                      <td><div align="center"><span class="style8"><strong>E-Mail</strong></span></div></td>
                      <td><div align="left">
                        <input type="text" name="textfield4" id="textfield4" value="<?php  $e=$_SESSION["user"]; echo $e;  ?>">
                      </div></td>
                    </tr>
                    <tr>
                      <td colspan="2"><div align="center"><strong>Rate Us</strong></div>
                          <div class="stars">
                            <input name="star" type="radio" class="star-1" id="star-6" value="1" />
                            <label class="star-1" for="star-6">1</label>
                            <input name="star" type="radio" class="star-2" id="star-7" value="2" />
                            <label class="star-2" for="star-7">2</label>
                            <input name="star" type="radio" class="star-3" id="star-8" value="3" />
                            <label class="star-3" for="star-8">3</label>
                            <input name="star" type="radio" class="star-4" id="star-9" value="4" />
                            <label class="star-4" for="star-9">4</label>
                            <input name="star" type="radio" class="star-5" id="star-10" value="5" />
                            <label class="star-5" for="star-10">5</label>
                            <span></span> </div>
                                               </td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td><div align="left">
                          <input type="submit" name="Submit" value="Submit" />
                          <input type="reset" name="Submit3" value="Reset" />
                      </div></td>
                    </tr>
                  </table>
                </form>
                <p align="center"><span class="title">
                <?php include "dbcon.php" ?>
                <?php 

if (isset($_POST['Submit']))
{

$a=$_POST["textfield7"];
$b=$_POST["feedback"];
$c=$_POST["textfield6"];
$d=$_POST["textfield4"];

$e=$_POST["star"];




$query = "insert into feedback  values('$a','$b','$c','$d','$e')";
//echo $query;
mysqli_query($con,$query);

echo "<h3 align = center><strong>Thank you For Your Feedback</strong></h3>";

}

?>
                &nbsp;</span>				</p>
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