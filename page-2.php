<?php
/**
 * The about template file.
 *
 * @package webdesignsuntheme
 */

get_header();

?>
        <main>
            <article class="content-area">
                <!-- block 1-->
                <section class="about-section-1">
                  <?php if ( have_posts() ) : the_post(); ?>
                    <p><?php the_title(); ?></p>
                    <?php the_content(); ?>
                    <img class="video-preview" src="<?php echo get_field('preview', get_the_ID()); ?>" alt="Preview" onclick="$(this).next().show(); $(this).hide();">
                    <div class="videoWrapper" style="display: none">
                        <iframe width="560" height="349" src="http://www.youtube.com/embed/<?php echo ltrim(parse_url(get_field('youtube_link', get_the_ID()))['query'], 'v='); ?>?rel=0&hd=1" frameborder="0" allowfullscreen></iframe>
                    </div>
                    <?php echo get_field('content', get_the_ID()); ?>
                  <?php endif; ?>
                </section>
                <!-- block 1-->
                <!-- block 2-->
                <section class="about-section-2">
                    <?php $team = get_field('team', get_the_ID()); ?>
                    <?php foreach ($team as $t) { ?>
                        <div>
                            <div><img src="<?php echo wp_get_attachment_image_src( $t['image'], 'team-photo' )[0]; ?>" alt="<?php echo $t['name']; ?>"></div>
                            <div>
                                <p><?php echo $t['name']; ?></p>
                                <p><?php echo $t['title']; ?></p>
                                <p><?php echo $t['text']; ?></p>
                            </div>
                        </div>
                    <?php } ?>
                </section>
                <!-- block 2-->
            </article>
            <!-- block 3-->
            <?php get_template_part( 'template-blocks/block', 'consultation' ); ?>
            <!-- block 3-->
        </main>
        
<?php get_footer(); ?>