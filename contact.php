<?php
    if (isset($_POST['submit'])) {
        $to = 'corymizer@gmail.com';
        $subject = 'Message From Website';
        $message = 'Name: ' . $_POST['name'] . "r/n/r/n";
        $message = 'Email: ' . $_POST['email'] . "r/n/r/n";
        $message = 'Message: ' . $_POST['message'];
        
        echo $message;
    }
?>


<!DOCTYPE html>

<html>
    <head>
        
    </head>
    
    <body>
        <h1>Thank You!</h1>
        <p>Your Message Was Received!</p>
        <h1>Oops!</h1>
        <p>Something Went Wrong.</p>
    </body>

</html>