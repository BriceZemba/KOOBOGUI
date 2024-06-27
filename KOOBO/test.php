<!DOCTYPE html>
<html lang="en">
   <head>
   <link rel="shortcut icon" href="images/logo.png" type="image/svg+xml">
      <!-- basic -->
      <meta charset="utf-8">
  <title>Weather App Project JavaScript | CodingNepal</title>
  <link rel="stylesheet" href="css/styleMeteo.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="images/fevicon.png" type="image/gif" />
  <link rel="stylesheet" href="css/responsive.css">
  <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
  <link rel="shortcut icon" href="images/logo.png" type="image/svg+xml">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="js/script.js" defer></script>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>About</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="Wendemi Brice Roméo ZEMBA , Alban Nyantudré">
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- fonts -->
      <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
      <!-- owl stylesheets -->
      <link href="https://fonts.googleapis.com/css?family=Great+Vibes|Poppins:400,700&display=swap&subset=latin-ext" rel="stylesheet">
      <link rel="stylesheet" href="css/owl.carousel.min.css">
      <link rel="stylesoeet" href="css/owl.theme.default.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
   </head>
   <body>
      <!-- header section start -->
      <div class="header_section">
         <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
               <div class="logo">
                  <img src="images/logo.png" alt="Logo" style="vertical-align: middle;">
                  <a href="index.php">
                      <span style="font-size: 24px; margin-left: 10px; color: white;">KOOBO</span>
                  </a>
              </div>
              
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav ml-auto">
                     <li class="nav-item active">
                        <a class="nav-link" href="index.php">Accueil</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="about.php">About</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="service.php">Service</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="abonnement.php">Abonnement</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="Blog.php">Blog</a>
                     </li>
                     <li class="nav-item">
                     <a class="nav-link" href="meteo.php">Météo</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                     </li>
                  </ul>
               </div>
            </nav>
         </div>
      </div>
      <!-- header section end -->
      <!-- about sectuion start -->
      <h1>Weather Dashboard</h1>
<div class="container">
  <div class="weather-input">
    <h3>Enter le nom d'une ville</h3>
    <input class="city-input" type="text" placeholder="E.g., Ouagadougou, Bobo Dioulasso, Kaya">
    <button class="search-btn" onclick="">Rechercher</button>
    <div class="separator"></div>
    <button class="location-btn">Utiliser votre position actuelle</button>
  </div>
  <div class="weather-data">
    <div class="current-weather">
      <div class="details">
        <h2>_______ ( ______ )</h2>
        <h6>Temperature: <span id="temperature"></span> °C</h6>
        <h6>Vent: __ M/S</h6>
        <h6>Humidité: <span id="humidity"></span>%</h6>
      </div>
    </div>
    <div class="days-forecast">
      <h2>5-Day Forecast</h2>
      <ul class="weather-cards">
        <li class="card">
          <h3>( ______ )</h3>
          <h6>Temp: __C</h6>
          <h6>Vent: __ M/S</h6>
          <h6>Humidité: __%</h6>
        </li>
        <li class="card">
          <h3>( ______ )</h3>
          <h6>Temp: __C</h6>
          <h6>Vent: __ M/S</h6>
          <h6>Humidité: __%</h6>
        </li>
        <li class="card">
          <h3>( ______ )</h3>
          <h6>Temp: __C</h6>
          <h6>Vent: __ M/S</h6>
          <h6>Humidité: __%</h6>
        </li>
        <li class="card">
          <h3>( ______ )</h3>
          <h6>Temp: __C</h6>
          <h6>Vent: __ M/S</h6>
          <h6>Humidité: __%</h6>
        </li>
        <li class="card">
          <h3>( ______ )</h3>
          <h6>Temp: __C</h6>
          <h6>Vent: __ M/S</h6>
          <h6>Humidité: __%</h6>
        </li>
      </ul>
    </div><br><br>
    <script src="js/weather_dashboard.js"></script>
    <h2 style="padding-left: 25%;">Devrez vous arroser vos plantes ?</h2>
<div class="container">
    <canvas id="weatherChart" width="400" height="200"></canvas>
    <h2 id="decision" class="mt-4"></h2>
</div>
      <!-- about sectuion end -->
      <!-- footer section start -->
      <div class="footer_section layout_padding">
         <div class="container">
            <div class="footer_section_2">
               <div class="row">
                  <div class="col-lg-3 col-sm-6">
                     <h2 class="useful_text">Nous contacter</h2>
                     <div class="location_text"><i class="fa fa-map-marker" aria-hidden="true"></i><span class="padding_left_15">Location</span></a></div>
                     <div class="location_text"><i class="fa fa-phone" aria-hidden="true"></i><span class="padding_left_15">(+212) 6-54-02-10-96</span></a></div>
                     <div class="location_text"><i class="fa fa-envelope" aria-hidden="true"></i><span class="padding_left_15">bricezemba336@gmail.com</span></a></div>
                     <!--<div class="social_icon">
                        <ul>
                           <li><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                           <li><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                           <li><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                           <li><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        </ul>
                     </div>-->
                  </div>
                  <div class="col-lg-3 col-sm-6">
                     <h2 class="useful_text">Lien utile</h2>
                     <div class="footer_menu">
                        <ul>
                           <li class="active"><a href="index.php">Accueil</a></li>
                           <li><a href="about.php">About</a></li>
                           <li><a href="service.php">Service</a></li>
                           <li><a href="contact.php">Nous contacter</a></li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                  <h2 class="useful_text">Slogan</h2>
                  <p class="lorem_text">Avec KOOBO , l'agriculture du future est à porter de main
                  </p>
               </div>
                  <div class="col-lg-3 col-sm-6">
                     <h2 class="useful_text">Newsletter</h2>
                     <div class="form-group">
                        <textarea class="update_mail" placeholder="Enter Your Email" rows="5" id="comment" name="email"></textarea>
                        <div class="subscribe_bt">Souscrire</a></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- footer section end -->
      <!-- copyright section start -->
      <div class="copyright_section">
      <div class="container">
         <div class="row">
            <div class="col-sm-12">
               <p class="copyright_text">2024 Tous droits réservé. Designer par Wendemi Brice Roméo ZEMBA et Alban Nyantudré</p>
            </div>
         </div>
      </div>
   </div>
      <!-- copyright section end -->
      <!-- Javascript files-->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <script>
      function toggleReadMore() {
         var moreText = document.getElementsByClassName("about_text_long")[0];
         var btnText = document.getElementsByClassName("read_bt_1")[0].getElementsByTagName("a")[0];
      
         if (moreText.style.display === "none") {
            moreText.style.display = "block";
            btnText.innerHTML = "Lire moins";
         } else {
            moreText.style.display = "none";
            btnText.innerHTML = "Read More";
         }
      }
   </script>
   </body>
</html>