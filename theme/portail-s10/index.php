<?php

declare(strict_types=1);

get_header();
?>
<main class="s10-main">
    <section class="s10-hero">
        <h1><?php bloginfo('name'); ?></h1>
        <p><?php bloginfo('description'); ?></p>
    </section>

    <?php if (have_posts()) : ?>
        <section class="s10-content">
            <?php while (have_posts()) : ?>
                <?php the_post(); ?>
                <article <?php post_class('s10-article'); ?>>
                    <h2 class="s10-article__title">
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </h2>
                    <div class="s10-article__excerpt">
                        <?php the_excerpt(); ?>
                    </div>
                </article>
            <?php endwhile; ?>
        </section>
    <?php else : ?>
        <section class="s10-content">
            <p><?php esc_html_e('Aucun contenu disponible pour le moment.', 'portail-s10'); ?></p>
        </section>
    <?php endif; ?>
</main>
<?php
get_footer();
