<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <script src="https://cdn.tailwindcss.com?plugins=typography"></script>
</head>

<body class="bg-gray-100 flex flex-col items-center justify-center min-h-screen">
    <h1 class="text-4xl font-bold text-blue-600 mb-4 mt-8">Inscription</h1>
    <form class="bg-white p-8 rounded-lg shadow-md w-full max-w-md" action="index.php" method="POST" enctype="multipart/form-data">
        <div class="mb-4">
            <label class="text-gray-700 text-sm" for="first_name">Prénom :</label>
            <input class="border border-blue-300 rounded p-2 w-full" type="text" id="first_name" name="first_name" required>
        </div>
        <div class="mb-4">
            <label class="text-gray-700 text-sm" for="last_name">Nom :</label>
            <input class="border border-blue-300 rounded p-2 w-full" type="text" id="last_name" name="last_name" required>
        </div>
        <div class="mb-4">
            <label class="text-gray-700 text-sm" for="email">Email :</label>
            <input class="border border-blue-300 rounded p-2 w-full" type="email" id="email" name="email" required>
        </div>
        <div class="mb-4">
            <label class="text-gray-700 text-sm" for="password">Mot de passe :</label>
            <input class="border border-blue-300 rounded p-2 w-full" type="password" id="password" name="password" required>
        </div>
        <div class="mb-4">
            <label class="text-gray-700 text-sm" for="passwordConfirm">Confirmer le mot de passe :</label>
            <input class="border border-blue-300 rounded p-2 w-full" type="password" id="passwordConfirm" name="passwordConfirm" required>
        </div>
        <div class="mb-4">
            <label class="text-gray-700 text-sm" for="telephone">Téléphone :</label>
            <input class="border border-blue-300 rounded p-2 w-full" type="tel" id="telephone" name="telephone">
        </div>
        <div class="mb-4">
            <label class="text-gray-700 text-sm" for="file">Télécharger un fichier (PDF) :</label>
            <input class="border border-blue-300 rounded p-2 w-full" type="file" id="file" name="file" accept=".pdf" required>
        </div>
        <div class="mb-4">
            <label class="text-gray-700 text-sm" for="lettre_motivation">Pourquoi êtes-vous motivé ?</label>
            <textarea class="border border-blue-300 rounded p-2 w-full" id="lettre_motivation" name="lettre_motivation" rows="4" required></textarea>
        </div>
        <div class="mb-4">
            <label class="text-gray-700 text-sm" for="level">Niveau :</label>
            <select class="border border-blue-300 rounded p-2 w-full" id="level" name="level">
                <option value="beginner">Débutant</option>
                <option value="intermediate">Intermédiaire</option>
                <option value="advanced">Avancé</option>
            </select>

        </div>
        <button class="bg-blue-600 text-white p-2 rounded hover:bg-blue-700 w-full" type="submit">Inscription</button>
    </form>
    <div class="mt-4 mb-8">
        <a class="bg-blue-600 text-white py-2 px-4 rounded hover:bg-blue-700" href="../index.php">Retour</a>
    </div>
</body>

</html>
