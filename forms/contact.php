<?php

    $name = $_POST [ 'name'];
    $visitor_email = $_POST [ 'email'];
    $message = $_POST [ 'message'];
    
    $mail_From = "stupidbakibillah@gmail.com"
        
        $email_subject = "New From Submission";

$email_body = "User Name: $name./n"
                "User Email: $visitor_email./n"
    "User Message: $message./n";

        $to = "bakibillah1475@gmail.com"
    $heades = "From: $email_from/r/n";
$headers = "Reply-To: $visiotr_email /r/n";
mail($to,$email_subject,$email_body,$headers)
    header("Location: index.html");
?>