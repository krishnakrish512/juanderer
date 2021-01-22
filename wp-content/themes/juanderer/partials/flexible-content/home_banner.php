<?php $image = get_sub_field('image_url') ?>
<div class="call_section bg-cover bg-over--fixed " style="background-image: url('<?= $image ?>'))">
    <div class="container clearfix">
        <div class="col-lg-5 col-md-6 float-right wow" data-wow-offset="250">
            <div class="block-reveal">
                <div class="block-vertical"></div>
                <div class="box_1">
                    <h3><?php the_sub_field('title'); ?>></h3>
                    <p><?php the_sub_field('description'); ?></p>
                    <a href="<?php the_sub_field('link');?>" class="btn_1 rounded">Read more</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/call_section-->
</main>
<!-- /main -->