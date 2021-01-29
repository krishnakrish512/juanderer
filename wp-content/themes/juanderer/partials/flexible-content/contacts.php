<main>
    <section class="hero_in contacts">
        <div class="hero_in-image bg-cover"
            <?php $image = get_sub_field('image_url'); ?>
             style="background-image: url('<?= $image ?>');">
        </div>
        <div class="wrapper">
            <div class="container">
                <h1 class="fadeInUp"><span></span>Contact Us</h1>
            </div>
        </div>
    </section>
    <?php $contact = get_field('contact', 'option'); ?>
    <!--/hero_in-->
    <div class="contact_info">
        <div class="container">
            <ul class="clearfix">
                <li>
                    <i class="pe-7s-map-marker"></i>
                    <h4>Address</h4>
                    <span><?= $contact['address'] ?></span>
                </li>
                <li>
                    <i class="pe-7s-mail-open-file"></i>
                    <h4>Email address</h4>
                    <span><?= $contact['email'] ?><br><small>Monday to Friday 9am - 7pm</small></span>
                </li>
                <li>
                    <i class="pe-7s-phone"></i>
                    <h4>Contacts info</h4>
                    <span><?= $contact['phone_number'] ?><br><small>Monday to Friday 9am - 7pm</small></span>
                </li>
            </ul>
        </div>
    </div>
    <!--/contact_info-->
    <div class="bg_color_1">
        <div class="container margin_80_55">
            <div class="row justify-content-between">
                <div class="col-lg-8 offset-lg-2">
                    <div class="map_contact">
                        <?php
                        $map_iframe = get_sub_field('map');
                        echo $map_iframe;
                        ?>
                    </div>
                    <!-- /map -->
                </div>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /bg_color_1 -->
</main>
<!--/main-->
