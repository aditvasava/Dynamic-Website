<?php
$db=mysqli_connect("localhost","root","","websitedatabase");
if($db)
{
  echo "Connection Successful.";
}
else
{
  echo "No Connection.";
}

$username = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phno'];
$comment = $_POST['msg'];

mysqli_query($db,"insert into userdata (username,email,phone,comment) values('$username','$email','$phone','$comment')");
header('location:index.php');
?>
