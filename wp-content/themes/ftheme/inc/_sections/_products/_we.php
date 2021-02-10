<?php
$we_heading = get_field('we_heading');
$we_subheading = get_field('we_subheading');
$we_first_quote = get_field('we_first_quote');
$we_first_text = get_field('we_first_text');
$we_second_quote = get_field('we_second_quote');
$we_second_quote_author = get_field('we_second_quote_author');
$we_second_text = get_field('we_second_text');
?>
<section class="m-we">
  <div class="m-we__firstPart">
    <div class="m-wrapper">
      <div class="m-narrowWrapper">
        <h2 class="m-we__heading"><?php echo $we_heading; ?></h2>
        <h5 class="m-we__subheading"><?php echo $we_subheading; ?></h5>
        <div class="m-quote -we">
          <div class="m-quote__text">
            <?php echo $we_first_quote; ?>
          </div>
        </div>
        <div class="m-we__text m-content"><?php echo $we_first_text ?></div>
      </div>
    </div>
  </div>
  <div class="m-we__secondPart">
    <div class="m-wrapper">
      <div class="m-narrowWrapper">
        <div class="m-quote">
          <div class="m-quote__text">
            <?php echo $we_second_quote; ?>
            <span class="m-quote__author"><?php echo $we_second_quote_author; ?></span>
          </div>
        </div>
        <div class="m-we__text m-content -headingList"><?php echo $we_second_text; ?></div>
      </div>
    </div>
  </div>
</section>