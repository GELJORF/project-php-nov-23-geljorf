<?php
require_once 'components/head.php';
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <style>
        body 
    {
    background-image: url('../_img/victor-furtuna-7LEj-YNAY6M-unsplash.jpg');
    background-size: 45%;
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-position: center center;
    }
    </style>
    <script src="https://cdn.tailwindcss.com?plugins=typography"></script>
    <script src="../_js/welcome-banner.js"></script>
    <link rel="stylesheet" href="../_css/style-welcome-banner.css">
</head>
<body class="flex flex-col min-h-screen bg-gray-100 p-8">
    <div class="max-w-3xl mx-auto flex-grow">
        <main class="prose mx-auto">
            <h1 class="text-4xl font-bold text-blue-600 mb-6 mt-10">Bienvenue à l'univers magique de la langue arabe</h1>
            <h2 class="text-2xl font-bold text-blue-600 mb-4">Pourquoi apprendre l'arabe ?</h2>
            <p class="font-bold text-white">
                Apprendre l'arabe offre de nombreuses opportunités, que ce soit pour des raisons professionnelles, culturelles ou religieuses. C'est la langue de la littérature classique et moderne, et elle joue un rôle essentiel dans la compréhension de la culture des peuples arabophones.
            </p>

            <h2 class="text-2xl font-bold text-blue-600 mb-4">Notre mission</h2>
            <p class="font-bold text-white">
                Notre mission est de faciliter l'apprentissage de la langue arabe en proposant des ressources de haute qualité, des cours interactifs et un environnement d'apprentissage positif. Nous croyons que tout le monde devrait avoir la possibilité d'explorer et de maîtriser cette magnifique langue.
            </p>

            <h2 class="text-2xl font-bold text-blue-600 mb-4">Rejoignez-nous dans cette aventure !</h2>
            <p class="font-bold text-white">
                Que vous soyez débutant ou que vous souhaitiez perfectionner vos compétences en arabe, nous sommes là pour vous accompagner. Explorez nos cours, nos ressources et notre communauté d'apprenants passionnés.
            </p>

            <h2 class="text-2xl font-bold text-blue-600 mb-4">SITE EN ÉVOLUTION</H2>
            <p class="font-bold text-white">
                Le site est en phase de développement continu pour offrir une expérience améliorée aux utilisateurs</p>
            <p class="font-bold text-white">Nouveau contenu ajouté régulièrement</p>
        </main>
    </div>

    <footer class="text-gray-700 py-4 text-center">
        <?php
        require_once 'components/footer.php';
?>
    </footer>
</body>
</html>
