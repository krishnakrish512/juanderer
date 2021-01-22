<?php get_header(); ?>
<?php while (have_posts()):
    the_post();
    ?>
    <main>
        <section class="hero_in hotels_detail">
            <div class="hero_in-image bg-cover"
                 style="background-image: url('<?php the_post_thumbnail_url('full'); ?>')"></div>
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
                    <?php endforeach; ?>
                </span>
            </div>
        </section>
        <!--/hero_in-->

        <div class="bg_color_1">
            <nav class="secondary_nav sticky_horizontal">
                <div class="container">
                    <ul class="clearfix">
                        <li><a href="#description" class="active">Description</a></li>
                        <li><a href="#gallery">Gallery</a></li>
                        <li><a href="#gallery">Gallery</a></li>
                    </ul>
                </div>
            </nav>
            <div class="container margin_60_35">
                <div class="row">
                    <div class="col-lg-12">
                        <section id="description" class="border-0">
                            <div class="description-block pt-4 mb-4">
                                <h2>Description</h2>
                                <p><?php the_content(); ?></p>
                                <div class="row d-none">
                                    <div class="col-lg-6">
                                        <ul class="bullets">
                                            <li>Dolorem mediocritatem</li>
                                            <li>Mea appareat</li>
                                            <li>Prima causae</li>
                                            <li>Singulis indoctum</li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-6">
                                        <ul class="bullets">
                                            <li>Timeam inimicus</li>
                                            <li>Oportere democritum</li>
                                            <li>Cetero inermis</li>
                                            <li>Pertinacia eum</li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- /row -->
                            </div>

                            <hr class="m-0">
                            <div class="description-block pt-4 mb-4" id="gallery">
                                <h2>Gallery</h2>
                                <div class="grid">
                                    <ul class="magnific-gallery">
                                        <?php $images = get_field('gallery');
                                        foreach ($images as $image):
                                            ?>
                                            <li>
                                                <figure>
                                                    <img src="<?= $image['url'] ?>" alt="">
                                                    <figcaption>
                                                        <div class="caption-content">
                                                            <a href="<?= $image['url'] ?>"
                                                               title="Photo title"
                                                               data-effect="mfp-zoom-in">
                                                                <i class="pe-7s-albums"></i>
                                                                <p>Your caption</p>
                                                            </a>
                                                        </div>
                                                    </figcaption>
                                                </figure>
                                            </li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                            </div>
                            <a href="inquiry-form.html" class="btn_1 outline">Inquiry Now</a>

                            <!-- End Map -->
                        </section>
                        <!-- /section -->

                    </div>
                    <!-- /col -->
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
