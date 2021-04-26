<?php
$dbhost='localhost';
$dbuser='root';
$dbpass='';
$db='nursery2020';
$conn=new mysqli($dbhost,$dbuser,$dbpass,$db);
if(!$conn){
    die('could not connnect:'.mysqli_error());
}

/*if(isset($_POST['delete'])){
    */
    $n=$_GET['id'];
	
$sql="delete from product where pid like '{$n}'";
echo $sql;
    $res=mysqli_query($conn,$sql);

mysqli_close($conn);
$msg="<h1>Deleted Successfully</h1>";
		echo "<script type='text/javascript'> window.alert ('$msg');</script>";
		
		echo "<h1 align=center><a href=addproduct.php>Add Product</a></h1>";
//	header('Location:shop.php');
?>