<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
 <?php include "dbcon.php" ?>
      <span class="homepage">
      <?php
			session_start();
if (isset($_POST['button']))
{
$mysqli= new mysqli("localhost", "root", "", "nursery2020");

if ($mysqli->connect_errno) 
{
	echo "Failed to connect to MySQL: (". $db->connect_errno . ") " . $db->connect_error;
}



$loginas=$_POST["select"];
$username=$_POST["username"];
$password=$_POST["password"];

//echo $loginas.$username.$password;



if($loginas=="Admin" )
{

$sql="select * from  admin where u='{$username}' and  p='{$password}'";
//echo $sql;
$found=0;

$result=$mysqli->query($sql);

if($result->num_rows == 1)
{	
	$found=1;
	
}
//echo $found;
	if($found==1 )
	{
	//$_SESSION["user"]=$username;
	setcookie('logname',$username);
		header('Location:adminpage.php');
		
	}
	
	else
	{
	$msg="Invalid  Login";
		echo "<script type='text/javascript'> window.alert ('$msg');</script>";
		//header('Location:invalid.php');
		echo "<h1 align=center><a href=signin.php>SignIn Again</a></h1>";
	}

}
else if($loginas=="User" )
{
$sql="select * from signup where Emailid='{$username}' and  PWD='{$password}'";
echo $sql;
$found=0;

$result=$mysqli->query($sql);

if($result->num_rows==1)
{	
	$found=1;
	
}
	if($found==1)
	{
	

$db = new mysqli("localhost", "root", "", "nursery2020");

if ($db->connect_errno) {
echo "Failed to connect to MySQL: (" 
. $db->connect_errno . ") " . $db->connect_error;
}


$sql="select * from  signup where Emailid='{$username}'"; 
//echo $sql;
$result_db = $db->query($sql) or die("Error!");
$all_result = $result_db->fetch_all();


$f="";
$m="";





foreach ($all_result as $row) 
{

$f=$row[0];
$m=$row[1];
$add=$row[2];



}




	$_SESSION["user"]=$username;
	$_SESSION["name"]=$f;
	$_SESSION["mobile"]=$m;
	$_SESSION["address"]=$add;
	
		header('Location:userpage.php');
		
	}
	
	else
	{
	$msg="Invalid  Login";
		echo "<script type='text/javascript'> window.alert ('$msg');</script>";
		echo "<h1 align=center><a href=signin.php>SignIn Again</a></h1>";
		//header('Location:invalid.php');
	}
	}


}

?>
</body>
</html>