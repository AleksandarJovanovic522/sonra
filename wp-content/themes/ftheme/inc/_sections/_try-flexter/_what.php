<?php
$try_what_heading = get_field('try_what_heading');
$try_what_text = get_field('try_what_text');
?>

<section class="m-what">
  <div class="m-wrapper">
    <div class="m-narrowWrapper">
      <h2 class="m-what__heading"><?php echo $try_what_heading; ?></h2>
      <div class="m-what__text m-content -what -whiteText"><?php echo $try_what_text; ?></div>
      <a href="#free" class="m-what__cta a-ctaPrimary -invert js-free-button">Get Started</a>
    </div>
  </div>
</section>