<article class="case">
  <header class="case-hdr">
    <?php
      echo get_picture_tag([
        'class' => 'case-hdr__pic pic',
        'name'  => $case['imgs']['header']['name'],
        'path'  => $case['imgs_folder'],
        'alt'   => 'Site preview on laptop',
      ]);
    ?>
    <div class="container">
      <h1 class="case-hdr__title"><?php echo $case['title'] ?></h1>
    </div>
  </header>

  <section class="info sect sect--columns">
    <div class="container">

      <div class="sect--columns__inner">
        <h2 class="info__title sect--columns__inner-title text-ls"><?php echo $case['tag'] ?></h2>

        <div class="sect--columns__inner-content text-ls">
          <p><?php echo $case['descr'] ?></p>

          <div class="info__lists text-ls">
            <div class="tools">
              <h3 class="tools__title">Services</h3>
              <ul class="tools__list">
                <?php foreach ( $case['services'] as $service ) : ?>
                  <li class="tools__list-item"><?php echo $service ?></li>
                <?php endforeach ?>
              </ul>
            </div>

            <div class="tools">
              <h3 class="tools__title">Technology</h3>
              <ul class="tools__list">
                <?php foreach ( $case['technology'] as $tech ) : ?>
                  <li class="tools__list-item"><?php echo $tech ?></li>
                <?php endforeach ?>
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
        <h2 class="case__sect-title sect--columns__inner-title">ABOUT PROJECT</h2>

        <div class="sect--columns__inner-content text-ls">
          <p><?php echo $case['about'] ?></p>
        </div>
      </div>
      
    </div>

    <?php
      echo get_picture_tag([
        'class' => 'pic',
        'name'  => $case['imgs']['about']['name'],
        'path'  => $case['imgs_folder'],
        'alt'   => $case['imgs']['about']['alt'],
      ]);
    ?>
  </section>

  <section class="sect sect--columns">
    <div class="container">

      <div class="sect--columns__inner">
        <h2 class="case__sect-title sect--columns__inner-title">DESIGN</h2>

        <div class="sect--columns__inner-content text-ls">
          <p class="case__text-content">
            <strong><?php echo $case['design']['strong'] ?></strong>
            <?php echo $case['design']['text'] ?>
          </p>

        </div>
      </div>
      
    </div>

    <?php
      echo get_picture_tag([
        'class' => 'pic',
        'name' => $case['imgs']['design']['name'],
        'path' => $case['imgs_folder'],
      ]);
    ?>


  </section>

  <?php foreach ( $case['sections'] as $section ) : ?>

  <section class="sect sect--columns">
    <div class="container">

      <div class="sect--columns__inner">
        <h2 class="case__sect-title sect--columns__inner-title"><?php echo $section['title'] ?></h2>

        <div class="sect--columns__inner-content text-ls">
          <p class="case__text-content">
            <strong><?php echo $section['strong'] ?></strong>
            <?php echo $section['text'] ?> 
          </p>
        </div>
      </div>
      
    </div>

    <?php
      echo get_picture_tag([
        'class' => 'pic',
        'name' => $section['img_name'],
        'path' => $case['imgs_folder'],
        'alt' => $section['img_alt'],
      ]);
    ?>

  </section>

  <?php endforeach ?>

  <?php
    $templates = $case['templates'];

    if (isset($templates) && count($templates) > 0) {
      foreach ( $templates as $template ) {
        require '../templates/' . $template;
      }
    }
  ?>

</article>

<section class="next-project sect">
  <div class="container">
    <h2 class="sect__title">Next project</h2>

    <?php
      $filtered_cases = array_filter($db['cases'], function($var) {
        global $case;
        return $var !== $case;
      });
      $random_case_name = array_rand($filtered_cases);
      echo get_case_card($db['cases'][$random_case_name], 0, true, 'div')
    ?>

  </div>
</section>