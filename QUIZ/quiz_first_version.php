<!-- Voici la première version du code du quiz, avant
de réorganiser le code à l'aide de constances de classe -->

<?php
$questions = [
    "question_1" => [
        "question" => "Comment dire 'Bonjour' en arabe ?",
        "options" => [
            "صباح الخير" => true,
            "مساء الخير" => false,
            "الباب" => false,
            "اللغات" => false
        ]
    ],
    "question_2" => [
        "question" => "'أنا' veut dire en arabe ?",
        "options" => [
            "Ils" => false,
            "Vous" => false,
            "Je" => true,
            "Elle" => false
        ]
    ],
    "question_3" => [
        "question" => "Comment dire 'au revoir' en arabe ?",
        "options" => [
            "مع السلامة" => true,
            "مرحبا" => false,
            "شكرًا" => false,
            "نعم" => false
        ]
    ],
    "question_4" => [
        "question" => "Quelle est la traduction en arabe du mot 'maison' ?",
        "options" => [
            "مدينة" => false,
            "سيارة" => false,
            "مطعم" => false,
            "بيت" => true
        ]
    ],
    "question_5" => [
        "question" => "Comment dit-on 'merci' en arabe ?",
        "options" => [
            "أنا" => false,
            "مرحبا" => false,
            "شكرًا" => true,
            "جميل" => false
        ]
    ],
    "question_6" => [
        "question" => "Quelle est la traduction en arabe du mot 'fleur' ?",
        "options" => [
            "سماء" => false,
            "شجرة" => false,
            "وردة" => true,
            "بحر" => false
        ]
    ],
    "question_7" => [
        "question" => "Comment dit-on 'je m'appelle' en arabe ?",
        "options" => [
            "مرحبا" => false,
            "أنا" => false,
            "اسمي" => true,
            "نعم" => false
        ]
    ],
];

$score = 0;

if (isset($_POST['submit'])) {
    foreach ($questions as $questionID => $questionData) {
        $userAnswerIndex = $_POST[$questionID];
        $correctOptionIndex = array_search(true, $questionData['options']);
        if ($userAnswerIndex == $correctOptionIndex) {
            $score++;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz</title>
    <script src="https://cdn.tailwindcss.com?plugins=typography"></script>
    <style>
        body {
            background: linear-gradient(to top right, #ecc94b, #38c172, #3490dc);
        }
    </style>
</head>

<body class="bg-gray-100 p-4">
<h1 class="text-2xl font-semibold mb-4 font-serif text-black-500">NOTRE QUIZ</h1>
<form action="quiz.php" method="post">
    <?php
    foreach ($questions as $questionID => $questionData) {
        echo "<div class='mb-4'>";
        echo "<p class='text-lg font-medium mb-2'>" . $questionData['question'] . "</p>";
        foreach ($questionData['options'] as $option => $correct) {
            echo "<label class='block mb-2'>";
            echo "<input type='radio' name='$questionID' value='$option' class='mr-2 form-radio text-blue-500'>";
            echo "<span class='text-base'>$option</span>";
            echo "</label>";
        }
        echo "</div>";
    }
    ?>
    <button type="submit" name='submit' class='bg-blue-500 text-white font-serif py-2 px-4 rounded hover-bg-blue-600'>Soumettre</button>
</form>

<?php
if (isset($_POST['submit'])) {
    echo "<p class='mt-4 text-lg font-semibold'>Votre score est de $score sur " . count($questions) . " questions.</p>";
}
?>
</body>
</html>


