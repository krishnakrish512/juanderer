<?php $image = get_sub_field('image_url') ?>
<div class="call_section testimonial bg-cover bg-over--fixed "
     style="background-image: url('<?= $image; ?>')">
    <div class="container clearfix">
        <div class="col-lg-6 col-md-6 float-right wow" data-wow-offset="250">
            <div class="block-reveal">
                <div class="block-vertical"></div>
                <?php
                $args = [
                    'post_type' => 'testimonial',
                    'orderby' => 'date',
                    'order' => 'DESC',
                    'post_status' => 'publish',
                    'posts_per_page' => 6,
                ];
                $testimonials = get_posts($args);?>
                <div class="box_1">
                    <h3 class="mb-4">Customers' Review</h3>
                    <div class="owl-carousel owl-theme" id="testimonials">
                        <?php foreach ($testimonials as $testimonial):
                            ?>
                            <div class="item text-white">
                                <div class="auther-text">
                                    <span class="icon-quote-left"></span>
                                    <p><?php the_field('testimonial', $testimonial->ID); ?></p>
                                </div>
                                <div class="auther-info">
                                    <h6 class="text-white"><?= get_the_title($testimonial->ID) ?></h6>
                                    <span class="text-secondary"><?php the_field('title', $testimonial->ID); ?></span>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <a href="<?php the_sub_field('link'); ?>" class="link-arrow">Read more</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/call_section-->
</main>
<!-- /main -->
