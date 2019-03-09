            <!-- footer-->
            <footer>
                <div class="content-area">
                    <div class="footer-icons">
                        <a href="<?php echo get_theme_mod('i1');?>" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/f1.png" alt="Icon" width="18px" height="18px"></a>
                        <a href="<?php echo get_theme_mod('i2');?>" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/f2.png" alt="Icon" width="18px" height="18px"></a>
                        <a href="<?php echo get_theme_mod('i3');?>" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/f3.png" alt="Icon" width="18px" height="18px"></a>
                        <a href="<?php echo get_theme_mod('i4');?>" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/f4.png" alt="Icon" width="18px" height="18px"></a>
                        <a href="<?php echo get_theme_mod('i5');?>" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/f5.png" alt="Icon" width="18px" height="18px"></a>
                    </div>
                    <div class="footer-columns">
                        <div>
                            <div>
                                <address><?php echo get_theme_mod('f1');?></address>
                                <p><a href="mailto:<?php echo get_theme_mod('f4');?>"><?php echo get_theme_mod('f4');?></a></p>
                            </div>
                            <div>
                                <p><b><?php echo get_theme_mod('f5');?></b></p>
                                <p><?php echo get_theme_mod('f6');?></p>
                            </div>
                        </div>
                        <div>
                            <div>
                                <p><?php echo get_theme_mod('f7');?></p>
                                <p><?php echo get_theme_mod('f8');?></p>
                                <p><a href="mailto:<?php echo get_theme_mod('f9');?>"><?php echo get_theme_mod('f9');?></a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- footer-->

            <!-- book pop-up-->
            <div class="book-pop-up-container">
                <div class="book-pop-up">
                    <div>
                        <span id="book-pop-up-close">X</span>
                        <form action="" class="booking-form">
                            <p><?php echo get_theme_mod('book1');?></p>
                            <p><?php echo get_theme_mod('book2');?></p>
                            <div>
                                <input class="input-style-2" type="text" name="first-name" placeholder="<?php echo __('First Name'); ?>" required>
                                <input class="input-style-2" type="text" name="last-name" placeholder="<?php echo __('Last Name'); ?>" required>
                                <input class="input-style-2" type="email" name="email" placeholder="<?php echo __('Email Address'); ?>" required>
                                <input class="input-style-2" type="tel" name="phone" placeholder="<?php echo __('Phone Number'); ?>" required>
                                <textarea class="input-style-2" name="comments" placeholder="<?php echo __('Comments'); ?>" rows="2"></textarea>
                            </div>
                            <button class="button-style-4" type="submit"><?php echo get_theme_mod('book3');?></button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- book pop-up-->

            <!-- featured pop-up-->
            <div class="featured-pop-up-container">
                <div class="featured-pop-up">
                    <div>
                        <div id="featured-data-container">
                            <span id="featured-pop-up-close">X</span>
                            <div class="clear"></div>
                            <div id="loading">
                                <div class="lds-spinner"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
                            </div>
                            <div id="featured-item-container"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- featured pop-up-->

            <!-- header bg images -->
            <script>
                window.addEventListener('load', function() {
                    "use strict";

                    let imgs = [
                        <?php $images = get_field('backgrounds', 39); ?>
                        <?php foreach ($images as $img) { ?>
                            '<?php echo $img['img']; ?>',
                        <?php } ?>
                    ];

                    setInterval(function(){
                        let link = imgs[Math.floor(Math.random()*imgs.length)];
                        $('#front-block').css('background-image','url('+link+')');
                    }, 10000);

                });
            </script>
            <!-- header bg images -->

            <?php wp_footer(); ?>

        </div>
    </body>
</html>