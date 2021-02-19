<?php /* Template Name: Product Data Sheet */

get_header();
?>

<main role="main" class="m-dataSheet">

  <div class="m-wrapper">
    <div class="m-narrowWrapper">
      <?php if (have_rows('data_content')) : ?>
        <?php while (have_rows('data_content')) : the_row(); ?>

          <?php
          //TEXT
          if (get_row_layout() == 'data_text') : ?>

            <?php $data_text_field = get_sub_field('data_text_field') ?>

            <section class="m-dataSheet__section">
              <div class="m-dataSheet__text m-content">
                <?php echo $data_text_field; ?>
              </div>
            </section>

          <?php endif; ?>

          <?php
          //IMAGE
          if (get_row_layout() == 'data_image') : ?>

            <?php $data_image_field = get_sub_field('data_image_field') ?>

            <section class="m-dataSheet__section">
              <div class="m-dataSheet__image">
                <img src="<?php echo esc_url($data_image_field['url']); ?>" alt="<?php echo esc_attr($data_image_field['alt']); ?>" />
              </div>
            </section>


          <?php endif; ?>

          <?php
          //TABLE
          if (get_row_layout() == 'data_table') : ?>

            <section class="m-dataSheet__section">
              <div class="m-table">

                <?php
                $data_table_heading = get_sub_field('data_table_heading');
                $data_first_edition = get_sub_field('data_first_edition');
                $data_second_edition = get_sub_field('data_second_edition');
                $data_third_edition = get_sub_field('data_third_edition');
                ?>

                <h2 class="m-table__heading"><?php echo $data_table_heading; ?></h2>
                <table class="m-table__table">
                  <tr class="m-table__mainRow">
                    <th></th>
                    <th><?php echo $data_first_edition; ?></th>
                    <th><?php echo $data_second_edition ?></th>
                    <th><?php echo $data_third_edition; ?></th>
                  </tr>

                  <?php if (have_rows('data_table_block')) : ?>

                    <?php while (have_rows('data_table_block')) : the_row(); ?>
                      <?php $data_type_of_feature = get_sub_field('data_type_of_feature'); ?>
                      <tr class="m-table__typeRow">
                        <td><?php echo $data_type_of_feature ?></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>

                      <?php if (have_rows('data_subtype')) : ?>

                        <?php while (have_rows('data_subtype')) : the_row();

                          $data_subtype_name = get_sub_field('data_subtype_name');
                          $data_checkmark_or_text = get_sub_field('data_checkmark_or_text');
                        ?>

                          <tr class="m-table__subtypeRow">
                            <td><?php echo $data_subtype_name; ?></td>
                            <?php if ($data_checkmark_or_text == 'checkmark') :
                              $included_first = get_sub_field('data_included_in_first_edition');
                              $included_second = get_sub_field('data_included_in_second_edition');
                              $included_third = get_sub_field('data_included_in_third_edition');

                            ?>

                              <td class="<?php echo ($included_first) ? '-included' : ''; ?>"></td>
                              <td class="<?php echo ($included_second) ? '-included' : ''; ?>"></td>
                              <td class="<?php echo ($included_third) ? '-included' : ''; ?>"></td>

                            <?php endif; ?>

                            <?php if ($data_checkmark_or_text == 'text') :
                              $data_first_edition_text = get_sub_field('data_first_edition_text');
                              $data_second_edition_text = get_sub_field('data_second_edition_text');
                              $data_third_edition_text = get_sub_field('data_third_edition_text');
                            ?>

                              <td><?php echo $data_first_edition_text; ?></td>
                              <td><?php echo $data_second_edition_text; ?></td>
                              <td><?php echo $data_third_edition_text; ?></td>


                            <?php endif; ?>

                          </tr>

                  <?php
                        endwhile;
                      endif;
                    endwhile;
                  endif;
                  ?>

                </table>
              </div>
            </section>
          <?php endif; ?>


          <?php
          //GALLERY
          if (get_row_layout() == 'data_logo_gallery') : ?>

            <?php $data_gallery_heading = get_sub_field('data_gallery_heading') ?>

            <section class="m-dataSheet__section">
              <div class="m-dataSheet__galleryContainer ">
                <h2 class="m-dataSheet__heading"><?php echo $data_gallery_heading; ?></h2>

                <?php

                if (have_rows('data_gallery_block')) :

                  while (have_rows('data_gallery_block')) : the_row();

                    $data_gallery_block_heading = get_sub_field('data_gallery_block_heading');
                    $data_gallery_block_images = get_sub_field('data_gallery_block_images');
                ?>
                    <div class="m-dataSheet__galleryBlock">
                      <h5 class="m-dataSheet__galleryBlockHeading"><?php echo $data_gallery_block_heading; ?></h5>

                      <?php if ($data_gallery_block_images) : ?>

                        <div class="m-dataSheet__gallery">

                          <?php foreach ($data_gallery_block_images as $image) : ?>

                            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" title="<?php echo esc_attr($image["title"]); ?>" />

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
        endwhile;
      endif;
      ?>
    </div>
  </div>
</main>

<?php
get_footer();
?>