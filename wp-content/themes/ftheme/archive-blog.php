<?php

/**
 * The template for displaying archive pages
 * 
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ftheme
 */

get_header();
?>

<main class="m-blog" role="main">
	<div class="m-wrapper">
		<div class="m-blog__container">

			<?php
			require_once(dirname(__FILE__) . '/inc/_sections/_blog/_posts.php');
			require_once(dirname(__FILE__) . '/inc/_sections/_blog/_sidebar.php');
			?>

		</div>
	</div>
</main>

<?php
get_footer();
?>