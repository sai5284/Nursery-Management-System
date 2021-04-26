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
.style2 {
	color: #FFFFFF;
	font-weight: bold;
    font-size: 18px;
}

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
   font-weight:bold;
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
                        <li><a href="epwa.php">Edit Password</a></li>
                        <li><a href="addproduct.php">Add Product</a></li>
						 <li class="active"><a href="editproduct.php">Edit Product</a></li>
						<li><a href="vorders.php">View Orders</a></li> 
						<li><a href="vfeedback.php">View Feedback</a></li> 
						<li><a href="index.php">Signout</a></li>    
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
                <form id="form1" method="post" action="">
                  <p>&nbsp;</p>
                  <table width="36%" border="0" align="center" cellpadding="10" cellspacing="0">
                    <caption align="top">&nbsp;
                    </caption>
                    <tr>
                     <td width="153" bgcolor="#555555">&nbsp;</td>
                      <td width="10" bgcolor="#555555">&nbsp;</td>
                      <td align=left width="200" bgcolor="#555555"><span class="style2">Edit Product</span></td>
                      <td colspan="2" rowspan="8">&nbsp;</td>
                    </tr>
                    <tr>
                      <td width="24%"><div align="right"><strong>Product Id</strong></div></td>
                      <td width="76%" colspan="2"><div align="left">
                        <input type="text" name="textfield42" id="textfield42" readonly value="<?php $a=$_GET['a']; echo $a; ?>"/>
                      </div></td>
                    </tr>
                    <tr>
                      <td><div align="right"><strong>Product Name </strong></div></td>
                      <td colspan="2"><div align="left">
                        <input type="text" name="textfield43" id="textfield43" value="<?php $b=urldecode($_GET['b']); echo $b; ?>"/>
                      </div></td>
                    </tr>
                    <tr>
                      <td><div align="right"><strong>Product Description </strong></div></td>
                      <td colspan="2"><div align="left">
                        <input type="text" name="textfield44" id="textfield44" value="<?php $c=urldecode($_GET['c']); echo $c; ?>"/>
                      </div></td>
                    </tr>
                    <tr>
                      <td><div align="right"><strong>Rate</strong></div></td>
                      <td colspan="2"><div align="left">
                        <input type="text" name="textfield45" id="textfield45"  value="<?php $d=$_GET['d']; echo $d; ?>"/>
                      </div></td>
                    </tr>
                    <tr>
                      <td><div align="right"><strong>Picture</strong></div></td>
                      <td colspan="2"><div align="left">
                        <input type="file" name="textfield46" id="textfield46"/>
                      </div></td>
                    </tr>
                    <tr>
                      <td><div align="right"><strong>Category</strong></div></td>
                      <td colspan="2"><div align="left">
                      <select name="textfield47" id="select">
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
                      <td colspan="2"><div align="left">
                        <input type="submit" name="button" id="button" value="Update Product" />
                        <input type="reset" name="button2" id="button2" value="Reset" />
                      </div></td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td><div align="left"></div></td>
                    </tr>
                    <tr>
                      <td colspan="2"><div align="center">
                          <p><span class="feature"> </span></p>
                        <p>&nbsp;</p>
                      </div></td>
                    </tr>
                  </table>
                  <p>&nbsp;</p>
                  <p>&nbsp;</p>
                  <p>&nbsp;</p>
                </form>
              <p align="center" class="style1">&nbsp;</p>
              <p align="center">
                <?php include "dbcon.php" ?>
                <?php 

if (isset($_POST['button']))
{

$a=$_POST["textfield42"];
$b=$_POST["textfield43"];
$c=$_POST["textfield44"];
$d=$_POST["textfield45"];
$e=$_POST["textfield46"];
$f=$_POST["textfield47"];




	$con = mysqli_connect("localhost", "root", "");
	mysqli_select_db($con,"nursery2020");

$query="update product set pname='{$b}', pdesc='{$c}' ,rate ='{$d}',pic='{$e}',Category='{$f}' where pid='{$a}'";

echo $query;

mysqli_query($con,$query);

	
	
			//echo("Password  Updated Successfully" ."<h1>");
			
			print "<script type=\"text/javascript\">"; 
print "alert('Product Updated Successfully')"; 
print "</script>";  			
		


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