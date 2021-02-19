<?php
$for_heading = get_field('for_heading');
$for_text = get_field('for_text');


?>


<section class="m-data">
  <div class="m-wrapper">
    <div class="m-narrowWrapper">
      <h2 class="m-data__heading">
        <?php echo $for_heading; ?>
      </h2>
      <div class="m-data__text  m-content -headingList -twoColumnList -data"><?php echo $for_text; ?></div>

      <a href="#demo" class="m-data__button -biggerMarginTop a-ctaPrimary -demo js-demo-button">Book a Demo</a>
    </div>
  </div>
</section>