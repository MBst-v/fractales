<?php require 'functions.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no, user-scalable=no, viewport-fit=cover">
  <title><?php echo $page['title'] ?></title>

<?php 
  // styles
    foreach ( $pages['global']['styles'] as $style_name => $ver ) {
      echo get_style_link($style_name);
    }

    foreach ( $page['styles'] as $style_name => $ver ) {
      echo get_style_link($style_name);
    }

  // scripts
  foreach ( $pages['global']['scripts'] as $script_name => $ver ) {
    echo get_script_link($script_name, $ver);
  }  

  foreach ( $page['scripts'] as $script_name => $ver ) {
    echo get_script_link($script_name, $ver);
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

  <header class="hdr" animation="appear-top">
    <svg xmlns="http://www.w3.org/2000/svg" class="noise hdr__noise">
      <rect filter="url(#noise)" class="noise__rect"/>
    </svg>

    <div class="container">
      <div class="hdr__inner">
        <a href="<?php echo get_site_url() ?>" class="hdr__logo">
          <img src="<?php echo get_site_url() ?>/assets/img/logo.svg" alt="Лого" class="hdr__logo-img">
        </a>

        <button class="burger" aria-label="open menu"></button>

        <div class="hdr__menu">          
          <svg xmlns="http://www.w3.org/2000/svg" class="noise hdr__menu-noise">
            <rect filter="url(#noise)" class="noise__rect"/>
          </svg>
          <nav class="nav">
            <ul class="nav__list">
              <li class="nav__item"><a href="<?php echo get_site_url() ?>/#services" class="nav__link">Services</a></li>
              <li class="nav__item"><a href="<?php echo get_site_url() ?>/works" class="nav__link">Works</a></li>
              <li class="nav__item"><a href="<?php echo get_site_url() ?>/about" class="nav__link">About</a></li>
              <li class="nav__item"><a href="#contacts" class="nav__link">Contacts</a></li>
            </ul>
          </nav>

          <div class="hdr__contacts">
            <a class="hdr__contacts-link" href="mailto:<?php echo $email ?>"><?php echo $email ?></a>
            <a class="hdr__contacts-link" href="tel:<?php echo $tel ?>"><?php echo $tel ?></a>
          </div>
        </div>
      </div>
    </div>
  </header>

  <main class="main" role="main">
