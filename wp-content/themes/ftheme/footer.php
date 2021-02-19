<?php
$footer_logo = get_field('footer_logo', 'option');
$f_logo = $footer_logo ?: get_template_directory_uri() . '/bundles/images/logo.png';
$footer_address = get_field('footer_address', 'option');
/**
 * @package ftheme
 */
?>
<footer class="m-footer" role="contentinfo">
    <div class="m-wrapper">

        <div class="m-footer__logo"><img src="<?php echo $f_logo; ?>" alt="Footer Logo"></div>
        <div class="m-footer__info">
            <div class="m-footer__address"><?php echo $footer_address; ?></div>
            <div class="m-footer__companyName">&copy; Sonra Intelligence Limited 2020</div>
            <div class="m-footer__links">
                <a href="<?php echo get_site_url() . '/cookie-policy'; ?>" class="m-footer__link">Cookie Policy</a>
                <a href="<?php echo get_site_url() . '/privacy-policy'; ?>" class="m-footer__link -privacy">• Privacy Policy •</a>
                <a href="<?php echo get_site_url() . '/terms-of-use'; ?>" class="m-footer__link">Terms of Use</a>
            </div>
        </div>
    </div>
</footer>
</div>

<?php wp_footer(); ?>
</body>

</html>