<?php get_header(); ?>

<div class="page-wrapper">

    <header class="mt-8">
        <?php the_archive_title( '<h1 class="text-3xl font-medium">', '</h1>' ); ?>
    </header>
    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 mt-8">
    <?php 
        if ( have_posts() ) {
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
        }
    ?>
        </div>
</div>

<?php
get_footer();
