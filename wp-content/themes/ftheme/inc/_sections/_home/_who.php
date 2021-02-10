<?php
$who_heading = get_field('who_heading');
$who_text_top = get_field('who_text_top');
$who_clients = get_field('who_clients');
$who_quote = get_field('who_quote');
$who_quote_author = get_field('who_quote_author');
$who_text_bottom = get_field('who_text_bottom');
?>

<section class="m-who">
  <div class="m-wrapper">

    <div class="m-narrowWrapper">

      <h2 class="m-who__heading"><?php echo $who_heading; ?></h2>
      <div class="m-who__topText m-content"><?php echo $who_text_top; ?></div>
    </div>
  </div>
  <div class="m-clients -marginTop">
    <div class="m-clients__container">


      <?php foreach ($who_clients as $image) : ?>
        <div>
          <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        </div>
      <?php endforeach; ?>


    </div>
  </div>
  <div class="m-wrapper">
    <div class="m-narrowWrapper">
      <div class="m-quote -who">
        <div class="m-quote__text">
          <p><?php echo $who_quote; ?></p>
          <span class="m-quote__author"><?php echo $who_quote_author; ?></span>
        </div>
      </div>
      <div class="m-who__bottomText m-content -headingList"><?php echo $who_text_bottom; ?></div>
    </div>
  </div>
</section>