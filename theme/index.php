<?php
// Template minimaliste – fallback pour toutes les pages
get_header();
if ( have_posts() ) {
    while ( have_posts() ) {
        the_post();
        the_content();
    }
}
get_footer();
