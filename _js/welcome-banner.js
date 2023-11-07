// Sélectionnez l'élément du corps du document
document.addEventListener('DOMContentLoaded', function () {
    const body = document.body;
  
    // Vérifiez si l'utilisateur a déjà visité le site (par exemple, en utilisant des cookies)
    const isFirstVisit = !localStorage.getItem('visited');
  
    // Si c'est la première visite, affichez la bannière d'accueil
    if (isFirstVisit) {
      // Créez la bannière et son contenu
      const banner = document.createElement('div');
      banner.classList.add('welcome-banner');
      banner.innerHTML = `
        <p>Bienvenue à notre site d'apprentissage de l'arabe !</p>
        <button id="close-banner">Commencer</button>
      `;
  
      // Ajoutez la bannière au corps de la page
      body.appendChild(banner);
  
      // Écoutez l'événement de fermeture de la bannière
      const closeBannerButton = banner.querySelector('#close-banner'); // Utilisez "banner.querySelector" pour cibler le bouton à l'intérieur de la bannière
      closeBannerButton.addEventListener('click', () => {
        // Cachez la bannière
        banner.style.display = 'none';
  
        // Marquez la visite comme effectuée pour ne pas réafficher la bannière
        localStorage.setItem('visited', 'true');
      });
    }
  });
  