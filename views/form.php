<?php
$headTitle = 'Formulaire';
$mainTitle = 'Formulaire';
ob_start();
?>
<section class="formulaire">
    <div class="formulaire-container">
        <iframe class= "responsive-iframe" src="https://docs.google.com/forms/d/e/1FAIpQLSdwi1byaZxobYv6jaPSm_AMsgmq4VBreYXxWko-MPKg7I1Xbg/viewform?embedded=true" 
            frameborder="0" marginheight="0" marginwidth="0" style="width: 100%; height: 500px;">
            Chargement…
        </iframe>
    </div>
</section>
<?php
$mainContent = ob_get_clean();
?>
