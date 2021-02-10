<?php

/**
 * The homepage template file
 * This is the template for homepage 
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 * Template Name: Homepage
 * @package ftheme
 */

get_header();
?>
<main>
  <?php
  require_once(dirname(__FILE__) . '/inc/_sections/_home/_advice.php');
  require_once(dirname(__FILE__) . '/inc/_sections/_home/_who.php');
  require_once(dirname(__FILE__) . '/inc/_sections/_home/_expect.php');
  ?>
</main>
<?php
get_footer();
?>