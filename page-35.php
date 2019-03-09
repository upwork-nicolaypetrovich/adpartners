<?php
/**
 * The buying template file.
 *
 * @package webdesignsuntheme
 */

get_header();

?>
       <main>
            <!-- block 1-->
            <section class="landing-section-8 split">
                <div data-width="84">
                    <div>
                        <p><?php echo get_post_meta( get_the_ID(), 'title', true ); ?></p>
                        <p>
                            <button class="button-style-2" id="book-pop"><?php echo get_post_meta( get_the_ID(), 'button_1', true ); ?></button><a class="button-style-2" href="<?php echo get_permalink(50); ?>"><?php echo get_post_meta( get_the_ID(), 'button_2', true ); ?></a>
                        </p>
                        <p><?php echo get_post_meta( get_the_ID(), 'text', true ); ?></p>
                    </div>
                </div>
                <div data-width="16" style="background: url(<?php echo wp_get_attachment_image_src( get_post_meta( get_the_ID(), 'image', true ), 'landing-side-image' )[0]; ?>); background-size: cover;"></div>
            </section>
            <!-- block 1-->

            <!-- block 2 -->
            <section class="landing-section-11">
                <div class="content-area">
                    <div class="vertical-title"><?php echo get_field( "title_2_", get_the_ID() ); ?></div>
                </div>
                <div class="carousel-shift-conteiner">
                    <div class="carousel-conteiner">
                        <div class="carousel-slides-conteiner" id="carousel-featured">
                            <?php $real_est = new WP_Query( array( 'post_type' => 'real_est', 'posts_per_page'=> -1 ) ); ?>
                            <?php while ( $real_est->have_posts() ) { $real_est->the_post(); ?>
                            <div class="carousel-slide">
                                <div class="carusel-tile open-featured" data-id="<?php the_ID(); ?>">
                                    <img src="<?php the_post_thumbnail_url( 'featured-carousel' ); ?>" alt="<?php echo get_field( "address", get_the_ID() ); ?>" width="400" height="300">
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
                            <?php } wp_reset_postdata(); ?>
                        </div>
                    </div>
                </div>
                <div class="content-area" id="content-area-featured-button">
                    <a class="button-style-2" id="carousel-featured-button" href="<?php echo get_permalink(50); ?>"><?php echo get_field( "button_2_", get_the_ID() ); ?></a>
                </div>
            </section>
            <!-- block 2 -->

            <!-- block 3-->
            <section class="landing-section-9 split">
                <div data-width="78">
                    <div>
                        <p><?php echo get_post_meta( get_the_ID(), 'title3', true ); ?></p>
                        <p>
                            <span>
                                <svg enable-background="new 0 0 22 22" width="22" height="22" version="1.1" viewBox="0 0 47.001 47.001" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
                                    <path d="m46.907 20.12c-0.163-0.347-0.511-0.569-0.896-0.569h-2.927c-1.861-10.099-10.729-17.776-21.358-17.776-11.979 0-21.726 9.747-21.726 21.726s9.746 21.725 21.726 21.725c7.731 0 14.941-4.161 18.816-10.857 0.546-0.945 0.224-2.152-0.722-2.699-0.944-0.547-2.152-0.225-2.697 0.72-3.172 5.481-9.072 8.887-15.397 8.887-9.801 0-17.776-7.974-17.776-17.774 0-9.802 7.975-17.776 17.776-17.776 8.442 0 15.515 5.921 17.317 13.825h-2.904c-0.385 0-0.732 0.222-0.896 0.569-0.163 0.347-0.11 0.756 0.136 1.051l4.938 5.925c0.188 0.225 0.465 0.355 0.759 0.355 0.293 0 0.571-0.131 0.758-0.355l4.938-5.925c0.246-0.296 0.298-0.705 0.135-1.052z"></path>
                                    <path d="m21.726 6.713c-1.091 0-1.975 0.884-1.975 1.975v11.984c-0.893 0.626-1.481 1.658-1.481 2.83 0 1.906 1.551 3.457 3.457 3.457 0.522 0 1.014-0.125 1.458-0.334l6.87 3.965c0.312 0.181 0.65 0.266 0.986 0.266 0.682 0 1.346-0.354 1.712-0.988 0.545-0.943 0.222-2.152-0.724-2.697l-6.877-3.971c-0.092-1.044-0.635-1.956-1.449-2.526v-11.986c-2e-3 -1.09-0.887-1.975-1.977-1.975zm0 18.269c-0.817 0-1.481-0.665-1.481-1.48 0-0.816 0.665-1.481 1.481-1.481s1.481 0.665 1.481 1.481c0 0.815-0.665 1.48-1.481 1.48z"></path>
                                </svg>
                                <a class="button-style-2" href="<?php echo get_post_meta( get_the_ID(), 'button3_', true ); ?>" target="_blank"><?php echo get_post_meta( get_the_ID(), 'button3', true ); ?></a>
                            </span>
                        </p>
                        <p><?php echo get_post_meta( get_the_ID(), 'text3', true ); ?></p>
                    </div>
                </div>
                <div data-width="22" style="background: url(<?php echo wp_get_attachment_image_src( get_post_meta( get_the_ID(), 'image3', true ), 'landing-side-image' )[0]; ?>); background-size: cover;"></div>
            </section>
            <!-- block 3-->

            <!-- block 4-->
            <?php get_template_part( 'template-blocks/block', 'testimonials' ); ?>
            <!-- block 4-->

            <!-- block 5-->
            <?php get_template_part( 'template-blocks/block', 'team' ); ?>
            <!-- block 5-->

            <!-- block 6-->
            <?php get_template_part( 'template-blocks/block', 'consultation' ); ?>
            <!-- block 6-->

            <!-- block 7 -->
            <?php get_template_part( 'template-blocks/block', 'partners' ); ?>
            <!-- block 7 -->
        </main>
        
<?php get_footer(); ?>