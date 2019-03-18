<?php
    /*
        Template Name: Contact
    */
?>

<?php get_header(); ?>

<main id="main" class="contact-template-page" tabindex="-1">

	<?php get_template_part( 'partials/hello-section' ); ?>

	<div class="contact-details element-paddings">
		<div class="container">
			<div class="row">
				<div class="col-md-6 ml-md-auto">
					<h2 id="contactTitle" class="contact-details__title" data-aos="fade">Contact</h2><!-- /.contact-details__title -->
				</div><!-- /.col-md-6 ml-md-auto -->
			</div><!-- /.row -->
			<div class="row">
				<div class="col-md-4 ml-md-auto">
					<div class="contact-details__wrapper" data-aos="fade">
						<span class="contact-details__wrapper__address-name"><?php the_field( 'contact_details_address_label', 'options' ); ?></span>
						<div class="contact-details__wrapper__address">
							<?php the_field( 'contact_details_address', 'options' ); ?>
						</div><!-- /.contact-details__wrapper__address -->
						<div class="contact-details__wrapper__phone-number element-small-margin-top"><i><?php the_field( 'contact_details_phone_number_label', 'options' ); ?> </i><a href="tel:<?php echo filter_var(get_field('contact_details_phone_number', 'option'), FILTER_SANITIZE_NUMBER_INT); ?>" class="contact-details__wrapper__phone-number__number"><?php the_field( 'contact_details_phone_number', 'options' ); ?></a></div><!-- /.contact-details__wrapper__phone-number element-small-margin-top -->
						<div class="contact-details__wrapper__bookings-address element-small-margin-top"><i><?php the_field( 'contact_details_bookings_address_label', 'options' ); ?> </i><a href="mailto:<?php the_field( 'contact_details_bookings_address_email', 'options' ); ?>" class="contact-details__wrapper__bookings-address__email"><?php the_field( 'contact_details_bookings_address_email', 'options' ); ?></a></div><!-- /.contact-details__wrapper__bookings-address element-small-margin-top -->
						<div class="contact-details__wrapper__director-address-email element-small-margin-top"><i><?php the_field( 'contact_details_director_address_label', 'options' ); ?> </i><a href="mailto:<?php the_field( 'contact_details_director_address_email', 'options' ); ?>" class="contact-details__wrapper__director-address-email__email"><?php the_field( 'contact_details_director_address_email', 'options' ); ?></a></div><!-- /.contact-details__wrapper__director-address-email element-small-margin-top -->
					</div><!-- /.contact-details__wrapper -->
				</div><!-- /.col-md-4 ml-md-auto -->
				<div class="col-md-6 ml-md-auto">
					<div id="contactsForm" class="contact-details__contact-form" data-aos="fade">
						
						<?php the_content();?>
						<?php echo do_shortcode( '[gravityform id="1" title="false" description="false" ajax="true"]' ); ?>
					</div><!-- /.contact-details__contact-form -->
					<div id="reservationsForm" class="contact-details__reservations-form" data-aos="fade">
						<?php echo do_shortcode( '[gravityform id="2" title="true" description="true" ajax="true"]' ); ?>
					</div><!-- /.contact-details__reservations-form -->
				</div><!-- /.col-md-6 ml-md-auto -->
			</div><!-- /.row -->
		</div><!-- /.container -->
	</div><!-- /.contact-details element-paddings -->

</main><!-- /#main.contact-template-page -->

<?php get_footer('with-gallery'); ?>