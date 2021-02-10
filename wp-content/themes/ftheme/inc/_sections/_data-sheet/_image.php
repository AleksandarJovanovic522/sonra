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