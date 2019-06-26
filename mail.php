<?php
$to = "opqrs4203@gmail.com";
$subject = "Respnse from site";
$message = "I am very happy";
$headers = "From:prp4203@gmail.com";

if(mail($to, $subject, $message, $headers)){
    echo "Mail send Successfully";
    else{
        echo "sorry";
    }
}




?>