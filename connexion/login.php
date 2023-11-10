<?php

// Ce code ne fonctionn pas encore correctement
session_start();

function connectToDatabase() {
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        try {
            $pdo = new PDO(
                $dsn = "mysql:host=host.docker.internal;port=3306;dbname='hb_pdo_pe7';charset=utf8mb4",
                $username ='hb_pdo_pe7',
                $password = 'TUEjdMVP1onaGMQF',
            );
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            exit("Erreur de connexion à la base de données : " . $e->getMessage());
        }

        $email = $_POST['email'];
        $password = $_POST['password'];

        $sql = 'INSERT INTO connected (email) VALUES (:email)';
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':email', $email);
        $stmt->execute();


        $sql = 'SELECT * FROM connected WHERE email = :email';
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':email', $email);
        $stmt->execute();
        $user = $stmt->fetch();

        if ($user && password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['ID'];
            $_SESSION['user_name'] = $user['name'];
            $_SESSION['user_email'] = $user['email'];

            if ($user['user_type'] === 'professor') {
                header('Location: dashboard.php?type=professor');
            } else {
                header('Location: dashboard.php?type=student');
            }
        } else {
            echo 'Identifiants de connexion non valides.';
        }
    } else {
        echo 'Accès non autorisé.';
    }
}
?>
