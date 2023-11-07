<?php
require_once "functions.php";
$pdo = connectToDatabase();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contenu du Cours</title>
    <script src="https://cdn.tailwindcss.com?plugins=typography"></script>
</head>
<body class="bg-gradient-to-b from-blue-200 via-blue-300 to-blue-400 min-h-screen flex flex-col justify-center p-8">
    <div class="text-center">
        <?php
        if (isset($_GET['id'])) {
            $lessonId = $_GET['id'];
            $query = "SELECT title, content, publication_date FROM lessons_learning_arabic WHERE id = :id";
            $stmt = $pdo->prepare($query);
            $stmt->bindParam(':id', $lessonId, PDO::PARAM_INT);
            $stmt->execute();

            $lesson = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($lesson) {
                echo '<h1 class="text-4xl font-bold text-white">' . $lesson["title"] . '</h1>';
                echo '<div class="my-4"></div>';
                echo '<p class="text-lg font-semibold text-black-600">' . nl2br($lesson["content"]) . '</p>';
            } else {
                echo "Cours non trouvé.";
            }
        } else {
            echo "Identifiant de cours non spécifié.";
        }
        ?>
    </div>
</body>
</html>
