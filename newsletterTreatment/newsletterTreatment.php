<?php
require_once __DIR__ . "/../lessonOnLine/functions.php";
$db = connectToDatabase();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];

    try {
        $sql = 'INSERT INTO newsletter_subscribers (email_adresse) VALUES (:email)';
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        echo 'L\'adresse e-mail a été ajoutée à la base de données.';

        $subscribersFile = __DIR__ . "/subscribers-list.txt";
        $file = fopen($subscribersFile, "a");

        if ($file === false) {
            echo 'Erreur lors de l\'ouverture du fichier texte.';
        } else {
            fwrite($file, $email . "\n");
            fclose($file);
            echo 'L\'adresse e-mail a été ajoutée au fichier texte.';
        }
        echo '<meta http-equiv="refresh" content="3;url=../index.php">';

    } catch (PDOException $e) {
        echo 'Erreur PDO : ' . $e->getMessage();
    }
}
?>
