<?php
require 'lib/site.inc.php';
$view = new ProximityRacing\GeneralView();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php echo $view->presentHeader("About | Proximity Racing"); ?>
</head>

<body>
    <?php echo $view->presentNavbar(); ?>
    <div class="loader-wrapper">
        <span class="loader"><span class="loader-inner"></span></span>
    </div>
    <script>
    $(window).on("load", function() {
        $(".loader-wrapper").fadeOut("slow");
    });
    </script>

    <div class="aboutheader">
        <div class="col-lg-8 col-md-10 mx-auto">
            <h1 class="specialHeaderAbout">About Us</h1>
            <br>
            <br>
        </div>
    </div>

    <!-- About Container -->
    <div class="container-fluid padding fade">
        <div class="row padding">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <p class="ps-2 mt-5 lead">Proximity Racing is a sanctioned iRacing.com motorsport team. Founded November
                    10th, 2016, our team started with five members. After our 24 Hours of Daytona run coming short in
                    2017, we reformed our team, expanding our member base. After months worth of preparation for the
                    2017 6 Hours of The Glen, our two teams managed to score our first team endurance wins. We brought
                    this confidence into the 2018 24 Hours of Daytona and ended up winning our class.</p>
                <br>
                <br>
                <p class="ps-2 lead">Our success doesn't just come on the track, but it also develops off the track. We
                    make sure our team members are academically successful and ready for the business world. We train
                    our members on how to effectively market themselves and the team. The majority of our members are in
                    colleges all across the United States.</p>
                <br>
                <br>
                <p class="ps-2 lead">We continue to grow our team. We have a passion for racing. By preparing for the
                    events, we ensure that our team will produce successful results.</p>
            </div>
        </div>
    </div>
    <div class="container-fluid padding fade gap">
        <div class="row padding">
            <div class="col-md-12 mt-5">
                <h1 style="font-weight: 500;" class="display-4 text-center">A Culture</h1>
                <br>

                <img class="center bigpic mt-5" src="img/teampic.jpg">
                <br>
                <br>
                <p class="ps-2 lead mt-5">Proximity Racing has become engulfed into the racing community. With 15+
                    active drivers on the team racing regularly, it's been in our blood since the start. But we are more
                    than a race team; We are family. It’s all about the long lasting friendships, building the necessary
                    skills and giving back.</p>
                <br>
                <p class="ps-2 lead">From late night discords chats, fun league racing to sending each other funny memes
                    and even playing other games such as Minecraft, Rocket League, Overwatch, etc. there’s always a way
                    to build connections on the team.</p>
                <br>
                <p class="ps-2 lead">We gurantee you that we will make you a better racer. We help build new skills and
                    sharpen old ones. No matter what series, car or track you prefer; We got you covered. Some of our
                    notable board members and current drivers have been in the racing world for over a decade. Some of
                    them even race in the real world. There is never not a resource to ask advice for.</p>
                <br>
                <p class="ps-2 lead">When joining our family, you get access to many replay files over multiple tracks,
                    telemetry and real world knowledge setups and all our paint schemes, suits, helmets that are
                    professionally designed. On top of that, you receive access to the discord, receive a website
                    profile get email subscription access and get included in shoutouts on all our social media
                    accounts. You would also get to represent our incredible sponsors on the track!</p>
            </div>
        </div>
    </div>

    <div class="container-fluid fixed5 fade">
        <div class="row">
            <div class="text-center col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 gap">
                <h1 class="fixedbackgroundheader mr-desktop">eNASCAR Ignite Series</h1>
                <a href="https://www.iracing.com/nascarignite/" target="_blank"><img src="img/ignitelogo.png"
                        class="img-fluid picoverlay mt-5"></a>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 gap">
                <p class="lead pp fixedbackgroundtext">Proximity Racing competes in the NASCAR sanctioned series,
                    Ignite. In the 2019 season, our drivers placed all in the top 30, making them all eligible to
                    compete for the championship prize.</p>
                <br><br>
                <a target="_blank" href="https://www.iracing.com/nascarignite/"><button type="button"
                        class="btn btn-secondary btn-lg pp-btn">Ignite Series Page</button></a>
            </div>
        </div>
    </div>

    <div class="container-fluid padding fade gapbig">
        <div class="row padding text-center">
            <div class="col-md-12">
                <h1 class="display-4">Amenities</h1>
            </div>

        </div>

        <div class="container-fluid padding fade amenities">
            <div class="row padding">
                <div class="col-xs-12 col-md-6">
                    <ul class="amen">
                        <li class="lead">Professional Training</li>
                        <li class="lead">Access to replays, setups, telemetry files and tools</li>
                    </ul>
                </div>
                <div class="col-xs-12 col-md-6">
                    <ul class="amen">
                        <li class="lead">Paint scheme library access</li>
                        <li class="lead">Representing our top sponsors</li>
                        <li class="lead">Merchandise</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid fixed6 fade gapbig">
        <div class="row">
            <div class=" col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 gap">
                <h1 class="fixedbackgroundheader mr-desktop">iRacing Road to Pro</h1>
                <p class="lead pp fixedbackgroundtext mt-5">This year we are making a run for one of the biggest series,
                    Road to Pro. It is a way for our drivers to attain a Pro license.</p>
                <br><br>
                <a target="_blank" href="#"><button type="button" class="btn btn-primary btn-lg pp-btn">Pro Series
                        Page</button></a>

            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 gap">

                <a href="https://www.iracing.com/nascarignite/" target="_blank"><img src="img/rtp.png"
                        class="img-fluid picoverlay mt-5"></a>
            </div>
        </div>
    </div>


    <div class="container-fluid padding fade gap">
        <div class="text-center">
            <h1 class="display-4">Current Stats</h1>
        </div>
        <div class="row padding gapbig">
            <div class="Count col-xs-12 col-md-6">
                <h1 class="text-center">Board Members</h1>
                <h1 class="Counter text-center" data-count=8>0</h1>
            </div>
            <div class="Count col-xs-12 col-md-6 gap-mobile">
                <h1 class="text-center">Active Drivers</h1>
                <h1 class="Counter text-center" data-count=15>0</h1>
            </div>
        </div>
    </div>
    <script>
    var a = 0;
    $(window).scroll(function() {
        var oTop = $('.Count').offset().top - window.innerHeight;
        if (a == 0 && $(window).scrollTop() > oTop) {
            $('.Counter').each(function() {
                var $this = $(this),
                    countTo = $this.attr('data-count');
                $({
                    countNum: $this.text()
                }).animate({
                    countNum: countTo
                }, {
                    duration: 2000,
                    easing: 'swing',
                    step: function() {
                        $this.text(Math.floor(this.countNum));
                    },
                    complete: function() {
                        $this.text(this.countNum);
                    }
                });
            });
            a = 1;
        }
    });
    </script>




    <script>
    $(function() {
        $().timelinr({
            arrowKeys: 'true'
        })
    });
    </script>
    <section class="bg-dark mobile-hide back fade gapbiggest pad-sm pad-bot">
        <div class="col-md-12 text-center">
            <h1 style="font-size: 50px; color:white;">Our Timeline</h1>
        </div>
        <div id="timeline">
            <ul id="dates">
                <li><a href="#2016">2016</a></li>
                <li><a href="#2017">2017</a></li>
                <li><a href="#2018">2018</a></li>
                <li><a href="#2019">2019</a></li>
            </ul>
            <ul id="issues">
                <li id="2016">
                    <img class="override" src="images/pr1.png" width="220" height="220" />
                    <h1 class="headerOverride">November 10, 2016</h1>
                    <p class="text-white">Proximity Racing Founded</p>
                </li>
                <li id="2017">
                    <img class="override" src="img/winglen.jpg" width="384" height="216" />
                    <h1 class="headerOverride">2017</h1>
                    <br><br>
                    <p class="text-white">6 Hours of Watkins Glen - Split 2 GT3 Class Winner<br>
                        6 Hours of Watkins Glen - Split 6 GT3 Class Winner</p>
                </li>
                <li id="2018">
                    <img class="override" src="images/Proximity24HoursWin.png" width="467" height="205" />
                    <h1 class="headerOverride">2018</h1>
                    <br>
                    <p class="text-white">24 Hours of Daytona - Split 14 GT3 Class Winner</p>
                </li>
                <li id="2019">
                    <img class="override" src="img/winner42ss.jpg" width="384" height="216" />
                    <h1 class="headerOverride">2019</h1>
                    <br><br>
                    <p class="poverride text-white">iSCAR JTP Graphix Series Season 1 Champion<br>
                        iSCAR Street Stock Series Season 6 Champion<br>
                        iSCAR Tolsma Designs Truck Series Season 2 Champion <br>
                        iSCAR Street Stock Series Season 8 Champion<br>
                        iSCAR Modified Tour presented by SR Designs Season 1 Champion
                    </p>
                </li>
            </ul>
            <div id="grad_left"></div>
            <div id="grad_right"></div>
            <a href="#" id="next">+</a>
            <a href="#" id="prev">-</a>
        </div>
    </section>
    <?php echo $view->footer(); ?>
</body>

</html>