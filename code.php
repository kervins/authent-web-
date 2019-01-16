<?php
$uname=$_POST['uname'];
$password=$_POST['password'];

$con=mysqli_connect("localhost", "root","", "demo");
$result=mysqli_query($con, "SELECT * FROM `loginform` WHERE `uname`= '$uname' && `password`='$password'");
$count=mysqli_num_rows($result);
if($count==1){
  echo "login";
}
else{
  echo "incorrect";
}
?>