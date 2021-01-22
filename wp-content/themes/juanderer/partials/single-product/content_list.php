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
