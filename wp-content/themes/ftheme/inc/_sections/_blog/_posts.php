<div class="m-posts">

  <?php
  if (have_posts()) : ?>
    <?php
    while (have_posts()) : the_post();
      $post_title = get_the_title();
      $post_excrept = get_field('post_excerpt');
      $post_url = get_permalink();
      $post_categories = wp_get_post_categories(get_the_ID());
      $post_avatar = get_avatar(get_the_author_meta('ID'));
      $post_date = get_the_date('F j, Y');
      $post_author_link = get_author_posts_url(get_the_author_meta('ID'));
      $post_author_name = get_the_author_meta('display_name');

    ?>

      <div class="m-posts__post" data-aos="fade-right" data-aos-duration="600">
        <?php
        foreach ($post_categories as $category) {

        ?>
          <a href="<?php echo esc_url(get_category_link($category)); ?>" class="a-category">
            <?php
            echo get_cat_name($category);
            ?>
          </a>
        <?php
        }
        ?>
        <h2 class="m-posts__title"><a href="<?php echo $post_url; ?>"><?php echo $post_title; ?></a></h2>
        <div class="a-authorDate">
          <a href="<?php echo $post_author_link; ?>" class="a-authorDate__author">

            <?php
            echo $post_avatar;
            echo $post_author_name;
            ?>

          </a>
          <span class="a-authorDate__date"><?php echo $post_date; ?></span>
        </div>
        <p class="m-posts__excerpt"><?php echo $post_excrept; ?></p>
        <a href="<?php echo $post_url; ?>" class="m-posts__permalink">Read More <span class="a-arrow -readMore"></span></a>
      </div>


    <?php
    endwhile;
    ?>
    <div class="m-posts__pagination">
      <?php
      echo paginate_links(array(
        'prev_text' => ' <span class="a-arrow -left"></span>',
        'next_text' => '<span class="a-arrow"></span>',
        'mid_size' => 2,
      ));
      ?>
    </div>
  <?php
  else :
  ?>
    <h2>No posts</h2>
  <?php
  endif; ?>

</div>