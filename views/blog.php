<?php
$headTitle = 'Blog';
$mainTitle = 'Blog';
ob_start();
?>
<body class="blog">
<div class="sommaire">
    <h2>Entreprendre au féminin</h2>
    <ul>
      <li><a href="#partie1">Les tendances entrepreneuriales par genre</a></li>
      <li><a href="#partie2">Les obstacles rencontrés par les femmes</a></li>
      <li><a href="#partie3">Les facteurs de réussite</a></li>
    </ul>
  </div>
 
  <section id="partie1">
    <h3>Les tendances entrepreneuriales par genre</h3>
    <p>Les femmes entrepreneures sont de plus en plus nombreuses, mais certaines différences de secteurs et de statuts demeurent...</p>
  </section>
 
  <section id="partie2">
    <h3>Les obstacles rencontrés par les femmes</h3>
    <p>Manque de financement, stéréotypes de genre, accès limité au réseau professionnel... Les défis sont nombreux.</p>
  </section>
 
  <section id="partie3">
    <h3>Les facteurs de réussite</h3>
    <p>Accompagnement, formation, financement dédié, modèles inspirants... autant de leviers qui boostent l’entrepreneuriat féminin.</p>
  </section>
</body>
<?php
$mainContent = ob_get_clean();