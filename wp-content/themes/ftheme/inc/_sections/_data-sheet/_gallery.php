<?php
//GALLERY
if (get_row_layout() == 'data_logo_gallery') : ?>

  <?php $data_gallery_heading = get_sub_field('data_gallery_heading') ?>

  <section class="m-dataSheet__section">
    <div class="m-dataSheet__galleryContainer ">
      <h3 class="m-dataSheet__heading"><?php echo $data_gallery_heading; ?></h3>

      <?php

      if (have_rows('data_gallery_block')) :

        while (have_rows('data_gallery_block')) : the_row();

          $data_gallery_block_heading = get_sub_field('data_gallery_block_heading');
          $data_gallery_block_images = get_sub_field('data_gallery_block_images');
      ?>
          <div class="m-dataSheet__galleryBlock">
            <h5 class="m-dataSheet__galleryBlockHeading"><?php echo $data_gallery_block_heading; ?></h5>

            <?php if ($data_gallery_block_images) : ?>

              <div class="m-datasheet__gallery">

                <?php foreach ($data_gallery_block_images as $image) : ?>

                  <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />

                <?php endforeach; ?>

              </div>

            <?php endif; ?>

          </div>

      <?php
        endwhile;
      endif;
      ?>

    </div>
  </section>
<?php
endif;
?>