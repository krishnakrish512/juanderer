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
            <div class="col-lg-3 col-md-6">
                <h5>Thailand Address:</h5>
                <ul class="contacts">
                    <li><?= $contact['thailand_address']?></li>
                    <li><a href="tel://+6696 704 6245"><i class="ti-mobile"></i> <?= $contact['thailand_number'] ?></a>
                    </li>
                    <li><a href="mailto:info@juanderertravels.com"><i class="ti-email"></i> <?= $contact['email'] ?></a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-6">
                <h5>Head Office(Philippines):</h5>
                <ul class="contacts">
                    <li><?= $contact['head_office_address']?></li>
                    <li><a href="tel://+63 297 2612"><i class="ti-mobile"></i> <?= $contact['head_office_number'] ?></a></li>
                    <li><a href="mailto:info@juanderertravels.com"><i class="ti-email"></i> <?= $contact['email'] ?></a></li>
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