<section class="m-leadership">
  <div class="m-wrapper">
    <div class="m-narrowWrapper">
      <?php
      if (have_rows('leadership_leaders')) :

        while (have_rows('leadership_leaders')) : the_row();

          $leader_image = get_sub_field('leader_image');
          $leader_text = get_sub_field('leader_text');
          $leader_get = get_sub_field('leader_get');
          $leader_linkedin = get_sub_field('leader_linkedin');
          $leader_twitter = get_sub_field('leader_twitter');

      ?>

          <div class="m-leadership__leader">
            <div class="m-leadership__imgDiv">
              <img src="<?php echo $leader_image; ?>" alt="">
            </div>
            <div class="m-leadership__contentDiv">
              <div class="m-leadership__text"><?php echo $leader_text; ?></div>
              <div class="m-leadership__touch">
                <p><?php echo $leader_get; ?></p>
                <?php
                if ($leader_linkedin) {
                ?>
                  <a href="<?php echo $leader_linkedin; ?>">
                    <img src="<?php echo get_template_directory_uri() . '/bundles/images/linkedin.svg'; ?>" alt="LinkedIn">
                  </a>
                <?php
                }
                ?>
                <?php
                if ($leader_twitter) {
                ?>
                  <a href="<?php echo $leader_twitter; ?>">
                    <img src="<?php echo get_template_directory_uri() . '/bundles/images/twitter.svg'; ?>" alt="Twitter">
                  </a>
                <?php
                }
                ?>
              </div>
            </div>
          </div>

      <?php
        endwhile;

      endif;
      ?>
    </div>
  </div>
</section>