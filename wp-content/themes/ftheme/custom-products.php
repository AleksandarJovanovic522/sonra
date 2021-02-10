<?php /* Template Name: Products */

get_header();
?>

<main role="main">

  <?php
  require_once(dirname(__FILE__) . '/inc/_sections/_products/_intro.php');
  require_once(dirname(__FILE__) . '/inc/_sections/_products/_steps.php');
  require_once(dirname(__FILE__) . '/inc/_sections/_products/_solve.php');
  require_once(dirname(__FILE__) . '/inc/_sections/_products/_for.php');
  require_once(dirname(__FILE__) . '/inc/_sections/_products/_we.php');
  require_once(dirname(__FILE__) . '/inc/_sections/_products/_faq.php');
  require_once(dirname(__FILE__) . '/inc/_sections/_products/_next.php');
  ?>

</main>

<?php
get_footer();
?>