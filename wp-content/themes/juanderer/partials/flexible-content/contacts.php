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
    <div class="contact_info d-none">
        <div class="container">
            <ul class="clearfix">
                <li>
                    <i class="pe-7s-map-marker"></i>
                    <h4>Address</h4>
                    <hr>
                    <h6 class="text-white">Thailand</h6>
                    <span><?= $contact['thailand_address'] ?></span>
                    <hr>
                    <h6 class="text-white">Philippines</h6>
                    <span><?= $contact['head_office_address'] ?></span>
                </li>
                <li>
                    <i class="pe-7s-mail-open-file"></i>
                    <h4>Email address</h4>
                    <hr>
                    <span><?= $contact['email'] ?><br><small>Monday to Friday 9am - 7pm</small></span>
                </li>
                <li>
                    <i class="pe-7s-phone"></i>
                    <h4>Contacts info</h4>
                    <hr>
                    <span><?= $contact['philippines_number'] ?><br><small>Monday to Friday 9am - 7pm</small></span>
                </li>
            </ul>
        </div>
    </div>
    <!--/contact_info-->
    <div class="bg_color_1">
        <div class="container margin_80_55">
            <div class="row justify-content-between">
                <div class="col-lg-5">
                    <div class="map_contact">
                        <?php
                        $map_iframe = get_sub_field('map');
                        echo $map_iframe;
                        ?>
                    </div>
                    <!-- /map -->
                </div>
                  <div class="col-lg-6">
                        <h4>Contact Us</h5>
                        <h5 class="mb-3">JTH Travel and Tours</h5>
                        <div class="row">
                            <div class="col-lg-12 col-md-6">
                                <h6 class="mb-1">Thailand</h6>
                                <ul class="contacts">
                                    <li class="mb-2"><?= $contact['thailand_address'] ?></li>
                                    <li class="mb-2"><a class="text-dark" href="tel://+6696 704 6245"><i
                                                    class="ti-mobile"></i> <?= $contact['thailand_number'] ?></a>
                                    </li>
                                    <li class="mb-2"><a class="text-dark" href="mailto:info@juanderertravels.com"><i
                                                    class="ti-email"></i> <?= $contact['email'] ?></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-12 col-md-6">
                                <h6 class="mb-1">Philippines</h6>
                                <ul class="contacts">
                                    <li class="mb-2"><?= $contact['head_office_address'] ?></li>
                                    <li class="mb-2"><a class="text-dark" href="tel://+63 9193942094"><i
                                                    class="ti-mobile"></i> <?= $contact['head_office_number'] ?></a>
                                    <li class="mb-2"><a class="text-dark" href="tel://+632 997 4912"><i
                                                class="icon-phone-outline"></i> <?= $contact['philippines_number'] ?></a>
                                    </li>
                                    <li class="mb-2"><a class="text-dark" href="mailto:sales@juanderertravels.com"><i
                                                    class="ti-email"></i> <?= $contact['philippines_email'] ?></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /bg_color_1 -->
</main>
<!--/main-->
