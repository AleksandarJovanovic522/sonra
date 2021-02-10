<?php
$try_intro_clients_info = get_field('try_intro_clients_info');
$try_intro_clients = get_field('try_intro_clients');
$try_intro_heading = get_field('try_intro_heading');
$try_intro_text = get_field('try_intro_text');
?>
<div class="m-clients -intro -try">
  <div class="m-wrapper">
    <div class="m-clients__container">
      <span class="m-clients__info"><?php echo $try_intro_clients_info; ?></span>

      <?php foreach ($try_intro_clients as $image) : ?>
        <div>
          <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        </div>
      <?php endforeach; ?>

    </div>
  </div>
</div>

<section class="m-intro -try">
  <div class="m-wrapper">
    <div class="m-narrowWrapper">
      <h2><?php echo $try_intro_heading; ?></h2>
      <div class="m-intro__text m-content"><?php echo $try_intro_text; ?></div>
    </div>
  </div>
</section>