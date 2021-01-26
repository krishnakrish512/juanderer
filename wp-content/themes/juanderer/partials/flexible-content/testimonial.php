<?php $image = get_sub_field('image_url') ?>
<div class="call_section testimonial bg-cover bg-over--fixed "
     style="background-image: url('<?= $image; ?>')">
    <div class="container clearfix">
        <div class="col-lg-6 col-md-6 float-right wow" data-wow-offset="250">
            <div class="block-reveal">
                <div class="block-vertical"></div>
                <div class="box_1">
                    <h3 class="mb-4">Customers' Review</h3>
                    <div class="owl-carousel owl-theme" id="testimonials">
                        <?php while (have_rows('testimonial_repeater')):
                            the_row()
                            ?>
                            <div class="item text-white">
                                <div class="auther-text">
                                    <span class="icon-quote-left"></span>
                                    <p><?php the_sub_field('description'); ?></p>
                                </div>
                                <div class="auther-info">
                                    <h6 class="text-white"><?php the_sub_field('author_name'); ?></h6>
                                    <span class="text-secondary"><?php the_sub_field('author_title'); ?></span>
                                </div>
                            </div>
                        <?php endwhile; ?>
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
