<?php get_header(); ?>
<main>
    <section class="hero_in hotels">
        <div class="wrapper">
            <div class="container">
                <h1 class="fadeInUp"><span></span>Paris hotels grid</h1>
            </div>
        </div>
    </section>

    <!-- End Map -->
    <div class="container margin_60_35">
        <div class="wrapper-grid">
            <div class="row">
                <?php while (have_posts()):
                    the_post();
                    ?>
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="box_grid">
                            <figure>
                                <!--                                <a href="#0" class="wish_bt"></a>-->
                                <a href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail('full'); ?>"
                                                                         class="img-fluid"
                                                                         alt="" width="800" height="533">
                                    <div class="read_more"><span>Read more</span></div>
                                </a>
                                <small>
                                    <?php  $terms = get_the_terms($post->ID, 'hotel-category' );
                                    foreach ($terms as $term) {
                                        echo $term_name = $term->name;
                                    }
                                    ?>
                                </small>
                            </figure>
                            <div class="wrapper">
                                <div class="cat_star"><i class="icon_star"></i><i class="icon_star"></i><i
                                            class="icon_star"></i><i class="icon_star"></i></div>
                                <h3><a href="<?php the_permalink(); ?>>"><?php the_title(); ?></a></h3>
                                <p><?php the_content(); ?></p>
                                <span class="price">From <strong><?php the_field('price'); ?></strong> /per person</span>
                            </div>
<!--                            <ul>-->
<!--                                <li><i class="ti-eye"></i> 164 views</li>-->
                                <!--                            <li><div class="score"><span>Superb<em>350 Reviews</em></span><strong>8.9</strong></div></li>-->
<!--                            </ul>-->
                        </div>
                    </div>
                <?php endwhile; ?>
                <!-- /box_grid -->
            </div>
            <!-- /row --></div>
        <!-- /wrapper-grid -->

        <p class="text-center"><a href="#0" class="btn_1 rounded add_top_30">Load more</a></p>

    </div>
    <!-- /container -->

    <div class="bg_color_1">
        <div class="container margin_60_35">
            <div class="row">
                <?php while (have_rows('content_field', 'option')):
                    the_row();
                    ?>
                    <div class="col-md-4">
                        <a href="<?php the_sub_field('link'); ?>" class="boxed_list">
                            <i class="<?php the_sub_field('icons'); ?>"></i>
                            <h4><?php the_sub_field('title'); ?></h4>
                            <p><?php the_sub_field('paragraph'); ?></p>
                        </a>
                    </div>
                <?php endwhile; ?>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /bg_color_1 -->

</main>
<!--/main-->

<?php get_footer(); ?>
