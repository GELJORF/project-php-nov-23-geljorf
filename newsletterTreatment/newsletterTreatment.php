<?php
require_once __DIR__ . "/../lessonOnLine/functions.php";
$db = connectToDatabase();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];

    $sqlCheck = 'SELECT ID FROM newsletter_subscribers WHERE email_adresse = :email';
    $stmtCheck = $db->prepare($sqlCheck);
    $stmtCheck->bindParam(':email', $email);
    $stmtCheck->execute();

    if ($stmtCheck->rowCount() > 0) {
        
        echo '<div class="p-4 mb-4 bg-red-500 text-white">L\'adresse e-mail est déjà inscrite à la newsletter.</div>';
        echo '<meta http-equiv="refresh" content="3;url=index.php">';
    } else {
        try {
            $sql = 'INSERT INTO newsletter_subscribers (email_adresse) VALUES (:email)';
            $stmt = $db->prepare($sql);
            $stmt->bindParam(':email', $email);
            $stmt->execute();
            echo '<div class="p-4 mb-4 bg-green-500 text-white">L\'adresse e-mail a été ajoutée à la base de données.</div>';

            $subscribersFile = __DIR__ . "/subscribers-list.txt";
            $file = fopen($subscribersFile, "a");

            if ($file === false) {
                echo '<div class="p-4 mb-4 bg-red-500 text-white">Erreur lors de l\'ouverture du fichier texte.</div>';
            } else {
                fwrite($file, $email . "\n");
                fclose($file);
                echo '<div class="p-4 mb-4 bg-green-500 text-white">L\'adresse e-mail a été ajoutée au fichier texte.</div>';
            }
            echo '<meta http-equiv="refresh" content="3;url=../index.php">';

        } catch (PDOException $e) {
            echo '<div class="p-4 mb-4 bg-red-500 text-white">Erreur PDO : ' . $e->getMessage() . '</div>';
        }
    }
}
?>
