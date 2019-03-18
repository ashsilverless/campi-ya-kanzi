<?php get_header(); ?>

    <main id="main" class="error-404-page-template" tabindex="-1">

        <article class="error-404 text-center element-paddings">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <?php get_template_part( 'template-parts/breadcrumbs' ); ?>
                        <h1 class="error-404__title">Page Not Found</h1>
                        <div class="error-404__content content element-small-margin-top">
                            <p>Sorry, but the page you were trying to view does not exist.</p>
                        </div><!-- /.error-404__content content element-small-margin-top -->
                    </div><!-- /.col-12 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </article><!-- /.error-404 text-center element-paddings -->

    </main><!-- /#main.error-404-page-template -->

<?php get_footer(); ?>
