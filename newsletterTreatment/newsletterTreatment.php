<?php

require_once __DIR__ ."/../lessonOnLine/functions.php";

$email = $_POST['email'];

// Vérification de la validité de l'adresse e-mail
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo 'L\'adresse e-mail est invalide.';
    exit();
}

// Vérification de l'existence de l'adresse e-mail dans la table
$sql = 'SELECT id FROM newsletter_subscribers WHERE email = :email';
$stmt = $db->prepare($sql);
$stmt->bindParam(':email', $email);
$stmt->execute();

// Si l'adresse e-mail existe déjà, on ne fait rien
if ($stmt->rowCount() > 0) {
    echo 'L\'adresse e-mail est déjà inscrite à la newsletter.';
    exit();
}

// Ajout de l'adresse e-mail à la table
$sql = 'INSERT INTO newsletter_subscribers (email) VALUES (:email)';
$stmt = $db->prepare($sql);
$stmt->bindParam(':email', $email);
$stmt->execute();

// Envoi d'un e-mail de confirmation
$subject = 'Confirmation d\'inscription à la newsletter';
$message = 'Merci de votre inscription à notre newsletter.';
mail($email, $subject, $message);

// Affichage d'un message de confirmation
echo 'Vous êtes inscrit à la newsletter.';

?>