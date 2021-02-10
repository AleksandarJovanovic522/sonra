<?php
$try_for_heading = get_field('try_for_heading');
$try_for_top_text = get_field('try_for_top_text');
$try_for_image = get_field('try_for_image');
$try_for_list = get_field('try_for_list');
$try_for_bottom_text = get_field('try_for_bottom_text');
?>


<section class="m-data -try">
  <div class="m-wrapper">
    <div class="m-narrowWrapper">
      <h2 class="m-data__heading">
        <?php echo $try_for_heading; ?>
      </h2>
      <div class="m-data__text  m-content -twoColumnList -try"><?php echo $try_for_top_text; ?></div>
      <div class="m-imgList -try">
        <div class="m-imgList__imgDiv">
          <img src="<?php echo $try_for_image; ?>" alt="">
        </div>
        <div class="m-imgList__listDiv m-content"><?php echo $try_for_list; ?></div>
      </div>
      <div class="m-data__bottomText  m-content -twoColumnList -try"><?php echo $try_for_bottom_text; ?></div>
    </div>
  </div>
</section>