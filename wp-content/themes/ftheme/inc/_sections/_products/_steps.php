<?php
$flexter_steps_heading = get_field('flexter_steps_heading');
$flexter_steps_subheading = get_field('flexter_steps_subheading');
$flexter_steps_text = get_field('flexter_steps_text');
?>
<section class="m-steps">
  <div class="m-wrapper">
    <div class="m-narrowWrapper">
      <h2><?php echo $flexter_steps_heading; ?></h2>
      <h5 class="m-steps__subheading"><?php echo $flexter_steps_subheading; ?></h5>
    </div>

    <div class="m-steps__stepContainer">
      <?php
      if (have_rows('flexter_steps_repeater')) :
        while (have_rows('flexter_steps_repeater')) : the_row();

          $step_image = get_sub_field('flexter_steps_step_image');
          $step_text = get_sub_field('flexter_steps_step_content');
      ?>
          <div class="m-steps__step">
            <div class="m-steps__stepImg">
              <img src="<?php echo $step_image; ?>" alt="">
            </div>
            <div class="m-steps__stepText">
              <?php echo $step_text; ?>
            </div>
          </div>
      <?php
        endwhile;
      else :
      endif;
      ?>

    </div>
    <div class="m-narrowWrapper">
      <div class="m-steps__text m-content"><?php echo $flexter_steps_text; ?></div>
    </div>
  </div>
</section>