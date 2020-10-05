<?php

?>

	</div><!-- #content -->

<!-- footer -->
<footer class="footer bg-footer mt-auto py-3 container-fluid bg-dark" role="contentinfo">
    <?php get_template_part('template-parts/footer-widgets');; ?>

    <div class="container  d-flex justify-content-between">
        <!-- copyright -->
        <div class="copyright text-white m-0">
            &copy; <?php echo date('Y'); ?> Copyright <?php bloginfo('name'); ?>
            . <?php _e('Powered by', 'boot5blank'); ?>
            <a class="text-white" href="//evant.site" target="_blank" title="WordPress">Evant.site</a> &amp; <a
                    class="text-white border-bottom" href="//boot5.evant.site" title="Boot5 Blank">Boot5Blank</a>

        </div>
        <!-- /copyright -->
        <div class="">
            <a class="text-white px-2" href="<?php echo esc_url('https://vk.com/ovich_andrei'); ?>" target="_blank">
                <i class="fa fa-vk" title="vk"></i>
            </a>
            <a class="text-white px-2" href="<?php echo esc_url('https://www.facebook.com/ovich.andrei'); ?>"
               target="_blank">
                <i class="fa fa-facebook" title="facebook"></i>
            </a>
            <a class="text-white px-2" href="<?php echo esc_url('https://ok.ru/andrey.ovich'); ?>" target="_blank">
                <i class="fa fa-odnoklassniki" title="odnoklassniki"></i>
            </a>
            <a class="text-white px-2" href="<?php echo esc_url('mailto:yuhfe@bk.ru'); ?>">
                <i class="fa fa-envelope" title="mail to"></i>
            </a>
        </div>
    </div>
</footer>
<!-- /footer -->

<?php wp_footer(); ?>

</body>
</html>
