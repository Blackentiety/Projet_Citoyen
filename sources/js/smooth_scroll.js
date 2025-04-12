document.querySelectorAll('.sommaire a').forEach(link => {
    link.addEventListener('click', function (e) {
        e.preventDefault(); // Empêche le comportement par défaut du lien
        const targetId = this.getAttribute('href').substring(1); // Récupère l'id de la cible
        const targetElement = document.getElementById(targetId);

        if (targetElement) {
            targetElement.scrollIntoView({
                behavior: 'smooth', // Scroll fluide
                block: 'start' // Aligne le haut de la section avec le haut de la fenêtre
            });
        }
    });
});