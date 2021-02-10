<?php
$overview_heading = get_field('overview_heading');
$overview_image = get_field('overview_image');
$overview_content = get_field('overview_content');
$provide_heading = get_field('provide_heading');
$provide_subheading = get_field('provide_subheading');
$projects_heading = get_field('projects_heading');

?>
<section class="m-overview">
  <div class="m-wrapper">
    <section class="m-rows -services">
      <h2 class="m-rows__heading"><?php echo $overview_heading; ?></h2>
      <div class="m-rows__container">
        <div class="m-rows__row" data-aos="zoom-in-up" data-aos-duration="600">
          <div class="m-rows__columnImg">
            <img src="<?php echo $overview_image; ?>" alt="">
          </div>
          <div class="m-rows__columnText m-content">
            <div class="m-rows__text"><?php echo $overview_content; ?></div>
          </div>
        </div>
      </div>
    </section>


    <?php
    if (have_rows('we_provide')) :
    ?>
      <section class="m-provide">
        <?php
        if ($provide_heading) {
        ?>
          <h3 class="m-provide__heading">
            <?php echo $provide_heading ?>
          </h3>
        <?php
        }
        ?>
        <?php
        if ($provide_subheading) {
        ?>
          <h5 class="m-provide__subheading">
            <?php echo $provide_subheading ?>
          </h5>
        <?php
        }
        ?>

        <div class="m-provide__container">
          <div class="m-narrowWrapper">
            <?php while (have_rows('we_provide')) : the_row();

              $provide_icon = get_sub_field('provide_icon');
              $provide_text = get_sub_field('provide_text');
            ?>

              <div class="m-provide__block" data-aos="fade-right" data-aos-duration="600">
                <div class="m-provide__imgDiv"><img src="<?php echo $provide_icon; ?>" alt=""></div>
                <div class="m-provide__textDiv m-content"><?php echo $provide_text; ?></div>
              </div>
            <?php
            endwhile;
            ?>
          </div>
        </div>
      </section>
    <?php
    endif;
    ?>
    <?php
    if (have_rows('projects')) :
    ?>
      <section class="m-projects">
        <div class="m-narrowWrapper">
          <?php
          if ($projects_heading) {
          ?>
            <h3 class="m-projects__heading">
              <?php echo $projects_heading ?>
            </h3>
          <?php
          }
          ?>
          <div class="m-projects__container">
            <?php
            while (have_rows('projects')) : the_row();

              $projects_logo = get_sub_field('projects_logo');
              $projects_name = get_sub_field('projects_name');
              $projects_type = get_sub_field('projects_type');
              $projects_country = get_sub_field('projects_country');
              $projects_description = get_sub_field('projects_description');
              $projects_quote = get_sub_field('projects_quote');
              $projects_image = get_sub_field('projects_image');
            ?>
              <div class="m-projects__block" data-aos="fade-right" data-aos-duration="600">
                <div class="m-projects__logoDiv"><img src="<?php echo $projects_logo; ?>" alt=""></div>
                <div class="m-projects__infoDiv">
                  <span class="m-projects__name">
                    <?php echo $projects_name; ?>
                  </span>
                  <?php echo ($projects_type or $projects_country) ? ' - ' : '' ?>
                  <?php
                  if ($projects_type) {
                  ?>
                    <span class="m-projects__type">
                      <?php
                      echo $projects_type;
                      echo ($projects_type and $projects_country) ? ',' : '';
                      ?></span>
                  <?php
                  }
                  ?>
                  <?php
                  if ($projects_country) {
                  ?>
                    <span class="m-projects__country"><?php echo $projects_country; ?></span>
                  <?php
                  }
                  ?>
                </div>
                <div class="m-projects__description"><?php echo $projects_description; ?></div>
                <?php
                if ($projects_quote) {
                ?>
                  <div class="m-projects__quote"><?php echo $projects_quote; ?></div>
                <?php
                }
                ?>
                <?php
                if ($projects_image) {
                ?>
                  <div class="m-projects__imageDiv"><img src="<?php echo $projects_image; ?>" alt=""></div>
                <?php
                }
                ?>
              </div>

            <?php
            endwhile;
            ?>
          </div>
        </div>
      </section>
    <?php
    endif;
    ?>
  </div>
</section>