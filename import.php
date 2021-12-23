<?php
function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $randomString;
}


//database connection details
$connect = mysql_connect('localhost','root','');

if (!$connect) {
 die('Could not connect to MySQL: ' . mysql_error());
}

//your database name
$cid =mysql_select_db('iit_certificate',$connect);

// path where your CSV file is located
define('CSV_PATH','C:/wamp/www/');

// Name of your CSV file
$csv_file = CSV_PATH . "data.csv"; 


if (($handle = fopen($csv_file, "r")) !== FALSE) {
   fgetcsv($handle);   
   while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        $num = count($data);
        for ($c=0; $c < $num; $c++) {
          $col[$c] = $data[$c];
          $cert_id=generateRandomString();
        }

 $col1 = $col[0];
 $col2 = $col[1];
 $col3 = $col[2];
 $col4 = $col[3];
 $col5 = $col[4];
 $col6 = $cert_id;  
// SQL Query to insert data into DataBase
//$delete = "DELETE FROM iit_cert_details";
//$del = mysql_query($delete,$connect);
$query = "INSERT INTO iit_cert_details(Name,Training,Trainee,datee,EmailID,Cert_id) VALUES('".$col1."','".$col2."','".$col3."','".$col4."','".$col5."','".$col6."')";
$s     = mysql_query($query, $connect );
 }
    fclose($handle);
}

echo "File data successfully imported to database!!";
echo "<br><br>";
echo "<a href='main.php'>Go back</a>";
mysql_close($connect);
?>
