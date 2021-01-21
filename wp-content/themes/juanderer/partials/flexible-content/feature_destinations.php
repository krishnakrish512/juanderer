<div class="bg_color_1">
    <div class="container margin_80_55">
        <div class="main_title_2">
            <span><em></em></span>
            <h3><?php the_sub_field('title'); ?></h3>
            <p><?php the_sub_field('description'); ?></p>
        </div>
        <div class="row">
            <?php
            $args = [
                'post_type' => 'destination',
//    'orderby' => 'date',
//    'order' => 'DESC',
//    'post_status' => 'publish',
                'posts_per_page' => 2,
                'meta_key' => 'feature_destination',
                'meta_value' => 1
            ];
            $destinations = get_posts($args);
            foreach ($destinations as $destination):
                ?>
                <div class="col-lg-6">
                    <a class="box_news" href="<?= get_the_permalink($destination->ID); ?>">
                        <figure><img src="<?= get_the_post_thumbnail($destination->ID, 'category-thumb'); ?>" alt="">

                        </figure>

                        <h4><?= get_the_title($destination->ID); ?></h4>
                        <p><?= get_field('intro_text', $destination->ID); ?></p>
                    </a>
                </div>
            <?php endforeach; ?>
            <!-- /box_news -->
        </div>
        <!-- /row -->
        <p class="btn_home_align"><a href="<?php the_sub_field('link');?>" class="btn_1 rounded">View all Destination</a></p>
    </div>
    <!-- /container -->
</div>
<!-- /bg_color_1 -->

