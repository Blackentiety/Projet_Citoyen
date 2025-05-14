<?php 
$Headtitle = "L'entreprenariat au féminin";
$mainTitle = "L'entreprenariat au féminin";
ob_start();
?>
<section class="accueil">
    <section class="intro">
        <div class="text">
            <h1>Entreprendre au Féminin</h1>
            <h2>I. Introduction</h2>
            <p>
                L’entrepreneuriat est un sujet relativement connu de tous. Créer son activité et gagner en autonomie professionnelle, cela fait rêver, n’est-ce pas ? Malheureusement, la réalité est souvent plus complexe qu’on ne pourrait le penser. Dans cette étude, nous allons explorer le milieu entrepreneurial et mesurer à quel point il peut être difficile d’y évoluer en tant que femme. Avant d’approfondir les différents obstacles que peuvent rencontrer les femmes dans ce domaine, il convient de commencer par définir ce qu’est l’entrepreneuriat et de mettre en lumière l’importance de l’équité entre les sexes dans cet univers.<br>
            </p>
            <a href="/blog#introduction">
                <button>Lire plus</button>
            </a>
        </div>
        <div class="image">
            <img src="https://images.pexels.com/photos/8485714/pexels-photo-8485714.jpeg" alt="Femme entrepreneure">
        </div>
    </section>

    <hr>

    <section class="cards">
        <!-- ensembles des parties -->
        <div class="card">
            <div class="card-text">
            <img src="https://images.pexels.com/photos/8923776/pexels-photo-8923776.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="Tendances Genre">
            <h3>II. Les Tendances Entrepreneuriales par Genre</h3>
            <p></p>
            <a href="/blog#partie1">
                <button>Lire plus</button>
            </a>
            </div>
        </div>
        <div class="card">
            <div class="card-text">
            <img src="https://images.pexels.com/photos/6694482/pexels-photo-6694482.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="Défis financiers">
            <h3>III. Obstacles et Défis Différenciés</h3>
            <p></p>
            <a href="/blog#partie2">
                <button>Lire plus</button>
            </a>
            </div>
        </div>
        <div class="card">
            <img src="https://images.pexels.com/photos/7693153/pexels-photo-7693153.jpeg" alt="Facteurs de réussite">
            <div class="card-text">
                <h3>IV. Facteurs de Réussite et Opportunités</h3>
                <p></p>
                <a href="/blog#partie3">
                <button>Lire plus</button>
            </a>
            </div>
        </div>
    </section>
</section>

<?php 
$mainContent = ob_get_clean();


