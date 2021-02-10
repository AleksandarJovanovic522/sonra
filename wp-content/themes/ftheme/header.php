<?php
$header_image = get_field('header_image');
$header_title = get_field('header_title');
$header_text = get_field('header_text');
$blog_archive_heading = get_field('blog_archive_heading', 'option');
$blog_archive_image = get_field('blog_archive_image', 'option');
/**
 * @package ftheme
 */
global $globalSite;
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <?php if (has_site_icon()) : ?>
        <link rel="icon" href="<?php echo get_site_icon_url(); ?>" type="image/x-icon" />
    <?php else : ?>
        <link rel="icon" href="<?php echo get_template_directory_uri() . '/bundles/images/favicon.svg'; ?>" type="image/x-icon" />
    <?php endif; ?>

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>


    <div id="page" class="site">
        <header class="m-header 
        <?php
        echo (is_page_template('custom-about.php')) ? '-about' : '';
        echo (is_page_template('custom-contact.php')) ? '-about' : '';
        echo (is_page_template('custom-flexter.php')) ? '-flexter' : '';
        echo (is_page_template('custom-services.php')) ? '-services' : '';
        echo (is_page_template('custom-data-sheet.php')) ? '-data' : '';
        echo (is_page_template('custom-policies.php')) ? '-policies' : '';
        echo (is_archive() || is_search()) ? '-blog' : '';
        echo (is_single()) ? '-single' : '';
        echo (is_404()) ? '-notFound' : '';
        ?>  " role="banner" style="background-image: url(
            <?php
            if (is_archive() or is_search()) :
                echo $blog_archive_image;
            elseif (is_404()) :
                echo get_template_directory_uri() . "/bundles/images/404.jpg";
            else :
                echo $header_image;

            endif;

            // echo (is_archive() || is_search()) ? $blog_archive_image : $header_image 
            ?>
            );">
            <div class="m-header__overlay"></div>
            <div class="m-wrapper">
                <?php require_once(dirname(__FILE__) . '/inc/_sections/_header/_nav.php'); ?>
                <div class="m-header__content">
                    <?php if (!is_single()) : ?>
                        <h1 class="m-header__heading"><?php echo (is_archive() || is_search()) ? $blog_archive_heading : $header_title ?></h1>
                    <?php endif ?>
                    <?php if ($header_text) { ?>
                        <div class="m-header__text m-content -whiteCheckmark -whiteText -noListMargin"><?php echo $header_text ?></div>
                    <?php
                    }
                    if (is_archive() || is_search()) {
                        get_search_form();
                    } ?>
                    <?php
                    if (is_page_template('home.php')) {
                    ?>

                        <a href="<?php echo get_site_url() . '/contact-sonra'; ?>" class="m-header__cta a-ctaPrimary">Contact Us</a>

                    <?php
                    }
                    ?>
                    <?php
                    if (is_page_template('custom-products.php')) {
                    ?>

                        <a href="#cb71b75f44" class="m-header__cta a-ctaPrimary -demo">Book a Demo</a>

                    <?php
                    }
                    ?>
                    <?php
                    if (is_page_template('custom-flexter.php')) {
                    ?>

                        <a href="#cb79e09bcf" class="m-header__cta a-ctaPrimary ">Get Started</a>
                        <p class="m-header__noCard">*No credit card required</p>

                    <?php
                    }
                    if (is_single()) {
                        the_post();
                        $post_title = get_the_title();
                        $post_categories = wp_get_post_categories(get_the_ID());
                        $post_avatar = get_avatar(get_the_author_meta('ID'));
                        $post_date = get_the_date('F j, Y');
                        $post_author_link = get_author_posts_url(get_the_author_meta('ID'));
                        $post_author_name = get_the_author();

                    ?>
                        <h1 class="m-header__heading"><?php echo $post_title; ?></h1>
                        <div class="m-header__singleInfo">
                            <?php
                            foreach ($post_categories as $category) {
                            ?>

                                <a href="<?php echo esc_url(get_category_link($category)); ?>" class="a-category -single">
                                    <?php
                                    echo get_cat_name($category);
                                    ?>
                                </a>

                            <?php
                            }
                            ?>
                            <div class="a-authorDate -single">
                                <a href="<?php echo $post_author_link; ?>" class="a-authorDate__author">

                                    <?php
                                    echo $post_avatar;
                                    echo $post_author_name;

                                    ?>

                                </a>
                                <span class="a-authorDate__date"><?php echo $post_date; ?></span>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                    <?php
                    if (is_page_template('custom-services.php')) {
                    ?>

                        <a href="#" class="m-header__cta a-ctaPrimary">Book a Call</a>

                    <?php
                    }
                    ?>
                </div>
            </div>
        </header>