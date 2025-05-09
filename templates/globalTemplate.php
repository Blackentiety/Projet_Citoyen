<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $HeadTitle ?? "Entreprendre au Féminin" ?></title>
    <link rel="stylesheet" href="/sources/css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400..900&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
</head>
<body>
    <header class="main-head">
        <h1 class ="main-head-title">
            <?= $mainTitle ??"Entreprendre au Féminin" ?>
        </h1>
        <div class="mobile-menu">
            <span class="material-symbols-outlined" onclick=toggler() id="toggler">
            menu
            </span>
        </div>
        <div class="empty">
        </div>
        <div></div>
        <div ></div>
        <div class="nav-all">
            <?php include_once "/templates/fragments/nav.php" ?>
        </div>
    </header>
    <main class="main-content">
        <?= $mainContent ?? "Erreur 404" ?>
    </main>
    <footer class="main-foot">
        <p class="copyright">© 2025 - Entreprendre au Féminin</p>
    </footer>
    <script src="/sources/js/burger_menu.js"></script>
    <script src="/sources/js/page_selector.js"></script>
    <script src="/sources/js/page_transition.js"></script>
    <?= $script ?? "" ?>
</body>
</html>