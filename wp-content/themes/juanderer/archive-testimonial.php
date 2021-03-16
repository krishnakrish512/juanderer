<?php get_header() ?>
<main>
    <section class="hero_in tours">
        <div class="wrapper">
            <div class="container">
                <h1 class="fadeInUp"><span></span>Testimonials</h1>
            </div>
        </div>
    </section>
    <!--/hero_in-->
    <div class="container margin_60_35">
        <div class="isotope-wrapper">
            <?php while (have_posts()):
                the_post();
                ?>
                <div class="row">
                    <div class="col-xl-4 col-lg-6 col-md-6 isotope-item ">
                        <div class="box_grid auther-grid">
                            <div class="wrapper">
                                <div class="auther-grid-header d-flex border-bottom mb-3">
                                    <span class="icon-quote-left text-primary h4 mr-3"></span>
                                    <h5><?php the_title(); ?> <span
                                                class="d-block text-secondary"><?php the_field('title'); ?></span>
                                    </h5>
                                </div>
                                <p><?php the_field('testimonial'); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
    <!-- /container -->
    <!--    --><?php //get_template_part('/partials/single-product/content_list'); ?>
    <!-- /bg_color_1 -->
</main>
<!--/main-->

<?php get_footer(); ?>
