<?php get_header(); ?>
<?php while (have_posts()):
    the_post();
    ?>
    <main>
        <section class="hero_in tours_detail">
            <div class="hero_in-image bg-cover"
                 style="background-image: url('<?php the_post_thumbnail_url('full'); ?>')"></div>
            <div class="wrapper">
                <div class="container">
                    <h1 class="fadeInUp"><span></span><?php the_title(); ?></h1>
                </div>
                <?php if (get_field('tour_gallery')): ?>
                    <span class="magnific-gallery">
                    <?php $images = get_field('tour_gallery');
                    //                    var_dump($image);
                    //                    exit();
                    foreach ($images as $image):
                        ?>
                        <a href="<?= $image; ?>" class="btn_photos" title="Photo title"
                           data-effect="mfp-zoom-in">View photos</a>
                    <?php endforeach; ?>
				</span>
                <?php endif; ?>
            </div>
        </section>
        <!--/hero_in-->

        <div class="bg_color_1">
            <nav class="secondary_nav sticky_horizontal">
                <div class="container">
                    <ul class="clearfix">
                        <ul class="clearfix">
                            <li><a href="#description" class="active">Description</a></li>
                            <li><a href="#programs">Itinerary</a></li>
                            <li><a href="#Exclude">Includes/Exclude</a></li>
                            <?php if (get_field('map_image')): ?>
                                <li><a href="#location">Location</a></li>
                            <?php endif; ?>
                            <?php if (get_field('tour_gallery')): ?>
                                <li><a href="#gallery">Gallery</a></li>
                            <?php endif ?>
                            <li><a href="#sidebar">Booking</a></li>
                        </ul>

                    </ul>
                </div>
            </nav>
            <div class="container margin_60_35">
                <div class="row">
                    <div class="col-lg-8">
                        <section id="description" class="border-0">
                            <div class="description-block pt-4">
                                <h2>Description</h2>
                                <?php the_content(); ?>
                            </div>
                            <hr class="m-0">
                            <div class="description-block pt-4 mb-4" id="programs">
                                <h3>Itinerary </h3>
                                <p>
                                    <?php the_field('program_description') ?>
                                </p>
                                <?php $counter = 1;
                                ?>
                                <ul class="cbp_tmtimeline">
                                    <?php while (have_rows('program')):
                                        the_row();
                                        ?>
                                        <li>
                                            <time class="cbp_tmtime mt-2"><span
                                                        class="d-none">30 min.</span><span>Day</span>
                                            </time>
                                            <div class="cbp_tmicon ">
                                                <?php
                                                echo $counter++;
                                                //                                                the_sub_field('days');
                                                ?>
                                            </div>
                                            <div class="cbp_tmlabel">
                                                <div class="hidden-xs d-none">
                                                    <img src="<?php the_sub_field('image_url'); ?>" alt=""
                                                         class="rounded-circle thumb_visit">
                                                </div>
                                                <h4><?php the_sub_field('title'); ?></h4>
                                                <p>
                                                    <?php the_sub_field('description'); ?>
                                                </p>
                                            </div>
                                        </li>
                                    <?php endwhile; ?>
                                </ul>
                                <hr>
                                <p><?php the_field('paragraph'); ?></p>
                                <div class="row" id="Exclude">
                                    <div class="col-lg-6">
                                        <h4>Cost Includes</h4>
                                        <ul class="bullets bullets--tick">
                                            <?php while (have_rows('cost_include_rep')):
                                                the_row(); ?>
                                                <li><?php the_sub_field('list'); ?></li>
                                            <?php endwhile; ?>
                                        </ul>
                                    </div>
                                    <div class="col-lg-6">
                                        <h4>Cost Excludes</h4>
                                        <ul class="bullets bullets--cross">
                                            <?php while (have_rows('cost_exclude_rep')):
                                                the_row(); ?>
                                                <li><?php the_sub_field('list'); ?></li>
                                            <?php endwhile; ?>
                                        </ul>
                                    </div>
                                </div>
                                <!-- /row -->
                            </div>
                            <hr class="m-0">
                            <?php if (get_field('map_image')): ?>
                                <div class="description-block pt-4 mb-4" id="location">
                                    <h3>Location</h3>
                                    <?php
                                    $map_image = get_field('map_image'); ?>
                                    <img src="<?= $map_image; ?>" alt="">
                                    <!-- End Map -->
                                </div>
                            <?php endif; ?>
                            <hr class="m-0">
                            <?php if (get_field('tour_gallery')): ?>
                                <div class="description-block pt-4 mb-4" id="gallery">
                                    <h3>Gallery</h3>
                                    <div class="isotope-wrapper grid">
                                        <ul class="magnific-gallery">
                                            <?php $images = get_field('tour_gallery');
                                            foreach ($images as $image):
                                                ?>
                                                <li class="isotope-item">
                                                    <figure>
                                                        <img src="<?= $image ?>" alt="">
                                                        <figcaption>
                                                            <div class="caption-content">
                                                                <a href="<?= $image ?>" title=""
                                                                   data-effect="mfp-zoom-in">
                                                                    <i class="pe-7s-albums"></i>
                                                                </a>
                                                            </div>
                                                        </figcaption>
                                                    </figure>
                                                </li>
                                            <?php endforeach; ?>
                                        </ul>
                                    </div>
                                </div>
                            <?php endif ?>

                        </section>
                        <hr class="m-0">
                        <div class="pt-4">
                            <?php get_template_part('/partials/single-product/social_share'); ?>
                        </div>

                    </div>
                    <!-- /col -->
                    <aside class="col-lg-4" id="sidebar">
                        <div class="box_detail booking">
                            <div class="price d-flex justify-content-between align-items-center">
                                <p class="mb-0"><?php the_field('days_night'); ?> </p>
                                <span>$<?php the_field('price'); ?><small>/person</small> </span>
                            </div>
                            <p>You can make an inquiry to know further detail about the trip. We will be happy to take
                                care of your inquiry.</p>
                            <!--                            <p>--><?php //the_content();
                            ?><!--</p>-->
                            <a href="<?php echo esc_url(get_permalink(get_page_by_title('Enquiry Form')) . "?tour_id=" . get_the_ID()); ?>"
                               class="btn_1 full-width purchase mb-3">Inquiry</a>
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
<?php endwhile; ?>
<?php get_footer(); ?>




