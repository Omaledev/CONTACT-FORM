<?php

$firstname = $_POST["first_name"];
$lastname = $_POST["last_name"];
$email = $_POST["email_address"];
$querytype = $_POST["query_type"];
$message = $_POST["message"];
$consent = $_POST["consent"];

    


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>First Name:<?php echo $firstname?></h1>
    <h1>Last Name:<?php echo $lastname?> </h1>
    <h1>Email:<?php echo $email?></h1>
    <h1>Query type:<?php echo $querytype?></h1>
    <h1>Message:<?php echo $message?></h1>
    <h1>consent:<?php echo $consent?></h1>
    <h5>A copy of your form has been sent to your email.</h5>
</body>
</html>