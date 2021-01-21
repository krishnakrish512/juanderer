<div class="bg_color_1">
    <div class="container margin_60_35">
        <div class="row justify-content-between align-items-center">
            <div class="col-lg-6 wow animated" data-wow-offset="150" style="visibility: visible;">
                <figure class="block-reveal">
                    <div class="block-horizzontal"></div>
                    <?php $image = get_sub_field('image_url'); ?>
                    <img src="<?= $image; ?>" class="img-fluid" alt="">
                </figure>
            </div>
            <div class="col-lg-5">
                <h3><?php the_sub_field('title'); ?></h3>
                <p><?php the_sub_field('description'); ?></p>

                <a href="<?php the_sub_field('inquiry_url'); ?>" class="btn_1">Inquiry</a>
            </div>
        </div>

