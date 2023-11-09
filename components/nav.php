<?php
require_once __DIR__ . "/../navbarTreatment.php";
?>
<style>
 .active > a {
    color: #4299E1;
  }
</style>

<nav class="bg-white border-gray-200 dark:bg-gray-900">
  <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">

  <a href="../_img/arabic-book.jpg" class="flex items-center">
        <img src="../_img/arabic-book.jpg" class="h-8 mr-3" alt="Langue arabe" />
        <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Parlez-vous arabe ?</span>
    </a>
    <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover-bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover-bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
      <span class="sr-only">Open main menu</span>
      <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
      </svg>
    </button>
    <div class="hidden w-full md:block md:w-auto" id="navbar-default">
      <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
      <li <?php if ($current_page === 'index.php') {
            echo 'class="active"';
        } ?>>
          <a href="../index.php" class="block py-2 pl-3 pr-4 text-white rounded md:bg-transparent md:p-0 dark:text-white" aria-current="page">Accueil</a>
        </li>
        <li <?php if ($current_page === 'about.php') {
            echo 'class="active"';
        } ?>>
          <a href="../about.php" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover-bg-gray-100 md:hover-bg-transparent md:border-0 md:hover-text-blue-700 md:p-0 dark:text-white md:dark:hover-text-blue-500 dark:hover-bg-gray-700 dark:hover-text-white md:dark:hover-bg-transparent">À propos</a>
        </li>
        <li <?php if ($current_page === 'teachingMethods.php') {
            echo 'class="active"';
        } ?>>
          <a href="../teachingMethods.php" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover-bg-gray-100 md:hover-bg-transparent md:border-0 md:hover-text-blue-700 md:p-0 dark:text-white md:dark:hover-text-blue-500 dark:hover-bg-gray-700 dark:hover-text-white md:dark:hover-bg-transparent">Méthodes et pédagogie</a>
        </li>
        <li>
          <a href="../lessonOnLine/lessonOnLine.php" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover-bg-gray-100 md:hover-bg-transparent md:border-0 md:hover-text-blue-700 md:p-0 dark:text-white md:dark:hover-text-blue-500 dark:hover-bg-gray-700 dark:hover-text-white md:dark:hover-bg-transparent">Cours</a>
        </li>
        <li>
          <a href="../contact/contact.php" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover-bg-gray-100 md:hover-bg-transparent md:border-0 md:hover-text-blue-700 md:p-0 dark:text-white md:dark:hover-text-blue-500 dark:hover-bg-gray-700 dark:hover-text-white md:dark:hover-bg-transparent">Contact</a>
        </li>
        <li>
          <a href="../newsletterTreatment/index.php" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover-bg-gray-100 md:hover-bg-transparent md:border-0 md:hover-text-blue-700 md:p-0 dark:text-white md:dark:hover-text-blue-500 dark:hover-bg-gray-700 dark:hover-text-white md:dark:hover-bg-transparent">Lettre d'information</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- Connexion et Inscription div -->
<div class="float-right p-4">
  <div class="bg-blue-700 text-white rounded py-1 px-4">
    <a href="../connexion/connexion.php">Connexion</a>
  </div>
  <div class="bg-blue-700 text-white rounded py-1 px-4" style="margin-top: 10px;">
    <a href="../inscription/inscription.php">Inscription</a>
  </div>
</div>