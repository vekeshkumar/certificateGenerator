<?php
$con=mysqli_connect("localhost","root","","iit_Certificate");
$cert_id=array();
$i=0;
//header('Content-type: image/png');
$super = "Super Resource Center Co-ordinator";
$fac = "Dr.T Subbulakshmi";
$vit = "VIT University";
if(!empty($_POST["cert_id"]))
{
	foreach($_POST['cert_id'] as $selected)
	{
		//echo "$selected<br>";
		$cert_id[$i]=$selected;
		$i++;
	}
}

for($i=0;$i<count($cert_id);$i++)
{
	
	$current=$cert_id[$i];
	$filename = $current.".png";
	$q="SELECT * from iit_cert_details WHERE Cert_id='$current'";
		$res=mysqli_query($con,$q);
		while($row=mysqli_fetch_array($res))
		{
			
			$name=$row['Name'];
			$training=$row['Training'];
			$trainee=$row['Trainee'];
			$date=$row['datee'];
			$im=imagecreatefrompng("iit_cert.png");
			$black=imagecolorallocate($im,0,0,0);
			$white=imagecolorallocate($im,255,255,255);
			imagettftext($im,50,0,1170,808,$black,'arialbd.TTF',"$name");
			imagettftext($im,50,0,2650,808,$black,'arialbd.TTF',$training);
			imagettftext($im,50,0,2000,908,$black,'arialbd.TTF',$trainee);
			imagettftext($im,50,0,2720,908,$black,'arialbd.TTF',$date);
			imagettftext($im,50,0,1790,1208,$black,'arialbd.TTF',$training);
			imagettftext($im,50,0,650,1950,$black,'arialbd.TTF',$date);
			imagettftext($im,40,0,2140,1950,$black,'arialbd.TTF',$fac);
			imagettftext($im,40,0,2140,2010,$black,'arialbd.TTF',$super);
			imagettftext($im,40,0,2140,2070,$black,'arialbd.TTF',$vit);
			imagettftext($im,40,0,50,2380,$white,'arial.TTF',strtoupper($current));
			imagepng($im,"C:\\wamp\\www\\iit_cert\\Certificates\\$filename");
			echo "Certificate $filename Successfully Generated<br>";	
		}
		//echo "$type<br>";
		
		
}
?>