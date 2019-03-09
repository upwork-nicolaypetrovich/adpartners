                        <div class="featured-slider-container">
                            <div class="featured-slider">
                                <?php $slider = get_field('gallery', get_the_ID()); ?>
                                <?php foreach ($slider as $block) { ?>
                                    <div>
                                        <div class="featured-slide-container" style="background:url(<?php echo $block['image']; ?>); background-size: cover"></div>
                                    </div>
                                <?php } ?>
                            </div>
                            <div class="featured-controls">
                                <div></div>
                                <div></div>
                            </div>
                        </div>
                        <div class="clear"></div>
                        <div class="featured-item-description">
                            <div class="featured-item-address"><?php echo get_field( "address", get_the_ID() ); ?></div>
                            <div class="featured-item-excerpt"><?php the_excerpt(); ?></div>
                            <div class="featured-item-content"><?php the_content(); ?></div>
                            <div class="featured-item-tags">
                                <ul>
                                    <?php $tags = get_field('rtags', get_the_ID()); ?>
                                    <?php foreach ($tags as $block) { ?>
                                        <li>
                                            <img src="<?php echo $block['icon']; ?>" width="30" height="30" alt="Icon">
                                            <?php echo $block['text']; ?>
                                        </li>
                                    <?php } ?>
                                </ul>
                            </div>
                            <p><a class="button-style-2" href="https://www.google.com/maps" target="_blank"><?php echo __('View location on map'); ?></a></p>
                            <p>
                                <button class="button-style-6"><?php echo __('Book a viewing'); ?></button>
                            </p>
                            <p>
                                <?php if ( get_field( "file1", get_the_ID() ) ){ ?>
                                <a class="button-style-5 fd1" href="<?php echo get_field( "file1", get_the_ID() ); ?>" download><?php echo __('Download feature sheet'); ?></a>
                                <?php } ?>
                                <?php if ( get_field( "file2", get_the_ID() ) ){ ?>
                                <a class="button-style-5" href="<?php echo get_field( "file2", get_the_ID() ); ?>" download><?php echo __('Download floor plan'); ?></a>
                                <?php } ?>
                            </p>
                        </div>