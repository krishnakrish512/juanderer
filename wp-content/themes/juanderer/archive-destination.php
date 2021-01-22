<?php get_header(); ?>
<main>
    <section class="hero_in tours">
        <div class="hero_in-image bg-cover"
            <?php $image = get_field('destination_image', 'option'); ?>
             style="background-image: url('<?= $image ?>');"></div>
        <div class="wrapper">
            <div class="container">
                <h1 class="fadeInUp"><span></span><?php the_field('destination_title', 'option'); ?></h1>
            </div>
        </div>
    </section>

    <div class="bg_color_1">
        <div class="container margin_80_55">
            <div class="row">
                <?php while (have_posts()):
                    the_post();
                    ?>
                    <div class="col-lg-6">
                        <a class="box_news" href="<?php the_permalink(); ?>">
                            <figure><img src="<?php the_post_thumbnail('category-thumb'); ?>" alt="">
                            </figure>
                            <h4><?php the_title(); ?></h4>
                            <p><?= get_field('intro_text'); ?></p>
                        </a>
                    </div>
                <?php endwhile; ?>
                <!-- /box_news -->
            </div>
            <!-- /row -->
            <p class="btn_home_align"><a href="blog.html" class="btn_1 rounded">View all news</a></p>
        </div>
        <!-- /container -->
    </div>
    <!-- /bg_color_1 -->

    <?php get_template_part('/partials/single-product/content_list'); ?>
</main>
<!--/main-->
<?php get_footer(); ?>
