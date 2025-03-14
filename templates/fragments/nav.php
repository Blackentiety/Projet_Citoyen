<?php
?>
<nav class="main-nav">
    </button>
    <ul class="main-nav-list">
        <li class="main-nav-item">
            <a href="/" class="main-nav-link">Blog</a>
        </li>
        <li class="main-nav-item">
            <a href="/about" class="main-nav-link">À propos</a>
        </li>
        <li class="main-nav-item">
            <a href="/contact" class="main-nav-link">Contact</a>
        </li>
        <li class="main-nav-item">
            <?php if(isset($_SESSION['user']) && !empty($_SESSION['user'])): ?>
            <a href="/users/logged" class="main-nav-link">Mon compte</a>
            <?php else: ?>
            <a href="/user" class="main-nav-link">Connexion</a>
            <?php endif; ?>
        </li>
        <li class="main-nav-item">
            <a href="/reservation/add" class="main-nav-link">Réserver</a>
        </li>
    </ul>
</nav>