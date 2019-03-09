<?php
/**
 * The featured template file.
 *
 * @package webdesignsuntheme
 */

get_header();

?>
       <main>
            <section class="content-area featured-top-bar">
                <div>
                    <div>
                        <a href="<?php echo get_permalink(35); ?>">
                            <svg width="32px" height="27px" version="1.1" viewBox="0 0 32 27" xmlns="http://www.w3.org/2000/svg">
                                <g fill="none" fill-rule="evenodd">
                                    <g transform="translate(-131 -510)" stroke="#0A0A0A" stroke-width="1.2">
                                        <g transform="translate(147 520) rotate(90) translate(-16 -16)">
                                            <polyline transform="translate(15.697 15.998) rotate(45) translate(-15.697 -15.998)" points="4.6968 4.9983 26.697 4.9983 26.697 26.998"></polyline>
                                            <path d="m30.436 16h-24.436"></path>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </a>
                    </div>
                    <div>
                        <p><?php echo get_field( "lb_title", get_the_ID() ); ?></p>
                        <p><?php echo get_field( "lb_text", get_the_ID() ); ?></p>
                    </div>
                </div>
                <div>
                    <button class="button-style-2"><?php echo get_field( "rb_title", get_the_ID() ); ?></button>
                </div>
            </section>
            <?php $page_id = get_the_ID(); ?>
            <div class="content-area">
                <!-- block 1-->
                <section class="featured-grid">
                    <?php $real_est = new WP_Query( array( 'post_type' => 'real_est', 'posts_per_page'=> -1 ) ); ?>
                    <?php $counter = 0; while ( $real_est->have_posts() ) { $real_est->the_post(); ?>
                        <div class="<?php if($counter==2) echo 'full'; ?> open-featured" data-id="<?php the_ID(); ?>">
                            <div style="background:url(<?php the_post_thumbnail_url( 'featured-grid' ); ?>); background-size: cover"></div>
                            <div>
                                <p><?php echo get_field( "address", get_the_ID() ); ?></p>
                                <p>
                                    <?php $tags = get_field('rtags', get_the_ID()); ?>
                                    <?php foreach ($tags as $block) { ?>
                                        <?php echo $block['text']; ?>,&nbsp;
                                    <?php } ?>
                                </p>
                                <p><?php echo get_field( "price", get_the_ID() ); ?></p>
                            </div>
                        </div>

                        <?php if($counter==4) { ?>
                </section>
                <!-- block 1-->
            </div>
            <!-- block 2-->
            <div class="featured-banner" style="background: url(<?php echo get_field( "b_image", $page_id ); ?>); background-size: contain; background-repeat: no-repeat">
                <div class="content-area featured-banner-text">
                    <p><?php echo get_field( "b_text",$page_id ); ?> &nbsp;<a class="button-style-2" href="<?php echo get_field( "b_link", $page_id ); ?>" target="_blank"><?php echo get_field( "b_button", $page_id ); ?></a></p>
                </div>
            </div>
            <!-- block 2-->
            <div class="content-area">
                <section class="featured-grid">
                        <?php } ?>

                    <?php $counter++; } wp_reset_postdata(); ?>
            </div>
            <!-- block 1-->
            <!-- block 4-->
            <?php get_template_part( 'template-blocks/block', 'consultation' ); ?>
            <!-- block 4-->
        </main>
        
<?php get_footer(); ?>