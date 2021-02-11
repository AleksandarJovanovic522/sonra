<?php

/**
 * ftheme functions and definitions
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 * @package ftheme
 */

if (!class_exists('acf')) {

    add_action('admin_notices', function () {
        echo '<div class="error"><p>Advanced Custom Fields plugin is not activated. Make sure you activate plugin at <a href="' . esc_url(admin_url('plugins.php')) . '">' . esc_url(admin_url('plugins.php')) . '</a></p></div>';
    });
}

/**
 * Include after_theme setup functions
 * This is main file for including functions and all other theme related files
 */
include(get_template_directory() . '/lib/theme/_ftheme-setup.php');

/**
 * Include ftheme register functions
 * @link ./lib/register/index.php
 */
include(get_template_directory() . '/lib/register/index.php');

/**
 * Include acf setup functions
 * Note: this should be only setup for backend, any functions for template usage
 * should be created inside ftheme/inc/_partials
 * @link ./lib/acf/index.php
 */
include(get_template_directory() . '/lib/acf/index.php');

//Menu

function add_features()
{
    register_nav_menu('primary-menu', 'Primary Menu');
}

add_action('after_setup_theme', 'add_features');

add_filter('pre_get_posts', 'query_post_type');
function query_post_type($query)
{
    if (is_category()) {
        $post_type = get_query_var('post_type');
        if ($post_type)
            $post_type = $post_type;
        else
            $post_type = array('nav_menu_item', 'post', 'blog');
        $query->set('post_type', $post_type);
        return $query;
    }
}

//Add author to CPT
function add_cpt_author($query)
{
    if (!is_admin() && $query->is_author() && $query->is_main_query()) {
        $query->set('post_type', array('post', 'blog'));
    }
}
add_action('pre_get_posts', 'add_cpt_author');

//Add CPT to search query
function searchfilter($query)
{

    if ($query->is_search && !is_admin()) {
        $query->set('post_type', array('blog'));
    }

    return $query;
}

add_filter('pre_get_posts', 'searchfilter');


// remove <p> tag around <img> tag in ACF WYSIWYG
function img_unautop($pee)
{
    $pee = preg_replace('/<p>\\s*?(<a .*?><img.*?><\\/a>|<img.*?>)?\\s*<\\/p>/s', '<div class="figure">$1</div>', $pee);
    return $pee;
}
add_filter('the_content', 'img_unautop', 30);

//Remove wordpress editor from pages
add_action('admin_init', 'remove_textarea');

function remove_textarea()
{
    remove_post_type_support('page', 'editor');
}

//Page visits counter
function wpb_set_post_views($postID)
{
    $count_key = 'wpb_post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if ($count == '') {
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    } else {
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);

//Updating page count on single pages
function wpb_track_post_views($post_id)
{
    if (!is_single()) return;
    if (empty($post_id)) {
        global $post;
        $post_id = $post->ID;
    }
    wpb_set_post_views($post_id);
}
add_action('wp_head', 'wpb_track_post_views');

//Change the excerpt more string

function my_theme_excerpt_more($more)
{
    return ' ...';
}
add_filter('excerpt_more', 'my_theme_excerpt_more');
