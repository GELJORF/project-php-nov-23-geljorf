<?php

include_once __DIR__ . '/config.php';
function connectToDatabase()
{
    try {
        $pdo = new PDO(DB_DSN, DB_USERNAME, DB_PASSWORD);

        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        return $pdo;
    } catch (PDOException $e) {
        exit("Erreur de connexion à la base de données : " . $e->getMessage());
    }
}

$pdo = connectToDatabase();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $telephone = $_POST['telephone'];
    $level = $_POST['level'];

    $file = $_FILES['file']['name'];
    $lettre_motivation = $_POST['lettre_motivation'];
    $password = $_POST['password'];

    $hashed_password = password_hash($password, PASSWORD_BCRYPT);


    try {
        $sql = "INSERT INTO subscribers (first_name, last_name, email, password, active) VALUES (?, ?, ?, ?, 1)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$first_name, $last_name, $email, $hashed_password]);

        echo "Inscription réussie !";
    } catch (PDOException $e) {
        echo "Erreur lors de l'inscription dans la base de données : " . $e->getMessage();
    }


    $insertedData = "Nom: $last_name, Prénom: $first_name, Email: $email, Téléphone: $telephone, Niveau: $level";
    $file = fopen("new_subscribers.txt", "a");
    if ($file) {
        fwrite($file, $insertedData . PHP_EOL);
        fclose($file);
        echo "Données de l'inscrit ajoutées au fichier texte : " . $insertedData;
    } else {
        echo "Erreur lors de l'ouverture du fichier texte.";
    }
}


$pdo = null;
