<?php

function connectToDatabase() {
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        try {
            $pdo = new PDO(
                $dsn = "mysql:host=host.docker.internal;port=3306;dbname=hb_pdo_pe7;charset=utf8mb4",
                $username = 'hb_pdo_pe7',
                $password = 'TUEjdMVP1onaGMQF',
            );
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            exit("Erreur de connexion à la base de données : " . $e->getMessage());
        }
        $name = $_POST["name"];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $sqlSelect = 'SELECT * FROM subscribers WHERE email = :email';
        $stmtSelect = $pdo->prepare($sqlSelect);
        $stmtSelect->bindValue(':email', $email);
        $stmtSelect->execute();
        $user = $stmtSelect->fetch();

        if ($user && password_verify($password, $user['password'])) {

            $_SESSION['user_id'] = $user['ID'];
            $_SESSION['user_name'] = $user['name'];
            $_SESSION['user_email'] = $user['email'];


            if (!$user) {
                $sqlInsert = 'INSERT INTO connected (name, email, password) VALUES (:name, :email, :password)';
                $stmtInsert = $pdo->prepare($sqlInsert);
                $stmtInsert->bindValue(':name', $name); 
                $stmtInsert->bindValue(':email', $email);
                $stmtInsert->bindValue(':password', $password); 
                $stmtInsert->execute();
            }

            
            header('Location: dashboard_student.php');
            exit();
        } else {
            echo 'Identifiants de connexion non valides.';
        }
    } else {
        echo 'Accès non autorisé.';
    }
}
?>
