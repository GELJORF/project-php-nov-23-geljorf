<?php
session_start();

function connectToDatabase() {
    try {
        $pdo = new PDO(
            $dsn = "mysql:host=host.docker.internal;port=3306;dbname='hb_pdo_pe7';charset=utf8mb4",
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

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $telephone = $_POST['telephone'];
    $lettre_motivation = $_POST['lettre_motivation'];
    $level = $_POST['level'];
    $user_type = $_POST['user_type'];

    $sqlInsert = 'INSERT INTO connected (name, email, password, telephone, lettre_motivation, level, user_type) VALUES (:name, :email, :password, :telephone, :lettre_motivation, :level, :user_type)';
    $stmtInsert = $pdo->prepare($sqlInsert);
    $stmtInsert->bindValue(':name', $name);
    $stmtInsert->bindValue(':email', $email);
    $stmtInsert->bindValue(':password', $password);
    $stmtInsert->bindValue(':telephone', $telephone);
    $stmtInsert->bindValue(':lettre_motivation', $lettre_motivation);
    $stmtInsert->bindValue(':level', $level);
    $stmtInsert->bindValue(':user_type', $user_type);

    if ($stmtInsert->execute()) {
        header('Location: inscription_reussie.php');
    } else {
        echo 'Erreur lors de l\'inscription. Veuillez réessayer.';
    }
} else {
    echo 'Accès non autorisé.';
}
?>
