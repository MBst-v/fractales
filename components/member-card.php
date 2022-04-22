<?php
function get_member_card($member, $class = '', $animation = false, $tag = 'li') {
  $photo = $member['photo'];
  $name = $member['name'];
  $position = $member['position'];
  $class = $class !== '' ? ' ' . $class : ''; 
  $animation_attr = $animation === true 
    ? ' animation="appear-bottom"'
    : '';

  return <<<EOL
    <$tag class="member$class"$animation_attr>
      <picture class="member__pic">
        <source srcset="$photo.webp" type="image/webp">
        <img src="$photo.jpg" alt="$name photo" class="member__img">
      </picture>

      <h4 class="member__name">$name</h4>
      <p class="member__position">$position</p>
    </$tag>
  EOL;
}
?>