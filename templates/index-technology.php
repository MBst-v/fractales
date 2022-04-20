<?php
  $technologies = [
    'web' => [
      'Front end' => [
        'css', 'html', 'js', 'ts', 'sass'
      ],
      'Back end' => [
        'php', 'nodejs', 'wordpress', 'strapi'
      ],
      'Frameworks' => [
        'angular', 'react', 'laravel', 'yii'
      ]
    ],

    'highload' => [
      'Languages' => [
        'java', 'python', 'scala'
      ],
      'Tools' => [
        'kafka', 'hadoop', 'apache-spark', 'hive', 'cassandra', 'apache-hbase', 'elasticsearch', 'apache-ignite', 'solr', 'jenkins'
      ]
    ]
  ]
?>

<section class="technology sect">
  <div class="container">
    <h2 class="sect__title">Technology stack</h2>

    <div class="technology__inner">
      <div class="technology__descr">
        <p>
          We select technologies based on the tasks of the project. This allows you to take into account compatibility requirements and reduce development time.
          <br>
          <br>
          We proceed from what will provide the maximum result and functionality in the optimal time frame.
        </p>

        <div class="technology__descr-box">
          <span class="technology__descr-lg-text">30+</span>
          modern and scalable technologies
        </div>
      </div>

      <div class="technology__stacks text-ls">
        <div class="technology__tabs-btns">
          <button class="tab-btn active" data-tab="web">Web development</button>
          <button class="tab-btn" data-tab="highload">Highload & BigData</button>
        </div>

        <div class="technology__tabs-content">

          <?php foreach ( $technologies as $name => $tech ) : ?>

            <div class="tab-content<?php echo $name === 'web' ? ' active' : '' ?>" data-tabname="<?php echo $name ?>">
              <?php foreach ( $tech as $title => $list ) : ?>
                <div class="stack">
                  <h3 class="stack__title"><?php echo $title ?></h3>
                  <ul class="stack__list">

                    <?php foreach ( $list as $item ) : ?>
                      <li class="stack__item">
                        <img src="./assets/img/tech-icons/<?php echo $item ?>.svg" alt="<?php echo $item ?> icon" class="stack__item-icon">
                        <?php echo $item ?>
                      </li>
                    <?php endforeach ?>

                  </ul>
                </div>
              <?php endforeach ?>

            </div>

          <?php endforeach ?>        
        </div>
      </div>
    </div>
  </div>
</section>