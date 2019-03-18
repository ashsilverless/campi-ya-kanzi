<?php
    /*
        Template Name: Live Cam
    */
?>

<?php get_header(); ?>

<main id="main" class="live-cam-template-page" tabindex="-1">

	<h1 class="hide"><?php the_title(); ?></h1>

	<div class="recent-capture margin-bottom">
		<div class="container-fluid">
			<div class="row no-gutters">
				<div class="col-md-4">
					<div class="single-recent">
						<a href="http://www.campiyakanzi.com/webcam/MWCTwebcam.jpg" rel="gallery-1" class="single-recent__image-link background-cover d-block lazy mobile-hide" data-src="http://www.campiyakanzi.com/webcam/MWCTwebcam.jpg">
							<img src="http://www.campiyakanzi.com/webcam/MWCTwebcam.jpg" />
						</a>
						
						<img src="http://www.campiyakanzi.com/webcam/MWCTwebcam.jpg" class="mobile-only"/>
						
						<h2 class="single-recent__title element-small-margin-top"><?php the_field( 'recent_title_1' ); ?></h2><!-- /.single-recent__title element-small-margin-top -->
						<div class="single-recent__description element-extra-small-margin-top">
							<p><?php the_field( 'recent_description_1' ); ?></p>
						</div><!-- /.single-recent__description element-extra-small-margin-top -->

					</div><!-- /.single-recent -->
				</div><!-- /.col-md-4 -->
				<div class="col-md-4">
					<div class="single-recent element-small-margin-top mt-md-0">
						<a href="http://www.campiyakanzi.com/webcam/kanzi.jpg" rel="gallery-2" class="single-recent__image-link background-cover d-block lazy mobile-hide">
							<img src="http://www.campiyakanzi.com/webcam/kanzi.jpg" />
							</a>
							
							<img src="http://www.campiyakanzi.com/webcam/kanzi.jpg" class="mobile-only"/>
							
						<h2 class="single-recent__title element-small-margin-top"><?php the_field( 'recent_title_2' ); ?></h2><!-- /.single-recent__title element-small-margin-top -->
						<div class="single-recent__description element-extra-small-margin-top">
							<p><?php the_field( 'recent_description_2' ); ?></p>
						</div><!-- /.single-recent__description element-extra-small-margin-top -->

					</div><!-- /.single-recent element-small-margin-top mt-md-0 -->
				</div><!-- /.col-md-4 -->
				<div class="col-md-4">
					<div class="single-recent element-small-margin-top mt-md-0">
						<a href="http://campiyakanzi.com/webcam/repeaterwebcam.jpg" rel="gallery-3" class="single-recent__image-link background-cover d-block lazy mobile-hide" data-src="http://campiyakanzi.com/webcam/repeaterwebcam.jpg">
							<img src="http://campiyakanzi.com/webcam/repeaterwebcam.jpg" />
						</a>
						
						<img src="http://campiyakanzi.com/webcam/repeaterwebcam.jpg" class="mobile-only" />
						
						<h2 class="single-recent__title element-small-margin-top"><?php the_field( 'recent_title_3' ); ?></h2><!-- /.single-recent__title element-small-margin-top -->
						<div class="single-recent__description element-extra-small-margin-top">
							<p><?php the_field( 'recent_description_3' ); ?></p>
						</div><!-- /.single-recent__description element-extra-small-margin-top -->

					</div><!-- /.single-recent element-small-margin-top mt-md-0 -->
				</div><!-- /.col-md-4 -->
			</div><!-- /.row no-gutters -->
		</div><!-- /.container-fluid -->
	</div><!-- /.recent-capture margin-bottom -->

	<div class="gallery-section element-margin-top" data-aos="fade">

		<?php date_default_timezone_set('Africa/Nairobi'); ?>
		<?php $hour_now = date('G'); ?>

		<div class="container">
			<div class="row">
				<div class="col-md-8 col-lg-6 ml-auto">
					<h3 class="gallery-section__title element-margin-top"><?php the_field( 'recent_title_1' ); ?></h3><!-- /.gallery-section__title element-margin-top -->
					<span class="gallery-section__description">Hour by hour.</span>
				</div><!-- /.col-md-8 col-lg-6 ml-auto -->
				<div class="col-12">
					<div class="gallery-section__wrapper">
						<?php $hour_before = $hour_now; ?>
						<?php if($hour_before > 19) $hour_before = 6; ?>
						<?php if($hour_before < 6) $hour_before = 19; ?>

						<a href="http://www.campiyakanzi.com/webcam/webcam_day/MWCT_hour<?php if($hour_before < 10) { echo '0'.$hour_before;} else { echo $hour_before;} ?>.jpg" rel="gallery-1" class="gallery-section__wrapper__thumbnail-link">
							<div class="gallery-section__wrapper__thumbnail-link__image background-cover lazy"
							data-src="http://www.campiyakanzi.com/webcam/webcam_day/MWCT_hour<?php if($hour_before < 10) { echo '0'.$hour_before;} else { echo $hour_before;} ?>.jpg"></div><!-- /.gallery-section__wrapper__thumbnail-link__image background-cover lazy -->
							<span class="gallery-section__wrapper__thumbnail-link__time"><?php if($hour_before < 10) { echo '0'.$hour_before;} else { echo $hour_before;} ?>:00</span>
						</a>

						<?php $hour_before = ($hour_before - 1); ?>
						<?php if($hour_before > 19) $hour_before = 6; ?>
						<?php if($hour_before < 6) $hour_before = 19; ?>

						<a href="http://www.campiyakanzi.com/webcam/webcam_day/MWCT_hour<?php if($hour_before < 10) { echo '0'.$hour_before;} else { echo $hour_before;} ?>.jpg" rel="gallery-1" class="gallery-section__wrapper__thumbnail-link">
							<div class="gallery-section__wrapper__thumbnail-link__image background-cover lazy"
							data-src="http://www.campiyakanzi.com/webcam/webcam_day/MWCT_hour<?php if($hour_before < 10) { echo '0'.$hour_before;} else { echo $hour_before;} ?>.jpg"></div><!-- /.gallery-section__wrapper__thumbnail-link__image background-cover lazy -->
							<span class="gallery-section__wrapper__thumbnail-link__time"><?php if($hour_before < 10) { echo '0'.$hour_before;} else { echo $hour_before;} ?>:00</span>
						</a>

						<?php $hour_before = ($hour_before - 1); ?>
						<?php if($hour_before > 19) $hour_before = 6; ?>
						<?php if($hour_before < 6) $hour_before = 19; ?>

						<a href="http://www.campiyakanzi.com/webcam/webcam_day/MWCT_hour<?php if($hour_before < 10) { echo '0'.$hour_before;} else { echo $hour_before;} ?>.jpg" rel="gallery-1" class="gallery-section__wrapper__thumbnail-link">
							<div class="gallery-section__wrapper__thumbnail-link__image background-cover lazy"
							data-src="http://www.campiyakanzi.com/webcam/webcam_day/MWCT_hour<?php if($hour_before < 10) { echo '0'.$hour_before;} else { echo $hour_before;} ?>.jpg"></div><!-- /.gallery-section__wrapper__thumbnail-link__image background-cover lazy -->
							<span class="gallery-section__wrapper__thumbnail-link__time"><?php if($hour_before < 10) { echo '0'.$hour_before;} else { echo $hour_before;} ?>:00</span>
						</a>

						<?php $hour_before = ($hour_before - 1); ?>
						<?php if($hour_before > 19) $hour_before = 6; ?>
						<?php if($hour_before < 6) $hour_before = 19; ?>

						<a href="http://www.campiyakanzi.com/webcam/webcam_day/MWCT_hour<?php if($hour_before < 10) { echo '0'.$hour_before;} else { echo $hour_before;} ?>.jpg" rel="gallery-1" class="gallery-section__wrapper__thumbnail-link">
							<div class="gallery-section__wrapper__thumbnail-link__image background-cover lazy"
							data-src="http://www.campiyakanzi.com/webcam/webcam_day/MWCT_hour<?php if($hour_before < 10) { echo '0'.$hour_before;} else { echo $hour_before;} ?>.jpg"></div><!-- /.gallery-section__wrapper__thumbnail-link__image background-cover lazy -->
							<span class="gallery-section__wrapper__thumbnail-link__time"><?php if($hour_before < 10) { echo '0'.$hour_before;} else { echo $hour_before;} ?>:00</span>
						</a>

						<?php $hour_before = ($hour_before - 1); ?>
						<?php if($hour_before > 19) $hour_before = 6; ?>
						<?php if($hour_before < 6) $hour_before = 19; ?>

						<a href="http://www.campiyakanzi.com/webcam/webcam_day/MWCT_hour<?php if($hour_before < 10) { echo '0'.$hour_before;} else { echo $hour_before;} ?>.jpg" rel="gallery-1" class="gallery-section__wrapper__thumbnail-link">
							<div class="gallery-section__wrapper__thumbnail-link__image background-cover lazy"
							data-src="http://www.campiyakanzi.com/webcam/webcam_day/MWCT_hour<?php if($hour_before < 10) { echo '0'.$hour_before;} else { echo $hour_before;} ?>.jpg"></div><!-- /.gallery-section__wrapper__thumbnail-link__image background-cover lazy -->
							<span class="gallery-section__wrapper__thumbnail-link__time"><?php if($hour_before < 10) { echo '0'.$hour_before;} else { echo $hour_before;} ?>:00</span>
						</a>

						<?php $hour_before = ($hour_before - 1); ?>
						<?php if($hour_before > 19) $hour_before = 6; ?>
						<?php if($hour_before < 6) $hour_before = 19; ?>

						<a href="http://www.campiyakanzi.com/webcam/webcam_day/MWCT_hour<?php if($hour_before < 10) { echo '0'.$hour_before;} else { echo $hour_before;} ?>.jpg" rel="gallery-1" class="gallery-section__wrapper__thumbnail-link">
							<div class="gallery-section__wrapper__thumbnail-link__image background-cover lazy"
							data-src="http://www.campiyakanzi.com/webcam/webcam_day/MWCT_hour<?php if($hour_before < 10) { echo '0'.$hour_before;} else { echo $hour_before;} ?>.jpg"></div><!-- /.gallery-section__wrapper__thumbnail-link__image background-cover lazy -->
							<span class="gallery-section__wrapper__thumbnail-link__time"><?php if($hour_before < 10) { echo '0'.$hour_before;} else { echo $hour_before;} ?>:00</span>
						</a>

						<?php $hour_before = ($hour_before - 1); ?>
						<?php if($hour_before > 19) $hour_before = 6; ?>
						<?php if($hour_before < 6) $hour_before = 19; ?>

						<a href="http://www.campiyakanzi.com/webcam/webcam_day/MWCT_hour<?php if($hour_before < 10) { echo '0'.$hour_before;} else { echo $hour_before;} ?>.jpg" rel="gallery-1" class="gallery-section__wrapper__thumbnail-link">
							<div class="gallery-section__wrapper__thumbnail-link__image background-cover lazy"
							data-src="http://www.campiyakanzi.com/webcam/webcam_day/MWCT_hour<?php if($hour_before < 10) { echo '0'.$hour_before;} else { echo $hour_before;} ?>.jpg"></div><!-- /.gallery-section__wrapper__thumbnail-link__image background-cover lazy -->
							<span class="gallery-section__wrapper__thumbnail-link__time"><?php if($hour_before < 10) { echo '0'.$hour_before;} else { echo $hour_before;} ?>:00</span>
						</a>

						<?php $hour_before = ($hour_before - 1); ?>
						<?php if($hour_before > 19) $hour_before = 6; ?>
						<?php if($hour_before < 6) $hour_before = 19; ?>

						<a href="http://www.campiyakanzi.com/webcam/webcam_day/MWCT_hour<?php if($hour_before < 10) { echo '0'.$hour_before;} else { echo $hour_before;} ?>.jpg" rel="gallery-1" class="gallery-section__wrapper__thumbnail-link">
							<div class="gallery-section__wrapper__thumbnail-link__image background-cover lazy"
							data-src="http://www.campiyakanzi.com/webcam/webcam_day/MWCT_hour<?php if($hour_before < 10) { echo '0'.$hour_before;} else { echo $hour_before;} ?>.jpg"></div><!-- /.gallery-section__wrapper__thumbnail-link__image background-cover lazy -->
							<span class="gallery-section__wrapper__thumbnail-link__time"><?php if($hour_before < 10) { echo '0'.$hour_before;} else { echo $hour_before;} ?>:00</span>
						</a>

						<?php $hour_before = ($hour_before - 1); ?>
						<?php if($hour_before > 19) $hour_before = 6; ?>
						<?php if($hour_before < 6) $hour_before = 19; ?>

						<a href="http://www.campiyakanzi.com/webcam/webcam_day/MWCT_hour<?php if($hour_before < 10) { echo '0'.$hour_before;} else { echo $hour_before;} ?>.jpg" rel="gallery-1" class="gallery-section__wrapper__thumbnail-link">
							<div class="gallery-section__wrapper__thumbnail-link__image background-cover lazy"
							data-src="http://www.campiyakanzi.com/webcam/webcam_day/MWCT_hour<?php if($hour_before < 10) { echo '0'.$hour_before;} else { echo $hour_before;} ?>.jpg"></div><!-- /.gallery-section__wrapper__thumbnail-link__image background-cover lazy -->
							<span class="gallery-section__wrapper__thumbnail-link__time"><?php if($hour_before < 10) { echo '0'.$hour_before;} else { echo $hour_before;} ?>:00</span>
						</a>

						<?php $hour_before = ($hour_before - 1); ?>
						<?php if($hour_before > 19) $hour_before = 6; ?>
						<?php if($hour_before < 6) $hour_before = 19; ?>

						<a href="http://www.campiyakanzi.com/webcam/webcam_day/MWCT_hour<?php if($hour_before < 10) { echo '0'.$hour_before;} else { echo $hour_before;} ?>.jpg" rel="gallery-1" class="gallery-section__wrapper__thumbnail-link">
							<div class="gallery-section__wrapper__thumbnail-link__image background-cover lazy"
							data-src="http://www.campiyakanzi.com/webcam/webcam_day/MWCT_hour<?php if($hour_before < 10) { echo '0'.$hour_before;} else { echo $hour_before;} ?>.jpg"></div><!-- /.gallery-section__wrapper__thumbnail-link__image background-cover lazy -->
							<span class="gallery-section__wrapper__thumbnail-link__time"><?php if($hour_before < 10) { echo '0'.$hour_before;} else { echo $hour_before;} ?>:00</span>
						</a>

						<?php $hour_before = ($hour_before - 1); ?>
						<?php if($hour_before > 19) $hour_before = 6; ?>
						<?php if($hour_before < 6) $hour_before = 19; ?>

						<a href="http://www.campiyakanzi.com/webcam/webcam_day/MWCT_hour<?php if($hour_before < 10) { echo '0'.$hour_before;} else { echo $hour_before;} ?>.jpg" rel="gallery-1" class="gallery-section__wrapper__thumbnail-link">
							<div class="gallery-section__wrapper__thumbnail-link__image background-cover lazy"
							data-src="http://www.campiyakanzi.com/webcam/webcam_day/MWCT_hour<?php if($hour_before < 10) { echo '0'.$hour_before;} else { echo $hour_before;} ?>.jpg"></div><!-- /.gallery-section__wrapper__thumbnail-link__image background-cover lazy -->
							<span class="gallery-section__wrapper__thumbnail-link__time"><?php if($hour_before < 10) { echo '0'.$hour_before;} else { echo $hour_before;} ?>:00</span>
						</a>

						<?php $hour_before = ($hour_before - 1); ?>
						<?php if($hour_before > 19) $hour_before = 6; ?>
						<?php if($hour_before < 6) $hour_before = 19; ?>

						<a href="http://www.campiyakanzi.com/webcam/webcam_day/MWCT_hour<?php if($hour_before < 10) { echo '0'.$hour_before;} else { echo $hour_before;} ?>.jpg" rel="gallery-1" class="gallery-section__wrapper__thumbnail-link">
							<div class="gallery-section__wrapper__thumbnail-link__image background-cover lazy"
							data-src="http://www.campiyakanzi.com/webcam/webcam_day/MWCT_hour<?php if($hour_before < 10) { echo '0'.$hour_before;} else { echo $hour_before;} ?>.jpg"></div><!-- /.gallery-section__wrapper__thumbnail-link__image background-cover lazy -->
							<span class="gallery-section__wrapper__thumbnail-link__time"><?php if($hour_before < 10) { echo '0'.$hour_before;} else { echo $hour_before;} ?>:00</span>
						</a>

						<?php $hour_before = ($hour_before - 1); ?>
						<?php if($hour_before > 19) $hour_before = 6; ?>
						<?php if($hour_before < 6) $hour_before = 19; ?>

						<a href="http://www.campiyakanzi.com/webcam/webcam_day/MWCT_hour<?php if($hour_before < 10) { echo '0'.$hour_before;} else { echo $hour_before;} ?>.jpg" rel="gallery-1" class="gallery-section__wrapper__thumbnail-link">
							<div class="gallery-section__wrapper__thumbnail-link__image background-cover lazy"
							data-src="http://www.campiyakanzi.com/webcam/webcam_day/MWCT_hour<?php if($hour_before < 10) { echo '0'.$hour_before;} else { echo $hour_before;} ?>.jpg"></div><!-- /.gallery-section__wrapper__thumbnail-link__image background-cover lazy -->
							<span class="gallery-section__wrapper__thumbnail-link__time"><?php if($hour_before < 10) { echo '0'.$hour_before;} else { echo $hour_before;} ?>:00</span>
						</a>

						<?php $hour_before = ($hour_before - 1); ?>
						<?php if($hour_before > 19) $hour_before = 6; ?>
						<?php if($hour_before < 6) $hour_before = 19; ?>

						<a href="http://www.campiyakanzi.com/webcam/webcam_day/MWCT_hour<?php if($hour_before < 10) { echo '0'.$hour_before;} else { echo $hour_before;} ?>.jpg" rel="gallery-1" class="gallery-section__wrapper__thumbnail-link">
							<div class="gallery-section__wrapper__thumbnail-link__image background-cover lazy"
							data-src="http://www.campiyakanzi.com/webcam/webcam_day/MWCT_hour<?php if($hour_before < 10) { echo '0'.$hour_before;} else { echo $hour_before;} ?>.jpg"></div><!-- /.gallery-section__wrapper__thumbnail-link__image background-cover lazy -->
							<span class="gallery-section__wrapper__thumbnail-link__time"><?php if($hour_before < 10) { echo '0'.$hour_before;} else { echo $hour_before;} ?>:00</span>
						</a>
					</div><!-- /.gallery-section__wrapper -->
				</div><!-- /.col-12 -->
			</div><!-- /.row -->
			<div class="row">
				<div class="col-md-8 col-lg-6 ml-auto">
					<h3 class="gallery-section__title element-margin-top"><?php the_field( 'recent_title_2' ); ?></h3><!-- /.gallery-section__title element-margin-top -->
					<span class="gallery-section__description">Hour by hour.</span>
				</div><!-- /.col-md-8 col-lg-6 ml-auto -->
				<div class="col-12">
					<div class="gallery-section__wrapper">
						<?php $hour_before = $hour_now; ?>
						<?php if($hour_before > 19) $hour_before = 6; ?>
						<?php if($hour_before < 6) $hour_before = 19; ?>

						<a href="http://www.campiyakanzi.com/webcam/webcam_day/hour<?php if($hour_before < 10) { echo '0'.$hour_before;} else { echo $hour_before;} ?>.jpg" rel="gallery-2" class="gallery-section__wrapper__thumbnail-link">
							<div class="gallery-section__wrapper__thumbnail-link__image background-cover lazy"
							data-src="http://www.campiyakanzi.com/webcam/webcam_day/hour<?php if($hour_before < 10) { echo '0'.$hour_before;} else { echo $hour_before;} ?>.jpg"></div><!-- /.gallery-section__wrapper__thumbnail-link__image background-cover lazy -->
							<span class="gallery-section__wrapper__thumbnail-link__time"><?php if($hour_before < 10) { echo '0'.$hour_before;} else { echo $hour_before;} ?>:00</span>
						</a>

						<?php $hour_before = ($hour_before - 1); ?>
						<?php if($hour_before > 19) $hour_before = 6; ?>
						<?php if($hour_before < 6) $hour_before = 19; ?>

						<a href="http://www.campiyakanzi.com/webcam/webcam_day/hour<?php if($hour_before < 10) { echo '0'.$hour_before;} else { echo $hour_before;} ?>.jpg" rel="gallery-2" class="gallery-section__wrapper__thumbnail-link">
							<div class="gallery-section__wrapper__thumbnail-link__image background-cover lazy"
							data-src="http://www.campiyakanzi.com/webcam/webcam_day/hour<?php if($hour_before < 10) { echo '0'.$hour_before;} else { echo $hour_before;} ?>.jpg"></div><!-- /.gallery-section__wrapper__thumbnail-link__image background-cover lazy -->
							<span class="gallery-section__wrapper__thumbnail-link__time"><?php if($hour_before < 10) { echo '0'.$hour_before;} else { echo $hour_before;} ?>:00</span>
						</a>

						<?php $hour_before = ($hour_before - 1); ?>
						<?php if($hour_before > 19) $hour_before = 6; ?>
						<?php if($hour_before < 6) $hour_before = 19; ?>

						<a href="http://www.campiyakanzi.com/webcam/webcam_day/hour<?php if($hour_before < 10) { echo '0'.$hour_before;} else { echo $hour_before;} ?>.jpg" rel="gallery-2" class="gallery-section__wrapper__thumbnail-link">
							<div class="gallery-section__wrapper__thumbnail-link__image background-cover lazy"
							data-src="http://www.campiyakanzi.com/webcam/webcam_day/hour<?php if($hour_before < 10) { echo '0'.$hour_before;} else { echo $hour_before;} ?>.jpg"></div><!-- /.gallery-section__wrapper__thumbnail-link__image background-cover lazy -->
							<span class="gallery-section__wrapper__thumbnail-link__time"><?php if($hour_before < 10) { echo '0'.$hour_before;} else { echo $hour_before;} ?>:00</span>
						</a>

						<?php $hour_before = ($hour_before - 1); ?>
						<?php if($hour_before > 19) $hour_before = 6; ?>
						<?php if($hour_before < 6) $hour_before = 19; ?>

						<a href="http://www.campiyakanzi.com/webcam/webcam_day/hour<?php if($hour_before < 10) { echo '0'.$hour_before;} else { echo $hour_before;} ?>.jpg" rel="gallery-2" class="gallery-section__wrapper__thumbnail-link">
							<div class="gallery-section__wrapper__thumbnail-link__image background-cover lazy"
							data-src="http://www.campiyakanzi.com/webcam/webcam_day/hour<?php if($hour_before < 10) { echo '0'.$hour_before;} else { echo $hour_before;} ?>.jpg"></div><!-- /.gallery-section__wrapper__thumbnail-link__image background-cover lazy -->
							<span class="gallery-section__wrapper__thumbnail-link__time"><?php if($hour_before < 10) { echo '0'.$hour_before;} else { echo $hour_before;} ?>:00</span>
						</a>

						<?php $hour_before = ($hour_before - 1); ?>
						<?php if($hour_before > 19) $hour_before = 6; ?>
						<?php if($hour_before < 6) $hour_before = 19; ?>

						<a href="http://www.campiyakanzi.com/webcam/webcam_day/hour<?php if($hour_before < 10) { echo '0'.$hour_before;} else { echo $hour_before;} ?>.jpg" rel="gallery-2" class="gallery-section__wrapper__thumbnail-link">
							<div class="gallery-section__wrapper__thumbnail-link__image background-cover lazy"
							data-src="http://www.campiyakanzi.com/webcam/webcam_day/hour<?php if($hour_before < 10) { echo '0'.$hour_before;} else { echo $hour_before;} ?>.jpg"></div><!-- /.gallery-section__wrapper__thumbnail-link__image background-cover lazy -->
							<span class="gallery-section__wrapper__thumbnail-link__time"><?php if($hour_before < 10) { echo '0'.$hour_before;} else { echo $hour_before;} ?>:00</span>
						</a>

						<?php $hour_before = ($hour_before - 1); ?>
						<?php if($hour_before > 19) $hour_before = 6; ?>
						<?php if($hour_before < 6) $hour_before = 19; ?>

						<a href="http://www.campiyakanzi.com/webcam/webcam_day/hour<?php if($hour_before < 10) { echo '0'.$hour_before;} else { echo $hour_before;} ?>.jpg" rel="gallery-2" class="gallery-section__wrapper__thumbnail-link">
							<div class="gallery-section__wrapper__thumbnail-link__image background-cover lazy"
							data-src="http://www.campiyakanzi.com/webcam/webcam_day/hour<?php if($hour_before < 10) { echo '0'.$hour_before;} else { echo $hour_before;} ?>.jpg"></div><!-- /.gallery-section__wrapper__thumbnail-link__image background-cover lazy -->
							<span class="gallery-section__wrapper__thumbnail-link__time"><?php if($hour_before < 10) { echo '0'.$hour_before;} else { echo $hour_before;} ?>:00</span>
						</a>

						<?php $hour_before = ($hour_before - 1); ?>
						<?php if($hour_before > 19) $hour_before = 6; ?>
						<?php if($hour_before < 6) $hour_before = 19; ?>

						<a href="http://www.campiyakanzi.com/webcam/webcam_day/hour<?php if($hour_before < 10) { echo '0'.$hour_before;} else { echo $hour_before;} ?>.jpg" rel="gallery-2" class="gallery-section__wrapper__thumbnail-link">
							<div class="gallery-section__wrapper__thumbnail-link__image background-cover lazy"
							data-src="http://www.campiyakanzi.com/webcam/webcam_day/hour<?php if($hour_before < 10) { echo '0'.$hour_before;} else { echo $hour_before;} ?>.jpg"></div><!-- /.gallery-section__wrapper__thumbnail-link__image background-cover lazy -->
							<span class="gallery-section__wrapper__thumbnail-link__time"><?php if($hour_before < 10) { echo '0'.$hour_before;} else { echo $hour_before;} ?>:00</span>
						</a>

						<?php $hour_before = ($hour_before - 1); ?>
						<?php if($hour_before > 19) $hour_before = 6; ?>
						<?php if($hour_before < 6) $hour_before = 19; ?>

						<a href="http://www.campiyakanzi.com/webcam/webcam_day/hour<?php if($hour_before < 10) { echo '0'.$hour_before;} else { echo $hour_before;} ?>.jpg" rel="gallery-2" class="gallery-section__wrapper__thumbnail-link">
							<div class="gallery-section__wrapper__thumbnail-link__image background-cover lazy"
							data-src="http://www.campiyakanzi.com/webcam/webcam_day/hour<?php if($hour_before < 10) { echo '0'.$hour_before;} else { echo $hour_before;} ?>.jpg"></div><!-- /.gallery-section__wrapper__thumbnail-link__image background-cover lazy -->
							<span class="gallery-section__wrapper__thumbnail-link__time"><?php if($hour_before < 10) { echo '0'.$hour_before;} else { echo $hour_before;} ?>:00</span>
						</a>

						<?php $hour_before = ($hour_before - 1); ?>
						<?php if($hour_before > 19) $hour_before = 6; ?>
						<?php if($hour_before < 6) $hour_before = 19; ?>

						<a href="http://www.campiyakanzi.com/webcam/webcam_day/hour<?php if($hour_before < 10) { echo '0'.$hour_before;} else { echo $hour_before;} ?>.jpg" rel="gallery-2" class="gallery-section__wrapper__thumbnail-link">
							<div class="gallery-section__wrapper__thumbnail-link__image background-cover lazy"
							data-src="http://www.campiyakanzi.com/webcam/webcam_day/hour<?php if($hour_before < 10) { echo '0'.$hour_before;} else { echo $hour_before;} ?>.jpg"></div><!-- /.gallery-section__wrapper__thumbnail-link__image background-cover lazy -->
							<span class="gallery-section__wrapper__thumbnail-link__time"><?php if($hour_before < 10) { echo '0'.$hour_before;} else { echo $hour_before;} ?>:00</span>
						</a>

						<?php $hour_before = ($hour_before - 1); ?>
						<?php if($hour_before > 19) $hour_before = 6; ?>
						<?php if($hour_before < 6) $hour_before = 19; ?>

						<a href="http://www.campiyakanzi.com/webcam/webcam_day/hour<?php if($hour_before < 10) { echo '0'.$hour_before;} else { echo $hour_before;} ?>.jpg" rel="gallery-2" class="gallery-section__wrapper__thumbnail-link">
							<div class="gallery-section__wrapper__thumbnail-link__image background-cover lazy"
							data-src="http://www.campiyakanzi.com/webcam/webcam_day/hour<?php if($hour_before < 10) { echo '0'.$hour_before;} else { echo $hour_before;} ?>.jpg"></div><!-- /.gallery-section__wrapper__thumbnail-link__image background-cover lazy -->
							<span class="gallery-section__wrapper__thumbnail-link__time"><?php if($hour_before < 10) { echo '0'.$hour_before;} else { echo $hour_before;} ?>:00</span>
						</a>

						<?php $hour_before = ($hour_before - 1); ?>
						<?php if($hour_before > 19) $hour_before = 6; ?>
						<?php if($hour_before < 6) $hour_before = 19; ?>

						<a href="http://www.campiyakanzi.com/webcam/webcam_day/hour<?php if($hour_before < 10) { echo '0'.$hour_before;} else { echo $hour_before;} ?>.jpg" rel="gallery-2" class="gallery-section__wrapper__thumbnail-link">
							<div class="gallery-section__wrapper__thumbnail-link__image background-cover lazy"
							data-src="http://www.campiyakanzi.com/webcam/webcam_day/hour<?php if($hour_before < 10) { echo '0'.$hour_before;} else { echo $hour_before;} ?>.jpg"></div><!-- /.gallery-section__wrapper__thumbnail-link__image background-cover lazy -->
							<span class="gallery-section__wrapper__thumbnail-link__time"><?php if($hour_before < 10) { echo '0'.$hour_before;} else { echo $hour_before;} ?>:00</span>
						</a>

						<?php $hour_before = ($hour_before - 1); ?>
						<?php if($hour_before > 19) $hour_before = 6; ?>
						<?php if($hour_before < 6) $hour_before = 19; ?>

						<a href="http://www.campiyakanzi.com/webcam/webcam_day/hour<?php if($hour_before < 10) { echo '0'.$hour_before;} else { echo $hour_before;} ?>.jpg" rel="gallery-2" class="gallery-section__wrapper__thumbnail-link">
							<div class="gallery-section__wrapper__thumbnail-link__image background-cover lazy"
							data-src="http://www.campiyakanzi.com/webcam/webcam_day/hour<?php if($hour_before < 10) { echo '0'.$hour_before;} else { echo $hour_before;} ?>.jpg"></div><!-- /.gallery-section__wrapper__thumbnail-link__image background-cover lazy -->
							<span class="gallery-section__wrapper__thumbnail-link__time"><?php if($hour_before < 10) { echo '0'.$hour_before;} else { echo $hour_before;} ?>:00</span>
						</a>

						<?php $hour_before = ($hour_before - 1); ?>
						<?php if($hour_before > 19) $hour_before = 6; ?>
						<?php if($hour_before < 6) $hour_before = 19; ?>

						<a href="http://www.campiyakanzi.com/webcam/webcam_day/hour<?php if($hour_before < 10) { echo '0'.$hour_before;} else { echo $hour_before;} ?>.jpg" rel="gallery-2" class="gallery-section__wrapper__thumbnail-link">
							<div class="gallery-section__wrapper__thumbnail-link__image background-cover lazy"
							data-src="http://www.campiyakanzi.com/webcam/webcam_day/hour<?php if($hour_before < 10) { echo '0'.$hour_before;} else { echo $hour_before;} ?>.jpg"></div><!-- /.gallery-section__wrapper__thumbnail-link__image background-cover lazy -->
							<span class="gallery-section__wrapper__thumbnail-link__time"><?php if($hour_before < 10) { echo '0'.$hour_before;} else { echo $hour_before;} ?>:00</span>
						</a>

						<?php $hour_before = ($hour_before - 1); ?>
						<?php if($hour_before > 19) $hour_before = 6; ?>
						<?php if($hour_before < 6) $hour_before = 19; ?>

						<a href="http://www.campiyakanzi.com/webcam/webcam_day/hour<?php if($hour_before < 10) { echo '0'.$hour_before;} else { echo $hour_before;} ?>.jpg" rel="gallery-2" class="gallery-section__wrapper__thumbnail-link">
							<div class="gallery-section__wrapper__thumbnail-link__image background-cover lazy"
							data-src="http://www.campiyakanzi.com/webcam/webcam_day/hour<?php if($hour_before < 10) { echo '0'.$hour_before;} else { echo $hour_before;} ?>.jpg"></div><!-- /.gallery-section__wrapper__thumbnail-link__image background-cover lazy -->
							<span class="gallery-section__wrapper__thumbnail-link__time"><?php if($hour_before < 10) { echo '0'.$hour_before;} else { echo $hour_before;} ?>:00</span>
						</a>
					</div><!-- /.gallery-section__wrapper -->
				</div><!-- /.col-12 -->
			</div><!-- /.row -->
			<div class="row">
				<div class="col-md-8 col-lg-6 ml-auto">
					<h3 class="gallery-section__title element-margin-top"><?php the_field( 'recent_title_3' ); ?></h3><!-- /.gallery-section__title element-margin-top -->
					<span class="gallery-section__description">Hour by hour.</span>
				</div><!-- /.col-md-8 col-lg-6 ml-auto -->
				<div class="col-12">
					<div class="gallery-section__wrapper">
						<?php $hour_before = $hour_now; ?>
						<?php if($hour_before > 19) $hour_before = 6; ?>
						<?php if($hour_before < 6) $hour_before = 19; ?>

						<a href="http://kenyawebcam.com/kanzi35/pic/<?= $hour_before; ?>.jpg" rel="gallery-3" class="gallery-section__wrapper__thumbnail-link">
							<div class="gallery-section__wrapper__thumbnail-link__image background-cover lazy"
							data-src="http://kenyawebcam.com/kanzi35/pic/<?= $hour_before; ?>.jpg"></div><!-- /.gallery-section__wrapper__thumbnail-link__image background-cover lazy -->
							<span class="gallery-section__wrapper__thumbnail-link__time"><?= $hour_before; ?>:00</span>
						</a>

						<?php $hour_before = ($hour_before - 1); ?>
						<?php if($hour_before > 19) $hour_before = 6; ?>
						<?php if($hour_before < 6) $hour_before = 19; ?>

						<a href="http://kenyawebcam.com/kanzi35/pic/<?= $hour_before; ?>.jpg" rel="gallery-3" class="gallery-section__wrapper__thumbnail-link">
							<div class="gallery-section__wrapper__thumbnail-link__image background-cover lazy"
							data-src="http://kenyawebcam.com/kanzi35/pic/<?= $hour_before; ?>.jpg"></div><!-- /.gallery-section__wrapper__thumbnail-link__image background-cover lazy -->
							<span class="gallery-section__wrapper__thumbnail-link__time"><?= $hour_before; ?>:00</span>
						</a>

						<?php $hour_before = ($hour_before - 1); ?>
						<?php if($hour_before > 19) $hour_before = 6; ?>
						<?php if($hour_before < 6) $hour_before = 19; ?>

						<a href="http://kenyawebcam.com/kanzi35/pic/<?= $hour_before; ?>.jpg" rel="gallery-3" class="gallery-section__wrapper__thumbnail-link">
							<div class="gallery-section__wrapper__thumbnail-link__image background-cover lazy"
							data-src="http://kenyawebcam.com/kanzi35/pic/<?= $hour_before; ?>.jpg"></div><!-- /.gallery-section__wrapper__thumbnail-link__image background-cover lazy -->
							<span class="gallery-section__wrapper__thumbnail-link__time"><?= $hour_before; ?>:00</span>
						</a>

						<?php $hour_before = ($hour_before - 1); ?>
						<?php if($hour_before > 19) $hour_before = 6; ?>
						<?php if($hour_before < 6) $hour_before = 19; ?>

						<a href="http://kenyawebcam.com/kanzi35/pic/<?= $hour_before; ?>.jpg" rel="gallery-3" class="gallery-section__wrapper__thumbnail-link">
							<div class="gallery-section__wrapper__thumbnail-link__image background-cover lazy"
							data-src="http://kenyawebcam.com/kanzi35/pic/<?= $hour_before; ?>.jpg"></div><!-- /.gallery-section__wrapper__thumbnail-link__image background-cover lazy -->
							<span class="gallery-section__wrapper__thumbnail-link__time"><?= $hour_before; ?>:00</span>
						</a>

						<?php $hour_before = ($hour_before - 1); ?>
						<?php if($hour_before > 19) $hour_before = 6; ?>
						<?php if($hour_before < 6) $hour_before = 19; ?>

						<a href="http://kenyawebcam.com/kanzi35/pic/<?= $hour_before; ?>.jpg" rel="gallery-3" class="gallery-section__wrapper__thumbnail-link">
							<div class="gallery-section__wrapper__thumbnail-link__image background-cover lazy"
							data-src="http://kenyawebcam.com/kanzi35/pic/<?= $hour_before; ?>.jpg"></div><!-- /.gallery-section__wrapper__thumbnail-link__image background-cover lazy -->
							<span class="gallery-section__wrapper__thumbnail-link__time"><?= $hour_before; ?>:00</span>
						</a>

						<?php $hour_before = ($hour_before - 1); ?>
						<?php if($hour_before > 19) $hour_before = 6; ?>
						<?php if($hour_before < 6) $hour_before = 19; ?>

						<a href="http://kenyawebcam.com/kanzi35/pic/<?= $hour_before; ?>.jpg" rel="gallery-3" class="gallery-section__wrapper__thumbnail-link">
							<div class="gallery-section__wrapper__thumbnail-link__image background-cover lazy"
							data-src="http://kenyawebcam.com/kanzi35/pic/<?= $hour_before; ?>.jpg"></div><!-- /.gallery-section__wrapper__thumbnail-link__image background-cover lazy -->
							<span class="gallery-section__wrapper__thumbnail-link__time"><?= $hour_before; ?>:00</span>
						</a>

						<?php $hour_before = ($hour_before - 1); ?>
						<?php if($hour_before > 19) $hour_before = 6; ?>
						<?php if($hour_before < 6) $hour_before = 19; ?>

						<a href="http://kenyawebcam.com/kanzi35/pic/<?= $hour_before; ?>.jpg" rel="gallery-3" class="gallery-section__wrapper__thumbnail-link">
							<div class="gallery-section__wrapper__thumbnail-link__image background-cover lazy"
							data-src="http://kenyawebcam.com/kanzi35/pic/<?= $hour_before; ?>.jpg"></div><!-- /.gallery-section__wrapper__thumbnail-link__image background-cover lazy -->
							<span class="gallery-section__wrapper__thumbnail-link__time"><?= $hour_before; ?>:00</span>
						</a>

						<?php $hour_before = ($hour_before - 1); ?>
						<?php if($hour_before > 19) $hour_before = 6; ?>
						<?php if($hour_before < 6) $hour_before = 19; ?>

						<a href="http://kenyawebcam.com/kanzi35/pic/<?= $hour_before; ?>.jpg" rel="gallery-3" class="gallery-section__wrapper__thumbnail-link">
							<div class="gallery-section__wrapper__thumbnail-link__image background-cover lazy"
							data-src="http://kenyawebcam.com/kanzi35/pic/<?= $hour_before; ?>.jpg"></div><!-- /.gallery-section__wrapper__thumbnail-link__image background-cover lazy -->
							<span class="gallery-section__wrapper__thumbnail-link__time"><?= $hour_before; ?>:00</span>
						</a>

						<?php $hour_before = ($hour_before - 1); ?>
						<?php if($hour_before > 19) $hour_before = 6; ?>
						<?php if($hour_before < 6) $hour_before = 19; ?>

						<a href="http://kenyawebcam.com/kanzi35/pic/<?= $hour_before; ?>.jpg" rel="gallery-3" class="gallery-section__wrapper__thumbnail-link">
							<div class="gallery-section__wrapper__thumbnail-link__image background-cover lazy"
							data-src="http://kenyawebcam.com/kanzi35/pic/<?= $hour_before; ?>.jpg"></div><!-- /.gallery-section__wrapper__thumbnail-link__image background-cover lazy -->
							<span class="gallery-section__wrapper__thumbnail-link__time"><?= $hour_before; ?>:00</span>
						</a>

						<?php $hour_before = ($hour_before - 1); ?>
						<?php if($hour_before > 19) $hour_before = 6; ?>
						<?php if($hour_before < 6) $hour_before = 19; ?>

						<a href="http://kenyawebcam.com/kanzi35/pic/<?= $hour_before; ?>.jpg" rel="gallery-3" class="gallery-section__wrapper__thumbnail-link">
							<div class="gallery-section__wrapper__thumbnail-link__image background-cover lazy"
							data-src="http://kenyawebcam.com/kanzi35/pic/<?= $hour_before; ?>.jpg"></div><!-- /.gallery-section__wrapper__thumbnail-link__image background-cover lazy -->
							<span class="gallery-section__wrapper__thumbnail-link__time"><?= $hour_before; ?>:00</span>
						</a>

						<?php $hour_before = ($hour_before - 1); ?>
						<?php if($hour_before > 19) $hour_before = 6; ?>
						<?php if($hour_before < 6) $hour_before = 19; ?>

						<a href="http://kenyawebcam.com/kanzi35/pic/<?= $hour_before; ?>.jpg" rel="gallery-3" class="gallery-section__wrapper__thumbnail-link">
							<div class="gallery-section__wrapper__thumbnail-link__image background-cover lazy"
							data-src="http://kenyawebcam.com/kanzi35/pic/<?= $hour_before; ?>.jpg"></div><!-- /.gallery-section__wrapper__thumbnail-link__image background-cover lazy -->
							<span class="gallery-section__wrapper__thumbnail-link__time"><?= $hour_before; ?>:00</span>
						</a>

						<?php $hour_before = ($hour_before - 1); ?>
						<?php if($hour_before > 19) $hour_before = 6; ?>
						<?php if($hour_before < 6) $hour_before = 19; ?>

						<a href="http://kenyawebcam.com/kanzi35/pic/<?= $hour_before; ?>.jpg" rel="gallery-3" class="gallery-section__wrapper__thumbnail-link">
							<div class="gallery-section__wrapper__thumbnail-link__image background-cover lazy"
							data-src="http://kenyawebcam.com/kanzi35/pic/<?= $hour_before; ?>.jpg"></div><!-- /.gallery-section__wrapper__thumbnail-link__image background-cover lazy -->
							<span class="gallery-section__wrapper__thumbnail-link__time"><?= $hour_before; ?>:00</span>
						</a>

						<?php $hour_before = ($hour_before - 1); ?>
						<?php if($hour_before > 19) $hour_before = 6; ?>
						<?php if($hour_before < 6) $hour_before = 19; ?>

						<a href="http://kenyawebcam.com/kanzi35/pic/<?= $hour_before; ?>.jpg" rel="gallery-3" class="gallery-section__wrapper__thumbnail-link">
							<div class="gallery-section__wrapper__thumbnail-link__image background-cover lazy"
							data-src="http://kenyawebcam.com/kanzi35/pic/<?= $hour_before; ?>.jpg"></div><!-- /.gallery-section__wrapper__thumbnail-link__image background-cover lazy -->
							<span class="gallery-section__wrapper__thumbnail-link__time"><?= $hour_before; ?>:00</span>
						</a>

						<?php $hour_before = ($hour_before - 1); ?>
						<?php if($hour_before > 19) $hour_before = 6; ?>
						<?php if($hour_before < 6) $hour_before = 19; ?>

						<a href="http://kenyawebcam.com/kanzi35/pic/<?= $hour_before; ?>.jpg" rel="gallery-3" class="gallery-section__wrapper__thumbnail-link">
							<div class="gallery-section__wrapper__thumbnail-link__image background-cover lazy"
							data-src="http://kenyawebcam.com/kanzi35/pic/<?= $hour_before; ?>.jpg"></div><!-- /.gallery-section__wrapper__thumbnail-link__image background-cover lazy -->
							<span class="gallery-section__wrapper__thumbnail-link__time"><?php if($hour_before < 10) { echo '0'.$hour_before;} else { echo $hour_before;} ?>:00</span>
						</a>
					</div><!-- /.gallery-section__wrapper -->
				</div><!-- /.col-12 -->
			</div><!-- /.row -->
			<div class="row">
				<div class="col-md-8 col-lg-6 ml-auto">
					<h3 class="gallery-section__title element-margin-top">Weather Chart</h3><!-- /.gallery-section__title element-margin-top -->
					<span class="gallery-section__description">Coming Soon</span>
				</div><!-- /.col-md-8 col-lg-6 ml-auto -->
				<!-- <div class="col-12">
					<div class="gallery-section__wrapper">
						<img src="<?= $image['url']; ?>" alt="" class="gallery-section__wrapper__photo w-100 d-block element-small-margin-top" />
					</div>
				</div> -->
			</div><!-- /.row -->
		</div><!-- /.container -->
	</div><!-- /.gallery-section element-margin-top -->


	<section class="gallery element-paddings" data-aos="fade">
		<div class="container">
			<div class="row">
				<div class="col-12 col-md-6 ml-md-auto">
					<h2 class="gallery__title text-center text-md-left"><?php the_field( 'gallery_section_title' ); ?></h2><!-- /.gallery__title text-center text-md-left -->

					<?php get_template_part( 'partials/social-icons' ); ?>

				</div><!-- /.col-12 col-md-6 ml-md-auto -->

				<?php if ( have_rows( 'gallery_section' ) ) : ?>

					<div class="col-12">

					<div class="gallery__images">

						<?php while ( have_rows( 'gallery_section' ) ) : the_row(); ?>

							<?php $image = get_sub_field('gallery_image'); ?>
							<?php if( $image ): ?>

								<a href="<?php echo $image['url']; ?>" class="gallery__images__single-image-link" rel="gallery">
									 <img src="<?php echo $image['sizes']['square-gallery-image']; ?>" alt="<?php echo $image['alt']; ?>" class="gallery__images__single-image-link__image" />
								</a>

							<?php endif; ?>

							<?php $image = get_sub_field('video_placeholder'); ?>
							<?php if( $image ): ?>

								<a href="<?php the_sub_field('video_url', false, false); ?>&autoplay=1" class="gallery__images__single-video-link" rel="gallery">
									 <img src="<?php echo $image['sizes']['square-gallery-image']; ?>" alt="<?php echo $image['alt']; ?>" class="gallery__images__single-video-link__image" />
								</a>

							<?php endif; ?>
						<?php endwhile; ?>

					</div><!-- /.gallery__images -->
					</div><!-- /.col-12 -->

				<?php endif; ?>

			</div><!-- /.row -->
		</div><!-- /.container -->
	</section><!-- /.gallery element-paddings -->

</main><!-- /#main.gallery-template-page -->

<script>

</script>

<?php get_footer(); ?>