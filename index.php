<?php

// Import Utils
require_once 'utils.php';

// Pega a url do curso
$courseDir = __DIR__ . '/courses';
// Pega os cursos
$coursesList = getFiles($courseDir);

// Ordenar os cursos pelo ano
usort($coursesList, function(Courses $c1, Courses $c2) { return $c2->getYear() <=> $c1->getYear(); } );


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Prof. Valdigleis</title>
  <!-- CSS Imports -->
  <link rel="stylesheet" href="./css/normalize.css">
  <link rel="stylesheet" href="./css/vUnivesalStyle.css">
  <link rel="stylesheet" href="./css/vMobileStyle.css">
  <!-- Fav icon -->
  <link rel="icon" type="image/ico" href="./assets/icons/favico.ico">
</head>
<body>
  <div class="container">
    <header class="header_page">
      <h3>
        <img class="logo" src="./assets/logos/home-button.png" alt="">
        <a href="#">Home</a>
      </h3>
      <div>
        <img class="logo" src="./assets/logos/menu.png" alt="">
      </div>
    </header>
    <nav id="mobMenu" class="mobile_menu">
      <div class="opt_menu">
        <img class="icon_menu" src="./assets/logos/blogger.png">
        <a href="#">Blog</a>
      </div>
      <div class="opt_menu">
        <img class="icon_menu" src="./assets/logos/dblp.png">
        <a href="#">DBLP</a>
      </div>
      <div class="opt_menu">
        <img class="icon_menu" src="./assets/logos/orcid.png">
        <a href="#">Orcid</a>
      </div>
      <div class="opt_menu">
        <img class="icon_menu" src="./assets/logos/scholar.png">
        <a href="#">Scholar</a>
      </div>
      <div class="opt_menu">
        <img class="icon_menu" src="./assets/logos/twitch.png">
        <a href="#">Twitch</a>
      </div>
      <div class="opt_menu">
        <img class="icon_menu" src="./assets/logos/twitter.png">
        <a href="#">Twitter</a>
      </div>
      <div class="opt_menu">
        <img class="icon_menu" src="./assets/logos/youtube.png">
        <a href="#">YouTube</a>
      </div>
    </nav>
  </div>
  <ul>

  <section>
    <div class="cardProfile">
      <figure>
        <img class="photoFrame" src="./assets/photos/minha-foto.png" alt="Minha foto.">
        <figcaption>Valdigleis S. Costa</figcaption>
      </figure>
    </div>
  </section>
    
    <?php
      //foreach($coursesList as $course) {
      //  echo '<li><a href="' . $course->getUrl()  . '" target="_blank">' . $course->getName() . '</a></li>';
      //}
    ?>

  </ul>
</body>
</html>