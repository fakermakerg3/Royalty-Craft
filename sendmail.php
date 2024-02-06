<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $project = $_POST['project'];
    $message = $_POST['message'];
    
    $to = 'marnissinour66@gmail.com';
    $subject = 'Nouveau message de ' . $name;
    $body = 'De : ' . $name . '\n';
    $body .= 'Email : ' . $email . '\n';
    $body .= 'Projet : ' . $project . '\n';
    $body .= 'Message : ' . $message;
    
    // En-têtes
    $headers = 'From: ' . $email . '\r\n';
    $headers .= 'Reply-To: ' . $email . '\r\n';
    
    // Envoi de l'e-mail
    if (mail($to, $subject, $body, $headers)) {
        echo 'Message envoyé avec succès.';
    } else {
        echo 'Erreur lors de l\'envoi du message.';
    }
}
?>
