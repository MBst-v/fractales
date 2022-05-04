<?php require 'header.php' ?>

<section class="works">
  <div class="container">
    <h1 class="works__title title-lg" animation="appear-left">Works</h1>

    <ul class="works__list">
      <?php 
        $i = 0;
        foreach ( $cases as $name => $case ) {
          echo get_case_card( $case['card_info'], $i );
          $i++;
        }
      ?>
    </ul>
  </div>
</section>

<?php require 'footer.php' ?>