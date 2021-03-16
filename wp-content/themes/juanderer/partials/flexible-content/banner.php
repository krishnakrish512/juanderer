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
                        <h3><?php the_sub_field('title'); ?></h3>
                        <img src="<?= $image ?>" alt="">
                        <div class="meta">
                            <h3><?php the_sub_field('sub_title'); ?></h3>

                            <a href="<?php echo esc_url(get_permalink(get_page_by_title('Enquiry Form')) . "?tour_id=" . get_the_ID()); ?>"
                               class="btn_1">Plan your tour now</a>
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
                        $image = get_sub_field('image_url', 'category-thumb')
                        ?>
                        <li>
                            <img src="<?= $image; ?>" alt="">
                            <div class="caption">
                                <h3><?php the_sub_field('title'); ?></h3>
                                <!--                                <small>$--><?php //the_sub_field('price');
                                ?><!--/person</small>-->
                            </div>
                        </li>
                    <?php endwhile; ?>
                </ul>
            </div>
        </div>
    </section>
    <!--search the category-->
    <div class="search_container">
        <div class="container">
            <div class="col-lg-10 offset-lg-1">
                <form method="post" action="">
                    <div class="row no-gutters custom-search-input-2 inner">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input class="form-control" type="text" placeholder="What are you looking for...">
                                <i class="icon_search"></i>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <select class="wide">
                                <?php
                                $category = get_terms('tour-category');//custom category name
                                foreach ($category as $catVal) {
                                    echo '<option value="">' . $catVal->name . '</option>';
                                }
                                ?>
                            </select>
                        </div>
                        <div class="col-lg-2">
                            <input type="submit" class="btn_search" value="Search">
                        </div>
                    </div>
                </form>
                <!-- /row -->
            </div>
            <!-- /custom-search-input-2 -->
        </div>
    </div>
    <!-- /search_container -->
