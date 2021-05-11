<?php
require 'lib/site.inc.php';
$view = new ProximityRacing\GeneralView();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php echo $view->presentHeader("Write | Proximity Racing"); ?>
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TBKGS5L" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <div class="pagewide sticky-top">
        <?php if(isset($_SESSION['success'])): ?>
        <a class="fo sign" href="logout.php?destroy">Logout</a>
        <a class="fo prof" href="editprofile.php">My Profile</a>
        <?php else: ?>
        <a class="fo sign" href="login.php">Login</a>
        <a class="fo prof" href="register.php">Sign Up</a>
        <?php endif; ?>
    </div>
    <?php 
      include_once 'navbar.php';
    ?>
    <form action="writeBlog.php" method="post">
        <header class="masthead headerimg">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-10 mx-auto">
                        <div class="post-heading">
                            <h1 style="color: white"><input placeholder="Your Title Here"></h1></input>
                            <h2 class="subheading ignite"></h2>
                            <span class="meta" style="color: white">Posted by <input placeholder="Your Name"></input>
                                on <input placeholder="The Date"></span>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <article>
            <div class="container-fluid padding">
                <div class="row">
                    <div class="col-lg-8 col-md-10 mx-auto">
                        <br>
                        <img class="center" src="img/bristolwin.jpg">
                        <br>
                        <figcaption class="figcap text-center">Parker Retzlaff celebrates at Bristol</figcaption>
                        <br>
                        <p>
                            The Virtual Last Great Coliseum in Bristol, Tennessee played host the eNASCAR Ignite Series
                            last Thursday where Parker Retzlaff continued his hot streak, leading flag to flag while
                            Lucas Cram and teammate Hunter Johnson applied pressure late in the race. Behind Retzlaff,
                            Proximity drivers had mixed results in their attempts to make the show at Bristol.
                        </p>

                        <p>
                            The session opened with a tightly contested qualifying session, but Parker Retzlaff was able
                            to claim pole for the second week in a row. Behind Retzlaff for Proximity was Hunter Johnson
                            in 6th, Dylan Ault in 14th, Aaron Mulrooney Jr. in 16th, and Sean Leasure qualifying 24th.
                        </p>

                        <p>
                            The heats showed mixed results for Proximity Racing. In their three respective heats, three
                            Proximity drivers were able to transfer to the feature (Retzlaff, Johnson, and Ault), while
                            two fell into the Last Chance Qualifiers (Mulrooney and Leasure).
                        </p>
                        <p>
                            Heat one featured Proximity's strongest drivers in the first two rounds. Parker Retzlaff
                            lined up in 1st with Hunter Johnson in 2nd. Retzlaff got an excellent jump off the start,
                            and lead flag to flag. Johnson faced pressure from behind in Jackson Crowder and Cole V
                            Cabre, but the battling between these two drivers let Johnson cruise to 2nd place and
                            transfer.
                        </p>
                        <p>
                            Next up for the team was Aaron Mulrooney Jr., who started 4th in the second heat. He settled
                            into 4th off of the start and was unable to pass Donovan Strauss for the final transfer
                            spot, despite getting to his rear bumper.
                        </p>
                        <br>
                        <img class="center" src="img/aultbristol.jpg">
                        <br>
                        <figcaption class="figcap text-center">Dylan Ault and Sean Leasure pass Collin Slife who hit the
                            wall</figcaption>
                        <br>
                        <p>
                            Heat 5 was high stakes, as Dylan Ault started 3rd and Sean Leasure would line up in 5th.
                            Chaos was the theme of heat five as netcode contact between Collin Slife and Dylan Ault saw
                            Slife on the receiving end, ending his heat early. Leasure would inherit 4th and was unable
                            to overtake Ault for the final transfer spot, despite wall contact for the California
                            native.
                        </p>

                        <p>
                            For the first time in the eNASCAR Ignite Series, Proximity Racing drivers had to earn a
                            feature spot via the Last Chance Qualifiers.
                        </p>

                        <p>
                            Leasure stepped up to bat in the first LCQ, starting third, vying for a win to transfer. He
                            was able to pass Reece Baham early, which moved him into a comfortable 2nd place. This would
                            be enough as contact with lap traffic took leader Jackson Crowder out of contention.
                            Following this accident, Leasure lead to the checkered flag advancing to the feature.
                        </p>

                        <p>
                            Mulrooney Jr's heat race started promising, with a pole start and an excellent jump off of
                            the start. However, 2nd place Patrick Moose would soon begin applying pressure, flirting
                            with Mulrooney's bumper throughout the race. This battle peaked coming to take the white
                            flag, as contact between the two drivers took both drivers out of contention for a transfer
                            spot. Mulrooney would finish 5th in his LCQ to salvage some points.
                        </p>
                        <br>
                        <img class="center" src="img/wreckbristol.jpg">
                        <br>
                        <figcaption class="figcap text-center">Aaron Mulrooney Jr gets turned by Patrick Moose on the
                            white flag of the LCQ</figcaption>
                        <br>

                        <p>
                            The feature saw a mix of highs and lows for the team. The team lined up to start with
                            Retzlaff in 1st, Johnson in 6th, Ault in 15th, and Leasure in 16th. Retzlaff would lead flag
                            to flag in the feature to win over Lucas Cram. Johnson put on a hard to charge from 6th to
                            pass some competitive cars en route to 4th. Ault began mounting a climb through the
                            mid-pack, but a netcode spin forced him back to 14th. Leasure was involved in the race's
                            first incident, and a blown motor resulted in a last place finish of 17th.
                        </p>

                        <p>
                            For Retzlaff, he faced a more grueling battle than last week, as second place Lucas Cram put
                            heavy pressure on the young driver. Cram was even able to put the bumper to the back of
                            Retzlaff's car, but Cram was not able to keep the pressure, and he fell back 3 tenths by
                            race end.
                        </p>

                        <p>
                            Retzlaff, a part-time K&N Pro Series driver, is looking most hopeful to also add eNASCAR
                            Ignite Champion to his resume as would continue his immaculate streak in the series. In the
                            last two weeks has qualified pole, lead every lap of his heat, and every lap of the feature
                            race. However, that doesn't it's time to relax in between now and the finale. "We'll go week
                            by week and practice a lot when we get to Martinsville and try to be good when we get
                            there."
                        </p>
                        <br>
                        <img class="center" src="img/johnsonbristol.jpg">
                        <br>
                        <figcaption class="figcap text-center">Hunter O Johnson continues to send a statement with a 4th
                            place finish</figcaption>
                        <br>
                        <p>
                            For the second week in a row, Hunter O Johnson went on a climb through the mid-field. A 6th
                            place starting spot meant the Connecticut driver knew it was time to dig. By the halfway
                            point, he had claimed 5th, and soon Andy Trupiano was passed for 4th. Johnson was on the
                            bumper of 3rd place Dylan L Parker with two laps remaining, but a move to the inside was not
                            enough for Parker to lose his composure as Johnson claimed 4th.
                        </p>
                        <p>
                            Dylan Ault had an eventful feature. A 15th place start left much to be gained, and he was
                            able to climb to 11th by the midway point. While trying to snag 10th, netcode struck again,
                            causing Ault to seemingly self-spin. He finished 14th, still on the lead lap.
                        </p>

                        <p>
                            Sean Leasures's impressive Last Chance Qualifier drive unfortunately went to waste, as early
                            contact would result in a blown motor. That was the end of the day of the LCQ winner who
                            would finish in 17th.
                        </p>

                        <p>
                            All drivers remain in the top of half of the points spots that make the eNASCAR Ignite
                            Finale, but several races remain before the series concludes at Martinsville.
                        </p>

                        <p>
                            The eNASCAR Ignite Series goes North East to Thompson for 30 laps on August 22nd at 8 PM
                            EDT. You can catch the action on YouTube on the <a href="#">iRacing eSports Network</a>, the
                            <a href="#"> iRacing</a> Twitch page, and the <a href="#">NASCAR</a> Facebook Page.
                        </p>
                        <img class="img-fluid center" src="img/results2.png">
                    </div>

                </div>
            </div>
        </article>
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <button class="btn btn-primary mt-5" type="submit">Submit Blog</button>
                </div>
            </div>
        </div>
    </form>

</body>

</html>