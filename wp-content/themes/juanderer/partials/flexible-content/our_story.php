<div class="bg_color_1">
    <div class="container margin_80_55">
        <div class="main_title_2">
            <span><em></em></span>
            <h2><?php the_sub_field('title'); ?></h2>
            <p><?php the_sub_field('description'); ?></p>
        </div>
        <div class="row justify-content-between">
            <div class="col-lg-6 wow" data-wow-offset="150">
                <figure class="block-reveal">
                    <div class="block-horizzontal"></div>
                    <?php $image = get_sub_field('image_url') ?>
                    <img src="<?= $image ?>" class="img-fluid" alt="">
                </figure>
            </div>
            <div class="col-lg-5">
                <p><?php the_sub_field('story_description'); ?></p>

                <p><em><?php the_sub_field('author_name'); ?></em></p>
            </div>
        </div>
        <!--/row-->
    </div>
    <!--/container-->
</div>
<!--/bg_color_1-->
