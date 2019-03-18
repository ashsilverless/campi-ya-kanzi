<div class="footer-wrapper">
	<footer class="main-footer">
		<?php get_template_part( 'partials/gallery' ); ?>
		<div class="footer-navigation">
			<div class="container">
				<div class="row align-items-center justify-content-center justify-content-lg-between">
					<div class="col-12 col-md-auto">
						<?php get_template_part( 'partials/social-icons' ); ?>
					</div><!-- /.col-12 col-md-auto -->
					<div class="col-12 col-md-auto">
						<?php
						    wp_nav_menu([
						        'menu'            => 'Main Footer Navigation',
						        'theme_location'  => 'main_footer_navigation',
						        'menu_class'      => 'text-center footer-navigation__menu d-md-flex list-unstyled element-small-margin-top',
						        'items_wrap' 	  => '<ul id="%1$s" class="%2$s">%3$s<li class="website-by">Website by<a href="http://www.silverless.co.uk/">&nbsp;Silverless</a></li></ul>'
						    ]);
						?>
					</div><!-- /.col-12 col-md-auto -->
				</div><!-- /.row align-items-center justify-content-center justify-content-lg-between -->
			</div><!-- /.container -->
		</div><!-- /.footer-navigation -->
	</footer><!-- /.main-footer -->
</div><!-- /.footer-wrapper -->