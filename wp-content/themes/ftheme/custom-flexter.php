<?php /* Template Name: Flexter */

get_header();
?>
<main role="main">

  <?php
  require_once(dirname(__FILE__) . '/inc/_sections/_try-flexter/_try-intro.php');
  require_once(dirname(__FILE__) . '/inc/_sections/_try-flexter/_free.php');
  require_once(dirname(__FILE__) . '/inc/_sections/_try-flexter/_try-steps.php');
  require_once(dirname(__FILE__) . '/inc/_sections/_try-flexter/_try-quote.php');
  require_once(dirname(__FILE__) . '/inc/_sections/_try-flexter/_try-for.php');
  require_once(dirname(__FILE__) . '/inc/_sections/_try-flexter/_try-solve.php');
  require_once(dirname(__FILE__) . '/inc/_sections/_try-flexter/_try-who.php');
  require_once(dirname(__FILE__) . '/inc/_sections/_try-flexter/_what.php');
  ?>

</main>

<?php
get_footer();
?>