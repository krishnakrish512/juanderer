<main>
    <section class="hero_in tours">
        <?php $image = get_sub_field('image_url') ?>
        <div class="hero_in-image bg-cover"
             style="background-image: url('<?= $image; ?>')"></div>
        <div class="wrapper">
            <div class="container">
                <h1 class="fadeInUp"><span></span>Testimonials</h1>
            </div>
        </div>
    </section>
    <!--/hero_in-->

    <div class="container margin_60_35">

        <div class="isotope-wrapper">
            <div class="row">
                <?php while (have_rows('testimonial_list_repeater')):
                    the_row()
                    ?>
                    <div class="col-xl-4 col-lg-6 col-md-6 isotope-item ">
                        <div class="box_grid auther-grid">
                            <div class="wrapper">
                                <div class="auther-grid-header d-flex border-bottom mb-3">
                                    <span class="icon-quote-left text-primary h4 mr-3"></span>
                                    <h5><?php the_sub_field('author_name'); ?> <span
                                                class="d-block text-secondary"><?php the_sub_field('author_title'); ?></span>
                                    </h5>
                                </div>
                                <p><?php the_sub_field('description'); ?></p>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>

        <p class="text-center"><a href="#0" class="btn_1 rounded add_top_30">Load more</a></p>

    </div>
    <!-- /container -->
    <?php get_template_part('/partials/single-product/content_list'); ?>
</main>
<!--/main-->
	