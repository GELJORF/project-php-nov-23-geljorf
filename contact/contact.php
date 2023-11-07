<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contactez-nous</title>
    <script src="https://cdn.tailwindcss.com?plugins=typography"></script>
</head>
<body class="bg-gray-100 p-8">
   
    <div class="max-w-3xl mx-auto">
        <header>
            <h1 class="text-4xl font-bold text-blue-600 mb-6">Contactez-nous</h1>
        </header>

        <nav class="mb-6">
            <ul class="flex space-x-4">
                <li><a href="../index.php" class="text-blue-600">Accueil</a></li>
                <li><a href="../lessonOnLine.php" class="text-blue-600">Cours</a></li>
                <li><a href="../inscription/inscription.php" class="text-blue-600">Inscription</a></li>
                <li><a href="../connexion/connexion.php" class="text-blue-600">Connexion</a></li>
            </ul>
        </nav>

        <main>
            <section>
                <h2 class="text-2xl font-semibold text-blue-600 my-4">Formulaire de Contact</h2>
                <p class="text-lg text-gray-700 leading-7 mb-6">Utilisez le formulaire ci-dessous pour nous contacter :</p>
                <form action="messagesTreatment.php" method="POST">
                    <label for="nom" class="text-gray-700">Nom :</label>
                    <input type="text" id="nom" name="nom" required class="w-full p-2 border border-gray-300 rounded-md mb-4"><br>
                    <label for="email" class="text-gray-700">Email :</label>
                    <input type="email" id="email" name="email" required class="w-full p-2 border border-gray-300 rounded-md mb-4"><br>
                    <label for="message" class="text-gray-700">Message :</label>
                    <textarea id="message" name="message" rows="4" required class="w-full p-2 border border-gray-300 rounded-md mb-4"></textarea><br>
                    <input type="submit" value="Envoyer" class="bg-blue-600 text-white p-2 rounded-md cursor-pointer hover:bg-blue-700">
                </form>
            </section>

        </main>
        <footer class="mt-6">
            <p class="text-gray-600">&copy; 2023 Apprendre l'arabe</p>
        </footer>
    </div>
</body>
</html>
