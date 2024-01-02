<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <div class="mx-break-out h-96 overflow-hidden border-b-4 border-slate-700 mb-8">
        <?php 
        $img_classes = 'size-full object-cover object-center';
        if ( has_post_thumbnail() ) {
            the_post_thumbnail('full', [ 'class' => $img_classes ]);

        } else {
            // Output default image
            echo (new \TailCraft\Theme\Customizer())->defaultPostImage($img_classes);
        }
        ?>
    </div>
    <div class="lg:flex gap-8">
        <header class="lg:basis-1/3">
            <h1 class="font-heading font-light text-2xl !leading-tight mb-3"><?php the_title(); ?></h1>
            <div class="metadata text-xs grid grid-cols-2 font-normal gap-2 text-slate-700">
                <span class="author flex items-center space-x-2">
                    <svg class="size-4 fill-current" viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg"><path d="M28.21 18.19v0c-4.9 1.63-8.21 6.2-8.21 11.37v15.57 0c0 1.58 1.28 2.87 2.87 2.87h2v0c.6-.02 1.11.46 1.12 1.06 0 .01 0 .02 0 .03v8.53 -.001c0 1.3 1.06 2.37 2.37 2.37h7.27v0c1.3-.01 2.36-1.07 2.36-2.37v-8.53l-.001-.001c0-.61.49-1.1 1.1-1.1h2v0c1.58.01 2.88-1.26 2.89-2.84 0-.02 0-.03 0-.04V29.53h-.001c-.01-5.17-3.31-9.75-8.21-11.38v0c-.35-.15-.51-.56-.36-.9 .04-.12.13-.22.23-.29v-.001c3.29-2.03 4.31-6.35 2.28-9.64 -2.03-3.3-6.35-4.32-9.64-2.29 -3.3 2.02-4.32 6.34-2.29 9.63 .57.92 1.35 1.71 2.28 2.28v-.001c.31.2.39.63.18.94 -.08.1-.18.19-.3.24Z"/></svg>
                    <span><?php the_author(); ?></span>
                </span>
                <span class="date flex items-center space-x-2">
                    <svg class="size-4 fill-current" viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg"><g><path d="M55.89 24H8.11v0C5.84 24 4 25.84 4 28.11V51v0c0 4.97 4.02 9 9 9h38v0c4.97 0 9-4.03 9-9V28.11v0c0-2.27-1.85-4.11-4.11-4.11ZM19 47.35v0c0 1.46-1.19 2.65-2.65 2.65h-.69v0C14.19 50 13 48.82 13 47.36c-.01-.01-.01-.01-.01-.02v-.69 -.001c-.01-1.47 1.17-2.66 2.63-2.66 0-.01 0-.01.01-.01h.69v0c1.46-.01 2.65 1.17 2.65 2.63 0 0 0 0 0 .01Zm0-12v0c0 1.46-1.19 2.65-2.65 2.65h-.69v0C14.19 38 13 36.82 13 35.36c-.01-.01-.01-.01-.01-.02v-.69 0c-.01-1.47 1.17-2.66 2.63-2.66 0-.01 0-.01.01-.01h.69v0c1.46-.01 2.65 1.17 2.65 2.63 0 0 0 0 0 .01Zm16 12v0c0 1.46-1.19 2.65-2.65 2.65h-.69 0C30.19 50 29 48.82 29 47.36c-.01-.01-.01-.01-.01-.02v-.69l0-.001c-.01-1.47 1.17-2.66 2.63-2.66 0-.01 0-.01.01-.01h.69 -.001c1.46-.01 2.65 1.17 2.65 2.63 0 0 0 0 0 .01Zm0-12v0c0 1.46-1.19 2.65-2.65 2.65h-.69 0C30.19 38 29 36.82 29 35.36c-.01-.01-.01-.01-.01-.02v-.69h0c-.01-1.47 1.17-2.66 2.63-2.66 0-.01 0-.01.01-.01h.69 -.001c1.46-.01 2.65 1.17 2.65 2.63 0 0 0 0 0 .01Zm16 12v0c0 1.46-1.19 2.65-2.65 2.65h-.69v0C46.19 50 45 48.82 45 47.36c-.01-.01-.01-.01-.01-.02v-.69 -.001c-.01-1.47 1.17-2.66 2.63-2.66 0-.01 0-.01.01-.01h.69v0c1.46-.01 2.65 1.17 2.65 2.63 0 0 0 0 0 .01Zm0-12v0c0 1.46-1.19 2.65-2.65 2.65h-.69v0C46.19 38 45 36.82 45 35.36c-.01-.01-.01-.01-.01-.02v-.69 0c-.01-1.47 1.17-2.66 2.63-2.66 0-.01 0-.01.01-.01h.69v0c1.46-.01 2.65 1.17 2.65 2.63 0 0 0 0 0 .01Z"/><path d="M56.36 8H52v0c0-2.21-1.8-4-4-4 -2.21 0-4 1.79-4 4v2 0c0 1.1-.9 2-2 2 -1.11 0-2-.9-2-2v-.41 0C40 8.71 39.28 8 38.41 8H20v0c0-2.21-1.8-4-4-4 -2.21 0-4 1.79-4 4v2 0c0 1.1-.9 2-2 2 -1.11 0-2-.9-2-2V8h-.36 -.001c-2.02 0-3.64 1.62-3.64 3.64V18v0c0 1.1.89 2 2 2h52v0c1.1 0 2-.9 2-2v-6.36 0c0-2.02-1.63-3.64-3.64-3.64Z"/></g></svg>
                    <span><?php the_date(); ?></span>
                </span>
                <?php if ( has_category() ) : ?>
                    <span class="categories flex items-center space-x-2">
                        <svg class="size-4 fill-current" viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg"><path d="M52 16H34v0c-1.42-.01-2.78-.58-3.77-1.59l-3.9-4v-.001c-1.52-1.55-3.59-2.42-5.75-2.41H12v0c-4.42 0-8 3.58-8 8v36 0c0 4.41 3.58 8 8 8h40v0c4.41 0 8-3.59 8-8v-28 0c0-4.42-3.59-8-8-8Z"/></svg>
                        <span class="hover:*:underline"><?php the_category(', '); ?></span>
                    </span>
                <?php endif; ?>
                <?php if ( has_tag() ) : ?>
                    <span class="tags flex items-center space-x-2">
                        <svg class="size-4 fill-current" viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg"><path d="M48.72 9.76v0c.77-.79.76-2.06-.03-2.83 -.07-.07-.13-.12-.2-.18v0c-.86-.59-2.01-.46-2.72.3l-8.13 8.13v0c-.36.35-.93.39-1.32.09l-2.33-1.72v0c-1.24-.93-2.93-.93-4.16 0l-10.69 8v0c-2.01 1.52-3.18 3.91-3.15 6.44v24 0c0 4.41 3.58 8 8 8h16v0c4.41 0 8-3.59 8-8v-24 0c0-2.53-1.19-4.9-3.21-6.41l-3.71-2.78v-.001c-.4-.29-.48-.84-.19-1.24 .02-.04.05-.07.08-.1ZM38 25.08v0c-.67 3.24-3.83 5.34-7.08 4.68 -3.25-.67-5.35-3.83-4.69-7.08 .45-2.25 2.14-4.03 4.35-4.61h-.001c1-.26 2.04-.26 3.05 0v0c.26.07.42.34.35.61 -.03.08-.07.16-.14.22l-3.19 3.19v0c-.73.69-.86 1.81-.29 2.65v0c.65.89 1.9 1.08 2.79.43 .07-.06.14-.12.2-.18l3.44-3.44v0c.2-.2.52-.2.72.01 .04.04.08.1.1.16v0c.42 1.05.53 2.2.34 3.32Z"/></svg>
                        <span><?php the_tags(); ?></span>
                    </span>
                <?php endif; ?>
            </div>
            <div class="excerpt text-lg !leading-snug font-light mt-2"><?php the_excerpt(); ?></div>
        </header>

        <div class="entry-content prose prose-xl dark:prose-invert max-w-none prose-headings:font-heading prose-h2:font-medium prose-h2:mb-[0.5em]">
            <?php the_content(); ?>
        </div>
    </div>
</article>
