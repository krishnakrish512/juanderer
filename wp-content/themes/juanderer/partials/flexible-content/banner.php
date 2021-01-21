<main>
    <section class="slider">
        <div id="slider" class="flexslider">
            <ul class="slides">
                <?php while (have_rows('banner_repeater')):
                    the_row();
                    $image = get_sub_field('image_url');
//                    var_dump($image);
//                    exit();
                    ?>
                    <li>
                        <img src="<?= $image ?>" alt="">
                        <div class="meta">
                            <h3><?php the_sub_field('title'); ?></h3>
                            <a href="<?php the_sub_field('link'); ?>" class="btn_1">Read more</a>
                        </div>
                    </li>
                <?php endwhile; ?>
            </ul>
            <div id="icon_drag_mobile"></div>
        </div>
        <div id="carousel_slider_wp">
            <div id="carousel_slider" class="flexslider">
                <ul class="slides">
                    <?php while (have_rows('banner_repeater')):
                        the_row();
                        $image = get_sub_field('image_url','category-thumb')
                        ?>
                        <li>
                            <img src="<?= $image; ?>" alt="">
                            <div class="caption">
                                <h3><?php the_sub_field('title'); ?></h3>
                                <small>$<?php the_sub_field('price'); ?>/person</small>
                            </div>
                        </li>
                    <?php endwhile; ?>
                </ul>
            </div>
        </div>
    </section>
