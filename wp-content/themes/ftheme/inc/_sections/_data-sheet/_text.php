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