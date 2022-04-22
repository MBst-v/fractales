<?php require './header.php' ?>

<section class="about-hero">
  <div class="container">
    <h1 class="about-hero__title" animation="appear-left">fractales dev</h1>
    <p class="about-hero__descr text-ls" animation="appear-right">Focusing on individual details, we create a high-quality holistic product</p>
    <picture class="about-hero__pic" animation="appear-right">
      <source media="(min-width: 767.98px)" srcset="./assets/img/about-page/hero-lg.webp" type="image/webp">
      <source media="(min-width: 767.98px)" srcset="./assets/img/about-page/hero-lg.jpg" type="image/jpeg">

      <source media="(max-width: 767.98px)" srcset="./assets/img/about-page/hero-xs.webp" type="image/webp">
      <img src="./assets/img/about-page/hero-xs.jpg" alt="#" class="about-hero__img">
    </picture>
  </div>
</section>

<?php

require __ROOT__ . '/templates/about-us.php';
require __ROOT__ . '/templates/about-values.php';
require __ROOT__ . '/templates/about-team.php';

?>

<?php require __ROOT__ . '/footer.php' ?>