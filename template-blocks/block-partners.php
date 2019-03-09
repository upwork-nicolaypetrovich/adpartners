<section class="landing-section-10">
    <div class="content-area">
        <div class="vertical-title"><?php echo __('Our preferred partners'); ?></div>
    </div>
    <div class="carousel-shift-conteiner">
        <div class="carousel-conteiner">
            <div class="carousel-slides-conteiner" id="carousel-partners">
                <?php $partners = new WP_Query( array( 'post_type' => 'partners', 'posts_per_page'=> -1 ) ); ?>
                <?php while ( $partners->have_posts() ) { $partners->the_post(); ?>
                <div class="carousel-slide">
                    <div class="carusel-tile">
                        <?php the_post_thumbnail(); ?>
                        <p><?php the_title(); ?></p>
                        <?php the_content(); ?>
                    </div>
                </div>
                <?php } wp_reset_postdata(); ?>
            </div>
        </div>
    </div>
</section>