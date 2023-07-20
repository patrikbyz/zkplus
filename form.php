<?php
    $jmeno = $_POST['jmeno'];
    $nastevnik_email = $_POST['email'];
    $predmet = $_POST['predmet'];
    $zprava = $_POST['zprava'];

    $email_from = 'info@patrikbyz.github.io/zkplus';

    $email_predmet = 'New form submission';

    $email_body = "User name: $jmeno. \n".
                    "User email: $nastevnik_email. \n".
                    "subject: $predmet. \n".
                    "User message: $zprava. \n";

    $to = 'nabelek.patas@gmail.com';
    
    $headrs = "From: $email_from\r\n";

    $headrs .= "Reply-to: $nastevnik_email\r\n";
    
    mail($to,$email_predmet,$email_body,$headrs);

    header("Location: kontakt.html");
    
    ?>
