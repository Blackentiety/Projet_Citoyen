<?php
$headTitle = 'Formulaire';
$mainTitle = 'Formulaire';
ob_start();
?>
<section class="main-section">
    <h2 class="main-section-title">
        Formulaire
    </h2>
    <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSdwi1byaZxobYv6jaPSm_AMsgmq4VBreYXxWko-MPKg7I1Xbg/viewform?embedded=true" width="640" height="1855" frameborder="0" marginheight="0" marginwidth="0">Chargement…</iframe>
</section>
<?php
$mainContent = ob_get_clean();
