<?php

    $myAwardSpaceEmail = "portiaocran3@gmail.com";
    $myPersonalEmail = "portiaocran3@gmail.com";
    
    if(isset($_POST['submit'])) {
        $subject = $_POST['subject'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        $headers = "From: Contact Form <" . $myAwardSpaceEmail . ">" . "\r\n";
        $headers .= "Reply-To: " . $name . " <" . $email .">" . "\r\n";
        
        echo 'Your message has been sent successfully!';
        mail($myPersonalEmail, $subject, $message, $headers);
    } else {
        echo 'An error has occurred!' + $name;
    }
?>