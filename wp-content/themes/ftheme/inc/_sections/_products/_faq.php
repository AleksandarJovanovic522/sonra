<?php
$faq_heading = get_field('faq_heading');
$faq_text = get_field('faq_text');
?>

<section class="m-faq">
  <div class="m-wrapper">
    <div class="m-narrowWrapper">
      <h2 class="m-faq__heading">
        <?php echo $faq_heading; ?>
      </h2>
      <div class="m-faq__text m-content">
        <?php echo $faq_text; ?>
      </div>
      <a href="#demo" class="m-faq__button a-ctaPrimary -demo js-demo-button">Book a Demo</a>
    </div>
  </div>
</section>