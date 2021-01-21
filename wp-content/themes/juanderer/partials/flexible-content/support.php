<div class="container margin_80_55">
    <div class="main_title_2">
        <span><em></em></span>
        <h2><?php the_sub_field('title');?></h2>
        <p><?php the_sub_field('description');?></p>
    </div>
    <div class="row">
        <?php while (have_rows('support_repeater')):
            the_row();
            ?>
            <div class="col-lg-4 col-md-6">
                <a class="box_feat" href="<?php the_sub_field('link'); ?>">
                    <i class="<?php the_sub_field('icons'); ?>"></i>
                    <h3><?php the_sub_field('title'); ?></h3>
                    <p><?php the_sub_field('description'); ?></p>
                </a>
            </div>
        <?php endwhile; ?>
    </div>
    <!--/row-->
</div>
<!-- /container -->
