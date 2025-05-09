document.addEventListener('DOMContentLoaded', () => {
    const mainContent = document.querySelector('.main-content');

    // Ajoute la classe d'animation à l'entrée
    mainContent.classList.add('page-transition');
    setTimeout(() => {
        mainContent.classList.add('page-transition-active');
    }, 50);

    // Ajoute un événement pour les liens de navigation
    const navLinks = document.querySelectorAll('a.main-nav-link');
    navLinks.forEach(link => {
        link.addEventListener('click', (e) => {
            e.preventDefault();
            const targetUrl = link.href;

            // Animation de sortie
            mainContent.classList.remove('page-transition-active');
            setTimeout(() => {
                window.location.href = targetUrl;
            }, 500); // Durée de l'animation (0.5s)
        });
    });
});