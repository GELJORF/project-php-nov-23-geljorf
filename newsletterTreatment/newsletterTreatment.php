<?php
require_once __DIR__ . "/../lessonOnLine/functions.php";


$email = $_POST['email'];


if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo 'L\'adresse e-mail est invalide.';
    exit();
}


$sql = 'SELECT id FROM newsletter_subscribers WHERE email = :email';
$stmt = $db->prepare($sql);
$stmt->bindParam(':email', $email);
$stmt->execute();

if ($stmt->rowCount() > 0) {
    echo 'L\'adresse e-mail est déjà inscrite à la newsletter.';
    exit();
}


$sql = 'INSERT INTO newsletter_subscribers (email) VALUES (:email)';
$stmt = $db->prepare($sql);
$stmt->bindParam(':email', $email);
$stmt->execute();


$subscribersFile = __DIR__ . "/subscribers-list.txt";
$file = fopen($subscribersFile, "a");
fwrite($file, $email . "\n");
fclose($file);


echo 'Vous êtes inscrit à la newsletter.';
header('Location: ../index.php');
?>
