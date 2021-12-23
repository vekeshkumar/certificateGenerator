<?php
if((isset($_POST["student_name"])) && (isset($_POST["register_no"])) && (isset($_POST["university"])) && (isset($_POST["branch"])) && (isset($_POST["type"])))
{
	$student_name=$_POST["student_name"];
	$register_no=$_POST["register_no"];
	$university=$_POST["university"];
	$branch=$_POST["branch"];
	$type=$_POST["type"];
	
	if($type=="Organizer")
	{
		$content="This is to certify that Mr./Ms.".$student_name." (".$register_no." ) Studying ".$branch." has Organized Software Freedom Day at VIT University, Chennai Campus on September 19th of 2014 Co-ordinated by Linux Users Group@VITCC";	
	
	}
	echo $content;
	}
?>