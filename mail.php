<?php

ini_set('display_errors',1);
error-reporting(E_ALL);

$to = "admin@patelparth.me";
$subject = "Respnse from site";
$message = "I am very happy";
$headers = "From:prp4203@gmail.com";
mail($to, $subject, $message, $headers)
    echo "Mail send Successfully";
    




?>
