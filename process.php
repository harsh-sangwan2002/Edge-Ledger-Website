<?php
if(isset($_POST['email'])){

    // Email information
    $admin_email = "harshsanwagn2003.net";
    $name = $_POST['$name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    // Send mail
    mail($admin_email,"New Form Submission",$message.'-'.$phone,"From".$email);

    header('Location: http://edgeledger.net/success.html');

}