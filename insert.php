<?php
$con=mysqli_connect("localhost","root","","iit_Certificate");
header('Content-type: image/png');
if((isset($_POST["student_name"])) && (isset($_POST["training"])) && (isset($_POST["trainee"])) && (isset($_POST["date"])))
{
$name=$_POST["student_name"];
$training=$_POST["training"];
$trainee=$_POST["trainee"];
$date=$_POST["date"];
$super = "Super Resource Center Co-ordinator";
$fac = "Dr.T Subbulakshmi";
$vit = "VIT University";
function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $randomString;
}

$cert_id=generateRandomString();
$q="INSERT INTO iit_cert_details (Name, Training, Trainee, datee, Cert_id) 
values
('$name','$training','$trainee','$date','$cert_id')";
//echo $name."\n".$reg."\n".$school."\n".$type;
if(mysqli_query($con,$q)==TRUE)
{
			$im=imagecreatefrompng("iit_cert.png");
			$black=imagecolorallocate($im,0,0,0);
			$white=imagecolorallocate($im,255,255,255);
			imagettftext($im,50,0,1150,860,$black,'arialbd.TTF',"$name");
			imagettftext($im,50,0,2540,860,$black,'arialbd.TTF',$training);
			imagettftext($im,50,0,1903,960,$black,'arialbd.TTF',$trainee);
			imagettftext($im,50,0,2610,960,$black,'arialbd.TTF',$date);
			imagettftext($im,50,0,1790,1259,$black,'arialbd.TTF',$training);
			imagettftext($im,50,0,650,1950,$black,'arialbd.TTF',$date);
			imagettftext($im,40,0,2140,1950,$black,'arialbd.TTF',$fac);
			imagettftext($im,40,0,2140,2010,$black,'arialbd.TTF',$super);
			imagettftext($im,40,0,2140,2070,$black,'arialbd.TTF',$vit);
			imagettftext($im,40,0,50,2380,$white,'arial.TTF',strtoupper($cert_id));
			imagepng($im);
			
echo "Certificate Details stored Sucessfully!!";
echo "<br><br><a href='main.php'>Go back</a><br><br>";
echo "<a href='logout.php'>Logout</a>";
}
else
{
echo mysqli_error($con);
}
}
?>