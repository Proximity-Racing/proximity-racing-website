    <?php 
    $activePage = "";
    $activePage = basename($_SERVER['PHP_SELF']); 
    ?>
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
            <?php 
                if($activePage == "index.php") {
                  echo '<li class="nav-item active">';
                } else {
                  echo '<li class="nav-item">';
                }
              ?>
              <a class="nav-link" href="./">Home</a>
            </li>
            <?php 
                if($activePage == "about.php") {
                  echo '<li class="nav-item active">';
                } else {
                  echo '<li class="nav-item">';
                }
              ?>
              <a class="nav-link" href="./about.php">About</a>
            </li>
            <?php 
                if($activePage == "news.php" || substr($activePage, 0, 3) == "blog") {
                  echo '<li class="nav-item active">';
                } else {
                  echo '<li class="nav-item">';
                }
              ?>
              <a class="nav-link" href="./news.php">News</a>
            </li>
            <?php 
                if($activePage == "drivers.php") {
                  echo '<li class="nav-item active">';
                } else {
                  echo '<li class="nav-item">';
                }
              ?>
              <a class="nav-link" href="./drivers.php">Members</a>
            </li>
            <?php 
                if($activePage == "gallery.php") {
                  echo '<li class="nav-item active">';
                } else {
                  echo '<li class="nav-item">';
                }
              ?>
              <a class="nav-link" href="./gallery.php">Gallery</a>
            </li>
            <?php 
                if($activePage == "partners.php") {
                  echo '<li class="nav-item active">';
                } else {
                  echo '<li class="nav-item">';
                }
              ?>
              <a class="nav-link" href="./partners.php">Partners</a>
            </li>
            <?php 
                if($activePage == "analytics.php") {
                  echo '<li class="dropdown nav-item active">';
                } else {
                  echo '<li class="dropdown nav-item">';
                }
              ?>
              <a class="nav-link" href="./analytics.php">Analytics</a>
            </li>
            <?php 
                if($activePage == "contact.php" || $activePage == "apply.php" || $activePage == "sponsor.php") {
                  echo '<li class="dropdown nav-item active">';
                } else {
                  echo '<li class="dropdown nav-item">';
                }
              ?>
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