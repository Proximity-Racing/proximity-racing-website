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

    <div class='embedsocial-instagram' data-ref="7a10a69e252c40bf90b6133aad140ed77432069f"></div>
    <script>
    (function(d, s, id) {
        var js;
        if (d.getElementById(id)) {
            return;
        }
        js = d.createElement(s);
        js.id = id;
        js.src = "https://embedsocial.com/embedscript/in.js";
        d.getElementsByTagName("head")[0].appendChild(js);
    }(document, "script", "EmbedSocialInstagramScript"));
    </script>

    <?php echo $view->footer(); ?>
</body>

</html>