<?php $args = [
    'post_type' => 'tour',
//    'orderby' => 'date',
//    'order' => 'DESC',
//    'post_status' => 'publish',
    'posts_per_page' => 6,
    'meta_key' => 'feature_tour',
    'meta_value' => 1
];
$tours = get_posts($args);
?>
<div class="container container-custom margin_60_0">
    <div class="main_title_2">
        <span><em></em></span>
        <h2><?php the_sub_field('title'); ?></h2>
        <p><?php the_sub_field('description'); ?></p>
    </div>
    <div class="wrapper-grid">
        <div class="row">
            <?php
            foreach ($tours as $tour):
                ?>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="box_grid">
                        <figure>
                            <?php $image = get_the_post_thumbnail($tour->ID, 'category-thumb'); ?>
                            <a href="<?= get_the_permalink($tour->ID); ?>"><?= $image; ?>
                                <div class="read_more"><span>Read more</span></div>
                            </a>
                            <small><?php $terms = get_the_terms($tour->ID, 'tour-category');
                                foreach ($terms as $term) {
                                    echo $term_name = $term->name;
                                }
                                ?></small>
                        </figure>
                        <div class="wrapper">
                            <h3><a href="<?= get_the_permalink($tour->ID); ?>"><?= get_the_title($tour->ID); ?></a>
                            </h3>
                            <p><?= get_field('intro_text', $tour->ID); ?></p>
                            <?php if (get_field('price', $tour->ID)): ?>
                                <span class="price">From <strong>$<?= get_field('price', $tour->ID); ?><small>/person</small></strong> </span>
                            <?php endif; ?>
                            <?php if (!get_field('price', $tour->ID)): ?>
                                <a href="<?php the_permalink($tour->ID); ?>"
                                <h1>Get A Quote Now</h1></a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>

            <?php endforeach; ?>
            <!-- /box_grid -->
        </div>
        <!-- /row -->
        <p class="btn_home_align"><a href="<?php the_sub_field('link'); ?>"
                                     class="btn_1 rounded">View all Tours</a></p>
        <hr class="large">
    </div>
    <!-- /wrapper-grid -->
</div>
<!-- /container -->