<?php
$aat_heading = get_field('aat_heading');
?>

<section class="m-rows">
  <div class="m-wrapper">
    <div class="m-narrowWrapper">
      <h2 class="m-rows__heading"><?php echo $aat_heading; ?></h2>
    </div>
    <div class="m-rows__container">
      <?php
      if (have_rows('aat_repeater')) :
        while (have_rows('aat_repeater')) : the_row();

          $aat_image = get_sub_field('aat_image');
          $aat_text = get_sub_field('aat_text');
          $aat_link = get_sub_field('aat_link');
      ?>
          <div class="m-rows__row">
            <div class="m-rows__columnImg" data-aos="flip-down" data-aos-duration="600">
              <img src="<?php echo $aat_image; ?>" alt="">
            </div>
            <div class="m-rows__columnText">
              <div class="m-rows__text m-content"><?php echo $aat_text; ?></div>
              <a href="<?php echo $aat_link; ?>" class="m-rows__button a-ctaFindOut" data-aos="fade-right" data-aos-duration="500">Find Out More</a>
            </div>
          </div>
      <?php
        endwhile;
      else :
      endif;
      ?>

    </div>
  </div>
</section>