<?php $images = get_field('hello_section_background_image'); ?>

<section class="hello-section">
	<div id="hello-section__background-wrapper" class="hello-section__background-wrapper owl-carousel owl-theme">

		<?php foreach( $images as $image ): ?>

			<div class="hello-section__background-wrapper__image background-cover lazy" data-src="<?php echo $image['url']; ?>" style="background-position: <?php the_field('hello_section_background_position'); ?> !important;" ></div><!-- /.hello-section__background-wrapper__image background-cover lazy -->

		<?php endforeach; ?>

	</div><!-- /#hello-section__background-wrapper.hello-section__background-wrapper owl-carousel owl-theme -->

	<?php if (is_array($images) && (count($images) > 1)) : ?>

		<ul class="hello-section__background-wrapper-controls">
			<li class="hello-section__background-wrapper-controls__single-control">
				<button class="hello-section__background-wrapper-controls__single-control__button hello-section__background-wrapper-controls__single-control__button--left" type="button">
					<svg id="arrow2" class="hello-section__background-wrapper-controls__single-control__button__icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 22" height="32" width="42">
						<title>icon__arrow--white</title>
						<path id="Arrow_Forward" class="st0" d="M32,11c0-0.3-0.1-0.5-0.3-0.7l-9.9-10c-0.4-0.4-1-0.4-1.4,0c-0.4,0.4-0.4,1,0,1.4 c0,0,0,0,0,0l8.2,8.3H1c-0.6,0-1,0.4-1,1c0,0.6,0.4,1,1,1h27.6l-8.2,8.3c-0.4,0.4-0.4,1,0,1.4c0,0,0,0,0,0c0.4,0.4,1,0.4,1.4,0 l9.9-10C31.9,11.5,32,11.3,32,11z" />
					</svg>
				</button>
			</li><!-- /.hello-section__background-wrapper-controls__single-control -->
			<li class="hello-section__background-wrapper-controls__single-control">
				<button class="hello-section__background-wrapper-controls__single-control__button hello-section__background-wrapper-controls__single-control__button--right" type="button">
					<svg id="arrow2" class="hello-section__background-wrapper-controls__single-control__button__icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 22" height="32" width="42">
						<title>icon__arrow--white</title>
						<path id="Arrow_Forward" class="st0" d="M32,11c0-0.3-0.1-0.5-0.3-0.7l-9.9-10c-0.4-0.4-1-0.4-1.4,0c-0.4,0.4-0.4,1,0,1.4 c0,0,0,0,0,0l8.2,8.3H1c-0.6,0-1,0.4-1,1c0,0.6,0.4,1,1,1h27.6l-8.2,8.3c-0.4,0.4-0.4,1,0,1.4c0,0,0,0,0,0c0.4,0.4,1,0.4,1.4,0 l9.9-10C31.9,11.5,32,11.3,32,11z" />
					</svg>
				</button>
			</li><!-- /.hello-section__background-wrapper-controls__single-control -->
		</ul><!-- /.hello-section__background-wrapper-controls -->

	<?php endif; ?>

	<div class="container">
		<div class="row">
			<div class="col-md-8 col-lg-6 col-xl-5">
				<div class="hello-section__content-wrapper text-center text-md-right" data-aos="fade">
					<h1 class="hello-section__content-wrapper__title text-uppercase"><?php if(get_field('hello_section_title')) { the_field('hello_section_title'); } else { the_title(); } ?></h1><!-- /.hello-section__content-wrapper__title text-uppercase -->
				</div><!-- /.hello-section__content-wrapper text-center text-md-right -->
			</div><!-- /.col-md-8 col-lg-6 col-xl-5 -->
		</div><!-- /.row -->
	</div><!-- /.container -->
</section><!-- /.hello-section -->
<div class="breadcrumbs">
	<div class="container">
		<div class="row">
			<div class="col-md-6 ml-md-auto">
				<ul class="list-unstyled d-flex">
			      <?php bcn_display_list(); ?>
			    </ul><!-- /.list-unstyled d-flex -->
			</div><!-- /.col-md-6 ml-md-auto -->
		</div><!-- /.row -->
	</div><!-- /.container -->
</div><!-- /.breadcrumbs -->
