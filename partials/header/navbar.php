<?php 
    if (get_field('ad_image', 'options')):
        get_template_part('templates/modal');
    endif;
?>

<nav class="navbar" data-aos="fade-down">
    <h2 class="hide">Main navigation</h2>
    <div class="container">
        <div class="row w-100 mx-auto no-gutters align-items-center align-items-lg-end justify-content-between">
            <div class="col col-auto">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="navbar-brand">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/logo__campi-ya-kanzi.svg" alt="<?php echo get_bloginfo('name'); ?>" class="navbar-brand__logo svg" />
                </a>
            </div><!-- /.col col-auto -->
            <div class="col col-auto">
              <!--agent-login div start here-->
			<div class="agent-login">
            <a href="/diary/" class="diary">Diary</a>
            <a href="http://cyk.resrequest.com/" class="agent-login-btn">AGENTS LOGIN</a>
            </div>
			<!--agent-login div  end here-->
			  <?php
                    wp_nav_menu([
                        'menu'            => 'Main Navigation',
                        'theme_location'  => 'main_navigation',
                        'container'       => false,
                        'menu_id'         => false,
                        'menu_class'      => 'navbar-nav mr-auto',
                        'depth'           => 2,
                        'fallback_cb'     => 'bs4navwalker::fallback',
                        'walker'          => new bs4navwalker()
                    ]);
                ?>
                <button id="mmenu-triger" class="hamburger hamburger--squeeze" type="button" aria-label="Menu">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div><!-- /.col col-auto -->
        </div><!-- /.row w-100 mx-auto no-gutters align-items-center align-items-lg-end justify-content-between -->
    </div><!-- /.container -->
</nav><!-- /.navbar -->