<section class="hello-section">
	<div id="hello-section__background-wrapper" class="hello-section__background-wrapper owl-carousel owl-theme">

		<?php if ( has_post_thumbnail() ) { ?>
			<div class="hello-section__background-wrapper__image background-cover lazy" data-src="<?php echo get_the_post_thumbnail_url(get_the_ID(),'full'); ?>" style="background-position: cover !important;" ></div><!-- /.hello-section__background-wrapper__image background-cover lazy -->
		<?php } else { ?>
			<div class="hello-section__background-wrapper__image background-cover lazy" data-src="https://maasai.com/wp-content/uploads/2017/09/bgd__intro.jpg" style="background-position: cover !important;" ></div><!-- /.hello-section__background-wrapper__image background-cover lazy -->
		<?php }?>

	</div><!-- /#hello-section__background-wrapper.hello-section__background-wrapper owl-carousel owl-theme -->
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
				<?php echo get_the_date(); ?>
			</div><!-- /.col-md-6 ml-md-auto -->
		</div><!-- /.row -->
	</div><!-- /.container -->
</div><!-- /.breadcrumbs -->
