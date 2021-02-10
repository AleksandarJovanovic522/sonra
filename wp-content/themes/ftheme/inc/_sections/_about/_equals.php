<?php
$leadership_image = get_field('leadership_image');
$leadership_heading = get_field('leadership_heading');
$leadership_text = get_field('leadership_text');

?>



<section class="m-equals">
  <div class="m-wrapper">
    <?php

    if (have_rows('equals_repeater')) :

      while (have_rows('equals_repeater')) : the_row();

        $equals_image = get_sub_field('equals_image');
        $equals_heading = get_sub_field('equals_heading');
        $equals_text = get_sub_field('equals_text');

    ?>

        <div class="m-equals__block" data-aos="zoom-in-up" data-aos-duration="500">
          <div class="m-equals__imgDiv">
            <img src="<?php echo $equals_image; ?>" alt="">
          </div>
          <div class="m-equals__textDiv">
            <h2 class="m-equals__heading"><?php echo $equals_heading; ?></h2>
            <div class="m-equals__text"><?php echo $equals_text; ?></div>
          </div>
        </div>

    <?php
      endwhile;

    endif;
    ?>

    <div class="m-equals__block" data-aos="zoom-in-up" data-aos-duration="600">
      <div class="m-equals__imgDiv">
        <img src="<?php echo $leadership_image; ?>" alt="">
      </div>
      <div class="m-equals__textDiv">
        <h2 class="m-equals__heading"><?php echo $leadership_heading; ?></h2>
        <div class="m-equals__text"><?php echo $leadership_text; ?></div>
      </div>
    </div>
  </div>
</section>