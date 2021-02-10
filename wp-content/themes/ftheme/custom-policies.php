<?php /* Template Name: Policies */
$policies_content = get_field('policies_content');


get_header();
?>

<section class="m-policies">
  <div class="m-wrapper">
    <div class="m-policies__content m-content -policies"><?php echo $policies_content; ?></div>
  </div>
</section>

<?php
get_footer();
?>