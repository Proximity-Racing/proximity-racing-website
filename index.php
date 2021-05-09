 <!--Proximity Racing Website Coded By: Chris Nosowsky-->
 <?php
  require 'lib/site.inc.php';
  $view = new ProximityRacing\GeneralView();
  ?>
 <!DOCTYPE html>
 <html lang="en">

 <head>
   <?php echo $view->presentHeader("Home | Proximity Racing"); ?>
 </head>

 <body>
   <?php echo $view->presentNavbar(); ?>

   <div class="container-fluid fixed7"></div>

   <div class="caption text-center">
     <h1 class="captionfadein">WELCOME TO</h1>
     <img class="captionfadein capimgsm" src="img/ProximityRacing_Logo_Word Bright Blue.png">
   </div>
   </div>
   <div class="container-fluid fixed4 fade">
     <div class="row">
       <div class="text-center col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 gap">
         <iframe class="frame-size" src="https://www.youtube.com/embed/MwxcyNvFPcA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
       </div>
       <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 gap">
         <h1 class="fixedbackgroundheader ml-5 mb-3">Who We Are</h1>
         <p class="lead pp fixedbackgroundtext">Proximity Racing is a sanctioned iRacing.com motorsport team. Founded November 10th, 2016, our team started with five members. After our 24 Hours of Daytona run coming short in 2017, we reformed our team, expanding our member base.</p>
         <br><br>
         <a href="./about.php"><button type="button" class="btn btn-primary btn-lg pp-btn">Learn More</button></a>
       </div>
     </div>
   </div>

   <!-- Welcome -->
   <div class="container-fluid padding fade bg-dark">
     <div class="row welcome text-center">
       <div class="col-12">
         <h1 class="display-4 text-white">Livestream</h1>
       </div>
       <hr>
     </div>
   </div>
   <div class="container-fluid padding fade bg-dark">
     <div class="row text-center padding justify-content-center gap-bot">
       <div id="twitch-embed"></div>

       <!-- Load the Twitch embed script -->
       <script src="https://embed.twitch.tv/embed/v1.js"></script>

       <!-- Create a Twitch.Embed object that will render within the "twitch-embed" root element. -->
       <script type="text/javascript">
         new Twitch.Embed("twitch-embed", {
           width: 1080,
           height: 500,
           channel: "proximityracing",
         });
       </script>
     </div>
   </div>

   <!-- Welcome -->
   <div class="container-fluid padding fade">
     <div class="row welcome text-center">
       <div class="col-12">
         <h1 class="display-4">Latest News</h1>
       </div>
       <hr>
     </div>
   </div>
   <div class="container-fluid padding fade">
     <div class="row text-center padding">
       <div class="col-xs-12 col-md-12">
         <a href="./news.php"><img src="img/blog4pic2.jpg" class="img-fluid bigpic"></a>
         <h1 class="mobile-header ps-sm"><a class="nolink" href="./blog4.php">Daytona High Banks Claim Proximity Racing in iSCAR Competition</a></h1>
         <p class="mt-5 lead ps-3">While the harshness of a cold winter looms, putting an end to real-life motorsport across America for the year, virtual action ramped up...</p>
       </div>
     </div>
   </div>


   <div class="loader-wrapper">
     <span class="loader"><span class="loader-inner"></span></span>
   </div>
   <script>
     $(window).on("load", function() {
       $(".loader-wrapper").fadeOut("slow");
     });
   </script>


   <div class="container-fluid fade fixed3">
     <div class="row">
       <div class="col-sm-12 col-md-6">
         <br><br><br>
         <h1 class="text-center fixedbackgroundheader">Our Partners</h1>
         <p class="lead pp mt-5" style="color:white;  text-shadow: -1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000, 1px 1px 0 #000;font-size: 22px !important;">We are extremely fortunate to have our partners on board our vehicles for the 2020 season. Not only do they help us by providing opportunities to develop our talented drivers, but we help them get the best exposure on and off the track by frequently promoting their business on social media and using industry leading marketing strategies.</p>
         <a href="./about.php"><button type="button" class="btn btn-primary btn-lg pp mt-5">Learn More</button></a>
       </div>
       <div class="col-6 col-sm-6 col-md-3">
         <br><br>
         <a href="https://allservdoor.wixsite.com/allservdoor" target="_blank"><img src="img/AllserDoorOfficialLogo3.png" class="img-fluid picoverlay hidesmall mt-5"></a>
         <a href="https://www.instagram.com/treshuttlesworthphotography/" target="_blank"><img src="img/TSP.png" class="img-fluid picoverlay hidesmall mt-5"></a>
         <a href="https://www.facebook.com/splashngographics/" target="_blank"><img src="img/splashgo.png" class="img-fluid center2 picoverlay hidesmall mt-5"></a>
       </div>
       <div class="col-6 col-sm-6 col-md-3">
         <br><br><br><br>
         <a href="https://www.facebook.com/RexfordEngineering" target="_blank"><img src="img/RE_White.png" class="img-fluid picoverlay hidesmall"></a>
         <a href="https://soundcloud.com/graham-cracker-yuh" target="_blank"><img src="img/GramCrackerFinal.png" class="img-fluid picoverlay hidesmall mt-5"></a>
         <a href="https://www.instagram.com/coryhartsmedia/" target="_blank"><img src="img/CHM_INVERTED_No_shadow.png" class="img-fluid picoverlay hidesmall mt-5"></a>
       </div>
     </div>
   </div>


   <!-- Meet the team -->
   <div class="container-fluid padding fade">
     <div class="row welcome text-center">
       <div class="col-12">
         <h1 class="display-4">Meet the Team</h1>
       </div>
       <hr>
     </div>
   </div>


   <!-- Cards -->
   <div class="container-fluid padding fade">
     <div class="row padding">
       <div class="col-md-3">
         <div class="card">
           <?php
            include_once '../config/db_conn.php';
            $result3 = mysqli_query($con, "SELECT * FROM members where first_name='Chris' AND last_name='Nosowsky'");
            $row3 = mysqli_fetch_array($result3);
            $image = $row3['profile_pic']
            ?>
           <img class="card-img-top" src=<?php echo "profile_pictures/" . $image ?>>
           <div class="card-body d-flex flex-column">
             <h4 class="card-title">Chris Nosowsky</h4>
             <h6 class="card-title">Founder; Vice President</h6>
             <p class="card-text">Chris is the Founder of Proximity Racing and currently serves as the website designer and vice president.</p>
             <div class="mt-auto">
               <a href="https://proximityracing.com/user.php?userid=4&fname=Chris&lname=Nosowsky" class="btn btn-outline-secondary">Profile</a>
             </div>
           </div>
         </div>
       </div>

       <div class="col-md-3">
         <div class="card">
           <?php
            include_once '../config/db_conn.php';
            $result3 = mysqli_query($con, "SELECT * FROM members where first_name='Cory' AND last_name='Harts'");
            $row3 = mysqli_fetch_array($result3);
            $imageCory = $row3['profile_pic']
            ?>
           <img class="card-img-top" src=<?php echo "profile_pictures/" . $imageCory ?>>
           <div class="card-body d-flex flex-column">
             <h4 class="card-title">Cory Harts</h4>
             <h6 class="card-title">President</h6>
             <p class="card-text">Cory is the current President of Proximity Racing and currently serves as an active driver.</p>
             <div class="mt-auto">
               <a href="#" class="btn btn-outline-secondary">Profile</a>
             </div>
           </div>
         </div>
       </div>

       <div class="col-md-3">
         <div class="card">
           <img class="card-img-top" src="img/dimaggio.jpg">
           <div class="card-body d-flex flex-column">
             <h4 class="card-title">Michael DiMaggio</h4>
             <h6 class="card-title">Co-Founder; Administration</h6>
             <p class="card-text">Michael DiMaggio is the Co-Founder and currently serves on the administration team at Proximity Racing.</p>
             <div class="mt-auto">
               <a href="#" class="bot btn btn-outline-secondary">Profile</a>
             </div>
           </div>
         </div>
       </div>

       <div class="col-md-3">
         <div class="card">
           <img class="card-img-top" src="img/tre.png">
           <div class="card-body d-flex flex-column">
             <h4 class="card-title">Tre Shuttlesworth</h4>
             <h6 class="card-title">Board Member; Blogger</h6>
             <p class="card-text">Tre Shuttlesworth is an active board member and serves as the teams secretary and blogger.</p>
             <div class="mt-auto">
               <a href="#" class="mt-auto btn btn-outline-secondary">Profile</a>
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>
   <!-- Connect -->
   <div class="container-fluid padding fade gap gap-bot">
     <div class="row text-center padding">
       <div class="col-12">
         <h1>Connect</h1>
         <p class="lead mt-4">Keep up with the action on our social media! We post actively and give live feed updates on major races we run.</p>
       </div>
       <div class="col-12 social padding">
         <a href="https://www.facebook.com/ProximityRacing" target="_blank"><i class="fab fa-facebook"></i></a>
         <a href="https://www.twitter.com/ProximityRacing" target="_blank"><i class="fab fa-twitter"></i></a>
         <a href="https://www.instagram.com/ProximityRacing" target="_blank"><i class="fab fa-instagram"></i></a>
         <a href="https://www.youtube.com/channel/UCzIyawQKpJ5DRM-_TROvZJw" target="_blank"><i class="fab fa-youtube"></i></a>
         <a href="https://www.twitch.tv/ProximityRacing" target="_blank"><i class="fab fa-twitch"></i></a>
       </div>
     </div>
   </div>
   <?php echo $view->footer(); ?>
 </body>

 </html>