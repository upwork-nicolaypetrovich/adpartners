  <section class="landing-section-5">
    <div class="content-area">
      <div class="vertical-title"><?php echo __('Testimonials'); ?></div>
      <div class="testimonials-block">
        <div class="div-triangle-up"></div>
        <div class="testimonials-container">
          <ul>
            <?php $testimonials = new WP_Query( array( 'post_type' => 'testimonials', 'posts_per_page'=> 3 ) ); ?>
            <?php $i = 1; while ( $testimonials->have_posts() ) { $testimonials->the_post(); ?>
              <li id="testimonial-<?php echo $i; ?>">
                <blockquote>
                  <?php the_content(); ?>
                  <cite><?php the_title(); ?></cite>
                </blockquote>
              </li>
            <?php $i++; } wp_reset_postdata(); ?>
          </ul>
        </div>
        <div class="testimonials-bullets">
          <ul>
            <?php $i = 1; while ( $testimonials->have_posts() ) { $testimonials->the_post(); ?>
              <li class="<?php if($i==1) echo 'active'; ?>" data-id="<?php echo $i; ?>">
                <img src="<?php the_post_thumbnail_url( 'testimonial' ); ?>" alt="<?php the_title(); ?>"/>
              </li>
            <?php $i++; } wp_reset_postdata(); ?>
          </ul>
        </div>
      </div>
    </div>
  </section>