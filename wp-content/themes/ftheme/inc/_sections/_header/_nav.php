<?php
$siteLogo = get_field('site_logo', 'option');
$logo = $siteLogo ?: get_template_directory_uri() . '/bundles/images/logo.png';
?>

<div class="m-nav <?php echo (is_single() or is_page_template('custom-policies.php')) ? '-single' : '';  ?> ">
  <a href="<?php _e(home_url('/')); ?>" class="m-nav__logo">
    <img src="<?php echo $logo; ?>" alt="Logo">
  </a>
  <div class="m-nav__listCta js-nav">
    <nav class="m-nav__list " role="navigation">
      <?php wp_nav_menu(array('theme_location' => 'primary-menu'))
      ?>
    </nav>
    <div class="m-nav__ctas">
      <a href="#cb71b75f44" class="m-nav__demo a-ctaNav -demo <?php echo (is_single()) ? '-single ' : '';  ?>">Book a Demo</a>
      <a href="#cb79e09bcf" class="m-nav__try a-ctaNav -try">Try Flexter</a>
    </div>
  </div>
  <span class="m-nav__hamburger js-hamburger">
    <span></span>
    <span></span>
    <span></span>
  </span>
</div>