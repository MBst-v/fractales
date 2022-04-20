<?php require './header.php' ?>

<section class="hero">
  <div class="container">
    <div class="hero__inner">
      <h1 class="hero__title">We focus on creating<br>a quality digital product for your business</h1>
      <div class="hero__bottom">        
        <p class="hero__text text-ls">Let's create effective website or unique brand identity with attention to detail together</p>
        <a href="#" class="hero__link btn text-ls frame-hover">
          Start project <span class="small-arrow"></span>
          <span class="frame-hover__top"></span>
          <span class="frame-hover__bottom"></span>
        </a>
      </div>
    </div>
  </div>
</section>

<?php

require __ROOT__ . '/templates/index-services.php';
require __ROOT__ . '/templates/index-cases.php';
require __ROOT__ . '/templates/index-technology.php';
require __ROOT__ . '/templates/index-about.php';

?>

<?php require __ROOT__ . '/footer.php' ?>
