<?php

declare(strict_types=1);

?>
<footer class="s10-footer">
    <nav class="s10-footer__nav">
        <?php
        wp_nav_menu([
            'theme_location' => 'footer',
            'container' => false,
            'fallback_cb' => false,
        ]);
        ?>
    </nav>
    <p class="s10-footer__mention">
        <?php echo esc_html__('Portail S10 — Services d\'incendie et de secours', 'portail-s10'); ?>
    </p>
</footer>
<?php wp_footer(); ?>
</body>
</html>
