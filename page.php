<?php
/**
 * The main template file.
 *
 * @package webdesignsuntheme
 */

get_header();

?>
        <main>
            <div class="content-area">
                <?php if ( have_posts() ) : the_post(); ?>
                    <h1><?php the_title(); ?></h1>
                    <?php the_content(); ?>
                <?php endif; ?>
            </div>
        </main>
        
<?php get_footer(); ?>