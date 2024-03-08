<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <script src="https://cdn.tailwindcss.com?plugins=typography"></script>
</head>

<body class="bg-gray-100 min-h-screen flex flex-col items-center justify-center">
    <div class="bg-white p-8 rounded-lg shadow-lg w-96 text-center mt-8">
        <h1 class="text-4xl font-bold text-blue-600 mb-4">Connexion</h1>
        <form action="login.php" method="POST">
            <div class="mb-4">
                <label class="block text-gray-700 mb-2">Type de connexion :</label>
                <div class="mb-2 flex justify-center">
                    <label class="inline-flex items-center">
                        <input type="radio" name="user_type" value="student" class="text-blue-600 mr-2" checked>
                        <span>Élève</span>
                    </label>
                </div>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 mb-2">Email :</label>
                <input class="w-full border rounded p-2" type="email" name="email" id="email" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 mb-2">Mot de passe :</label>
                <input class="w-full border rounded p-2" type="password" name="password" id="password" required>
            </div>
            
            <button class="bg-blue-600 text-white py-2 px-4 rounded hover:bg-blue-700 w-full" type="submit">
                Se connecter
            </button>
        </form>
        <p class="mt-4 text-gray-700">
            Pas encore inscrit ? <a href="../inscription/inscription.php" class="text-blue-600 hover:underline">Inscrivez-vous ici</a>
        </p>
        <p class="mt-4 text-blue-600 hover:underline">
            <a href="password_reset.php">Mot de passe oublié ? Réinitialiser votre mot de passe !</a>
        </p>
    </div>
    <div class="mt-4 mb-4">
        <a href="../index.php" class="bg-blue-600 text-white py-2 px-4 rounded hover:bg-blue-700">Retour</a>
    </div>
</body>
</html>
