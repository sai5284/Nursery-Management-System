<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>CLEAN AND GREEN | Add product</title>
	
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
    <style type="text/css">
<!--
.style1 {
	font-size: 12px;
	color: #990000;
}
.style2 {
	color: #FFFFFF;
	font-weight: bold;
    font-size: 18px;
}
-->
input[type=submit], input[type=reset] {
  background-color: #555555; 
  border: none;
  color: white;
  padding: 5px 10px;
  text-align: left;
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
                        <li  ><a href="epwa.php">Edit Password</a></li>
                        <li class="active"><a href="addproduct.php">Add Product</a></li>
                        <li ><a href="editproduct.php">Edit Product</a></li>
						<li  ><a href="vorders.php">View Orders</a></li> 
						<li  ><a href="vfeedback.php">View Feedback</a></li> 
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
                <h2 align="left" class="style1">&nbsp;</h2>
                <form name="form1" method="post" action="">
                <table width="36%" border="0" align="center" cellpadding="10" cellspacing="0">
                    <tr>
                     <td width="153" bgcolor="#555555">&nbsp;</td>
                      <td width="10" bgcolor="#555555">&nbsp;</td>
                      <td align=left width="200" bgcolor="#555555"><span class="style2">Add Product</span></td>
                      <td colspan="2" rowspan="8">&nbsp;</td>
                    </tr>
                    <tr>
                      <td><div align="right"><strong>Product Id</strong></div></td>
                      <td>&nbsp;</td>
                      <td><div align="left">
                          <input type="text" name="textfield" id="textfield" value="<?php 	$mysqli= new mysqli("localhost", "root", "", "nursery2020");

if ($mysqli->connect_errno) 
{
	echo "Failed to connect to MySQL: (". $db->connect_errno . ") " . $db->connect_error;
}



$sql="select * from  product";
$result=$mysqli->query($sql);


$cnt=$result->num_rows ;
$cnt=$cnt+1001;
$cnt="Ac-".$cnt;
//setcookie("pac",$cnt);
echo $cnt;
		   ?>">
                      </div></td>
                    </tr>
                    <tr>
                      <td><div align="right"><strong>Product Name</strong></div></td>
                      <td>&nbsp;</td>
                      <td><div align="left">
                          <input type="text" name="textfield2" id="textfield2" required/>
                      </div></td>
                    </tr>
                    <tr>
                      <td><div align="right"><strong>Product Description</strong></div></td>
                      <td>&nbsp;</td>
                      <td><div align="left">
                          <textarea name="textfield3" id="textfield3"></textarea>
                      </div></td>
                    </tr>
                    <tr>
                      <td><div align="right"><strong>Rate</strong></div></td>
                      <td>&nbsp;</td>
                      <td><div align="left">
                          <input type="text" name="textfield4" id="textfield4" required/>
                      </div></td>
                    </tr>
                    <tr>
                      <td><div align="right"><strong>Photo</strong></div></td>
                      <td>&nbsp;</td>
                      <td><div align="left">
                          <input type="file" name="textfield5" id="textfield5">
                      </div></td>
                    </tr>
                    <tr>
                      <td><div align="right"><strong>Category</strong></div></td>
                      <td>&nbsp;</td>
                      <td><div align="left">
                          <select name="select" id="select">
                            <option value="Indoor Plants">Indoor Plants</option>
                            <option value="Medical Plants">Medical Plants</option>
                            <option value="Floral Plants">Floral Plants</option>
                            <option value="Fruit Plants">Fruit Plants</option>
                            <option value="Vastu and Regional">Vastu and Regional</option>
                            <option value="Bonsai Tree">Bonsai Tree</option>
                            <option value=" Pots">Pots</option>
                            <option value=" Soil">Soil </option>
                            <option value="Seeds ">Seeds </option>
                            <option value="Fertilizers ">Fertilizers </option>
                          </select>
                      </div></td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td><input type="submit" name="button" id="button" value="Submit">
                          <input type="reset" name="button2" id="button2" value="Reset"></td>
                    </tr>
                  </table>
              </form>
                <p align="center" class="style1">&nbsp;</p>
                <p align="center">
                  <?php include "dbcon.php" ?>
                  <?php 

if (isset($_POST['button']))
{

$a=$_POST["textfield"];
$b=$_POST["textfield2"];
$c=$_POST["textfield3"];
$d=$_POST["textfield4"];
$e=$_POST["textfield5"];
$f=$_POST["select"];




/*$sql="select * from user where  email='{$f}'";
$found=0;
$result=$con->query($sql);
if($result ->num_rows == 1)
{	
	$found=1;
}
	
	if($found==0)
	{*/

$query = "insert into product  values('$a','$b','$c','$d','$e','$f')";
//echo $query;
mysqli_query($con,$query);

echo "<h3 align = center><strong>Product added sucessfully</strong></h3>";
/*}
else
{
		echo("<h4 align=center>Sorry ,User already Registered...</h4>");		
}
*/
}
?>
</p>
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