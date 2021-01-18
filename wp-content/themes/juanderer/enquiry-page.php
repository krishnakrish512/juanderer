
<?php get_header(); ?>
<main>
    <section class="hero_in tours_detail">
        <div class="hero_in-image bg-cover"
            <?php $image = get_field('tour_image', 'option'); ?>
             style="background-image: url('<?= $image; ?>');"></div>
        <div class="wrapper">
            <div class="container">
                <h1 class="fadeInUp"><span></span>Inquiry Form</h1>
            </div>
        </div>
    </section>
    <!--/hero_in-->
    <?php $form = get_field('enquiry_form', 'option'); ?>
    <div class="bg_color_1">
        <div class="container margin_60_35">
            <div class="row">
                <div class="col-lg-8">
                    <section class="inquiry-form-content booking pr-5">
                        <h5 class="mb-4">Tour Inquiry Form</h5>
                        <?php echo do_shortcode("[contact-form-7 id='" . $form['enquiry_form'] . "']") ?>
                    </section>

                </div>
                <!-- /col -->

                <aside class="col-lg-4" id="sidebar">
                    <div class="box_detail booking">
                        <div class="price d-flex justify-content-between align-items-center">
                            <p class="mb-0">6 days | 5 Nights </p>
                            <span>45$ <small>person</small></span>

                        </div>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quae libero autem recusandae </p>


                        <div class="badge-wrap"><span class="badge">Or</span></div>

                        <div class="inquiry-by mt-3 d-flex align-items-center justify-content-between">
                            <?php get_template_part('/partials/single-product/enquiery_share'); ?>
                        </div>

                    </div>
                </aside>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /bg_color_1 -->
</main>
<!--/main-->

<?php get_footer(); ?>
