 
<div class="dmbs-footer">
        <?php
            //global $dm_settings;
            //if ($dm_settings['author_credits'] != 0) : ?>
            <div class="container">
                
                <div class="row gieroj_footer">
                    <div class="col-lg-3 col-md-4 col-xs-6"><?php dynamic_sidebar( 'footer-1-col' ); ?></div>
                    <div class="col-lg-3 col-md-4 col-xs-6">
                     
                        <?php wp_list_categories('orderby=name&title_li=<h2 style="font-size: 24px;">Categories</h2>'); ?> 
                        
                        <?php dynamic_sidebar( 'footer-2-col' ); ?></div>
                    <div class="col-lg-3 col-md-4 col-xs-6"><?php dynamic_sidebar( 'footer-3-col' ); ?>
                        <h3>Our Latest projects</h3>
                        <ul class="list-unstyled">
                        <?php
                        $args = array( 'posts_per_page' => 10, 'order'=> 'ASC', 'orderby' => 'title' );
                        $postslist = get_posts( $args );
                        foreach ( $postslist as $post ) :
                          setup_postdata( $post ); ?> 
                            <li><p> <a href="<?php the_permalink(); ?>">
                                        <span class="glyphicon glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                        <?php the_title(); ?>   
                                        <?php //the_excerpt(); ?>
                                    </a></p>
                            </li>
                        <?php
                        endforeach; 
                        wp_reset_postdata();
                        ?>

                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-12 col-xs-6"><?php dynamic_sidebar( 'footer-4-col' ); ?>
                        <h3>Gallery</h3>
                        <div class="mp_gallery">
<!--                            <div class="row">-->
                                <div class="col-lg-4 col-md-2 col-xs-6 col-sm-4">
                                    <div class="mp_gallery_img_border">
                                        <a  href='http://designmodern.website/wp-content/uploads/2014/12/865_screencapture-wnetrzeiogrod-pl.png'>
                                            <img  src="http://designmodern.website/wp-content/uploads/2014/12/naglowek_150_screencapture-wnetrzeiogrod-pl-150x150.png" width="80" height="80" />
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-2 col-xs-6 col-sm-4">
                                    <div class="mp_gallery_img_border">
                                        <a  href='http://designmodern.website/wp-content/uploads/2014/12/865_screencapture-abcdobrejmamy-pl.png'>
                                            <img  src="http://designmodern.website/wp-content/uploads/2014/12/naqglowek_150_screencapture-abcdobrejmamy-pl-150x150.jpg" width="80" height="80" />
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-2 col-xs-6 col-sm-4">
                                    <div class="mp_gallery_img_border">
                                        <a  href='http://designmodern.website/wp-content/uploads/2014/12/865_screencapture-prozdrowie-dobra-mama-pl.png'>
                                            <img  src="http://designmodern.website/wp-content/uploads/2014/12/naglowek_150_screencapture-prozdrowie-dobra-mama-pl-150x150.png" width="80" height="80" />
                                        </a>
                                    </div>
                                </div>
<!--                            </div>
                            <div class="row footer_gallery">-->
                                <div class="col-lg-4 col-md-2 col-xs-6 col-sm-4">
                                    <div class="mp_gallery_img_border">
                                        <a  href='http://designmodern.website/wp-content/uploads/2014/12/865_screencapture-dobrekosmetyki-pl.png'>
                                            <img  src="http://designmodern.website/wp-content/uploads/2014/12/865_screencapture-dobrekosmetyki-pl-150x150.png" width="80" height="80" />
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-2 col-xs-6 col-sm-4">
                                    <div class="mp_gallery_img_border">
                                        <a  href='http://designmodern.website/wp-content/uploads/2014/12/865_screencapture-www-dobrezabawki-pl.png'>
                                            <img  src="http://designmodern.website/wp-content/uploads/2014/12/865_screencapture-www-dobrezabawki-pl-150x150.png" width="80" height="80" />
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-2 col-xs-6 col-sm-4">
                                    <div class="mp_gallery_img_border">
                                        <a  href='http://designmodern.website/wp-content/uploads/2014/12/865_screencapture-dobre-produkty-pl.png'>
                                            <img  src="http://designmodern.website/wp-content/uploads/2014/12/naglowek_150_screencapture-dobre-produkty-pl.png" width="80" height="80" />
                                        </a>
                                    </div>
                                </div>
<!--                            </div>
                            <div class="row footer_gallery">-->
                                <div class="col-lg-4 col-md-2 col-xs-6 col-sm-4 hidden-md">
                                    <div class="mp_gallery_img_border">
                                        <a  href='http://designmodern.website/wp-content/uploads/2014/12/865_screencapture-nowymagazyn-eu.png'>
                                            <img  src="http://designmodern.website/wp-content/uploads/2014/12/865_screencapture-nowymagazyn-eu-150x150.png" width="80" height="80" />
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-2 col-xs-6 col-sm-4 hidden-md">
                                    <div class="mp_gallery_img_border">
                                        <a  href='http://designmodern.website/wp-content/uploads/2014/12/865_screencapture-www-wnetrzeiogrod-pl-konkurs-2014.png'>
                                            <img  src="http://designmodern.website/wp-content/uploads/2014/12/865_screencapture-www-wnetrzeiogrod-pl-konkurs-2014-150x150.png" width="80" height="80" />
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-2 col-xs-6 col-sm-4 hidden-md hidden-xs">
                                    <div class="mp_gallery_img_border">
                                        <a  href='http://designmodern.website/wp-content/uploads/2014/12/865_screencapture-hardyrzeszow-pl.png'>
                                            <img  src="http://designmodern.website/wp-content/uploads/2014/12/865_screencapture-hardyrzeszow-pl-150x150.png" width="80" height="80" />
                                        </a>
                                    </div>
                                </div>
                            <!--</div>-->
                        </div>
                    </div>
                </div>
                
            
        <?php// endif; ?>

        <?php get_template_part('template-part', 'footer'); ?>
    </div>
    <div class="dmbs-author-credits">
<!--        <div class="row">-->
            <div class="col-lg-12 col-md-12 col-xs-12 text-center">
                <p >
                    Copyright © 2015 
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><strong>DesignModern.Website</strong></a>
                All rights reserved.</p>
            </div>
<!--        </div>-->
    </div>
    

</div>
</div>
<!-- end main container -->

<?php wp_footer(); ?>
<!-- Quantcast Tag -->
<script type="text/javascript">
var _qevents = _qevents || [];

(function() {
var elem = document.createElement('script');
elem.src = (document.location.protocol == "https:" ? "https://secure" : "http://edge") + ".quantserve.com/quant.js";
elem.async = true;
elem.type = "text/javascript";
var scpt = document.getElementsByTagName('script')[0];
scpt.parentNode.insertBefore(elem, scpt);
})();

_qevents.push({
qacct:"p-QnbrVJL2xb4pm"
});
</script>

<noscript>
<div style="display:none;">
<img src="//pixel.quantserve.com/pixel/p-QnbrVJL2xb4pm.gif" border="0" height="1" width="1" alt="Quantcast"/>
</div>
</noscript>
<!-- End Quantcast tag -->
</body>
</html>