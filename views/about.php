<?php
$HeadTitle = "À propos de nous";
$mainTitle = "À propos de nous";
ob_start();
?>

<div class="a-propos">
    <div class ="missions">
    <h2>Notre mission</h2>
    <p>Nous sommes dédiés à fournir des informations précises et utiles sur l'entrepreneuriat féminin.</p>
    <h2>Notre équipe</h2>
    <p>Notre équipe est composée d'experts en entrepreneuriat, de chercheurs et de passionnés qui travaillent ensemble pour soutenir les femmes entrepreneures.</p>
</div>
    <section class="valeurs">
    <h2>Nos valeurs</h2>
    <div class="valeurs-container">
        <div class="valeur">
            <h3>💬 Sororité</h3>
            <p>Nous croyons en la force du collectif féminin. Se soutenir, s'entraider, partager pour grandir ensemble.</p>
        </div>
        <div class="valeur">
            <h3>🔎 Transparence</h3>
            <p>Nous partageons des ressources fiables, honnêtes et authentiques, sans filtres ni faux-semblants.</p>
        </div>
        <div class="valeur">
            <h3>🌱 Évolution</h3>
            <p>Ce blog est un espace d’apprentissage où chacune peut progresser à son rythme, sans pression.</p>
        </div>
        <div class="valeur">
            <h3>🧡 Bienveillance</h3>
            <p>Notre communauté repose sur le respect, l’écoute et l’inclusivité. Chaque voix compte.</p>
        </div>
    </div>
</section>    
</div>

<?php
$mainContent = ob_get_clean();