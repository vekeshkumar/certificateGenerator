<html>
<head>
<title>Main page</title>
<link rel="stylesheet" href="css/style.css">
<style>
	body{
	margin: 10em;
	margin-left:28em;
	padding: 2em;
	border:4px solid #ffff00;
	width:500px;
	height:auto;
	background-color:#333333;
		}
</style>
</head>
<?php
echo"<body>";
echo"<center>";
echo "<form action='generate1.php' method='post'>";
$con=mysqli_connect("localhost","root","","iit_Certificate");
$q="SELECT * from iit_cert_details";
$res=mysqli_query($con,$q);
echo "<table border='0' cellspacing='5' cellpadding='5'>";
echo "<tr><th>Select</th><th>Name</th><th>Training</th></tr>";

while($row=mysqli_fetch_array($res))
{
	$username=$row["Name"];
	$cert_id=$row["Cert_id"];
	$type=$row["Training"];
		echo "<tr><td><input type='checkbox' name='cert_id[]'  value='$cert_id'></td><td>$username</td><td>$type</td></tr>";
}
echo '</table>';
echo"<br><br><br><br>";
echo "<input class='button' type='submit' value='Generate'>";
echo "</form>";
/*
$im=imagecreatefromjpeg("organiser.jpg");
$color=imagecolorallocate($im,0,0,0);
imagettftext($im,50,0,1545,1230,$color,'LucidaTypewriterRegular.TTF',$name);
imagettftext($im,50,0,621,1351,$color,'LucidaTypewriterRegular.TTF',$reg);
imagettftext($im,50,0,1505,1357,$color,'LucidaTypewriterRegular.TTF',$school);
imagejpeg($im);
*/
echo"</center>";
echo"</body>";
?>

</html>