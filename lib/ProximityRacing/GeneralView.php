<?php

namespace ProximityRacing;

class GeneralView {

    private $title = "";
    private $links = [];

    public function __construct() {
        $this->addLink("about.php", "About");
        $this->addLink("news.php", "News");
        $this->addLink("drivers.php", "Members");
        $this->addLink("gallery.php", "Gallery");
        $this->addLink("partners.php", "Partners");
        $this->addLink("analytics.php", "Analytics");
    }

    public function presentHeader($title) {
        $html = <<<HTML
            <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-TBKGS5L');</script>
<!-- End Google Tag Manager -->
    <meta charset="UTF-8">
    <meta name="google-site-verification" content="AukAjPW9r21qYaTiRJPy5nR3cIypkD4IAXpG2TA57Bk" />
    <meta name="google-site-verification" content="PoZ0KOGt9LqkAqRfxtfaWOnWpzHvLvN5b4Bn2koSqM4" />
    <link rel="icon" href="img/favicon.png" type="image/png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>$title</title>
    <meta name="description" content="Proximity Racing is a sanctioned iRacing.com motorsport team">
    <meta name="robots" content="index, follow" />
    <meta name="keywords" content="proximity racing, proximity, proximityracing, iracing, chris nosowsky">
    <link rel="stylesheet" href = "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script type="application/ld+json">
      { "@context" : "http://schema.org",
        "@type" : "Organization",
        "name" : "Proximity Racing",
        "url" : "https://proximityracing.com/",
        "sameAs" : ["https://www.facebook.com/ProximityRacing",
                    "https://www.twitter.com/ProximityRacing",
                    "https://www.instagram.com/ProximityRacing",
                    "https://www.youtube.com/channel/UCzIyawQKpJ5DRM-_TROvZJw",
                    "https://www.twitch.tv/ProximityRacing"]
      }

    </script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <script src="jquery/scripts.js"></script>
    <link rel="canonical" href="https://www.proximityracing.com/" />
    <link rel="stylesheet" type = "text/css" href="style.css" />
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-155164803-1"></script>
        <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-155164803-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-155164803-1');
    </script>
HTML;
        return $html;
    }


    public function presentNavbar() {
        $activePage = basename($_SERVER['PHP_SELF']); 
        $html = <<<HTML
            <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TBKGS5L"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
  <div class="pagewide sticky-top"> 
HTML;

      if(isset($_SESSION['success'])) {
        $html .= '<a class ="fo sign" href="logout.php?destroy">Logout</a>';
        $html .= '<a class ="fo prof" href="editprofile.php">My Profile</a>';
      } else {
        $html .= '<a class="fo sign" href="login.php">Login</a>';
        $html .= '<a class="fo prof" href="register.php">Sign Up</a>';
      }

      $html .= <<<HTML
  </div>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top">

      <div class="container-fluid">
        <a class="navbar-brand" href="./"><img src="img/ProximityRacing_Logo_Word Bright Blue.png"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse"
        data-target="#navbarResponsive">
          <span class="navbar-toggler-icon"> </span>
        </button>
        <div class ="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
HTML;

            if($activePage == "index.php") {
              $html .= '<li class="nav-item active">';
            } else {
              $html .= '<li class="nav-item">';
            }
            $html .= <<<HTML
              <a class="nav-link" href="./">Home</a>
            </li>
HTML;
            foreach($this->links as $link) {
                if($activePage == $link["href"]) {
                    $html .= '<li class="nav-item active">';
                } else {
                    $html .= '<li class="nav-item">';
                }
                $href = $link['href'];
                $text = $link['text'];
                $html .= <<<HTML
                <a class="nav-link" href="$href">$text</a>
              </li>
HTML;
            }

        if($activePage == "contact.php" || $activePage == "apply.php" || $activePage == "sponsor.php") {
            $html .= '<li class="dropdown nav-item active">';
        } else {
            $html .= '<li class="dropdown nav-item">';
        }

        $html .= <<<HTML
            <a href="./contact.php" data-toggle="dropdown" class="dropdown-toggle nav-link">Contact</a>
            <ul class="dropdown-menu" id="menu1">
              <li><a class = "fo" href="./contact.php">Contact Us</a></li>
              <li><a class = "fo" href="./apply.php">Apply</a></li>
              <li><a class = "fo" href="./sponsor.php">Become a Sponsor</a></li>
            </ul>
          </li>
          </ul>
        </div>

      </div>
    </nav>
HTML;
        return $html;
    }


    /**
     * Set the page title
     * @param string $title New page title
     */
    public function setTitle(string $title) {
        $this->title = $title;
    }


    /**
     * Add a link that will appear on the nav bar
     * @param $href string What to link to
     * @param $text
     */
    public function addLink($href, $text) {
        $this->links[] = ["href" => $href, "text" => $text];
    }


    function footer() {
        return <<<HTML
    <!-- Footer -->
  <footer class="bg-dark">
    <div class="container-fluid padding fade">
    <div class="row">

      <div class="col-md-12">

      <div class="col-12">
        <hr class="light-100">
        <div class="row">
            <script language="JavaScript" type="text/javascript">
            TrustLogo("https://sectigo.com/images/seals/sectigo_trust_seal_sm_2x.png", "SECEV", "none");
            </script>
            <div class="social-footer-icons">
                <a class="fi" href="https://www.facebook.com/ProximityRacing" target="_blank"><i class="fo fab fa-facebook" aria-hidden="true"></i></a>
                <a class="fi" href="https://www.twitter.com/ProximityRacing" target="_blank"><i class="fo fab fa-twitter" aria-hidden="true"></i></a>
                <a class="fi" href="https://www.instagram.com/ProximityRacing" target="_blank"><i class="fo fab fa-instagram" aria-hidden="true"></i></a>
                <a class="fi" href="https://www.youtube.com/channel/UCzIyawQKpJ5DRM-_TROvZJw" target="_blank"><i class="fo fab fa-youtube" aria-hidden="true"></i></a>
                <a class="fi" href="https://www.twitch.tv/ProximityRacing" target="_blank"><i class="fo fab fa-twitch" aria-hidden="true"></i></a>
            </div>
        </div>
        <div class="text-center mt-4">
        <h5>&copy; 2021 ProximityRacing.com</h5>
        <h5>Created by Chris Nosowsky</h5>
        </div>
      </div>
    </div>  
    </div>
  </footer>
HTML;
    }

}