<?php

$dynamicTitle = "Méthodologie immersive";
$dynamicText = "L'apprentissage des langues étrangères peut être une aventure passionnante, mais aussi un défi stimulant...";
$contentShouldHaveWhiteBackground = true;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $dynamicTitle; ?></title>
    <style>
        body {
            background-image: url('_img/arabic-students.webp');
            background-size: cover; 
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center center;
            opacity: 0,2;
        }
    </style>
    <script src="https://cdn.tailwindcss.com?plugins=typography"></script>
</head>
<body class="bg-gray-100 p-8">

    <?php require_once 'components/head.php'; ?>

    <div <?php if ($contentShouldHaveWhiteBackground) { echo 'style="background-color: rgba(200, 200, 200, 0.5);" class="mt-8 mb-8 px-4 py-4"'; } ?>>
        <div class="max-w-3xl mx-auto mt-8 mb-8 text-black">
            <h1 class="text-4xl font-bold text-blue-600 mb-6"><?php echo $dynamicTitle; ?></h1>
            <p class="text-lg font-bold leading-7 mb-6"><?php echo $dynamicText; ?></p>

            <h2 class="text-3xl font-bold text-blue-600 my-4">Pratique intensive par la conversation avec des Natives :</h2>
            <p class="text-lg font-bold leading-7 mb-6">L'immersion linguistique débute par l'interaction directe avec des locuteurs natifs de la langue étudiée. Les élèves ont l'opportunité de participer à des conversations en temps réel grâce à des échanges en ligne ou en personne avec des locuteurs natifs. Cette expérience vivante permet de développer la compréhension orale, d'améliorer la prononciation, et d'acquérir un véritable sentiment de la langue. Nos locuteurs natifs sont choisis pour leur patience et leur capacité à adapter le rythme de la conversation au niveau de l'élève.</p>

            <h2 class="text-3xl font-bold text-blue-600 my-4">Utilisation de ressources audiovisuelles</h2>
            <p class="text-lg font-bold leading-7 mb-6">Les vidéos YouTube et d'autres plateformes de streaming offrent un trésor de ressources pour l'apprentissage des langues. Nous recommandons des vidéos pertinentes et stimulantes, adaptées à chaque niveau, pour renforcer la compréhension auditive et l'acquisition de vocabulaire. Les élèves auront accès à une bibliothèque de vidéos spécialement sélectionnées pour chaque étape de leur progression. Ces supports audiovisuels permettent d'explorer la culture, la musique, et les actualités du pays de la langue étudiée, tout en renforçant l'écoute active.</p>

            <h2 class="text-3xl font-bold text-blue-600 my-4">Soutien infaillible d'un professeur Expérimenté</h2>
            <p class="text-lg font-bold leading-7 mb-6">L'élément clé de notre méthodologie est l'accompagnement personnalisé par un professeur expérimenté. Ce professeur sera votre guide tout au long du parcours d'apprentissage, offrant un soutien infaillible aux élèves.
                <ul class="list-disc pl-4">
                    <li class="text-lg font-semibold"> Prononciation et Grammaire : Le professeur aide les élèves à perfectionner leur prononciation en corrigeant les erreurs et en fournissant des conseils spécifiques. Il travaille également sur la grammaire de manière interactive, en s'adaptant aux besoins individuels.</li>

                    <li class="text-lg font-semibold">Compréhension culturelle : L'apprentissage d'une langue ne se limite pas aux mots et à la grammaire, mais englobe également la compréhension de la culture qui l'entoure. Le professeur partage des informations sur les subtilités culturelles, les coutumes, les traditions et les références culturelles afin que les élèves puissent communiquer de manière plus nuancée.</li>

                    <li class="text-lg font-semibold">Suivi personnalisé : Chaque élève bénéficiera d'un suivi personnalisé pour évaluer les progrès, identifier les points faibles et définir des objectifs d'apprentissage spécifiques.</li>
                </ul>
            </p>

            <h3 class="text-2xl font-bold text-blue-600 my-4">Récapitulons :</h3>
            <p class="text-lg font-bold leading-7 mb-6">En combinant l'immersion par la conversation, l'utilisation de ressources audiovisuelles et un soutien pédagogique expert, notre méthodologie offre une expérience d'apprentissage des langues captivante et efficace pour les apprenants de tous niveaux. Elle permet aux élèves de non seulement maîtriser une langue étrangère, mais aussi de s'épanouir dans son univers culturel, ouvrant ainsi de nouvelles perspectives et opportunités dans un monde de plus en plus connecté.</p>
        </div>
    </div>

    <?php require_once 'components/footer.php'; ?>

</body>
</html>
