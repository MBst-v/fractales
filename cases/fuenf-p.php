<?php 
require '../header.php';
$imgs_path = $site_url . '/assets/img/cases/fuenf/';
?>

<article class="case">
  <header class="case-hdr">

    <?php
      echo get_picture_tag([
        'class' => 'case-hdr__pic pic',
        'name'  => 'hdr',
        'path'  => $imgs_path,
        'alt'   => 'Site preview on laptop',
      ]);
    ?>

    <div class="container">
      <h1 class="case-hdr__title">FUENF X THE BRVTALIST collaboration catalog</h1>
    </div>
  </header>

  <section class="info sect sect--columns">
    <div class="container">

      <div class="sect--columns__inner">
        <h2 class="info__title sect--columns__inner-title text-ls">Online shopping</h2>

        <div class="sect--columns__inner-content text-ls">
          <p>
            With the help of a landing page, a new FUENF collection was presented. We focused on products and conveyed the atmosphere of the brand. We thought over a product card and a convenient purchase process, and also implemented the possibility of buying in two ways - using PayPal or a credit card.            
          </p>

          <div class="info__lists text-ls">
            <div class="tools">
              <h3 class="tools__title">Services</h3>
              <ul class="tools__list">
                <li class="tools__list-item">Websites development</li>
                <li class="tools__list-item">UX/UI design</li>
              </ul>
            </div>

            <div class="tools">
              <h3 class="tools__title">Technology</h3>
              <ul class="tools__list">
                <li class="tools__list-item">CSS 3</li>
                <li class="tools__list-item">HTML 5</li>
                <li class="tools__list-item">WordPress</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      
    </div>
  </section>

  <section class="about sect sect--columns">
    <div class="container">

      <div class="sect--columns__inner">
        <h2 class="sect--columns__inner-title">ABOUT PROJECT</h2>

        <div class="sect--columns__inner-content text-ls">
          <p>
            FUENF is a young and dynamic berlin-based brand, founded in 2017, that oscillates between streetstyle and nonchalant elegance, bringing digital culture and fashion together.
            <br>
            Fuenf and The Brvtalist collaboration introduces new classics – designed with attention to detail and sustainably produced.           
          </p>
        </div>
      </div>
      
    </div>

    <?php
      echo get_picture_tag([
        'class' => 'about__pic',
        'name'  => 'about-pic',
        'path'  => $imgs_path,
        'alt'   => 'Site preview on mobile'
      ]);
    ?>
  </section>

  <section class="sect sect--columns">
    <div class="container">

      <div class="sect--columns__inner">
        <h2 class="sect--columns__inner-title">DESIGN</h2>

        <div class="sect--columns__inner-content text-ls">
          <p>
            <strong>Emphasized the uniqueness of the brand</strong>
            The singularity and modernity of education are concentrated with the help of animation, non-standard grid and graphic elements. Running lines with the brand name complement the overall style and contribute to the formation of the brand image. Large photos allow you to see the clothes in the smallest detail.
            <br>
            Thanks to the minimalistic design, we focus the user's attention on the photos of the new collection          
          </p>

        </div>
      </div>
      
    </div>

    <?php
      echo get_picture_tag([
        'name' => 'design',
        'path' => $imgs_path,
      ]);
    ?>


  </section>

  <section class="sect sect--columns">
    <div class="container">

      <div class="sect--columns__inner">
        <h2 class="sect--columns__inner-title">PRODUCT CARD</h2>

        <div class="sect--columns__inner-content text-ls">
          <p>
            <strong>Detailed product description and size guide</strong>
            The singularity and modernity of education are concentrated with the help of animation, non-standard grid and graphic elements. Running lines with the brand name complement the overall style and contribute to the formation of the brand image. Large photos allow you to see the clothes in the smallest detail.       
          </p>

        </div>
      </div>
      
    </div>

    <?php
      echo get_picture_tag([
        'name' => 'product-card',
        'path' => $imgs_path,
      ]);
    ?>

  </section>

  <section class="sect sect--columns">
    <div class="container">

      <div class="sect--columns__inner">
        <h2 class="sect--columns__inner-title">PURCHASE</h2>

        <div class="sect--columns__inner-content text-ls">
          <p>
            <strong>Focus on ease of ordering</strong>
            Despite the fact that we made a landing, it works like a full-fledged online store - you can select a product, view it from all sides and order.
            <br>
            You can pay for the goods through PayPal or immediately with a bank card using the Stripe service. We connected both payment methods using the API.      
          </p>
        </div>
      </div>
      
    </div>

    <?php
      echo get_picture_tag([
        'name' => 'purchase',
        'path' => $imgs_path,
      ]);
    ?>

  </section>

</article>

<?php require '../footer.php' ?>