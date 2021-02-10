<?php
$services_clients = get_field('services_clients');
$services_clients_text = get_field('services_clients_text');
?>
<div class="m-clients -intro -services">
  <span class="m-clients__text"> <?php echo $services_clients_text; ?> </span>
  <div class="m-clients__container">
    <?php foreach ($services_clients as $image) : ?>
      <div>
        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
      </div>
    <?php endforeach; ?>

  </div>
</div>