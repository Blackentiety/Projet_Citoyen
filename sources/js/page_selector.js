// Sélectionne tous les liens de navigation
const navLinks = document.querySelectorAll('.main-nav-link');

// Parcourt chaque lien
navLinks.forEach(link => {
    // Vérifie si le lien correspond à l'URL actuelle
    if (link.href === window.location.href) {
        link.classList.add('active'); // Ajoute la classe 'active' au lien correspondant
    }
});