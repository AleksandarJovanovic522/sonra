<?php
$try_solve_heading = get_field('try_solve_heading');
?>

<section class="m-rows -solve -try">
  <div class="m-wrapper">
    <div class="m-narrowWrapper">
      <h2 class="m-rows__heading"><?php echo $try_solve_heading; ?></h2>
    </div>
    <div class="m-rows__container">
      <?php
      if (have_rows('try_solve_issues')) :
        while (have_rows('try_solve_issues')) : the_row();

          $try_solve_issue_image = get_sub_field('try_solve_issue_image');
          $try_solve_issue_content = get_sub_field('try_solve_issue_content');
      ?>
          <div class="m-rows__row" data-aos="zoom-in-up" data-aos-duration="600">
            <div class="m-rows__columnImg">
              <img src="<?php echo $try_solve_issue_image; ?>" alt="">
            </div>
            <div class="m-rows__columnText m-content">
              <div class="m-rows__text"><?php echo $try_solve_issue_content; ?></div>
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