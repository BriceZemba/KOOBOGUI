<?php

require 'config.php';

$message = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST['name'];
  $password = $_POST['password'];

  // Préparer et exécuter la requête SQL pour sélectionner l'utilisateur par nom
  try {
    $sql = "SELECT * FROM users WHERE name = '$name'";
    $stmt = $pdo->query($sql);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($user["name"] == $name && $user["password"] == $password) {
      header("Location: index.php");
      exit();
    } else {
      $message = "Nom d'utilisateur et/ou mot de passe incorrect";
    }
  } catch (PDOException $e) {
    echo 'Error' . $e->getMessage();
  }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="shortcut icon" href="images/la-cyber-securite.png" type="image/svg+xml">
  <title>Page de connexion</title>
  <link rel="stylesheet" type="text/css" href="css/conn.css" />
  <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>

  <style>
    .hidden {
      opacity: 0;
      transform: scale(0.8);
      /* Réduction de la taille */
      transition: opacity 0.5s ease-in-out, transform 0.5s ease-in;
      /* Transition pour l'opacité et la taille */
    }

    #welcome-message {
      position: fixed;
      top: 20px;
      left: 50%;
      transform: translateX(-50%);
      background-color: white;
      color: #20c997;
      padding: 10px 20px;
      border: 1px solid #ccc;
      border-radius: 5px;
      box-shadow: 0px 0px 10px rgba(12, 0, 0, 0.1);
      z-index: 10;
    }
  </style>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      var welcomeMessage = document.getElementById('welcome-message');
      welcomeMessage.classList.remove('hidden');

      setTimeout(function() {
        welcomeMessage.classList.add('hidden');
      }, 2000);
    });
  </script>

</head>

<body>
  <div id="welcome-message" class="hidden">
    <p>Bienvenue dans la page de connexion!</p>
  </div>
  <div class="container">
    <div class="forms-container">
      <div class="signin-signup">
        <form method="post" action="pageconn.php" class="sign-in-form">
          <h2 class="title">Se connectez</h2>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Nom d'utilisateur" name="name" required />
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Mot de passe" name="password" required />
          </div>
          <div id="password-match-message"><?php echo "<h3 style='color: red'>" . $message . "</h3>"; ?></div>
          <input type="submit" value="Se connectez" class="btn solid" onclick="afficherMessage()" />
      </div>
      </form>
    </div>
  </div>
  <div class="panels-container">

    <div class="panel left-panel">
      <div class="content">
        <h3>Si vous êtes nouveau</h3> <br>
        <button class="btn transparent"><a href="register.php" style="text-decoration: none ; color:white">S'enregistrer</a></button>
      </div>
      <img src="images/log.svg" class="image" alt="">
    </div>

    <script src="./conn.js"></script>
  </div>
</body>

</html>