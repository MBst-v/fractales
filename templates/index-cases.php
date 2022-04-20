<?php require __ROOT__ . '/config/cases.php'; ?>

<section id="works" class="cases sect">
  <div class="container">    
    <h2 class="sect__title">Works</h2>

    <ul class="works__list">
      <?php foreach ( $cases as $case ) : ?>
        <li class="case-preview">
          <a href="<?php echo $case['link'] ?>" class="case-preview__link frame-hover frame-hover--big">
            <span class="frame-hover__top"></span>
            <span class="frame-hover__bottom"></span>
            <picture class="case-preview__pic">                
              <source media="(min-width: 1279.98px)" srcset="<?php echo $case['imgs_folder'] ?>/preview-lg.webp" type="image/webp">              
              <source media="(min-width: 1279.98px)" srcset="<?php echo $case['imgs_folder'] ?>/preview-lg.jpg" type="image/jpeg">

              <source media="(min-width: 1023.98px)" srcset="<?php echo $case['imgs_folder'] ?>/preview-md.webp" type="image/webp">              
              <source media="(min-width: 1023.98px)" srcset="<?php echo $case['imgs_folder'] ?>/preview-md.jpg" type="image/jpeg">

              <source media="(min-width: 767.98px)" srcset="<?php echo $case['imgs_folder'] ?>/preview-sm.webp" type="image/webp">              
              <source media="(min-width: 767.98px)" srcset="<?php echo $case['imgs_folder'] ?>/preview-sm.jpg" type="image/jpeg">

              <source media="(max-width: 767.98px)" srcset="<?php echo $case['imgs_folder'] ?>/preview-xs.webp" type="image/webp">
              <img src="<?php echo $case['imgs_folder'] ?>/preview-xs.jpg" alt="<?php echo $case['img_alt'] ?>" class="case-preview__img">
            </picture>

            <div class="case-preview__descr text-ls">
              <div class="case-preview__type"><?php echo $case['type'] ?></div>
              <h3 class="case-preview__title"><?php echo $case['title'] ?></h3>
              <p class="case-preview__text"><?php echo $case['descr'] ?></p>

              <div class="case-preview__view-case">View case <span class="small-arrow"></span></div>
            </div>
          </a>
        </li>
      <?php endforeach ?>
    </ul>

    <button class="cases__show-more">Show more</button>
  </div>
</section>