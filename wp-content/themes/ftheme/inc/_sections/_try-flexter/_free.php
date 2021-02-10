<?php
$free_heading = get_field('free_heading');
$free_image = get_field('free_image');
$free_list = get_field('free_list');
?>

<section class="m-free">
  <div class="m-wrapper">
    <div class="m-narrowWrapper">
      <h2 class="m-free__heading"><?php echo $free_heading; ?></h2>
      <div class="m-imgList">
        <div class="m-imgList__imgDiv">
          <img src="<?php echo $free_image; ?>" alt="">
        </div>
        <div class="m-imgList__listDiv m-content"><?php echo $free_list; ?></div>
      </div>
    </div>
  </div>
</section>