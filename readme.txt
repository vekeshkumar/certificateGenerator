
# Certificate-Generator-PHP
 This is an application which generates certificates with given details and template and mail them to user.

FILE ORGANISATION:


1) To successfully get the details from the csv file, slight modification of the code is required.


Need to access the import.php , in the line 26, the  csv file name has to be given Like "data.csv"

The csv file format should be like:
# Name
# Subject on which training happened-ex:PHP and MySQL 
# Trainer Name ex:Prof.Udayakumar
# Date in any format but preferable 12 September 2014
# Mail id 

Before importing the file , it is recommended to delete the data in the table iit_cert_details table
 
 iit_cert.sql -this file consists of the database schema and we can import into the phpmyadmin 



 index.php-Has the interface when the app is run on the local server
 login.php- Has the login code for accessing the application

And to tell about the generation of the certificates , always it is recommended to generate on the training category

If the details are overlapping , go to the generate1.php , where there will be co-ordinates for the text which is embedded into the image template.


And if want to check all the check list and to generate in the line 32 of the file generate.php 
add the following detail into html which resides inside the while loop
checked="checked"
