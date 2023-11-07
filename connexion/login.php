
<!--CE CODE NE FONCTIONNE PAS ENCORE-->
<?php
session_start();

// Vérifiez si l'utilisateur a soumis le formulaire de connexion
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Assurez-vous d'avoir établi une connexion PDO à votre base de données
    try {
        $pdo = new PDO(
            $dsn = "mysql:host=host.docker.internal;port=3306;dbname='hb_pdo_pe7';charset=utf8mb4",
            $username = 'hb_pdo_pe7',
            $password = 'TUEjdMVP1onaGMQF',
        );
    } catch (PDOException $e) {
        exit("Erreur de connexion à la base de données : " . $e->getMessage());
    }

    // Collectez les informations d'identification de l'utilisateur
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Effectuez une requête SQL pour vérifier les informations d'identification
    $sql = 'INSERT * INTO connected WHERE email = :email';
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':email', $email);
    $stmt->execute();
    $user = $stmt->fetch();

    if ($user && password_verify($password, $user['password'])) {
        // Les informations d'identification sont valides, l'utilisateur est connecté avec succès
        $_SESSION['user_id'] = $user['ID'];
        $_SESSION['user_name'] = $user['name'];
        $_SESSION['user_email'] = $user['email'];

        // Redirigez l'utilisateur vers la page de tableau de bord appropriée en fonction de son type d'utilisateur (professeur ou étudiant)
        if ($user['user_type'] === 'professor') {
            header('Location: dashboard.php?type=professor');
        } else {
            header('Location: dashboard.php?type=student');
        }
    } else {
        echo 'Identifiants de connexion non valides.';
    }
} else {
    // Gestion des accès directs à ce script sans soumission de formulaire
    echo 'Accès non autorisé.';
}
?>
