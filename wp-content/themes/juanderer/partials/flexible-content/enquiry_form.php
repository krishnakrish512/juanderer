<?php
if (($_GET['tour_id'])) {
    $tour_id = $_GET['tour_id'];
    $tour_name = get_the_title($tour_id);
//        var_dump($tour_name);
//        exit();
}
if (($_GET['destination_id'])) {
    $destination_id = $_GET['destination_id'];
    $destination_name = get_the_title($destination_id);
//        var_dump($destination_name);
//        exit();
}
if (($_GET['airticket_id'])) {
    $air_id = $_GET['airticket_id'];
    $air_name = get_the_title($air_id);
//        var_dump($air_name);
//        exit();
}

?>
<main>
    <section class="hero_in general">
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
                            <?php while (have_rows('packages_repeater')):
                                the_row();
                                $image = get_sub_field('image_url');
//                                var_dump($image);
//                                exit();
                                ?>
                                <li>
                                    <div class="alignleft">
                                        <a href="<?php the_sub_field('link'); ?>"><img src="<?= $image; ?>" alt=""></a>
                                    </div>
                                    <h3><a href="<?php the_sub_field('link'); ?>"
                                           title=""><?php the_sub_field('title'); ?></a></h3>
                                </li>
                            <?php endwhile; ?>
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
    jQuery('[name="tour"]').val('<?= $tour_name, $destination_name, $air_name ?>');

</script>

