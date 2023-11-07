<?php

class Question
{
    private $question;
    private $options;

    public function __construct($question, $options)
    {
        $this->question = $question;
        $this->options = $options;
    }

    public function getQuestion()
    {
        return $this->question;
    }

    public function getOptions()
    {
        return $this->options;
    }
}

class Quiz
{
    private $questions;
    private $score;

    public function __construct($questions)
    {
        $this->questions = $questions;
        $this->score = 0;
    }

    public function calculateScore($userAnswers)
    {
        foreach ($this->questions as $questionID => $question) {
            $userAnswerIndex = $userAnswers[$questionID];
            $correctOptionIndex = array_search(true, $question->getOptions());

            if ($userAnswerIndex == $correctOptionIndex) {
                $this->score++;
            }
        }
    }

    public function getScore()
    {
        return $this->score;
    }

    public function getQuestions()
    {
        return $this->questions;
    }
}

$questionsData = [
    "question_1" => new Question("Comment dire 'Bonjour' en arabe ?", [
        "صباح الخير" => true,
        "مساء الخير" => false,
        "الباب" => false,
        "اللغات" => false
    ]),
    "question_2" => new Question("'أنا' veut dire en arabe ?", [
        "Ils" => false,
        "Vous" => false,
        "Je" => true,
        "Elle" => false
    ]),
    "question_3" => new Question("Comment dire 'au revoir' en arabe ?", [
        "مع السلامة" => true,
        "مرحبا" => false,
        "شكرًا" => false,
        "نعم" => false
    ]),
    "question_4" => new Question("Quelle est la traduction en arabe du mot 'maison' ?", [
        "مدينة" => false,
        "سيارة" => false,
        "مطعم" => false,
        "بيت" => true
    ]),
    "question_5" => new Question("Comment dit-on 'merci' en arabe ?", [
        "أنا" => false,
        "مرحبا" => false,
        "شكرًا" => true,
        "جميل" => false
    ]),
    "question_6" => new Question("Quelle est la traduction en arabe du mot 'fleur' ?", [
        "سماء" => false,
        "شجرة" => false,
        "وردة" => true,
        "بحر" => false
    ]),
    "question_7" => new Question("Comment dit-on 'je m'appelle' en arabe ?", [
        "مرحبا" => false,
        "أنا" => false,
        "اسمي" => true,
        "نعم" => false
    ]),
];

$quiz = new Quiz($questionsData);

if (isset($_POST['submit'])) {
    $userAnswers = $_POST;
    $quiz->calculateScore($userAnswers);
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
        foreach ($quiz->getQuestions() as $questionID => $question) {
            echo "<div class='mb-4'>";
            echo "<p class='text-lg font-medium mb-2'>" . $question->getQuestion() . "</p>";
            foreach ($question->getOptions() as $option => $correct) {
                echo "<label class='block mb-2'>";
                echo "<input type='radio' name='$questionID' value='$option' class='mr-2 form-radio text-blue-500'>";
                echo "<span class='text-base'>$option</span>";
                echo "</label>";
            }
            echo "</div>";
        }

        ?>
        <button type="submit" name='submit'
            class='bg-blue-500 text-white font-serif py-2 px-4 rounded hover-bg-blue-600'>Soumettre</button>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        echo "<p class='mt-4 text-lg font-semibold'>Votre score est de " . $quiz->getScore() . " sur " . count($questionsData) . " questions.</p>";
    }

    ?>

<div class="fixed bottom-4 right-4 p-2 bg-blue-500 rounded-lg shadow-md">
    <a href="../lessonOnLine/lessonOnLine.php" class="text-white hover:bg-blue-600 hover:text-white py-1 px-3 rounded-md transition-all duration-300">Retour</a>
</div>

</body>
</html>
