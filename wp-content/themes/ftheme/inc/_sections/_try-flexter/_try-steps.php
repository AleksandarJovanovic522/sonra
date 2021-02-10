<?php
$try_steps_heading = get_field('try_steps_heading');
$try_steps_top_text = get_field('try_steps_top_text');
$try_steps_bottom_text = get_field('try_steps_bottom_text');
?>
<section class="m-steps -try">
  <div class="m-wrapper">
    <div class="m-narrowWrapper">
      <h2><?php echo $try_steps_heading; ?></h2>
      <div class="m-steps__topText"><?php echo $try_steps_top_text; ?></div>
    </div>

    <div class="m-steps__stepContainer">
      <?php
      if (have_rows('try_steps_repeater')) :
        while (have_rows('try_steps_repeater')) : the_row();

          $try_step_image = get_sub_field('try_steps_step_image');
          $try_step_text = get_sub_field('try_steps_step_content');
      ?>
          <div class="m-steps__step">
            <div class="m-steps__stepImg">
              <img src="<?php echo $try_step_image; ?>" alt="">
            </div>
            <div class="m-steps__stepText">
              <?php echo $try_step_text; ?>
            </div>
          </div>
      <?php
        endwhile;
      else :
      endif;
      ?>

    </div>
    <div class="m-narrowWrapper">
      <div class="m-steps__text m-content"><?php echo $try_steps_bottom_text; ?></div>
    </div>
  </div>
</section>