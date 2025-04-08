<?php 
$Headtitle = "L'entreprenariat au féminin";
$mainTitle = "L'entreprenariat au féminin";
ob_start();
?>
<body class="accueil">
<section class="intro">
    <div class="text">
        <h1>Entreprendre au Féminin</h1>
        <h2>I. Introduction</h2>
        <p>Écrire est un art. Commencez par utiliser des expressions simples et accessibles... Soyez compréhensible et allez à l’essentiel.</p>
        <p>Vos idées ont un but. Optez donc pour des mots qui l’expriment clairement.</p>
        <button>Lire plus</button>
    </div>
    <div class="image">
        <img src="https://images.pexels.com/photos/8485714/pexels-photo-8485714.jpeg" alt="Femme entrepreneure">
    </div>
</section>
 
<hr>
 
<section class="cards"><!--ensembles des parties-->
    <div class="card">
        <img src="https://images.pexels.com/photos/8923776/pexels-photo-8923776.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="Tendances Genre">
        <h3>II. Les Tendances Entrepreneuriales par Genre</h3>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
        <button onclick="window.location.href='tendances.html'">Lire plus</button>
    </div>
    <div class="card">
        <img src="https://images.pexels.com/photos/6694482/pexels-photo-6694482.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="Défis financiers">
        <h3>III. Obstacles et Défis Différenciés</h3>
        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia...</p>
        <button onclick="window.location.href='defis.html'">Lire plus</button>
    </div>
    <div class="card">
        <img src="https://images.pexels.com/photos/7693153/pexels-photo-7693153.jpeg" alt="Facteurs de réussite">
        <div class="card-text">
          <h3>IV. Facteurs de Réussite et Opportunités</h3>
          <p>Écrire est un art. Utilisez des expressions simples et accessibles.</p>
          <button onclick="window.location.href='facteurs.html'">Lire plus</button>
        </div>
    </div>
</section>
</body>

<?php 
$mainContent = ob_get_clean();


