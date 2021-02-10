<?php /* Template Name: About */

get_header();
?>
<main role="main">

  <?php
  require_once(dirname(__FILE__) . '/inc/_sections/_about/_equals.php');
  require_once(dirname(__FILE__) . '/inc/_sections/_about/_leadership.php');
  ?>

</main>

<?php
get_footer();
?>