<article id="post-<?php the_ID(); ?>" <?php post_class('relative'); ?>>
    <div class="aspect-video">
<?php
        $img_classes = 'size-full object-cover object-center rounded shadow-lg shadow-slate-700';
        if ( has_post_thumbnail() ) {
            the_post_thumbnail('large', [ 'class' => $img_classes ]);

        } else {
            // Output default image
            echo (new \TailCraft\Theme\Customizer())->defaultPostImage($img_classes);
        }
?>
    </div>

    <header class="mt-4">
        <h1 class="font-heading font-light text-lg !leading-none mb-3">
            <a href="<?php the_permalink(); ?>" class="before:absolute before:inset-0 hover:underline">
                <?php the_title(); ?>
            </a>
        </h1>
        <div class="metadata text-xs font-normal text-slate-700">
            <span><?php echo get_the_date(); ?></span>
        </div>
    </header>
    <div class="excerpt font-light text-sm mt-2"><?php the_excerpt(); ?></div>
</article>

