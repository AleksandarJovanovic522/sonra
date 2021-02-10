<?php
$expect_heading = get_field('expect_heading');
$expect_text = get_field('expect_text');


?>


<section class="m-data">
  <div class="m-wrapper">
    <div class="m-narrowWrapper">
      <h2 class="m-data__heading">
        <?php echo $expect_heading; ?>
      </h2>
      <div class="m-data__text  m-content -headingList -data"><?php echo $expect_text; ?></div>

      <a href="<?php echo get_site_url() . '/contact-sonra'; ?>" class="m-data__button a-ctaPrimary">Contact Us</a>
    </div>
  </div>
</section>