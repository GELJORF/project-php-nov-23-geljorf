<!-- Le code de cette page est mon premier essai de coder la page de cours, en mode statique,
je l'ai gardée afin de laisser une trace du raisonnement qui m'a conduit vers les nouvelles pages -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Derniers cours</title>
    <script src="https://cdn.tailwindcss.com?plugins=typography"></script>
</head>
<body class="bg-gradient-to-b from-blue-200 via-blue-300 to-blue-400 min-h-screen flex flex-col justify-center p-8">
    <div class="text-center">
        <h1 class="text-4xl font-bold text-white mb-4">Nos cours</h1>
        <h2 class="text-3xl text-white mb-4">Voici la liste des cours mis en ligne</h2>
        <h3 class="text-2xl text-white mb-4">Suivez-nous en permanence pour découvrir les cours à venir !</h3>
        <ul class="space-y-4">

        <?php
        require_once "lessons.php";

        foreach ($lesson as $lessonItem) {
            echo '<li>';
            echo '<a href="cours.php?id=' . $lessonItem["id"] . '" class="text-blue-600 hover:underline">' . $lessonItem["title"] . '</a>';
            echo '</li>';
        }
        ?>
            <!-- <li>
                <a href="cours.php?id=1" class="text-blue-600 hover:underline">Cours 1 - Alphabet</a>
            </li>
            <li>
                <a href="cours.php?id=2" class="text-blue-600 hover:underline">Cours 2 - Articulation des lettres arabes</a>
            </li>
            <li>
                <a href="cours.php?id=3" class="text-blue-600 hover:underline">Cours 3 - Orthographes des lettres arabes</a>
            </li>
            <li>
                <a href="cours.php?id=4" class="text-blue-600 hover:underline">Cours 4 - Se présenter en arabe</a>
            </li>
            <li>
                <a href="cours.php?id=5" class="text-blue-600 hover:underline">Cours 5 - Premiers pas grammaticaux</a>
            </li>
            <li>
                <a href="cours.php?id=6" class="text-blue-600 hover:underline">Cours 6 - Pronoms personnels</a>
            </li>
            <li>
                <a href="cours.php?id=7" class="text-blue-600 hover:underline">Cours 7 - Verbe avoir</a>
            </li>
            <li>
                <a href="cours.php?id=8" class="text-blue-600 hover:underline">Cours 8 - Verbe être</a>
            </li> -->
            <li class="italic text-gray-600">À bientôt !</li>
        </ul>
        <div class="mt-8">
            <button class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">
                <a href="../index.php">Retour</a>
            </button>
        </div>
    </div>
</body>
</html>


