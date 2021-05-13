<?php
require 'lib/site.inc.php';
$view = new ProximityRacing\GeneralView();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php echo $view->presentHeader("Gallery | Proximity Racing"); ?>
</head>

<body>
    <?php echo $view->presentNavbar(); ?>

    <div class="embedsocial-hashtag" data-ref="ec7532b60d2f7fd9932875a05531a90b9b6c4fda" >
    <a class="feed-powered-by-es" href="https://embedsocial.com/products/embedfeed/" target="_blank" title="Powered by EmbedSocial">Powered by EmbedSocial<span>→</span></a>
    </div>
    <script>(function(d, s, id){var js; if (d.getElementById(id)) {return;} js = d.createElement(s); js.id = id; js.src = "https://embedsocial.com/cdn/ht.js"; d.getElementsByTagName("head")[0].appendChild(js);}(document, "script", "EmbedSocialHashtagScript"));
    </script>

    <?php echo $view->footer(); ?>
</body>

</html>