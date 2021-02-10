<?php
$intro_clients = get_field('intro_clients');
$intro_heading = get_field('intro_heading');
$intro_text = get_field('intro_text');
?>
<div class="m-clients -intro">
  <div class="m-clients__container">

    <?php foreach ($intro_clients as $image) : ?>
      <div>
        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
      </div>
    <?php endforeach; ?>

  </div>
</div>

<section class="m-intro">
  <div class="m-wrapper">
    <div class="m-narrowWrapper">
      <h2><?php echo $intro_heading; ?></h2>
      <div class="m-intro__text m-content"><?php echo $intro_text; ?></div>
    </div>
  </div>
</section>