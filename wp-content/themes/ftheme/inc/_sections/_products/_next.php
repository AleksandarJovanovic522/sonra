<?php
$next_heading = get_field('next_heading');
$next_subheading = get_field('next_subheading');
$next_text = get_field('next_text');
?>
<section class="m-next">
  <div class="m-wrapper">
    <div class="m-narrowWrapper">
      <h2 class="m-next__heading"><?php echo $next_heading; ?></h2>
      <h5 class="m-next__subheading"><?php echo $next_subheading; ?></h5>
      <div class="m-next__editions">
        <?php

        if (have_rows('next_editions')) :

          while (have_rows('next_editions')) : the_row();

            $edition_type = get_sub_field('edition_type');
            $edition_image = get_sub_field('edition_image');
            $edition_for_whom = get_sub_field('edition_for_whom');
            $edition_additional_info = get_sub_field('edition_additional_info');
        ?>
            <div class="m-next__edition">
              <div class="m-next__editionImg">
                <img src="<?php echo $edition_image; ?>" alt="">
              </div>
              <div class="m-next__editionText">
                <h4 class="m-next__editionType"><?php echo $edition_type; ?></h4>
                <span class="m-next__editionFor"><?php echo $edition_for_whom; ?></span>
                <?php
                if ($edition_additional_info) {
                ?>
                  <span class="m-next__editionInfo"><?php echo $edition_additional_info; ?></span>
                <?php
                }
                ?>
              </div>
            </div>

        <?php
          endwhile;

        endif;
        ?>
      </div>
      <div class="m-next__text m-content -whiteText"><?php echo $next_text; ?></div>
      <a href="#cb71b75f44" class="m-next__button a-ctaPrimary -invert -demo">Book a Demo</a>
    </div>

  </div>
</section>