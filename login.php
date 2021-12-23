<?php
session_start();
if((isset($_POST["username"]) && isset($_POST["password"])))
{
$u=$_POST["username"];
$p=$_POST["password"];
$con=mysqli_connect("localhost","root","","iit_Certificate");
$q="SELECT * from users where Username='$u' AND Password='$p'";
$res=mysqli_query($con,$q);
if(mysqli_num_rows($res)==1)
{
$_SESSION["username"]=$u;
header("Location: main.php");
}
else
{
echo "Failed";
}
}
?>