<?php get_header(); ?>
<?php while (have_posts()):
    the_post();
    ?>
    <main>
        <section class="hero_in hotels_detail">
            <div class="wrapper">
                <div class="container">
                    <h1 class="fadeInUp"><span></span><?php the_title(); ?></h1>
                </div>
                <span class="magnific-gallery">
                     <?php $images = get_field('gallery');
                     foreach ($images as $image):
                         ?>
                         <a href="<?= $image['url'] ?>" class="btn_photos" title="Photo title"
                            data-effect="mfp-zoom-in">View photos</a>
                     <?php endforeach; ?>	</span>
            </div>
        </section>
        <!--/hero_in-->

        <div class="bg_color_1">
            <nav class="secondary_nav sticky_horizontal">
                <div class="container">

                    <ul class="clearfix">
                        <li><a href="#description" class="active">Description</a></li>
                        <?php if (have_rows('room_type')): ?>
                            <li><a href="#room-type">Room</a></li>
                        <?php endif; ?>
                        <?php if (get_field('map')): ?>
                            <li><a href="#location">Location</a></li>
                        <?php endif; ?>
                        <!--                        <li><a href="#reviews">Reviews</a></li>-->
                        <li><a href="#sidebar">Booking</a></li>
                    </ul>
                </div>
            </nav>
            <div class="container margin_60_35">
                <div class="row">
                    <div class="col-lg-8">
                        <section id="description" class="border-0">
                            <div class="description-block pt-4 mb-4">
                                <h2>Description</h2>
                                <?php the_content(); ?>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <ul class="bullets">
                                            <?php while (have_rows('description_list')):
                                                the_row(); ?>
                                                <li><?php the_sub_field('title'); ?></li>
                                            <?php endwhile; ?>
                                        </ul>
                                    </div>
                                </div>
                                <!-- /row -->
                            </div>
                            <hr class="m-0">
                            <div class="description-block pt-4 mb-4" id="room-type">
                                <?php while (have_rows('room_type')):
                                    the_row()
                                    ?>
                                    <div class="room_type first">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <img src="<?php the_sub_field('image_url'); ?>" class="img-fluid"
                                                     alt="">
                                            </div>
                                            <div class="col-md-8">
                                                <h4><?php the_sub_field('title'); ?></h4>
                                                <p><?php the_sub_field('description'); ?></p>
                                                <ul class="hotel_facilities">
                                                    <?php while (have_rows('room_details')):
                                                        the_row()
                                                        ?>
                                                        <li><img src="<?php the_sub_field('image_url'); ?>"
                                                                 alt=""><?php the_sub_field('room_title'); ?></li>
                                                    <?php endwhile; ?>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- /row -->
                                    </div>
                                <?php endwhile; ?>
                                <!-- /rom_type -->
                            </div>
                            <hr class="m-0">
                            <?php if (get_field('map')): ?>
                                <div class="description-block pt-4 mb-4" id="location">
                                    <h3>Location</h3>
                                    <?php
                                    $map_iframe = get_field('map');
                                    echo $map_iframe;
                                    ?>
                                    <!-- End Map -->
                                </div>
                            <?php endif; ?>
                        </section>
                        <!-- /section -->
                        <hr class="m-0">
                        <div class="pt-4">
                            <?php get_template_part( '/partials/single-product/social_share' ); ?>
                        </div>
                    </div>
                    <!-- /col -->

                    <aside class="col-lg-4" id="sidebar">
                        <div class="box_detail booking">
                            <div class="price d-flex justify-content-between align-items-center">
                                <p class="mb-0"><?php the_field('days_night'); ?> </p>
                                <span><?php the_field('price'); ?> <small>person</small></span>

                            </div>
                            <p><?php the_content(); ?></p>
                            <a href="cart-1.html" class="btn_1 full-width purchase mb-3">Inquiry</a>
                            <div class="badge-wrap"><span class="badge">Or</span></div>

                            <div class="inquiry-by mt-3 d-flex align-items-center justify-content-between">
                                <?php get_template_part( '/partials/single-product/enquiery_share' ); ?>
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
<?php endwhile; ?>
<?php get_footer(); ?>
