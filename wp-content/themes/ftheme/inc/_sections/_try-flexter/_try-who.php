<?php
$try_who_heading = get_field('try_who_heading');
$try_who_text = get_field('try_who_text');
$try_who_subheading = get_field('try_who_subheading');
?>

<section class="m-who -try">
  <div class="m-wrapper">
    <div class="m-narrowWrapper">
      <h2><?php echo $try_who_heading ?></h2>
      <h5 class="m-who__subheading"><?php echo $try_who_subheading ?></h5>
      <div class="m-who__text m-content -headingList"><?php echo $try_who_text; ?></div>
    </div>
  </div>
</section>