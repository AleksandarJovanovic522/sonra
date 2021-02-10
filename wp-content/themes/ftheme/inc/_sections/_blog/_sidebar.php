<?php
$sidebar_icon = get_field('sidebar_icon', 'option');
$sidebar_heading = get_field('sidebar_heading', 'option');
$sidebar_subheading = get_field('sidebar_subheading', 'option');
$sidebar_quote = get_field('sidebar_quote', 'option');
$sidebar_quote_image = get_field('sidebar_quote_image', 'option');
$sidebar_quote_name = get_field('sidebar_quote_name', 'option');
$sidebar_quote_info = get_field('sidebar_quote_info', 'option');
?>
<aside class="m-sidebar">


  <div class="m-banner">
    <div class="m-banner__icon">
      <img src="<?php echo $sidebar_icon; ?>" alt="">
    </div>
    <h2 class="m-banner__heading"><?php echo $sidebar_heading; ?></h2>
    <h3 class="m-banner__subheading"><?php echo $sidebar_subheading; ?></h3>


    <?php
    if (have_rows('sidebar_checklist', 'option')) :
    ?>
      <div class="m-banner__checkmarks">
        <?php
        while (have_rows('sidebar_checklist', 'option')) : the_row();

          $sidebar_checklist_item = get_sub_field('sidebar_checklist_item', 'option');

        ?>

          <span class="m-banner__check"><?php echo $sidebar_checklist_item; ?></span>

        <?php
        endwhile;
        ?>
      </div>
    <?php
    endif;
    ?>
    <p class="m-banner__quote"><?php echo $sidebar_quote; ?></p>
    <div class="m-banner__author">
      <div class="m-banner__avatar">
        <img src="<?php echo $sidebar_quote_image; ?>" alt="">
      </div>
      <div class="m-banner__nameInfo">
        <span class="m-banner__name"><?php echo $sidebar_quote_name; ?></span>
        <span class="m-banner__info"><?php echo $sidebar_quote_info; ?></span>
      </div>
    </div>
    <a href="#cb71b75f44" class="m-banner__cta a-ctaPrimary -invert">Book a Demo</a>
  </div>


  <div class="m-asidePosts">
    <div class="m-asidePosts__buttonContainer">
      <div class="m-asidePosts__button js-popular-button -active">Popular Posts</div>
      <div class="m-asidePosts__button js-latest-button">Latest Posts</div>
    </div>
    <?php
    $popular_posts = new WP_Query(array(
      'post_type' => 'blog',
      'post_status' => 'publish',
      'posts_per_page' => 10,
      'meta_key' => 'wpb_post_views_count',
      'orderby' => 'meta_value_num',
      'order' => 'DESC'
    ));
    if ($popular_posts->have_posts()) :
    ?>
      <ul class="m-asidePosts__list js-popular -active">

        <?php
        while ($popular_posts->have_posts()) : $popular_posts->the_post();
        ?>
          <li class="m-asidePosts__item"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
        <?php
        endwhile;
        wp_reset_postdata();
        ?>
      </ul>
    <?php
    endif;
    ?>
    <?php
    $latest_posts = new WP_Query(array(
      'post_type' => 'blog',
      'post_status' => 'publish',
      'posts_per_page' => 10,
    ));
    if ($latest_posts->have_posts()) :
    ?>
      <ul class="m-asidePosts__list js-latest">
        <?php
        while ($latest_posts->have_posts()) : $latest_posts->the_post();
        ?>
          <li class="m-asidePosts__item"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
        <?php
        endwhile;
        wp_reset_postdata();
        ?>
      </ul>
    <?php
    endif;
    ?>
  </div>
</aside>