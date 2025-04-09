<?php
$headTitle = 'Formulaire';
$mainTitle = 'Formulaire';
ob_start();
?>
<section class="main-section">
    <div class="formulaire-container">
        <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSdwi1byaZxobYv6jaPSm_AMsgmq4VBreYXxWko-MPKg7I1Xbg/viewform?embedded=true" 
            width="640" height="1855" frameborder="0" marginheight="0" marginwidth="0">
            Chargement…
        </iframe>
    </div>
</section>
<?php
$mainContent = ob_get_clean();
?>
