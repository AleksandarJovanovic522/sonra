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

      <h3 class="m-table__heading"><?php echo $data_table_heading; ?></h3>
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