<footer>
    <?php $contact = get_field('contact', 'option'); ?>
    <?php $social = get_field('social', 'option'); ?>
    <div class="container margin_60_35">
        <div class="row">
            <div class="col-lg-5 col-md-12 p-r-5">
                <p><img src="<?= $contact['footer_logo'] ?>" height="70" alt=""></p>
                <p><?= $contact['description'] ?></p>
                <div class="follow_us">
                    <ul>
                        <li>Follow us</li>
                        <li><a href="<?= $social['facebook_url'] ?>"><i class="ti-facebook"></i></a></li>
                        <li><a href="<?= $social['twitter_url'] ?>"><i class="ti-twitter-alt"></i></a></li>
                        <li><a href="<?= $social['google_url'] ?>"><i class="ti-google"></i></a></li>
                        <li><a href="<?= $social['pinterest_url'] ?>"><i class="ti-pinterest"></i></a></li>
                        <li><a href="<?= $social['instagram_url'] ?>"><i class="ti-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 ml-lg-auto d-none">
                <h5>popular tour</h5>
                <ul class="links">
                    <?php
                    global $post;
                    $post_args = array(
                        'post_type' => 'tour',
                        'post_status' => 'publish'
                    );
                    $posts = get_posts($post_args);
                    foreach ($posts as $post) {
                        ?>
                        <li><a href="<?php the_permalink($post->ID); ?>"><?php the_title($post->Name); ?>
                        </li><?php
                    }
                    ?>
                </ul>
            </div>
            <div class="col-lg-3 col-md-6">
                <h5>Contact with Us</h5>
                <ul class="contacts">
                    <li><a href="tel://61280932400"><i class="ti-mobile"></i> <?= $contact['phone_number'] ?></a></li>
                    <li><a href="mailto:info@Panagea.com"><i class="ti-email"></i> <?= $contact['email'] ?></a></li>
                </ul>
            </div>
        </div>
        <!--/row-->
        <hr>
        <div class="row">
            <div class="col-lg-6">
                <ul id="footer-selector">
                    <li><img src="assets/images/cards_all.svg" alt=""></li>
                </ul>
            </div>
            <div class="col-lg-6">
                <ul id="additional_links">
                    <li><a href="#0">Terms and conditions</a></li>
                    <li><a href="#0">Privacy</a></li>
                    <li><span>© <?php echo date('Y'); ?> Juanderer Travels</span></li>
                </ul>
            </div>
        </div>
    </div>

</footer>
<!--/footer-->
</div>


<div id="toTop"></div><!-- Back to top button -->

<!--<script>-->
<!---->
<!--</script>-->
<?php wp_footer(); ?>
</body>
</html>