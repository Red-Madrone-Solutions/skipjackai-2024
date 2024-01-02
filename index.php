<?php get_header(); ?>

<div class="page-wrapper">

    <?php 
        if ( have_posts() ) {
            if ( is_archive() || is_home() ) { echo '<div class="grid grid-cols-3 gap-8 mt-8">'; }
		    while ( have_posts() ) {
			    the_post();
                $post_format = get_post_format();
                if ( is_archive() || is_home() ) {
                    get_template_part( 'template-parts/content', 'archive' );
                } else if ( $post_format ) {
                    get_template_part( 'template-parts/content', $post_format );
                } else {
                    get_template_part( 'template-parts/content', get_post_type() );
                }
            }
            if ( is_archive() || is_home() ) { echo '</div>'; }
        }
    ?>
</div>

<?php
get_footer();
