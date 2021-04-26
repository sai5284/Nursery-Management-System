<!DOCTYPE html>
<html lang="en">
<?php 
session_start(); 

?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>CLEAN AND GREEN | ORDER CONFIRMATION</title>
	
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
	<style>
#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
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
                      <li  ><a href="epwu.php">Edit Password</a></li>
                        <li  class="active" ><a href="cart.php">Cart</a></li>
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
                <h2 align="center"><strong> Order Details</strong> </h2>
                <form name="form1" method="post" action="confirmsave.php">
                 <table width="36%" border="0" align="center" cellpadding="10" cellspacing="5" >
                    <tr>
                      <td colspan="2" bgcolor="#00CC99"><strong>Order Acknowledgemet</strong></td>
                    </tr>
                    <tr>
                      <td width="216"><strong>Invoice no</strong></td>
                      <td width="233"><input type="text" name="textfield" id="textfield" value="<?php 	$mysqli= new mysqli("localhost", "root", "", "nursery2020");

if ($mysqli->connect_errno) 
{
	echo "Failed to connect to MySQL: (". $db->connect_errno . ") " . $db->connect_error;
}



$sql="select * from  payment2";
$result=$mysqli->query($sql);


$cnt=$result->num_rows ;
$cnt=$cnt+1001;
$cnt="O-".$cnt;
//setcookie("pac",$cnt);
echo $cnt;
		   ?>"></td>
                    </tr>
                    <tr>
                      <td> <strong>Invoice Date</strong></td>
                      <td><label>
                        <input type="text" name="textfield2" id="textfield2" value="<?php $doi=date("Y/m/d"); echo $doi; ?>">
                      </label></td>
                    </tr>
                    <tr>
                      <td><strong>Total Amount</strong></td>
                      <td><input type="text" name="textfield3" id="textfield3" value="<?php $amt=$_GET["amt"]; echo $amt;?>"></td>
                    </tr>
                    <tr>
                      <td><strong>Email id</strong></td>
                      <td><input type="text" name="textfield4" id="textfield4" value="<?php  $e=$_SESSION["user"]; echo $e;  ?>"></td>
                    </tr>
                    <tr>
                      <td><strong>Full Name</strong></td>
                      <td><input type="text" name="textfield7" id="textfield7" value="<?php $n=$_SESSION["name"]; echo $n;  ?>"></td>
                    </tr>
                    <tr>
                      <td><strong>Address</strong></td>
                      <td><input type="text" name="textfield5" id="textfield5 "value="<?php $f=$_SESSION["address"]; echo $f;  ?>"></td>
                    </tr>
                    <tr>
                      <td><strong>Mobile</strong></td>
                      <td><input type="text" name="textfield6" id="textfield6" value="<?php $m=$_SESSION["mobile"]; echo $m;  ?>"></td>
                    </tr>
                    <tr>
                      <td><strong>Status</strong></td>
                      <td><input name="textfield8" type="text" id="textfield8" value="Ordered" readonly></td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td><input type="submit" name="button" id="button" value="Submit">
                          <input type="reset" name="button2" id="button2" value="Reset"></td>
                    </tr>
                  </table>
                                </form>
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