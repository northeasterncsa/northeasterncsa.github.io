<?php
$name = $_POST['name'];
$visitor_email=  $_POST['email'];
$message =  $_POST['message'];


$email_from = $visitor_email; //person sending email
$email_subject = "New Form Submission";
$email_body = "User Name: $name.\n".
              "User Email: $visitor_email.\n".
              "User Message: $message.\n";


              $to = "joshuaan7@gmail.com" //where you want to receive the inquiries
              $headers = "From: $email_from \r\n";
              mail($to,$email_subject,$email_body,$headers);

              header("Location: index.html");
?>
