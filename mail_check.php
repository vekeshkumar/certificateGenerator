<?php

require 'PHPMailer-master/PHPMailerAutoload.php';
    require_once('PHPMailer-master/class.phpmailer.php'); //library added in download source.
    $msg  = 'Hello World';
    $subj = 'test mail message';
    $to   = $email;
    $filename = $cert_id.".png";
    $from = 'you@youremail.com';
    $name = 'My Name';
    
 
    echo smtpmailer($to,$from, $name ,$subj, $msg);
 
    function smtpmailer($to, $from, $from_name = 'Example.com', $subject, $body, $is_gmail = true)
    {
    	$path = '/Certificates/'.$filename;
        global $error;
        $mail = new PHPMailer();
        $mail->IsSMTP();
        $mail->SMTPAuth = true; 
 
        $mail->SMTPSecure = 'tls'; 
        $mail->Host = 'smtp.gmail.com';
        $mail->Port = 587;  
        $mail->Username = 'ssvfree9@gmail.com';  
        $mail->Password = '##ssvfree9';   
 
        $mail->IsHTML(true);
        $mail->From="admin@example.com";
        $mail->FromName="Example.com";
        $mail->Sender=$from; // indicates ReturnPath header
        $mail->AddReplyTo($from, $from_name); // indicates ReplyTo headers
        //$mail->AddCC('cc@phpgang.com', 'CC: to phpgang.com');
        $mail->Subject = $subject;
        $mail->Body = $body;
        $mail->AddAddress($to);
        $mail->AddAttachment($path);
        
        if(!$mail->Send())
        {
            $error = 'Mail error: '.$mail->ErrorInfo;
            echo $error;
            return true;
        }
        else
        {
            $error = 'Message sent!';
            return false;
        }
    }
?>