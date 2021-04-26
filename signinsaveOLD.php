<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php


$mysqli= new mysqli("localhost", "root", "", "nursery2020");

if ($mysqli->connect_errno) 
{
	echo "Failed to connect to MySQL: (". $db->connect_errno . ") " . $db->connect_error;
}

if (isset($_POST['button']))
{


$l=$_POST["select"];
$u=$_POST["username"];
$p=$_POST["password"];


if ($l=="Admin")
	
	{
$sql="select u,p from  admin where u ='{$u}' and  p= '{$p}'";
//echo $sql;
$found=0;
$result=$mysqli->query($sql);


if($result ->num_rows == 1)
{	
	$found=1;
}
	if($found==1 )
	{
	
//	setcookie("user",$u);
		//$_SESSION["user"]=$u;
	//echo $u;
	
	setcookie('logname',$u);
		header('Location:adminpage.php');
	}
	else
	{
			echo " <h1>Invalid Login Credentitals</h1>";
	}


	}
	else if ($l=="user")
		{
			/*
			$sql="select EmailId,PWD from  signup where EmailId ='{$u}' and  PWD= '{$p}'";
$found=0;
$result=$mysqli->query($sql);


if($result ->num_rows == 1)
{	
	$found=1;
}
	if($found==1 )
	{
	
	//setcookie("email",$u);
	//$_SESSION["email"]=$u;*/
	{
$sql="select * from signup where EmailId='{$username}' and  PWD='{$password}'";
//echo $sql;
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


$sql="select * from  signup where EmailId='{$username}'"; 
//echo $sql;
$result_db = $db->query($sql) or die("Error!");
$all_result = $result_db->fetch_all();


$f="";
$m="";





foreach ($all_result as $row) 
{

$f=$row[1];
$m=$row[2];



}




	$_SESSION["user"]=$u;
	$_SESSION["n"]=$f;
	$_SESSION["m"]=$m;
	//setcookie('logname',$u);
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