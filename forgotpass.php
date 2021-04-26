<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>CLEAN AND GREEN | FORGOT PASSWORD</title>
	
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

.style1 {
	font-size: 12px;
	font-weight: bold;
}

 </style>
</head><!--/head-->

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
              <form name="form1" method="post" action="">
                <p>&nbsp; </p>
                <p>&nbsp;</p>
                
                <table width="35%" border="0" align="center" cellpadding="15" cellspacing="0" >
                  <tr>
                    <td width="95" bgcolor="#FFFFFF">&nbsp;</td>
                    <td width="8" bgcolor="#FFFFFF">&nbsp;</td>
                    <td width="222" bgcolor="#FFFFFF"> <div style="font-size:20px;"><strong>Forgot Password ?</strong></td>
                    <td width="26" bgcolor="#FFFFFF">&nbsp;</td>
                    
                  </tr>
                  <tr>
                    <td><strong>Email Id</strong></td>
                    <td>&nbsp;</td>
                    <td><input type="text" name="textfield" id="textfield"></td>
                    
                  </tr>
                  <tr>
                    <td colspan="4"><input type="submit" name="button" id="button" value="Reset Password">
                      <a href="signin.php"><strong>Remember Login ? </strong></a></td>
                  </tr>
                </table>
                <div align="center"> <span class="homepage">
                    <?php 
	 if (isset($_POST['button']))
{
$txt=$_POST['textfield'];
$pass=rp(strlen($txt));



///////////////////

$mysqli= new mysqli("localhost", "root", "", "nursery2020");

if ($mysqli->connect_errno) 
{
	echo "Failed to connect to MySQL: (". $db->connect_errno . ") " . $db->connect_error;
}


$sql="select * from  signup where EmailId ='{$txt}' ";



$found=0;
$result=$mysqli->query($sql);


if($result ->num_rows == 1)
{	
	$found=1;
}




////////////////////
if( $found==1)
{


	$con = mysqli_connect("localhost", "root", "");
	mysqli_select_db($con,"nursery2020");



$query="update signup set PWD='{$pass}'  where EmailId='{$txt}'";



//echo $query;

mysqli_query($con,$query);

	
	

			echo "<h3 align=center><strong>Your new Password resetted successfully.</stromg></h3>";
			echo "<h4> New Password is ".$pass;
			
			//echo("<h4 align=center><a href=adminhomepage.php><br>Home Page</a></h4>");
			



	
}

else
{
	echo "<h1 align=center> Some thing Wrong Please try again </h1>";
	//echo("<h4 align=center><a href=homepage.php><br>Home Page</a></h4>");
}




}




?>
                    <?php 


function rp($len)
{

$chars="abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_-=+;:.?";
$pass=substr( str_shuffle($chars),0,$len);
return $pass;
}


?>
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