<?php
require 'lib/site.inc.php';
$view = new ProximityRacing\GeneralView();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php echo $view->presentHeader("Partners | Proximity Racing"); ?>
</head>

<body>
    <?php echo $view->presentNavbar(); ?>
    <div class="partnerheader">
        <div class="col-lg-8 col-md-10 mx-auto">
            <h1 class="partnersHeaderFont">Our Partners</h1>
            <br>
            <br>
        </div>
    </div>
    <div class="container-fluid padding">
        <div class="row gap">
            <div class="col-md-6">
                <a href="https://allservdoor.wixsite.com/allservdoor" target="_blank">
                    <img class="img-fluid center partnerspic" src="img/AllserDoorOfficialLogo3.png"></a>
                <br>
                <p class="ps">
                    Allserv Garage Door & Openers is one of Detroit Metros best when it comes to garage door service.
                    Offering 24-hour emergency service and incredible work done by the business owner after being in the
                    business for 20 years, you are guaranteed to get the best quality for the best price that their
                    competitors cannot beat.
                </p>
            </div>
            <div class="col-md-6">
                <a href="https://www.instagram.com/treshuttlesworthphotography/" target="_blank">
                    <img class="img-fluid center partnerspic" src="img/TSP.png">
                </a>
                <p class="ps">
                    Tre Shuttlesworth Photography is a freelance producer of photography and videography services
                    specializing in motorsport. We aim to convey the passion and spirit of motorsport through multimedia
                    solutions.
                </p>
            </div>
        </div>
        <div class="row gap">
            <div class="col-md-6">
                <a href="https://www.facebook.com/RexfordEngineering" target="_blank">
                    <img class="img-fluid center partnerspic" src="img/RE_Black.png"></a>
                <br>
                <p class="ps">
                    Rexford Engineering is a small sim-racing equipment manufacturer based out of Massachusetts that
                    creates button boxes and is looking into creating other equipment such as custom rims, pedals, and
                    shifters.
                </p>
            </div>

            <div class="col-md-6">
                <a href="https://www.facebook.com/splashngographics/" target="_blank">
                    <img class="center partnerspic" src="img/splashgo.png"></a>
                <br>
                <p class="ps">
                    Looking for the best in the business when it comes to paint schemes? Splash N Go Graphics is the top
                    graphics design company on iRacing with some of the best designers around. With hundreds of paint
                    schemes designed for their clients, they put dedication and precision together to make sure you are
                    fully satisfied, no matter what vehicle.
                </p>
            </div>
        </div>
        <div class="row gap">
            <div class="col-md-6 inline">
                <a target="_blank" href="https://soundcloud.com/graham-cracker-yuh">
                    <img class="center partnerspic partnerspicgraham" src="img/GramCrackerFinal.png"></a>
                <br>
                <p class="ps">
                    If you are interested in rock, EDM or just music in general, then Graham Cracker will not fail to
                    dissapoint. As a growing hobbyist for music, Grant Marquart writes, sings and produces his own music
                    which all happens at home. He also has influence from German artists!
                </p>
            </div>
            <div class="col-md-6">
                <a target="_blank" href="https://www.instagram.com/coryhartsmedia/">
                    <img class="img-fluid center partnerspic" src="img/CHM.png"></a>
                <br>
                <p class="ps">
                    Cory Harts Media specializes in real-world and sim-racing graphics, motorsports photography, and
                    motorsport centered merchandise.
                </p>
            </div>
        </div>
    </div>
    <?php echo $view->footer(); ?>
</body>

</html>