<?php
require_once __DIR__ . "/../lessonOnLine/functions.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo 'L\'adresse e-mail est invalide.';
        header('Location: ../index.php');
        exit();
    }

    $sql = 'SELECT ID FROM newsletter_subscribers WHERE email_adresse = :email';
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':email', $email);
    $stmt->execute();

    if ($stmt->errorInfo()[0] !== '00000') {
        echo 'Erreur SQL lors de la vérification de l\'adresse e-mail dans la base de données : ' . implode(', ', $stmt->errorInfo());
        header('Location: ../index.php');
        exit();
    }

    if ($stmt->rowCount() > 0) {
        echo 'L\'adresse e-mail est déjà inscrite à la newsletter.';
        header('Location: ../index.php');
        exit();
    }

    $sql = 'INSERT INTO newsletter_subscribers (email_adresse) VALUES (:email)';
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':email', $email);
    $stmt->execute();

    if ($stmt->errorInfo()[0] !== '00000') {
        echo 'Erreur SQL lors de l\'insertion de l\'adresse e-mail dans la base de données : ' . implode(', ', $stmt->errorInfo());
        header('Location: ../index.php');
        exit();
    }

    $subscribersFile = __DIR__ . "/subscribers-list.txt";
    $file = fopen($subscribersFile, "a");

    if ($file === false) {
        echo 'Erreur lors de l\'ouverture du fichier texte.';
        header('Location: ../index.php');
        exit();
    }

    fwrite($file, $email . "\n");
    fclose($file);

    echo 'Vous êtes inscrit à la newsletter.';
    header('Location: ../index.php');
    exit();
}
?>
