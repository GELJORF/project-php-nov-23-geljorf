<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Espace personnel Élève</title>
    <script src="https://cdn.tailwindcss.com?plugins=typography"></script>
</head>

<body class="bg-gray-100 flex flex-col items-center justify-center min-h-screen">
    <h1 class="text-4xl font-bold text-blue-600 mb-4">Votre espace</h1>
    <div class="bg-white p-8 rounded-lg shadow-lg">
        <?php
        session_start();

        if (isset($_SESSION['user_name'])) {
            $user_name = htmlspecialchars($_SESSION['user_name']);

            echo "<p>Bienvenue, $user_name ! Vous êtes connecté en tant qu'élève.</p>";

            echo "<p>Voici votre espace personnel avec des informations spécifiques à un élève.</p>";
            echo "<p>Contenu supplémentaire...</p>";
        } else {
            echo "Session non valide. Veuillez vous connecter.";
        }
        ?>
    </div>
    <div>
        <a href="../index.php" class="mt-4 text-blue-600 hover:underline">Déconnexion</a>
    </div>
</body>
</html>
