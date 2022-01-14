<?php

if(isset($_POST['enviar'])){
    if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['message'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        $header = "From: arleypareja4@gamail.com" . "\r\n";
        $header.= "Reply-To: arleypareja4@gmail.com" . "\r\n";
        $header.= "X-Mailer: PHP/". phpversion();
        $mail = @mail($email, $name, $message, $header)
        if ($mail) {
            echo "<h4> Correo enviado correctamente </h4>"
        }
    }
}
