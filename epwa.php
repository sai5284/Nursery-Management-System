<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>CLEAN AND GREEN | ADMIN PASSWORD</title>
	
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
    input[type=submit], input[type=reset] {
  background-color: #555555; 
  border: none;
  color: white;
  padding: 5px 10px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 12px;
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
                         <li class="active"><a href="epwa.php">Edit Password</a></li>
                        <li><a href="addproduct.php">Add Product</a></li>
						 <li ><a href="editproduct.php">Edit Product</a></li>
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
                <h2 align="center"><strong>Edit Password</strong></h2>
                <form name="form1" method="post" action="epwasave.php">
                <table width="36%" border="0" align="center" cellpadding="10" cellspacing="0">
                    <tr>
                      <td width="163"><strong>Old Password</strong></td>
                      <td width="197"><input type="password" name="textfield" id="textfield" required="required" /></td>
                    </tr>
                    <tr>
                      <td><strong>New password</strong></td>
                      <td><input type="password" name="textfield2" id="textfield2" required="required" /></td>
                    </tr>
                    <tr>
                      <td><strong>Confirm New password</strong></td>
                      <td><input type="password" name="textfield3" id="textfield3" required="required" /></td>
                    </tr>
                    <tr>
                      <td><label></label></td>
                      <td><input type="submit" name="Submit" id="button" value="Change password" />
                          <input type="reset" name="Reset" id="button2" /></td>
                    </tr>
                  </table>
                                </form>
                <p align="left">&nbsp;</p>
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