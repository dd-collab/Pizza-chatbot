<?php
 
$name=$_POST['name'];
$address = $_POST['address'];
$pincode = $_POST['pincode'];
$phonenumber=$_POST['phonenumber'];
$username=$_POST['username'];
$password=$_POST['password'];



$con=mysqli_connect("localhost", "root", "", "pizzashop") or die ("connection failed");

$sql="INSERT INTO customer (customer_name,address,pincode,phonenumber,username,password) values ('$name','$address','$pincode','$phonenumber','$username','$password')";


$result=mysqli_query($con, $sql);
if($result === true)
{
    echo "sucess";
}
else
{
    echo "failure";
}



?>
    