<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COURS</title>
    <script src="https://cdn.tailwindcss.com?plugins=typography"></script>
</head>
<body class="bg-gradient-to-tl from-blue-200 via-blue-300 to-gray-150 min-h-screen flex flex-col justify-center p-8">
    <div class="text-center">
    <h1 class="text-4xl font-bold text-white mb-4">Nos cours</h1>
        <h2 class="text-3xl text-white mb-4">Voici la liste des cours mis en ligne</h2>
        <h3 class="text-2xl text-white mb-4">Suivez-nous en permanence pour découvrir les cours à venir !</h3>
        <ul class="space-y-4">
<?php
require_once "lessons.php";

echo '<ul class="space-y-4">';
foreach ($lesson as $lessonItem) {
    echo '<li>';
    echo '<a href="lesson_content.php?id=' . $lessonItem["id"] . '" target="_blank" class="text-blue-600 hover:underline">' . $lessonItem["title"] . '</a>';
    echo '</li>';
}
echo '</ul>';
?>
    
    <div class="text-2xl text-white mb-4 text-center">
        <a href="../QUIZ/quiz.php" class="hover:underline">En attendant notre prochain cours, évaluez (déjà) votre niveau en arabe !</a>
    </div>

    <div class="text-2xl font-semibold mb-4 text-center" style="color: gray">
        <p>À très bientôt !</p>
    </div>

    <div class="mt-8">
            <button class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">
                <a href="../index.php">Retour</a>
            </button>
        </div>
    </div>

</body>
</html>
