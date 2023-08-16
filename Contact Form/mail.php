<?php

$name = $_POST['name'];
$surname = $_POST['surname'];
$phonenumber = $_POST['phonenumber'];
$email = $_POST['email'];
$invoicenumber = $_POST['invoicenumber'];

$mailhead = "From: .$name."<".email">\r\n"

$recipient = "customercare@mcphails.com.au";

mail($recipient,$subject,$message,$mailheader) or die ("error")

echo'


<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width-device-width, inital-scale=1.0">
        <title>Contact Form</title>
        <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600&display=swap" rel="stylesheet">        
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <div class="container">          
        <h1>Thank you for sumbitting your forms.</h1>
            <p>We will get back to you as soon as possible.</p>
          <p>Go back to the <a href="index.html">homepage</a></p>
        </form>
      </div>
    </body>
    </html>



';
?>