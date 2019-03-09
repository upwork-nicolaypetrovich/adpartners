<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>

        <?php if( is_home() ){ ?>
            <!-- front block-->
            <section id="front-block" style="background: url(<?php echo get_field('backgrounds', 39)[0]['img']; ?>); background-size: cover;">
                <div>
                    <div><a href="<?php echo home_url(); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo.svg" alt="ADPartners Real Estate Consultants"></a></div>
                    <div>
                        <p><?php echo get_post_meta( 39, 'fs-text', true ); ?></p>
                        <div><a class="button-style-2" href="<?php echo get_permalink(35); ?>"><?php echo __('I’m looking to buy'); ?></a><a class="button-style-2" href="<?php echo get_permalink(39); ?>"><?php echo __('I’M looking to sell'); ?></a></div>
                    </div>
                    <div>
                        <button id="front-scroll">
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
                        </button>
                    </div>
                </div>
            </section>
            <!-- front block-->
        <?php } ?>

        <div id="site-max-width">

            <!-- header-->
            <header>
                <div class="content-area">
                    <div class="header-content">
                        <div id="logo"><a href="<?php echo home_url(); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo.svg" alt="ADPartners Real Estate Consultants"></a></div>
                        <nav>
                            <?php  wp_nav_menu( array( 'container' => '', 'theme_location' => 'main' ) ); ?>
                        </nav>

                        <?php if( is_home() ){ ?>
                            <script>
                                $('#menu-main-menu > li:first-child').addClass( "current-menu-item current_page_item" );
                            </script>
                        <?php } ?>

                        <button id="nav-burger">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/menu.svg">
                        </button>
                    </div>
                </div>
            </header>
            <!-- header-->