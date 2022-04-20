<?php
  require __DIR__ . '/config.php';
  require __DIR__ . '/includes/header-init.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no, user-scalable=no, viewport-fit=cover">
  <title><?php echo $page['title'] ?></title>

  <?php 
    // styles
    foreach ( $page['styles'] as $style_name ) {
      echo '<link rel="stylesheet" href="./assets/css/' . $style_name . '">';
    }

    // scripts
    foreach ( $page['scripts'] as $script_name ) {
      echo '<script defer src="./assets/js/' . $script_name . '"></script>';
    }    
  ?>
</head>
<body>
  <svg xmlns="http://www.w3.org/2000/svg" class="noise body-noise">
    <filter id="noise" x="0" y="0">
      <feTurbulence type="fractalNoise" baseFrequency=".45" numOctaves="3" stitchTiles="stitch"/>
      <feBlend mode="screen"/>
    </filter>
    <rect filter="url(#noise)" class="noise__rect"/>
  </svg>

  <header class="hdr">
    <svg xmlns="http://www.w3.org/2000/svg" class="noise hdr__noise">
      <rect filter="url(#noise)" class="noise__rect"/>
    </svg>
    <div class="container">
      <div class="hdr__inner">
        <a href="/" class="hdr__logo">
          <img src="./assets/img/logo.svg" alt="Лого" class="hdr__logo-img">
        </a>

        <button class="burger" aria-label="open menu"></button>

        <div class="hdr__menu">          
          <svg xmlns="http://www.w3.org/2000/svg" class="noise hdr__menu-noise">
            <rect filter="url(#noise)" class="noise__rect"/>
          </svg>
          <nav class="nav">
            <ul class="nav__list">
              <li class="nav__item"><a href="#services" class="nav__link">Services</a></li>
              <li class="nav__item"><a href="#works" class="nav__link">Works</a></li>
              <li class="nav__item"><a href="about" class="nav__link">About</a></li>
              <li class="nav__item"><a href="#contacts" class="nav__link">Contacts</a></li>
            </ul>
          </nav>

          <div class="hdr__contacts">
            <a class="hdr__contacts-link" href="mailto:<?php echo CONTACTS['email'] ?>"><?php echo CONTACTS['email'] ?></a>
            <a class="hdr__contacts-link" href="tel:<?php echo CONTACTS['tel'] ?>"><?php echo CONTACTS['tel'] ?></a>
          </div>
        </div>
      </div>
    </div>
  </header>

  <main class="main" role="main">