<?php

if (isset($_POST['submit'])){

    $name = $_POST['name'];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $select = $_POST["select"];

    $EmailTo = "brian@brike.mx";
    $Subject = "New quote request from Aria landing page";

    $Body = "Nuevo Lead.\n\n".$name."\n\n".$phone."\n\n".$email."\n\n".$select;
// prepare email body text

mail($EmailTo, $Subject, $Body, "From:".$email);
// redirect to success page
header("Location: index.html?mailsend");
}

?>