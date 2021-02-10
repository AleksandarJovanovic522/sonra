<?php
$start_heading = get_field('start_heading');
$start_list = get_field('start_list');
?>

<?php if ($start_heading or $start_list) : ?>
  <section class="m-start">
    <div class="m-wrapper">
      <div class="m-narrowWrapper">
        <h2 class="m-start__heading"><?php echo $start_heading; ?></h2>
        <div class="m-start__listDiv">
          <div class="m-start__list m-content -whiteCheckmark -whiteText"><?php echo $start_list ?></div>
        </div>
      </div>
      <a href="#cb79e09bcf" class="m-start__cta a-ctaPrimary -invert">Get Started</a>
      <span class="m-start__card">*No credit card required</span>
    </div>
  </section>
<?php endif; ?>