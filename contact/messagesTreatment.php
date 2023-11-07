<?php

$filename = __DIR__ . '/messages.txt';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST["nom"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    
    if (empty($nom) || empty($message)) {
        echo "Veuillez remplir tous les champs du formulaire.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "L'adresse e-mail n'est pas au bon format.";
    } else {
        $newMessage = "Nom : $nom\nEmail : $email\nMessage : $message\n\n";

        
        if (file_put_contents($filename, $newMessage, FILE_APPEND|LOCK_EX)) {
            echo "Votre message a été envoyé avec succès.";
            header("Refresh: 3; URL=../index.php");
        } else {
            echo "Erreur lors de l'enregistrement du message.";
            header("Refresh: 15; URL= contact.php");
        }
    }
}
?>
