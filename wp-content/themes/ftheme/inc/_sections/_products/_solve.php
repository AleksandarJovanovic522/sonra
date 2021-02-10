<?php
$solve_heading = get_field('solve_heading');
?>

<section class="m-rows -solve">
  <div class="m-wrapper">
    <div class="m-narrowWrapper">
      <h2 class="m-rows__heading"><?php echo $solve_heading; ?></h2>
    </div>
    <div class="m-rows__container">
      <?php
      if (have_rows('solve_issues')) :
        while (have_rows('solve_issues')) : the_row();

          $solve_issue_image = get_sub_field('solve_issue_image');
          $solve_issue_content = get_sub_field('solve_issue_content');
      ?>
          <div class="m-rows__row" data-aos="zoom-in-up" data-aos-duration="600">
            <div class="m-rows__columnImg">
              <img src="<?php echo $solve_issue_image; ?>" alt="">
            </div>
            <div class="m-rows__columnText m-content">
              <div class="m-rows__text"><?php echo $solve_issue_content; ?></div>
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