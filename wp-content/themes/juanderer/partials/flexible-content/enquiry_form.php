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

                <aside class="col-lg-3">
                    <div class="widget">
                        <div class="widget-title">
                            <h4>Packages you may like</h4>
                        </div>
                        <ul class="comments-list">
                            <li>
                                <div class="alignleft">
                                    <a href="#0"><img src="assets/images/blog-1.jpg" alt=""></a>
                                </div>

                                <h3><a href="#" title="">Verear qualisque ex minimum...</a></h3>
                            </li>
                            <li>
                                <div class="alignleft">
                                    <a href="#0"><img src="assets/images/blog-1.jpg" alt=""></a>
                                </div>
                                <h3><a href="#" title="">Verear qualisque ex minimum...</a></h3>
                            </li>
                            <li>
                                <div class="alignleft">
                                    <a href="#0"><img src="assets/images/blog-1.jpg" alt=""></a>
                                </div>
                                <h3><a href="#" title="">Verear qualisque ex minimum...</a></h3>
                            </li>
                        </ul>
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

