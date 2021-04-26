<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>CLEAN AND GREEN | Sign in</title>
	
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
  font-size: 15px;
  margin: 5px 2px;
  cursor: pointer;
}

#example1 {
  margin: 5px;
  border: 2px solid black;
  padding: 80px;
  background: url(images/login1.jpg);
  background-repeat: no-repeat;
  background-size: 2000px 1800px;
}


</style>
</head>
    

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
                        <li ><a href="aboutus.php">Aboutus</a></li>
                        <li><a href="signup.php">Signup</a></li>
                        <li  class="active"><a href="signin.php">Signin</a></li>
						 <li><a href="contact.php">Contact</a></li> <li><a href="shop.php">Plants</a></li>   </ul>
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
            <div id="example1"> 
  
                <form name="form1" method="post" action="signinsave.php">
                  <p>&nbsp;</p>
                  <table width="36%" border="0" align="center" cellpadding="5" cellspacing="0">
                    <tr>
                      <td width="14%"><div style="color:white;" align="center"><strong>Log as</strong></div></td>
                      <td width="2%">&nbsp;</td>
                      <td width="23%"><div align="left"><span class="myform">
                      <select name="select" id="select2">
                        <option value="Admin">Admin</option>
                        <option value="User">User</option>
                      </select>
                      </span></div></td>
                      
                    </tr>
                    <tr>
                      <td height="39"><div style="color:white;" align="center"><strong><br>Emailid</strong></div></td>
                      <td>&nbsp;</td>
                      <td height="39"><label for="username"></label>
                          <div align="left">
                            <input type="text" name="username" id="username" required/>
                          </div></td>
                    </tr>
                    <tr>
                      <td><div style="color:white;" align="center"><strong>Password</strong></div></td>
                      <td>&nbsp;</td>
                      <td><div align="left">
                        <input type="password" name="password" id="password" required/>
                      </div></td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td valign="top"><div align="left">
                        <input  type="submit" name="button" id="button" value="Submit" />
                        <input type="reset" name="button" id="button" value="Reset" />
                      </div></td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td valign="top"><a href="forgotpass.php"><span style="color:white;" class="style"><strong>Forgot password?</strong></span></a></td>
                      <td>&nbsp;</td>
                    </tr>
                  </table>
                  <div class="col-xs-12 mt30">
                    <div class="input-box post-comment" style="color:white; font-size:18px" align=left><strong><br><br> 
                     Not Register yet ? </strong> <a href="signup.php" > Signup here</a>
                    </div>
                    </div>
              </form>
                <h2 align="center">
                  
                  <br>
                </h2>
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