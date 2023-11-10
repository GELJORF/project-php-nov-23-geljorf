<?php


function connectToDatabase() {
    try {
        $pdo = new PDO(
            $dsn = "mysql:host=host.docker.internal;port=3306;dbname=hb_pdo_pe7;charset=utf8mb4",
            $username = 'hb_pdo_pe7',
            $password = 'TUEjdMVP1onaGMQF',
        );

        return $pdo;
    } catch (PDOException $e) {
        exit("Erreur de connexion à la base de données : " . $e->getMessage());
    }
}


$pdo = connectToDatabase();


$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_BCRYPT);


$sql = "INSERT INTO subscribers (email, password) VALUES (:email, :password)";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':email', $email);
$stmt->bindValue(':password', $password);

if ($stmt->execute()) {
    
    header('Location: inscription_reussie.php');
} else {
    echo 'Erreur lors de l\'inscription. Veuillez réessayer.';
}
