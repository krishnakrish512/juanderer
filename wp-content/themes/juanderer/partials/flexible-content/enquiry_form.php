<?php
if (($_GET['tour_id'])) {
    $tour_id = $_GET['tour_id'];
    $tour_name = get_the_title($tour_id);
//        var_dump($tour_name);
//        exit();
}
?>
<main>
    <section class="hero_in tours_detail">
        <div class="hero_in-image bg-cover"
            <?php $image = get_sub_field('image_url'); ?>
             style="background-image: url('<?= $image; ?>');"></div>
        <div class="wrapper">
            <div class="container">
                <h1 class="fadeInUp"><span></span><?php the_sub_field('title'); ?></h1>
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
                        <?php echo do_shortcode("[contact-form-7 id='" . $form . "']") ?>
                    </section>
                </div>
                <!-- /col -->
                <aside class="col-lg-4" id="sidebar">
                    <div class="box_detail booking">
                        <div class="price d-flex justify-content-between align-items-center">
                            <p class="mb-0"><?php the_field('days_night', $tour_id) ?> </p>
                            <span>$<?php the_field('price', $tour_id); ?>/<small>person</small></span>

                        </div>
<!--                        <p>--><?php //echo get_post_field('post_content', $tour_id); ?><!--</p>-->
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

<script>
    jQuery('[name="tour"]').val('<?= $tour_name; ?>');



</script>

