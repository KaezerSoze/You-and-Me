<?php

header("Access-Control-Allow-Origin: http://127.0.0.1:5500");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Allow-Headers: Content-Type");



if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Récupérer les données du formulaire
    $nom = htmlspecialchars($_POST["nom"]);
    $email = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);
    

    // Adresse e-mail de réception
    $destinataire = "fingerzjbm@gmail.com";

    // Sujet de l'e-mail
    $sujet = "Nouveau message depuis le formulaire de contact";

    // Corps de l'e-mail
    $corps = "Nom: $nom\n";
    $corps .= "E-mail: $email\n\n";
    $corps .= "Message:\n$message";

    // En-têtes de l'e-mail
    $headers = "From: $email\r\nReply-To: $email\r\n";

    // Envoyer l'e-mail
    if (mail($destinataire, $sujet, $corps, $headers)) {
        echo "Votre message a été envoyé avec succès.";
    } else {
        echo "Erreur lors de l'envoi du message.";
    }
} else {
    echo "Une erreur s'est produite. Veuillez réessayer.";
}
?>