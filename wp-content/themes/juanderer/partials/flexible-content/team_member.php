<div class="container margin_80_55">
    <div class="main_title_2">
        <span><em></em></span>
        <h2><?php the_sub_field('title'); ?></h2>
        <p><?php the_sub_field('description'); ?></p>
    </div>
    <div id="carousel" class="owl-carousel owl-theme">
        <?php while (have_rows('team_repeater')):
            the_row();
            ?>
            <div class="item">
                <a href="<?php the_sub_field('link'); ?>">
                    <div class="title">
                        <h4><?php the_sub_field('name_post'); ?></h4>
                    </div>
                    <?php $image = get_sub_field('image_url'); ?>
                    <img src="<?= $image ?>" alt="">
                </a>
            </div>
        <?php endwhile; ?>
    </div>
    <!-- /carousel -->
</div>
<!--/container-->
</main>
<!--/main-->
	