<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Newsletter</title>
    <script src="https://cdn.tailwindcss.com?plugins=typography"></script>
</head>
<body>
<body class="bg-blue-200 flex justify-center items-center h-screen">
    <div class="bg-blue-300 max-w-md p-8 rounded-lg text-center">
        <h2 class="text-2xl font-semibold mb-4">Inscrivez-vous à notre lettre d'information !</h2>
        <form action="newsletterTreatment.php" method="post" class="flex flex-col space-y-4">
            <input type="email" name="email" id="email" placeholder="Votre courriel" class="px-4 py-2 border rounded">
            <button type="submit" name="subscribe" class="bg-blue-500 text-white px-4 py-2 rounded">S'inscrire</button>
        </form>
    </div>
</body>
</html>

