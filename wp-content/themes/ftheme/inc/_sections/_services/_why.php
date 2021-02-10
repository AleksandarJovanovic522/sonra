<?php
$why_heading = get_field('why_heading');
$why_content = get_field('why_content');
?>

<?php if ($why_heading or $why_content) : ?>
  <section class="m-why">
    <div class="m-wrapper">
      <div class="m-narrowWrapper">
        <h2 class="m-why__heading"><?php echo $why_heading ?></h2>
        <div class="m-why__content"><?php echo $why_content; ?></div>
      </div>
    </div>
  </section>
<?php endif; ?>