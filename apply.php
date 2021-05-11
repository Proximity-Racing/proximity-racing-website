<?php
require 'lib/site.inc.php';
$view = new ProximityRacing\GeneralView();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php echo $view->presentHeader("Apply | Proximity Racing"); ?>
</head>

<body>
    <?php echo $view->presentNavbar(); ?>

    <div class="aboutheader">
        <div class="col-lg-8 col-md-10 mx-auto">
            <h1 style="color: white; font-size: 100px;">Open Positions</h1>
            <br>
            <br>
        </div>
    </div>


    <div class="container-fluid mt-5">
        <div class="row padding" style="margin-right: 15em; margin-left: 15em;">
            <div class="col-md-12">
                <p>
                    We are actively recruiting for any positions avaliable throughout the calendar year. If you find any
                    interest in the positions listed below and feel like you would be a good fit for our team, fill out
                    the form <a href="#">here.</a> The applications steps are as follows:

                    1) When we receive your application, we will evaluate it with our current team and determine if you
                    would be a good fit for the positon

                    2) We will reach out to you and have you meet our current team and describe in detail the role and
                    what tasks and responsibilties you would be doing

                    3) If we would like to move forward, we will email you back on our decision and you'll be
                    immedaitely added to the position and our board member team.
                </p>
            </div>
        </div>
    </div>
    <hr class="purpleRuler">
    <div class="container-fluid mt-5">
        <div class="row padding" style="margin-right: 15em; margin-left: 15em;">
            <div class="col-md-12">
                <h1>Setup Builder</h1>
                <p>
                    We are looking for both a road and oval setup builder for the upcoming season. If you are familiar
                    with setup building, telemetry, team testing or vehicle dynamics, this is the position for you. Your
                    responsibilities will include delivering high quality setups for endurance races, official open
                    series races and league races.
                </p>
                <p>If interested, fill out the application form <a href="https://forms.gle/G3HZ6Vj61qK4nXLe6">here.</a>
                </p>
            </div>

            <div class="col-md-12">
                <h1>Marketing</h1>
                <p>In this role, you will be engaging in all the board member meetings, reaching out to anyone
                    interested in joining the team, helping with getting our brand out there on social media, posting on
                    the forums, and reaching out to potential sponsors.</p>
            </div>

            <div class="col-md-12">
                <h1>Photographer</h1>
                <p>This role is for someone who is inspired by photographer, likes to take pictures, specifically racing
                    related. In this role, you will be responsible for the teams screenshots used on social media, blogs
                    and the website. Must be able to run iRacing graphics on high settings.</p>
            </div>

            <div class="col-md-12">
                <h1>Videographer</h1>
                <p>Someone who has an interest in making videos, recording, editing videos for the internet, etc. In
                    this role, you will be creating weekly highlights, promotional videos, coordinating our livestreams
                    and helping with the camera angles for livestreaming/videos. If you are passionate about creating
                    videos, specifically racing related then this is the role for you. Having a portfolio such as a
                    Twitch or Youtube channel is a plus. Attended or attending college for film/video is a plus.</p>
            </div>

            <div class="col-md-12">
                <h1>UX/UI Designer</h1>
                <p>Someone that has a base knowledge of HTML and CSS/SASS. Able to work on the website components and
                    conduct layout models and adjustments. Quick on feedback to fix any underlying compatibility issues.
                    Ability to work in Adobe Illustrator and Photoshop along with preferred knowledge in wireframe tools
                    such as InVision or Wireframe.cc</p>
            </div>
        </div>
    </div>
    <?php echo $view->footer(); ?>
</body>

</html>