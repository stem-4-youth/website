<?php 

if(isset($_POST['submit'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $message = $_POST['subject'];

    $mailTo = "raedshah1@gmail.com";
    $headers = "From: ".$email;
    $txt = "You have received a message from " .$name. ".\n\n".$message;

    mail($mailTo, $subject, $txt, $headers);
    header("Location: index.php?mailsend");
}