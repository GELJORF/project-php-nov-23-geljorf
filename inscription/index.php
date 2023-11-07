<?php

// Fonction pour se connecter à la base de données
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

// Vous pouvez maintenant utiliser la fonction connectToDatabase pour établir une connexion à la base de données.
$pdo = connectToDatabase();

// Collectez les données du formulaire
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_BCRYPT);

// Préparez et exécutez la requête d'insertion
$sql = "INSERT INTO subscribers (email, password) VALUES (:email, :password)";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':email', $email);
$stmt->bindValue(':password', $password);

if ($stmt->execute()) {
    // L'inscription a réussi, vous pouvez rediriger l'utilisateur vers une page de succès
    header('Location: inscription_reussie.php');
} else {
    // Une erreur s'est produite, vous pouvez afficher un message d'erreur à l'utilisateur
    echo 'Erreur lors de l\'inscription. Veuillez réessayer.';
}
