<?php /* Template Name: Services */

get_header();
?>
<main role="main">
  <?php
  require_once(dirname(__FILE__) . '/inc/_sections/_services/_clients.php');
  require_once(dirname(__FILE__) . '/inc/_sections/_services/_overview.php');
  require_once(dirname(__FILE__) . '/inc/_sections/_services/_why.php');
  require_once(dirname(__FILE__) . '/inc/_sections/_services/_start.php');
  ?>

</main>

<?php
get_footer();
?>