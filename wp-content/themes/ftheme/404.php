<?php

/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package ftheme
 */

get_header(); ?>

<section class="m-notFound">
	<h1 class="m-notFound__heading">Page not found</h1>
	<a href="<?php echo get_site_url(); ?>" class="m-notFound__button a-ctaPrimary">Go to Homepage</a>
</section>

<?php
get_footer();
