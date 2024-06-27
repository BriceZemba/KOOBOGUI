<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Météo</title>
  <link rel="stylesheet" href="css/styleMeteo.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="images/fevicon.png" type="image/gif" />
  <link rel="stylesheet" href="css/responsive.css">
  <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
  <link rel="shortcut icon" href="images/logo.png" type="image/svg+xml">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="js/script.js" defer></script>
  <style>
    .yes {
      color: green;
      animation: blink 1s step-start infinite;
    }
    .no {
      color: red;
      animation: blink 1s step-start infinite;
    }
    @keyframes blink {
      50% {
        opacity: 0;
      }
    }
    .logo {
      width: 27%;
      float: left;
    }
    @keyframes scroll {
      0% { transform: translateX(-100%); }
      100% { transform: translateX(100%); }
    }
    @keyframes colorChange {
      0% { color: #06c091; }
      33% { color: #ff0000; }
      66% { color: #0000ff; }
      100% { color: #06c091; }
    }
    .color-changing {
      animation: colorChange 5s infinite;
    }
  </style>
</head>
<body>
  <div class="header_section" style="background: url('images/bgmeteo.jpg') no-repeat center center/cover;">
    <div class="container">
      <nav class="navbar">
        <div class="logo">
          <img src="images/logo.png" alt="Logo" style="vertical-align: middle;">
          <a href="index.php">
            <span style="font-size: 24px; margin-left: 10px; color: #05a57b; text-decoration: none;">KOOBO</span>
          </a>
        </div>
        <ul class="navbar-nav" style="margin-left: 50px; margin-right:50px;padding-left: 100px;">
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
      </nav>
    </div>
  </div>
  <h1 class="scrolling-text color-changing" style="text-align:center;padding-top:15px;">Météo</h1>
  <div class="container">
    <div class="weather-input">
      <h3>Enter le nom d'une ville</h3>
      <input class="city-input" type="text" placeholder="E.x., Ouagadougou, Paris, New York">
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
        <h2 style="text-align: center;">Prévision sur la météo pour 5 jours</h2>
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
    </div>
  </div>
</body>
</html>
