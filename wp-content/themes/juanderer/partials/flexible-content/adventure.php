<div class="container container-custom margin_30_95">
    <?php $image = get_sub_field('image_url');
    //    var_dump($image);
    //    exit();
    ?>
    <div class="banner bg-cover mb-0" style="background-image: url('<?= $image; ?>')">
        <div class="wrapper d-flex align-items-center opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.3)">
            <div>
                <small><?php the_sub_field('title'); ?></small>
                <h3><?php the_sub_field('heading'); ?></h3>
                <p><?php the_sub_field('description'); ?></p>
                <a href="<?php the_sub_field('link'); ?>" class="btn_1">Read more</a>
            </div>
        </div>
        <!-- /wrapper -->
    </div>
    <!-- /banner -->

</div>
<!-- /container -->