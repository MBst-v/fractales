<?php
function get_case_card($case, $index = 0, $animation = true, $tag = 'li') {
  $animation_attr = '';
  
  if ($animation === true) {
    $animation_direction = $index % 2 ? 'appear-left' : 'appear-right';
    $animation_attr = ' animation="' . $animation_direction . '"';
  }

  $link = $case['page_link'];
  $imgs_folder = $case['imgs_folder'];
  $img_alt = $case['img_alt'];
  $type = $case['type'];
  $title = $case['title'];
  $descr = $case['descr'];

  return <<<EOL
    <$tag class="case-preview"$animation_attr>
      <a href="$link" class="case-preview__link frame-hover frame-hover--big">
        <span class="frame-hover__top"></span>
        <span class="frame-hover__bottom"></span>
        <picture class="case-preview__pic">                
          <source media="(min-width: 1279.98px)" srcset="$imgs_folder/preview-lg.webp" type="image/webp">              
          <source media="(min-width: 1279.98px)" srcset="$imgs_folder/preview-lg.jpg" type="image/jpeg">

          <source media="(min-width: 1023.98px)" srcset="$imgs_folder/preview-md.webp" type="image/webp">              
          <source media="(min-width: 1023.98px)" srcset="$imgs_folder/preview-md.jpg" type="image/jpeg">

          <source media="(min-width: 767.98px)" srcset="$imgs_folder/preview-sm.webp" type="image/webp">              
          <source media="(min-width: 767.98px)" srcset="$imgs_folder/preview-sm.jpg" type="image/jpeg">

          <source media="(max-width: 767.98px)" srcset="$imgs_folder/preview-xs.webp" type="image/webp">
          <img src="$imgs_folder/preview-xs.jpg" alt="$img_alt" class="case-preview__img">
        </picture>

        <div class="case-preview__descr text-ls">
          <div class="case-preview__type">$type</div>
          <h3 class="case-preview__title">$title</h3>
          <p class="case-preview__text">$descr</p>

          <div class="case-preview__view-case">View case <span class="small-arrow"></span></div>
        </div>
      </a>
    </$tag>
  EOL;
}
?>