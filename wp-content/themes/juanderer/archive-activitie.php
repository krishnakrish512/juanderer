<?php get_header(); ?>
<main>
    <section class="hero_in tours_detail">
        <div class="hero_in-image bg-cover"
            <?php $image = get_field('activities_image', 'option'); ?>
             style="background-image: url('<?= $image; ?>');"></div>
        <div class="wrapper">
            <div class="container">
                <h1 class="fadeInUp"><span></span><?php the_field('activities_title', 'option') ?></h1>
            </div>
        </div>
    </section>
    <div class="container margin_60_35">
        <div class="wrapper-grid">
            <div class="row">
                <?php while (have_posts()):
                    the_post();
                    ?>
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="box_grid">
                            <?php if (has_post_thumbnail()): ?>
                                <figure>
                                    <?php $image = get_the_post_thumbnail(get_the_ID(), 'category-thumb'); ?>
                                    <a href="<?php the_permalink(); ?>"><?= $image; ?>
                                        <div class="read_more"><span>Read more</span></div>
                                    </a>
                                    <small><?php $terms = get_the_terms($post->ID, 'activities-category');
                                        foreach ($terms as $term) {
                                            echo $term_name = $term->name;
                                        }
                                        ?></small>
                                </figure>
                            <?php endif; ?>
                            <div class="wrapper">
                                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                <p><?php the_field('intro_text'); ?></p>
                                <?php if (get_field('price')): ?>
                                    <span class="price">From <strong>$<?php the_field('price'); ?><small>/person</small></strong> </span>
                                <?php endif; ?>
                                <?php if (!get_field('price')): ?>
                                    <a href="<?php the_permalink(); ?>"
                                    <h1>Get A Quote Now</h1></a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
                <!-- /box_grid -->
            </div>
            <!-- /row -->
        </div>
        <!-- /wrapper-grid -->

        <p class="text-center"><a href="#0" class="btn_1 rounded add_top_30">Load more</a></p>

    </div>
    <!-- /container -->

<!--    --><?php //get_template_part('/partials/single-product/content_list'); ?>
</main>
<!--/main-->
<?php get_footer(); ?>
