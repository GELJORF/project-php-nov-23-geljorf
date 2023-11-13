-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 13 nov. 2023 à 08:51
-- Version du serveur : 8.0.31
-- Version de PHP : 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `lessons`
--

-- --------------------------------------------------------

--
-- Structure de la table `lessons_learning_arabic`
--

DROP TABLE IF EXISTS `lessons_learning_arabic`;
CREATE TABLE IF NOT EXISTS `lessons_learning_arabic` (
  `ID` int NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` mediumtext NOT NULL,
  `publication_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `lessons_learning_arabic`
--

INSERT INTO `lessons_learning_arabic` (`ID`, `title`, `content`, `publication_date`) VALUES
(1, ' Alphabet', 'Alphabet de la langue arabe : \r\n\r\nأ (A), ب (B), ت (T), ث (Th),\r\n\r\nج (J), ح (H), خ (Kh),\r\n\r\nد (D), ذ (Th),\r\n\r\nر (R), ز (Z),\r\n\r\nس (S), ش (Ch), ص (S), ض (Dh),\r\n\r\nط (T), ظ (Dh),\r\n\r\nع (Aa), غ (Gh),\r\n\r\nف (F), ق (Q), \r\n\r\nك (K), ل (L), م (M),\r\n\r\nن (N), ه (H), \r\n\r\nو (W), ي (Y).\r\n', '2023-10-30 20:52:40'),
(2, 'Articulation des lettres arabes', 'Particularité de la prononciation des lettres de l\'alphabet arabe.\r\nNous vous proposons, afin de découvrir ces particularités et de creuser davantage ce sujet, ces deux documents :\r\n\r\n- LE SYSTEME PHONETIQUE DE L\'ARABE, disponible sur :\r\nhttps://primlangues.education.fr/sites/default/files/pj/systeme.pdf\r\n\r\n- Fleisch Henri. Études de phonétique arabe. In: Mélanges de l\'Université Saint-Joseph, tome 28, 1949. pp. 225-285.\r\nDOI : https://doi.org/10.3406/mefao.1949.1387', '2023-10-30 20:52:40'),
(3, 'Orthographes des lettres arabes', 'Origines de l\'écriture arabe\r\n	\r\nDes inscriptions en langue arabe sont conservées depuis la fin du Ier siècle de notre ère, mais l’écriture arabe elle-même n’est attestée que trois siècles plus tard. En effet, les Arabes ont d’abord utilisé les systèmes d’écritures d’autres langues employées depuis la péninsule Arabique jusqu’au Nord de la Mésopotamie, comme le sud-arabique et le nabatéen.\r\n\r\nBien que l\'écriture arabe ait un aspect très différent des graphies sud-arabiques, tous les spécialistes s’accordent à lui reconnaître une lointaine origine araméenne. Mais les uns font l’hypothèse d’un développement à partir de l’écriture nabatéenne, les autres à partir de l’écriture syriaque.\r\n\r\n\r\n\r\nL’hypothèse de l’origine nabatéenne\r\n\r\nProposée d’abord par Theodor Nöldeke en 1865, l’origine nabatéenne a trouvé un grand écho chez des chercheurs qui s’appuient sur la comparaison entre les formes des caractères pris individuellement. Leur hypothèse est celle d’un développement à partir d’une écriture nabatéenne cursive, développement favorisé par le fait que, depuis la destruction de Pétra en 106, l’écriture n’était plus contrôlée officiellement par une chancellerie. Les modifications menant à l’alphabet arabe auraient affecté les ligatures entre les lettres, la constitution d’une ligne de base, la distinction par des signes diacritiques de lettres ayant le même tracé, les variations de forme des lettres en fonction de leur position initiale, médiane ou finale. Généralement, les tenants de l’origine nabatéenne reconnaissent aussi une influence de l’écriture syriaque dans la structure de l’écriture arabe.\r\n\r\n\r\n	\r\nL’hypothèse de l’origine syriaque\r\n 	\r\nInversement, les tenants de l’origine syriaque ne nient pas l’influence de l’écriture nabatéenne sur la forme des signes, mais considèrent comme déterminante la structure de l’écriture. Les ligatures se font en bas pour le syriaque et les lettres sont appuyées sur une ligne de base. Il en est de même en arabe tandis qu’en nabatéen les lettres sont alignées par le haut, comme suspendues, et les ligatures se font à des endroits différents selon les lettres. En nabatéen, les lettres sont plus hautes que larges ; en syriaque, comme en arabe, elles sont plus larges que hautes. Autre argument en faveur de cette hypothèse : les plus anciennes inscriptions arabes sont datées d’une période où l’écriture syriaque, grâce à la diffusion du christianisme, connaît un grand développement alors même que l’écriture nabatéenne tombe en désuétude.\r\n\r\nCe sont probablement des raisons de prestige et d’autres, certainement liées au commerce, qui ont fait préférer une écriture araméenne aux écritures sud-arabiques, pourtant mieux adaptées à la transcription de la langue arabe.\r\n\r\n 	\r\nL\'arabe, une écriture commune à l\'ensemble de l\'Islam\r\n	\r\nRendue obligatoire par l’administration omeyyade dès la fin du VIIe siècle, l\'écriture arabe connaît une extraordinaire diffusion au Proche-Orient et au Maghreb grâce à l\'expansion géographique de l\'islam et au développement de sa civilisation. Langue liturgique de populations nouvellement converties, l’arabe devient alors le principal instrument de communication de l’empire islamique naissant ainsi que l’outil principal de transmission du savoir et de l’administration. L\'écriture arabe s\'impose pour des raisons culturelles : copie du Coran et production textuelle due à la constitution des sciences religieuses islamiques, plus tard traductions des textes scientifiques et philosophiques et leur appropriation par la majorité des chrétiens du Proche-Orient. L’écriture arabe prend place au cœur de la civilisation arabo-musulmane et assume très vite une triple fonction, à la fois religieuse, utilitaire et ornementale., Cette écriture transcrira également les langues de l’Empire ottoman jusqu’au début du XXe siècle. Ses caractères sont utilisés aujourd’hui pour écrire le persan, l’urdu et de nombreuses langues d’Afrique.\r\n\r\n	\r\nL\'alphabet arabe\r\n	\r\nL’arabe appartient au groupe sémitique, comme l\'hébreu ou le syriaque. Depuis son origine, il utilise un alphabet consonantique et s’écrit de droite à gauche. À la notation des vingt-six consonnes s’ajoute celle de trois voyelles longues. Les difficultés de lecture dues à la confusion entre les consonnes de même tracé (un même signe peut représenter plusieurs lettres) et à l’absence de notation des voyelles brèves ont entraîné l’invention de signes facilitant la lecture. On a d\'abord indiqué les voyelles par l’adjonction de points de couleurs, placés au-dessus ou en dessous des lettres. Cet usage s\'est modifié et aboutit à la pratique actuelle consistant à noter les voyelles par de petits signes sur ou sous les caractères. Cette différenciation des consonnes par des signes diacritiques existait déjà dans les plus anciens corans sous forme de traits fins ou parfois de points.\r\n\r\nAvant l\'islam, l’écriture était très peu pratiquée, servant principalement à noter transactions commerciales ou contrats. Révélée oralement au Prophète à partir de 610 et ses transcriptions rassemblées en 653 par \'Uthmân, la parole divine insuffle un formidable élan à l’écriture. La nécessité de magnifier la parole sacrée s’impose alors et la calligraphie, dès les premiers corans, constitue une composante essentielle de l’art arabo-musulman.\r\n \r\nSource : Origine de l\'écriture arabe.\r\nhttp://expositions.bnf.fr/\r\n', '2023-10-30 20:52:40'),
(4, 'Se présenter en arabe', 'Comment se présenter en arabe ?\r\n\r\nAujourd\'hui, nous allons communiquer quelques structures linguistiques qui nous permettent de nous présenter à notre interlocuteur.\r\n\r\n    Bonjour : مرحبًا (Marhaban)\r\n\r\n    Bonsoir : مساء الخير (Masa\' al-khayr)\r\n\r\n    Comment vas-tu ? : كيف حالك؟ (Kayfa haluka?)\r\n\r\n    Comment t\'appelles-tu ? : ما اسمك؟ (Ma ismuka?)\r\n\r\n    Je vais bien : أنا بخير (Ana bikhair)\r\n\r\n    Merci : شكرًا (Shukran)\r\n\r\n    S\'il vous plaît : من فضلك (Min fadlika)\r\n\r\n    Excusez-moi : عفوًا (Afwan)\r\n\r\n    Oui : نعم (Naam)\r\n\r\n    Non : لا (La)\r\n\r\n    مرحبًا! أنا (prénom). (Marhaban! Ana \"prénom\".) - Bonjour ! Je suis (votre prénom).\r\n\r\n    أنا من (votre pays). (Ana min \"votre pays\".) - Je viens de (votre pays).\r\n\r\n    أنا أعيش في (votre ville). (Ana a\'ish fi (votre ville).) - J\'habite à (votre ville).\r\n\r\n    أنا متزوج/متزوجة (marié/mariée) ou أعزب/عزباء (célibataire). (Ana mutazawwij/a ou azba/a.) - Je suis marié(e) ou célibataire.\r\n\r\n    عمري (votre âge) سنة. (Umri \"votre âge\" sana.) - J\'ai (votre âge) ans.\r\n\r\n    أحب (vos loisirs/préférences). (Uhibb \"vos loisirs/préférences\".) - J\'aime (vos loisirs/préférences).\r\n\r\n\r\n', '2023-10-30 20:52:40'),
(5, 'Premiers pas grammaticaux', '\r\n\r\nAprès avoir vu l\'alphabet et la manière dont les lettres arabes sont \"dessinées\", nous allons découvrir la manière dont la phrase est construite en arabe.\r\n\r\nLa grammaire arabe n\'est souvent pas un chapitre agréable à aborder, aussi bien pour les arabophones eux-mêmes que pour les apprenants étrangers. \r\nNéanmoins, une fois les subtilités de la syntaxe assimilées, la grammaire arabe présente une logique solide qui permet de structurer aisément ses phrases et s\'exprimer correctement afin de traduire ses idées en mots.\r\n\r\nRegardons par exemple La structure de base des phrases :\r\n\r\nEn arabe, la structure de base d\'une phrase est généralement \"sujet - verbe - complément\". Par exemple, \"Je mange une pomme\" se traduit en arabe par \"أنا آكل تفاحة\" (Ana aakoulou tuffaha). Dans cet exemple, \"أنا\" (Ana) est le sujet, \"آكل\" (aakoulou) est le verbe (manger), et \"تفاحة\" (tuffaha) est le complément (une pomme).\r\n\r\nQuant à la conjugaison, les verbes sont conjugués en fonction du temps, du mode et de la personne. Par exemple, le verbe \"يأكل\" (yaakoulou) signifie \"manger\" à la 3e personne du singulier (il/elle mange). \r\n\r\nLa conjugaison des verbes peut être complexe, et il existe différents modèles de conjugaison. Nous y consacrons plusieurs leçons indépendantes.', '2023-10-30 20:52:40'),
(6, 'Pronoms personnels en arabe.\r\nالضمائر الشخصية.', '    Pronoms personnels sujets :\r\n\r\n        Je : أنا (ana)\r\n        Exemple : أنا ذاهب إلى المدرسة (Ana dhahiboun ila al-madrasa) - Je vais à l\'école.\r\n\r\n        Tu (masculin) : أنتَ (anta)\r\n        Exemple : أنتَ تتكلم الإنجليزية (Anta tatakallamou al-ingliziya) - Tu parles anglais.\r\n\r\n        Tu (féminin) : أنتِ (anti)\r\n        Exemple : أنتِ تدرسين العلوم (Anti tadroussina al-\'ulum) - Tu étudies les sciences.\r\n\r\n        Il : هو (huwa)\r\n        Exemple : هو يعمل في المستشفى (Huwa ya\'malou fi al-mustashfa) - Il travaille à l\'hôpital.\r\n\r\n        Elle : هي (hiya)\r\n        Exemple : هي تقرأ كتابًا (Hiya taqra\'ou kitaban) - Elle lit un livre.\r\n\r\n        Nous : نحن (nahnu)\r\n        Exemple : نحن نحب الطعام الشرقي (Nahnu nuhibou at-ta\'ama al-sharqui) - Nous aimons la cuisine orientale.\r\n\r\n        Vous (masculin) : أنتم (antum)\r\n        Exemple : أنتم تزورون العائلة (Antum tazuruna al-\'a\'ila) - Vous visitez la famille.\r\n\r\n        Vous (féminin) : أنتنّ (antunna)\r\n        Exemple : أنتنّ تعملن في مجال الطب (Antunna ta\'malna fi majali at-tib) - Vous travaillez dans le secteur de la médecine.\r\n\r\n        Ils : هم (hum)\r\n        Exemple : هم يلعبون كرة القدم (Hum yal\'abuna kurat al-qadam) - Ils jouent au football.\r\n\r\n        Elles : هنّ (hunna)\r\n        Exemple : هنّ يزرن المتحف (Hunna yazurna al-mat7af) - Elles visitent le musée.\r\n\r\n    Pronoms personnels objets :\r\n\r\n        Me : ي (i)\r\n        Exemple : هذه هديتي لك (Hathihi hadiyati laki) - C\'est mon cadeau pour toi (ici, toi féminin).\r\n\r\n        Te : ك (ka) (masculin) / كِ (ki) (féminin)\r\n        Exemple : سأتصل بك لاحقًا (Sa\'atasilou bika/biki lahiqan) - Je te rappellerai plus tard.\r\n\r\n        Le / La : ه (hu) (masculin) / ها (ha) (féminin)\r\n        Exemple : استلمت رسالتها (istalamtu risalataha) - J\'ai reçu son message (à elle).\r\n\r\n        Nous : نا (na)\r\n        Exemple : ساعدنا في الطهي (Sa\'adana fi at-tahi) - Il nous a aidé à cuisiner.\r\n\r\n        Vous : كم (kum)\r\n        Exemple : هذا بيتكم (hatha baytoukoum) - C\'est votre maison.\r\n\r\n        Les : هم (hum) (masculin) / هنّ (hunna) (féminin)\r\n        Exemple : رأيتهم في المدينة (Ra\'aytuhum fi al-madina) - Je les ai vus en ville.\r\n\r\nAu sujet des pronoms personnels, ainsi que la grammaire arabe en général, nous proposons au lecteur l\'ouvrage de Mathieu Guidère, \"Précis de grammaire arabe\", 2023.\r\n', '2023-10-30 20:52:40'),
(7, 'Verbe avoir', 'Le verbe avoir se traduit en arabe de plusieurs façons différentes qui reflètent toutes la même idée : \r\nعند، مَـلَـكَ، لدى، بحوزة، الخ\r\n\r\nÉtant donné la variété grammaticale de la nature des « mots » qui veulent dire « avoir », nous nous contentons d’en sélectionner un seul, à savoir عند, en mettant l’accent sur la forme du verbe qui change en fonction du genre et du nombre de la personne qui parle.\r\nLe verbe va être conjugué, pour le cours d\'aujourd\'hui, au présent de l\'indicatif.\r\n\r\nVoici un exemple de conjugaison pour le verbe \"avoir\" en arabe :\r\n\r\n1. J\'ai : عندي أنا (Ana \'indi)\r\n\r\n2. Tu as : أنت عندك (Anta \'indak) pour un homme, أنت عندكِ (Anti \'indaki) pour une femme.\r\n\r\n3. Il/elle a : هو/هي عنده/عندها (Huwa/Hiya \'indahu/\'indaha)\r\n\r\n4. Nous avons : نحن عندنا (Nahnu \'indana)\r\n\r\n5. Vous avez : أنتم عندكم (Antum \'indakum)\r\n\r\n6. Ils/elles ont : هم/هن عندهم/عندهن \r\n(Hum/Hunna \'indahum/\'indahunna)\r\n\r\nSoulignons la possibilité de supprimer les pronoms personnels ici, la forme du verbe étant suffisante pour rendre le sens ; nous les laissons afin de réviser cette partie abordée plus tôt dans notre cursus.\r\n', '2023-10-30 20:52:40'),
(8, 'Verbe être', 'Plus simple à la conjugaison que son prédécesseur,  le verbe \"être\" se traduit en arabe par \"كان\" (kana) au passé et \"يكون\" (yakun) au présent. \r\n\r\nVoici sa conjugaison au présent et au passé : \r\n\r\nAu présent (يكون - yakun) :\r\n\r\n1. Je suis : أنا أكون (ana akun)\r\n2. Tu es : أنت تكون (anta takun) pour un homme, أنتِ تكونين (anti takunin) pour une femme\r\n3. Il/elle est : هو/هي يكون (huwa/hiya yakun)\r\n4. Nous sommes : نحن نكون (nahnu nakuun)\r\n5. Vous êtes : أنتم تكونون (antum takunun)\r\n6. Ils/elles sont : هم/هن يكونون (hum/hunna yakunun/yakunna).\r\n\r\n\r\nAu passé (كان - kana) :\r\n\r\n1. J\'étais : ُكنت (kuntu) pour un homme.\r\n2. Tu étais : كنت (kunta) pour un homme, كنتِ (kunti) pour une femme\r\n3. Il/elle était : كان (kana)\r\n4. Nous étions : كنا (kunna)\r\n5. Vous étiez : كنتم (kuntum)\r\n6. Ils/elles étaient : كانوا (kanu)\r\n', '2023-10-30 20:52:40');

-- --------------------------------------------------------

--
-- Structure de la table `newsletter_subscribers`
--

DROP TABLE IF EXISTS `newsletter_subscribers`;
CREATE TABLE IF NOT EXISTS `newsletter_subscribers` (
  `id` int NOT NULL AUTO_INCREMENT,
  `email_adresse` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `newsletter_subscribers`
--

INSERT INTO `newsletter_subscribers` (`id`, `email_adresse`) VALUES
(1, 'toto@gmail.com'),
(2, 'test@gmail.com'),
(3, 'mini@gmail.com'),
(4, 'mini@gmail.com'),
(5, 'nano@gmail.com'),
(6, 'tati@gmail.com'),
(7, 'rani@gmail.com'),
(8, 'sani@gmail.com'),
(9, 'sini@gmail.com'),
(10, 'solo@gmail.com'),
(11, 'lalo@gmail.com'),
(12, 'loli@gmail.com'),
(13, 'nino@gmail.com'),
(14, 'gigi@gmail.com');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `lessons_learning_arabic`
--
ALTER TABLE `lessons_learning_arabic` ADD FULLTEXT KEY `content` (`content`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
