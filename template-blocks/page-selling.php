<?php the_post(); ?>

            <!-- block 1 -->
            <section class="landing-section-1 split">
                <div data-width="83">
                    <div>
                        <p><?php echo get_post_meta( 39, 'title', true ); ?></p>
                        <p><?php echo get_post_meta( 39, 'text', true ); ?></p>
                        <p>
                            <button class="button-style-2" id="book-pop"><?php echo get_post_meta( 39, 'button', true ); ?></button>
                        </p>
                    </div>
                </div>
                <div data-width="17" style="background: url(<?php echo wp_get_attachment_image_src( get_post_meta( 39, 'image', true ), 'landing-side-image' )[0]; ?>); background-size: cover;"></div>
            </section>
            <!-- block 1 -->

            <!-- block 2 -->
            <section class="landing-section-2 split">
                <div data-width="6"></div>
                <div data-width="94">
                    <div>
                        <form action="" class="download-form">
                            <p><?php echo get_post_meta( 39, 'title2', true ); ?></p>
                            <p><?php echo get_post_meta( 39, 'text2', true ); ?></p>
                            <div>
                                <input class="input-style-1" type="email" name="email" placeholder="<?php echo __('Enter Email Address'); ?>" required>
                                <button class="button-style-4" type="submit"><?php echo __('Email link'); ?></button>
                            </div>
                        </form>
                    </div>
                    <div style="background: url(http://fireaff.com/images/macboock.png); background-size: cover;"></div>
                </div>
            </section>
            <!-- block 2 -->

            <!-- block 3 -->
            <section class="landing-section-3">
                <div class="content-area">
                    <div class="vertical-title"><?php echo get_post_meta( 39, 'vertical_title3', true ); ?></div>
                    <p><?php echo get_post_meta( 39, 'title3', true ); ?></p>
                    <p><?php echo get_post_meta( 39, 'text3', true ); ?></p>
                    <div class="grid-blocks">
                        <?php $tiles = get_field('tile3', 39); ?>
                        <?php foreach ($tiles as $tile) { ?>
                            <div>
                                <?php foreach ($tile['large_text'] as $text) { ?>
                                    <div class="g-style-1"><?php echo $text['text']; ?></div>
                                <?php } ?>
                                <?php foreach ($tile['yellow_text'] as $text) { ?>
                                    <div class="g-style-2"><?php echo $text['text']; ?></div>
                                <?php } ?>
                                <?php foreach ($tile['simple_text'] as $text) { ?>
                                    <div class="g-style-3"><?php echo $text['text']; ?></div>
                                <?php } ?>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </section>
            <!-- block 3 -->

            <!-- block 4 -->
            <section class="landing-section-4">
                <div class="content-area">
                    <div class="vertical-title"><?php echo get_post_meta( 39, 'vertical_title4', true ); ?></div>
                    <p><?php echo get_post_meta( 39, 'title4', true ); ?></p>
                    <p><?php echo get_post_meta( 39, 'text4', true ); ?></p>
                </div>
                <div class="carousel-shift-conteiner">
                    <div class="carousel-conteiner">
                        <div class="carousel-slides-conteiner" id="carousel-what-we-do">
                            <?php $carousel = get_field('carousel', 39); ?>
                            <?php foreach ($carousel as $t) { ?>
                            <div class="carousel-slide">
                                <div class="carusel-tile">
                                    <p><?php echo $t['title']; ?></p>
                                    <p><?php echo $t['text']; ?></p>
                                    <ul>
                                        <?php foreach ($t['links'] as $l) { ?>
                                        <li>
                                            <a href="<?php echo $l['link']; ?>" target="_blank">
                                                <img src="<?php echo $l['icon']; ?>" height="30px" alt="Icon">
                                            </a>
                                        </li>
                                        <?php } ?>
                                    </ul>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </section>
            <!-- block 4 -->

            <!-- block 5 -->
            <?php get_template_part( 'template-blocks/block', 'testimonials' ); ?>
            <!-- block 5 -->

            <!-- block 6 -->
            <?php get_template_part( 'template-blocks/block', 'team' ); ?>
            <!-- block 6 -->

            <!-- block 7 -->
            <?php get_template_part( 'template-blocks/block', 'consultation' ); ?>
            <!-- block 7 -->

            <!-- block 8 -->
            <?php get_template_part( 'template-blocks/block', 'partners' ); ?>
            <!-- block 8 -->