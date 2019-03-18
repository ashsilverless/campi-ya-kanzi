<div class="content-section element-padding-top" data-aos="fade">
	<div class="container">
		<div class="row">
			<div class="col-md-6 ml-md-auto">
				<div class="content-section__content content">
					<?php the_field('content'); ?>
				</div><!-- /.content-section__content content -->

				<?php if( !empty(get_field('expanded_content')) ): ?>

					<a href="#expanded-content-collapse" data-toggle="collapse" aria-expanded="false" aria-controls="expanded-content-collapse" class="expanded-content-collapse-button campi-ya-kanzi-button campi-ya-kanzi-button__with-arrow campi-ya-kanzi-button__with-arrow--white">
						<img src="<?php echo get_template_directory_uri(); ?>/images/icon__arrow--white.svg" alt="Icon Arrow" class="arrow svg"/>
						Read more
					</a>

					<div class="collapse" id="expanded-content-collapse">
						<div class="card card-block content-section__expanded-content element-small-margin-top content">
							<?php the_field( 'expanded_content' ); ?>
						</div><!-- /.card card-block content-section__expanded-content element-small-margin-top content -->
					</div><!-- /#expanded-content-collapse.collapse -->

				<?php endif; ?>
			</div><!-- /.col-md-6 ml-md-auto -->
		</div><!-- /.row -->
	</div><!-- /.container -->
</div><!-- /.content-section element-padding-top -->