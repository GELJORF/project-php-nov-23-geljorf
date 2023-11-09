
document.addEventListener('DOMContentLoaded', function () {
    const body = document.body;
  
   
    const isFirstVisit = !localStorage.getItem('visited');
  
    
    if (isFirstVisit) {
      
      const banner = document.createElement('div');
      banner.classList.add('welcome-banner');
      banner.innerHTML = `
        <p>Bienvenue à notre site d'apprentissage de la langue arabe !</p>
        <button id="close-banner">Commencer</button>
      `;
  
      
      body.appendChild(banner);
  
      
      const closeBannerButton = banner.querySelector('#close-banner'); 

      closeBannerButton.addEventListener('click', () => {
        
        banner.style.display = 'none';
  
        
        localStorage.setItem('visited', 'true');
      });
    }
  });
  