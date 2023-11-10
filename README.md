# Site Web d'Enseignement de l'Arabe (PHP)

## Structure du Site

Le site est structuré en plusieurs pages principales, chacune avec son propre objectif et contenu. Voici un aperçu de ces pages et de leur fonction :

### Accueil - index.php

Description : Page d'accueil du site.
Fichier PHP : index.php
Contenu : Vous trouverez ici une introduction sur la raison d'être du site et pourquoi l'apprentissage de l'arabe est importnte.

### A propos - about.php

Description : Page décrivant l'équipe derrière le site et ses valeurs.
Fichier PHP : about.php
Contenu : Informations sur notre équipe, notre histoire et nos engagements.

### Méthodologie - teachingMethods.php

Description : Page expliquant notre méthodologie d'enseignement.
Fichier PHP : teachingMethods.php
Contenu : Détails sur notre approche interactive, immersive, l'utilisation de ressources audiovisuelles, et notre équipe pédagogique expérimentée.

### Cours - lessonOnLine.php

Description : Page présentant les derniers cours et leur contenu.
Dossier : lessonOnLine
Contenu : Une liste des cours récemment ajoutés avec des descriptions détaillées.

### Contact - contact.php

Description : Page de contact pour poser des questions ou donner des commentaires.
Fichier PHP : contact.php
Contenu : Formulaire de contact pour interagir avec notre équipe.

### Lettre d'information

Cette page a été récemment ajoutée au site, afin de permettre aux visiteurs de s'abonner et de recevoir par voie électronique les nouveautés : nouveaux cours, annonces, etc.

### Inscription - inscription.php

Description : Page d'inscription pour les nouveaux utilisateurs.
Dossier : inscription
Contenu : Formulaire d'inscription et traitement des données d'utilisateur.

### Connexion - login.php

Description : Page de connexion pour les utilisateurs existants.
Fichier PHP : login.php
Contenu : Formulaire de connexion et vérification des informations d'identification.

## Langages utilisés dans ce site

### PHP 

Évidemment, le site utilise principalement le langage PHP afin d'ajouter du contenu numérique 
à ses pages ou, en d'autres termes, afin de présenter dynamiquement son contenu, comme la page de cours
qui contient un quiz, le tout en PHP.

### Javascript

Toutefois, les internautes ou les apprenants qui visitent le site pour la première fois, seront accueillis 
par un message de bienvenue, une bannière programmée à l'aide du langage Javascript.

### CSS

Cette bannière de bienvenue est stylisée à l'aide d'un fichier .css ; c'est le seul endroit où CSS
est utilisé dans ce projet. 

## Raisonnement et progression

### 
L'élaboration du site (qui est toujours en cours de développement, rappelons-le) est le fruit
d'un mois de travail : conception du schéma de la base de données, validation de la table et des idées
avec le formateur, la mise en pratique de ces idées ou, en d'autres termes, l'heure de la vérité.
###
Les trois premières pages sont statiques, présentes en guise d'introduction au site et dont l'objectif 
est d'informer le lecteur de l'intention de l'auteur du site.
###
Les pages qui recourent au langage PHP en vue de présenter un contenu dynamique sont les cinq 
pages suivantes, à savoir "Cours", "Contact", "Lettre d'information", "Connexion" et "Inscription".

### Page "Cours"

Le dossier (répertoire) qui traite du contenu de cette page s'intitule "lessonOnLine" et
contient plusieurs fichiers.

#### functions.php
Il s'agit d'une fonction appelée `connectToDatabse()`, elle permet une connection à la base de données MySQL à l'aide de l'extension PDO (PHP Data Objects). La fonction ne prend pas d'arguments et renvoie un objet PDO.
La fonction définit les paramètres de connexion à la base de données :
$dsn : les informations nécessaires pour se connecter à la base de données : le nom d'hôte, le nom de la base de données et le numéro de port.
$username : Le nom d'utilisateur utilisé pour se connecter à la base de données.
$password : Le mot de passe utilisé pour se connecter à la base de données.
Si la connexion est réussie, la fonction renvoie un objet PDO si la connexion est réussie. Dans le cas contraire, la fonction renvoie une exception et quitte le script.
Nous appelerons cette fonction afin de se connecter aux bases de données, car il y en a deux, utilisées 
pour ce site.

#### Le contenu de la page

Nous avons conçu une première architecture de cette page avec une liste des cours disponibles,
que nous avons par la suite représentée par une boucle "foreach". Nous incluons le fichier lessons.php qui contient un tableau associatif appelé `$lesson`. Chaque élément de ce tableau représente une leçon avec deux clés : "id" et "title". Chaque leçon est un tableau associatif lui-même contenant l'identifiant de la leçon ("id") et le titre de la leçon ("title").

Le code PHP évolue dans le fichier lesson_content.php. 
L'on inclut d'abord la fonction réutilisable functions.php, qui permet de se connecter à la base de données. 
Nous vérifions ensuite si un paramètre "id" est présent dans l'URL grâce à la fonction grâce au code 
`if (isset($_GET['id']))`. Si le paramètre est trouvé, cela signifie qu'un identifiant de leçon a été spécifié.
La valeur `$lessonId` récupère la valeur de l'ID de leçon `$_GET['id']` à partir des paramètres de l'URL.
Grâce à cette ligne de code `$query = "SELECT title, content, publication_date FROM lessons_learning_arabic WHERE id = :id";` le code prépare une requête SQL pour récupérer le titre, le contenu et la date de publication d'une leçon à partir de la table "lessons_learning_arabic" en utilisant un ID.
La ligne `$stmt = $pdo->prepare($query)` préapre la requête SQL en utilisant la connexion PDO.
Il est temps de lier  la valeur de l'ID en tant que paramètre à la requête préparée : 
`$stmt->bindParam(':id', $lessonId, PDO::PARAM_INT)`. 
Exécutons maintenant la requête SQL `$stmt->execute()`.
Le résultat récupéré paraîtra sous la forme d'un tableau associatif : `$lesson = $stmt->fetch(PDO::FETCH_ASSOC)`. 
Le reste du code s'occupe d'afficher le contenu ; l'on vérifie si la leçon a bien été trouvée dans 
la base de données `if ($lesson)` afin de l'afficher en respectant la mise en forme Tailwind CSS.








