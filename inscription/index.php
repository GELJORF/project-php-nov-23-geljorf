<?php

function connectToDatabase() {
    try {
        $pdo = new PDO(
            $dsn = "mysql:host=host.docker.internal;port=3306;dbname=hb_pdo_pe7;charset=utf8mb4",
            $username ='hb_pdo_pe7',
            $password = 'TUEjdMVP1onaGMQF',
        );
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

    
    $insertedData = "Nom: $last_name, Prénom: $first_name, Email: $email, Téléphone: $telephone, Niveau: $level";

    
    $file = fopen("new_subscribers.txt", "a");
    fwrite($file, $insertedData . PHP_EOL);
    fclose($file);

    echo "Inscription réussie ! Données de l'inscrit : " . $insertedData;
}

?>
