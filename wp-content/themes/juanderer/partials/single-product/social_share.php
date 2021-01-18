<ul class="share-buttons">
    <?php $facebook_url = "https://www.facebook.com/sharer.php?u=" . get_permalink();
    $twitter_url = add_query_arg(
        [
            'text' => urlencode(get_the_title()),
            'url' => get_permalink(),
//                                    'hashtags' => get_photography_tags( $product )
        ],
        "https://www.twitter.com/intent/tweet?"
    );
    ?>
    <li><a class="fb-share" href="<?= $facebook_url; ?>"><i class="social_facebook"></i>
            Share</a></li>
    <li><a class="twitter-share" href="<?= $twitter_url; ?>"><i class="social_twitter"></i>
            Tweet</a></li>
    <li><a class="gplus-share" href="#0"><i class="social_googleplus"></i> Share</a></li>
</ul>