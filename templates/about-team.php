<?php require __ROOT__ . '/components/member-card.php'; ?>

<section class="about-team sect">
  <div class="container">
    <h2 class="sect__title">Meet the team</h2>

    <ul class="about-team__list">
      <?php foreach ( $_team as $member ) : ?>
        <?php echo get_member_card($member, 'about-team__member', true) ?>
      <?php endforeach ?>
    </ul>
  </div>
</section>