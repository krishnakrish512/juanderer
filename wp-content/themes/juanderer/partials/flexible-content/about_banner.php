<main>
    <section class="hero_in general">
        <div class="hero_in-image bg-cover"
            <?php $image = get_sub_field('banner_image'); ?>
             style="background-image: url('<?= $image; ?>');"></div>
        <div class="wrapper">
            <div class="container">
                <h1 class="fadeInUp"><span></span><?php the_sub_field('title');?></h1>
            </div>
        </div>
    </section>
    <!--/hero_in-->