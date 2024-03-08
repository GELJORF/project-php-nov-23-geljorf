<?php


if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = $_POST['email']; 
    // Code à compléter

    header('Location: reset_password_confirmation.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Réinitialisation du mot de passe</title>
    <script src="https://cdn.tailwindcss.com?plugins=typography"></script>
</head>

<body class="bg-gray-100 min-h-screen flex flex-col items-center justify-center">
    <div class="bg-white p-8 rounded-lg shadow-lg w-96 text-center mt-8">
        <h1 class="text-4xl font-bold text-blue-600 mb-4">Réinitialisation du mot de passe</h1>
        <form action="" method="POST">
            <div class="mb-4">
                <label class="block text-gray-700 mb-2">Entrez votre adresse e-mail :</label>
                <input class="w-full border rounded p-2" type="email" name="email" required>
            </div>
            <button class="bg-blue-600 text-white py-2 px-4 rounded hover:bg-blue-700 w-full" type="submit">
                Envoyer un lien de réinitialisation
            </button>
        </form>
    </div>
    <div class="mt-4 mb-4">
        <a href="connexion.php" class="bg-blue-600 text-white py-2 px-4 rounded hover:bg-blue-700">Retour</a>
    </div>
</body>

</html>
