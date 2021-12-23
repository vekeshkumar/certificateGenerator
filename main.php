<?php
session_start();
if(isset($_SESSION["username"]))
{	
?>
<html>
<head>
<title>Main page</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body style="margin-top: 5em">
<center>
<h2>
CERTIFICATE DETAILS
</h2>
</center>
<form class="container" style="margin-left:19em;" action="insert.php" method="post">
<pre>
Name 				: <input type=text name="student_name">
<br>
Training			: <select name="training">
<option value="C and Cpp">C and Cpp</option>
<option value="Java">Java</option>
<option value="LaTeX">LaTeX</option>
<option value="Oscad">Oscad</option>
<option value="PERL">PERL</option>
<option value="PHP and MySQL">PHP and MySQL</option>
<option value="Python">Python</option>
<option value="Scilab">Scilab</option>
<option value="PERL">PERL</option>
</select>
<br>
Trained by(Faculty)		: <input type="text" name="trainee">
<br>
Date 				: <input type="text" name="date">
<br>

</pre>
<center>
<input class="button" type="submit" value="Submit">
<a href="import.php"><input class="button" type="button" value="Import data from csv"></a>
<a href="generate.php"><input class="button" type="button" value="Generate Certificate"></a>
<a href="logout.php"><input class="button" type="button" value="Logout"></a>
</center>
</form>

</body>
</html>
<?php
}
else
{
echo "Unauthorized Access!!";
}
?>