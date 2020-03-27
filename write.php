<?php session_start();
?>
<!DOCTYPE html>
<html lang ="en">
  <head>
    <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-TBKGS5L');</script>
<!-- End Google Tag Manager -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="img/favicon.png" type="image/png">
    <title>News | Proximity Racing</title>
    <meta name="description" content="Proximity Racing is a sanctioned iRacing.com motorsport team">
    <meta name="robots" content="index, follow" />
    <meta name="keywords" content="proximity racing, proximity, proximityracing, iracing, chris nosowsky">
    <link rel="stylesheet" href = "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
    <link rel="stylesheet" href="style.css" />
    <link rel="canonical" href="https://proximityracing.com/news.php" />
        <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-155164803-1"></script>
        <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-155164803-1');
    </script>
  </head>
  <body>
    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TBKGS5L"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
        <div class="pagewide sticky-top">                  
      <?php if(isset($_SESSION['success'])): ?>
        <a class ="fo sign" href="logout.php?destroy">Logout</a>
        <a class ="fo prof" href="editprofile.php">My Profile</a>
        <?php else: ?>
        <a class="fo sign" href="login.php">Login</a>
        <a class="fo prof" href="register.php">Sign Up</a>
        <?php endif; ?></div>
   <!-- Navigation -->
    <nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top">
      <div class="container-fluid">
        <a class="navbar-brand" href="./"><img src="img/prlogo1.png"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse"
        data-target="#navbarResponsive">
          <span class="navbar-toggler-icon"> </span>
        </button>
        <div class ="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="./">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./about.php">About</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="./news.php">News</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./drivers.php">Members</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./gallery.php">Gallery</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./partners.php">Partners</a>
            </li>
            <li class="dropdown nav-item">
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

    <div class="contianer-fluid padding">
      <div class="row padding">
        <div class="col-md-12 text-center">
          <br>
          <h1 class="display-5">Write a Blog</h1>
        </div>
      </div>
      <div class="col-md-12">
      <form class = "formstyle" method="post">
        <div class="form-group">
          <label for="exampleFormControlInput1">Blog Title</label>
          <input type="text" class="form-control" id="exampleFormControlInput1">
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Labels</label>
          <select class="form-control" id="exampleFormControlSelect1">
            <option>iSCAR League</option>
            <option>NASCAR Ignite Series</option>
            <option>Endurance Racing</option>
            <option>NASCAR iRacing Series</option>
            <option>Norseforce League</option>
          </select>
        </div>
        <div class="form-group">
          <textarea name="editor1"></textarea>
        </div>
        <div>
          <button class="btn-sm btn-dark"><a class ="text-light" href="./preview.php">Preview</a></button>
        </div>
        <br><br>
        <div>
        <button type = "submit" class="btn btn-primary"><a class ="text-light" href="./news.php">Publish</button>
        <button type = "submit" class="btn btn-secondary">Save</button>
        </div>
      </form>
    </div>
    </div>
  </body>
  </html>




<script>
  CKEDITOR.replace( 'editor1' );
</script>

<script>
/*
 * jQuery autoResize (textarea auto-resizer)
 * @copyright James Padolsey http://james.padolsey.com
 * @version 1.04
 */

(function($){
    
    $.fn.autoResize = function(options) {
        
        // Just some abstracted details,
        // to make plugin users happy:
        var settings = $.extend({
            onResize : function(){},
            animate : true,
            animateDuration : 150,
            animateCallback : function(){},
            extraSpace : 20,
            limit: 1000
        }, options);
        
        // Only textarea's auto-resize:
        this.filter('textarea').each(function(){
            
                // Get rid of scrollbars and disable WebKit resizing:
            var textarea = $(this).css({resize:'none','overflow-y':'hidden'}),
            
                // Cache original height, for use later:
                origHeight = textarea.height(),
                
                // Need clone of textarea, hidden off screen:
                clone = (function(){
                    
                    // Properties which may effect space taken up by chracters:
                    var props = ['height','width','lineHeight','textDecoration','letterSpacing'],
                        propOb = {};
                        
                    // Create object of styles to apply:
                    $.each(props, function(i, prop){
                        propOb[prop] = textarea.css(prop);
                    });
                    
                    // Clone the actual textarea removing unique properties
                    // and insert before original textarea:
                    return textarea.clone().removeAttr('id').removeAttr('name').css({
                        position: 'absolute',
                        top: 0,
                        left: -9999
                    }).css(propOb).attr('tabIndex','-1').insertBefore(textarea);
          
                })(),
                lastScrollTop = null,
                updateSize = function() {
          
                    // Prepare the clone:
                    clone.height(0).val($(this).val()).scrollTop(10000);
          
                    // Find the height of text:
                    var scrollTop = Math.max(clone.scrollTop(), origHeight) + settings.extraSpace,
                        toChange = $(this).add(clone);
            
                    // Don't do anything if scrollTip hasen't changed:
                    if (lastScrollTop === scrollTop) { return; }
                    lastScrollTop = scrollTop;
          
                    // Check for limit:
                    if ( scrollTop >= settings.limit ) {
                        $(this).css('overflow-y','');
                        return;
                    }
                    // Fire off callback:
                    settings.onResize.call(this);
          
                    // Either animate or directly apply height:
                    settings.animate && textarea.css('display') === 'block' ?
                        toChange.stop().animate({height:scrollTop}, settings.animateDuration, settings.animateCallback)
                        : toChange.height(scrollTop);
                };
            
            // Bind namespaced handlers to appropriate events:
            textarea
                .unbind('.dynSiz')
                .bind('keyup.dynSiz', updateSize)
                .bind('keydown.dynSiz', updateSize)
                .bind('change.dynSiz', updateSize);
            
        });
        
        // Chain:
        return this;
        
    };
    
    
    
})(jQuery);

$('textarea').autoResize();
</script>


