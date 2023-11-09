<!DOCTYPE html>
<html lang="en">
<head>
  <base href="/file-inclusion/" />
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>
    <?php
    
    echo $title ?? "ALE (Arabe langue étrangère)";
    ?>
  </title>
  <script src="https://cdn.tailwindcss.com?plugins=typography"></script>
</head>
<body>

<header>
  <?php require_once __DIR__ . '/nav.php'; ?>
</header>
