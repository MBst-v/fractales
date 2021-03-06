<?php require 'header.php' ?>

<section class="hero">
  <div class="container">
    <div class="hero__inner">
      <h1 class="hero__title" animation="appear-left">We focus on creating<br>a quality digital product for your business</h1>
      <div class="hero__bottom" animation="appear-right">        
        <p class="hero__text text-ls">Let's create effective website or unique brand identity with attention to detail together</p>
        <a href="#contacts" class="hero__link btn text-ls frame-hover">
          Start project <span class="small-arrow"></span>
          <span class="frame-hover__top"></span>
          <span class="frame-hover__bottom"></span>
        </a>
      </div>
    </div>
  </div>
</section>

<?php

require './templates/index-services.php';
require './templates/index-cases.php';
require './templates/index-technology.php';
require './templates/index-about.php';

?>

<?php require 'footer.php' ?>