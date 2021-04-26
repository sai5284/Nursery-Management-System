<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>CLEAN AND GREEN | Sign up</title>
	
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
    .send-btn1 {    background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
    border: 1px solid #555;
    border-radius: 4px;
    color: #ff004d;
    font-size: 12px;
    height: 45px;
    margin: 0;
    padding: 0;
    width: 60px;
    -webkit-transition: all 0.3s ease 0s;
    transition: all 0.3s ease 0s;
	 background: #000;
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
</head>
<!--/head-->

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
                        <li class="active"><a href="signup.php">Signup</a></li>
                        <li><a href="signin.php">Signin</a></li>
						 <li><a href="contact.php">Contact</a></li> 
						 <li><a href="shop.php">Plants</a></li> 
                     
                                           
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
                <h2 align="left">&nbsp;</h2>
                <form name="form1" method="post" action="">
                  <table width="36%" border="0" align="center" cellpadding="10" cellspacing="5" >
                    <tr>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td><div style="color:black;font-size:18px;"> <strong>Sign Up</strong></td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      
                      <td width="14%"><div text-align="center"><strong>Name</strong></div></td>
                      <td width="100%">&nbsp;</td>
                      <td width="28%"><div align="left">
                          <input type="text" name="textfield" id="textfield" pattern="([a-zA-Z\s]+){2,}" title="letters only and needs to be at least 2 characters long " required />
                      </div></td>
                    </tr>
                    <tr>
                      <td><div align="center"><strong>Mobile</strong></div></td>
                      <td>&nbsp;</td>
                      <td><div align="left">
                          <input name="textfield2" type="text" id="textfield2" maxlength="10" placeholder="Phone or Mobile no"  pattern="^\d{10}$" title="only numbers allowed and should be 10 digits"
required />
                      </div></td>
                    </tr>
                    <tr>
                      <td><div align="center"><strong>Address</strong></div></td>
                      <td>&nbsp;</td>
                      <td><div align="left">
                        <textarea name="textfield3" id="textfield3" ></textarea>
                      </div></td>
                    </tr>
                    <tr>
                      <td><div align="center"><strong>Emailid</strong></div></td>
                      <td>&nbsp;</td>
                      <td><div align="left">
                      <input type="text" name="textfield4" id="textfield4" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required  />
                      </div></td>
                    </tr>
                    <tr>
                      <td><div align="center"><strong>Password</strong></div></td>
                      <td>&nbsp;</td>
                      <td><div align="left">
                          <input type="password" name="textfield5" id="textfield5" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"
required/>
                      </div></td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td><div align="left">
                          <input type="submit" name="button" id="button" value="Submit" class="send-btn" />
                          <input type="reset" name="button3" id="button3" value="Reset" class="send-btn" />
                      </div></td>
                    </tr>
                  </table>
                 <br> <div class="col-xs-12 mt30">
 <div class="input-box post-comment" style="color:black; font-size:18px" align=justify><strong>
 	Already Registered ? </strong> <a href="signin.php"> Signin here</a>
</div>
</div>
              </form>
                <p align="center" class="lead"><br>
                </p>
                <?php


$mysqli= new mysqli("localhost", "root", "", "nursery2020");

if ($mysqli->connect_errno) 
{
	echo "Failed to connect to MySQL: (". $db->connect_errno . ") " . $db->connect_error;
}

if (isset($_POST['button']))
{




//$sql="select * from printworld ";
//$result=$mysqli->query($sql);


//$cnt=$result->num_rows ;	

$a=$_POST["textfield"];
$b=$_POST["textfield2"];
$c=$_POST["textfield3"];
$d=$_POST["textfield4"];
$e=$_POST["textfield5"];





$con = mysqli_connect("localhost", "root", "");
mysqli_select_db($con,"nursery2020");

$query = "insert into signup values ('$a','$b','$c','$d','$e')";


//echo $query;

mysqli_query($con,$query);

//header('Location:bookinfoack.html');
echo "<h3 style='color:black'><strong> Dear User your Account has Been registered successfully</strong> </h3>";
echo "<h3 align = center> </h3>";
//echo("<h4 align=center><a href=homepage.php><br>Home</a></h4>");
}
?>
          </div>

            <!--/.row-->
        </div>
        <div align="center">
          <!--/.container-->
  </div>
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