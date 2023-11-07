<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>À propos</title>
    <style>
        body {
            background-image: url('_img/kareem-saleh-NIkfwXte550-unsplash.jpg');
            background-size: 60%;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center center;
        }
    </style>
    <script src="https://cdn.tailwindcss.com?plugins=typography"></script>
</head>
<body class="bg-gray-100 p-8">

    <?php
    require_once 'components/head.php';
    ?>

    <?php
    $contentShouldHaveWhiteBackground = true;
    ?>

<div <?php if ($contentShouldHaveWhiteBackground) 
{ echo 'style="background-color: rgba(200, 200, 200, 0.5);" class="mt-8 mb-8 px-4 py-4"'; } ?>>
    <div class="max-w-3xl mx-auto mt-8 mb-8">
        <h1 class="text-4xl font-bold text-blue-900 mb-6">La naissance d'un projet</h1>

        <p class="text-lg font-bold text-black-900 leading-7 mb-6">
            L'aube d'une nouvelle (vieille) idée a éclairé nos esprits, ouvrant la voie à un projet innovant et passionnant : l'enseignement de la langue arabe pour les étrangers à travers une nouvelle approche. Notre inspiration découle de la reconnaissance de l'importance croissante de la communication interculturelle dans un monde de plus en plus connecté.
        </p>

        <p class="text-lg font-bold text-black-900 leading-7 mb-6">
            Notre projet vise à transcender les méthodes d'apprentissage traditionnelles en proposant une approche dynamique et personnalisée qui répond aux besoins individuels de chaque apprenant. En utilisant des technologies de pointe, nous offrirons une plateforme en ligne interactive, accessible depuis n'importe où dans le monde, qui permettra aux apprenants d'explorer et de maîtriser de nouvelles langues étrangères de manière engageante.
        </p>

        <p class="text-lg font-bold text-black-900 leading-7 mb-6">
            Au cœur de notre vision se trouve la conviction que l'enseignement des langues doit être plus qu'une simple acquisition de compétences linguistiques. Il doit incarner une expérience culturelle enrichissante, élargissant les horizons de chacun et favorisant la compréhension interculturelle.
        </p>

        <p class="text-lg font-bold text-black-900 leading-7 mb-6">
            Pour atteindre cet objectif ambitieux, nous prévoyons de collaborer avec des linguistes de renom, des experts en pédagogie, des développeurs de logiciels et des professionnels de la communication pour créer une plateforme d'apprentissage qui combine la puissance de l'intelligence artificielle, de la réalité virtuelle et de l'interaction humaine. Le projet est, certes, ambitieux, et nous n'en sommes qu'aux premiers pas ; mais nous y croyons.
        </p>

        <p class="text-lg font-bold text-black-900 leading-7 mb-6">
            Notre projet vise à démocratiser l'accès à l'apprentissage des langues, en le rendant abordable et efficace pour tous, des étudiants aux professionnels en passant par les passionnés de voyages. En développant un écosystème d'apprentissage complet, nous espérons contribuer à la construction d'un monde plus connecté, où les barrières linguistiques ne seront plus un obstacle à la compréhension mutuelle.
        </p>

        <p class="text-lg font-bold text-black-900 leading-7 mb-6">
            Cette idée est à la fois une vision et un appel à l'action. Elle incarne notre détermination à changer la donne dans l'enseignement des langues étrangères, à ouvrir des portes vers de nouvelles cultures et opportunités, et à façonner un avenir où le monde parle une multitude de langues, mais se comprend parfaitement.
        </p>
    </div>
    </div>

    <?php
    require_once 'components/footer.php';
    ?>
</body>
</html>
