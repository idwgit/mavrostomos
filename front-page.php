<?php
function idw_home_page() {?>
    <section class="section S00 visible">
        <div class="container">
            <div id="top-header">
                <a id="sitelogo" href="<?php bloginfo( 'url' ); ?>"><img src="<?php echo get_bloginfo( 'stylesheet_directory' ) ?>/images/bedminster_logo2.png" alt="<?php bloginfo('name')?>" title="<?php bloginfo('name')?>" /></a>
                <div id="top-header-inner-right">
                    <a id="sitedocs" class="site-contacts" href="https://www.ident.ws/template_include/new_patient_sign_in.do?site=14059&practiceId=31111"><img src="<?php echo get_bloginfo( 'stylesheet_directory' ) ?>/images/bedminster_forms.png" alt="" /><span class="site-contacts-text">Patient Forms</span></a>
                    <a id="sitenum1" class="site-contacts" href="tel:908-234-1401"><img src="<?php echo get_bloginfo( 'stylesheet_directory' ) ?>/images/bedminster_numbers.png" alt="" /><span class="site-contacts-text">Existing Patients: 908-234-1401</span></a>
                    <a id="sitenum2" class="site-contacts" href="tel:877-202-9877"><img src="<?php echo get_bloginfo( 'stylesheet_directory' ) ?>/images/bedminster_numbers.png" alt="" /><span class="site-contacts-text">New Patients: 877-202-9877</span></a>
                </div>
            </div>
            <div class="video-background" data-video="video/video"><!-- set path to video files in 'data-video' -->
                        <!-- (video element will be loaded using jQuery) -->
            </div>
            <div class="overlay">
                <div id="s00-content-con">
                    <?php genesis_do_nav( array('menu' => 'Primary navigation' )); ?>
                    <div id="s00-text-con">
                        <img id="s00-claim" src="<?php bloginfo('stylesheet_directory' );?>/images/sec000_claim.png">
                        <img id="s00-claimB" src="<?php bloginfo('stylesheet_directory' );?>/images/sec000_claimB.png">
                        <p id="s00-p">Bedminster Family & Cosmetic Dentistry is a dental practice located in Somerset County, New Jersey, providing patients with state-of-the-art dental care.</p>
                        <a id="s00-button" href="/request-an-appointment.html">Make An Appointment</a>
                    </div>
                </div>
            </div>
            <div id="s00-scroll">SCROLL</div>
        </div>
    </section>

    <section class="section S01">
        <div class="container">
            <div class="section-headers">
                <a class="sectionlogo" href="<?php bloginfo( 'url' ); ?>"><img src="<?php echo get_bloginfo( 'stylesheet_directory' ) ?>/images/bedminster_logo2.png" alt="<?php bloginfo('name')?>" title="<?php bloginfo('name')?>" /></a>
                <div class="section-header-inner-right">
                    <?php genesis_do_nav( array('menu' => 'Primary navigation' )); ?>
                </div>
            </div>
            <div class="content">
                <div id="s01-content-left">
                    <img id="s01-imgA" src="<?php bloginfo('stylesheet_directory' );?>/images/sec01_drMav02.png">
                    <img id="s01-imgB" src="<?php bloginfo('stylesheet_directory' );?>/images/sec01_title.png">
                </div>
                <div id="s01-content-right">
                    <h1 class="section-label">01 <img class="section-line" src="<?php bloginfo('stylesheet_directory' );?>/images/line01.png"> Bedminster Dentist</h1>
                    <p class="section-p-large">Welcome to Bedminster Family & Cosmetic Dentistry. When  I established this dental practice in 1991, I had a two-fold mission. First, to recruit a team that would treat patients the way I myself would want to be treated. Second, I wanted to  serve my patients with the highest level of expertise.</p>
                    <p class="section-p-small">I hope you will find that your experience here lives up to these aspirations of mine.</p>
                    <p class="section-p-small">When you enter our door, we will first greet you like a friend. We will then bring you in for your examination without your having to wait. Your examination will be thorough, and if I find anything that needs treating, I will take the time to fully explain what is needed, why it is needed, and any options you may have for treatment. Throughout all of this, it is our highest priority to keep you comfortable, and to provide you with durable and aesthetic restorative work. My staff will be able to answer any questions about your dental insurance, will help you with any claims, and will make you feel welcome and relaxed.</p>
                    <p class="section-p-small">-	Dr. Mike Mavrostomos</p>
                    <a class="section-button" href="/meet-dr-mavrostomos.html">Read More About Dr. Mavrostomos</a>
                </div>
            </div>
        </div>
    </section>

    <section class="section S02">
        <div class="container">
            <div class="section-headers">
                <a class="sectionlogo" href="<?php bloginfo( 'url' ); ?>"><img src="<?php echo get_bloginfo( 'stylesheet_directory' ) ?>/images/bedminster_logo2.png" alt="<?php bloginfo('name')?>" title="<?php bloginfo('name')?>" /></a>
                <div class="section-header-inner-right">
                    <?php genesis_do_nav( array('menu' => 'Primary navigation' )); ?>
                </div>
            </div>
            <div class="content">
                <p class="section-label">02 <img class="section-line" src="<?php bloginfo('stylesheet_directory' );?>/images/line02.png"> Our Services</p>
                <p class="section-p-large">State-of-the-art dental care, gently and efficiently delivered.</p>
                <div id="s02-slider-conA">
                    <?php echo do_shortcode('[smartslider3 slider=11]'); ?>
                </div>
                <div id="s02-slider-conB">
                    <?php echo do_shortcode('[smartslider3 slider=5]'); ?>
                </div>
            </div>
        </div>
    </section>

    <section class="section S03">
        <div class="container">
            <div class="section-headers">
                <a class="sectionlogo" href="<?php bloginfo( 'url' ); ?>"><img src="<?php echo get_bloginfo( 'stylesheet_directory' ) ?>/images/bedminster_logo2.png" alt="<?php bloginfo('name')?>" title="<?php bloginfo('name')?>" /></a>
                <div class="section-header-inner-right">
                    <?php genesis_do_nav( array('menu' => 'Primary navigation' )); ?>
                </div>
            </div>
            <div class="content">
                <p class="section-label">03 <img class="section-line" src="<?php bloginfo('stylesheet_directory' );?>/images/line01.png"> Watch Our Video</p>
                <p class="section-p-large">Dr. Mavrostomos sums up the essence of our practice in this one-minute video.</p>
                <div id="s03-vid-con">
                    <a id="s03-vid-a" href="#"><img id="s03-vid" src="<?php echo get_bloginfo( 'stylesheet_directory' ) ?>/images/sec03_vid_img.png" alt="<?php bloginfo('name')?>" title="<?php bloginfo('name')?>" /></a>
                    <img id="s03-vid-tagline" src="<?php bloginfo('stylesheet_directory' );?>/images/sec03_vid_tagline.png">
                </div>
            </div>
        </div>
    </section>

    <section class="section S04">
        <div class="container">
            <div class="section-headers">
                <a class="sectionlogo" href="<?php bloginfo( 'url' ); ?>"><img src="<?php echo get_bloginfo( 'stylesheet_directory' ) ?>/images/bedminster_logo2.png" alt="<?php bloginfo('name')?>" title="<?php bloginfo('name')?>" /></a>
                <div class="section-header-inner-right">
                    <?php genesis_do_nav( array('menu' => 'Primary navigation' )); ?>
                </div>
            </div>
            <div class="content">
                <p class="section-label">04 <img class="section-line" src="<?php bloginfo('stylesheet_directory' );?>/images/line02.png"> Smile gallery</p>
                <div id="s04-img-con">
                    <div id="s04-text">
                        <p class="section-p-large">The quality of a cosmetic dentist’s artistry can be found in his smile gallery.</p>
                        <p class="section-p-small">You may choose a beautiful new smile because of the way it will look. But just wait till you find out how it makes you feel.</p>
                    </div>
                    <img id="s04-img-tagline" src="<?php bloginfo('stylesheet_directory' );?>/images/sec04_tagline.png">
                </div>
                <a id="s04-a" href="/smile-gallery.html">See Our Work</a>
            </div>
        </div>
    </section>

    <section class="section S05">
        <div class="container">
            <div class="section-headers">
                <a class="sectionlogo" href="<?php bloginfo( 'url' ); ?>"><img src="<?php echo get_bloginfo( 'stylesheet_directory' ) ?>/images/bedminster_logo2.png" alt="<?php bloginfo('name')?>" title="<?php bloginfo('name')?>" /></a>
                <div class="section-header-inner-right">
                    <?php genesis_do_nav( array('menu' => 'Primary navigation' )); ?>
                </div>
            </div>
            <div class="content">
                <p class="section-label">05 <img class="section-line" src="<?php bloginfo('stylesheet_directory' );?>/images/line01.png"> Testimonials</p>
                <div id="s05-con">
                    <div id="s05-card-con">
                        <?php
                            function humanTiming ($time) {
                                $time = time() - $time; // to get the time since that moment
                                $time = ($time<1)? 1 : $time;
                                $tokens = array (
                                    31536000 => 'year',
                                    2592000 => 'month',
                                    604800 => 'week',
                                    86400 => 'day',
                                    3600 => 'hour',
                                    60 => 'minute',
                                    1 => 'second'
                                );
                                foreach ($tokens as $unit => $text) {
                                    if ($time < $unit) continue;
                                    $numberOfUnits = floor($time / $unit);
                                    return $numberOfUnits.' '.$text.(($numberOfUnits>1)?'s':'');
                                }
                            }
                        $numPerPage = 5;
                        $args = array( 'post_type' => 'testimonials', 'posts_per_page' => $numPerPage );
                        $loop = new WP_Query( $args );
                        while ( $loop->have_posts() ) : $loop->the_post();
                            $t = do_shortcode('[ct id="_ct_datepicker_59a5c86d43912" property="title | description | value | link | image"]');
                            $time = strtotime($t);
                            echo '<div class="s05-card">';
                                echo '<img class="s05-card-q" src="/wp-content/themes/mavrostomos2017/images/sec05_quotes.png">';
                                echo '<p class="s05-card-p">' . do_shortcode('[ct id="_ct_textarea_59a5c8314eb54" property="title | description | value | link | image"]') . '</p>';
                                echo '<img class="s05-card-s" src="/wp-content/themes/mavrostomos2017/images/sec05_stars.png">';
                                echo '<p class="s05-card-n">' . do_shortcode('[ct id="_ct_text_59a5c80500f74" property="title | description | value | link | image"]') . '</p>';
                                echo '<p class="s05-card-t">' . humanTiming($time) . ' ago </p>';
                            echo '</div>';
                        endwhile; ?>
                    </div>
                    <img id="s05-img-tagline" src="<?php bloginfo('stylesheet_directory' );?>/images/sec05_tagline.png">
                </div>
                <a id="s05-a1" class="s05-as" href="/write-a-review.html">Write A Review</a>
                <a id="s05-a2" class="s05-as" href="/reviews.html">Read More Reviews</a>
            </div>
        </div>
    </section>

    <section class="section S06">
        <div class="container">
            <div class="section-headers">
                <a class="sectionlogo" href="<?php bloginfo( 'url' ); ?>"><img src="<?php echo get_bloginfo( 'stylesheet_directory' ) ?>/images/bedminster_logo2.png" alt="<?php bloginfo('name')?>" title="<?php bloginfo('name')?>" /></a>
                <div class="section-header-inner-right">
                    <?php genesis_do_nav( array('menu' => 'Primary navigation' )); ?>
                </div>
            </div>
            <div class="content">
                <p class="section-label">06 <img class="section-line" src="<?php bloginfo('stylesheet_directory' );?>/images/line02.png"> Our Office</p>
                <p class="section-p-large">Gentle treatment in a pleasant environment, with personal attention and warmth.</p>
                <div id="s06-slider-con">
                    <div id="s06-sliderA"><?php echo do_shortcode('[smartslider3 slider=4]');?></div>
                    <div id="s06-slider-text-con">
                        <p id="s06-slider-textA">Patients are the heart<br>of our practice</p>
                        <p id="s06-slider-textB">...so it makes sense that we would go out of the way to provide comfortable waiting and treatment areas complete with the types of amenities you would expect from the premier dental practice. </p>
                        <a id="s06-slider-button">TAKE A TOUR</a>
                    </div>
                    <div id="s06-sliderB"><?php echo do_shortcode('[smartslider3 slider=6]');?></div>
                </div>
            </div>
        </div>
    </section>

    <section class="section S07">
        <div class="container">
            <div class="section-headers">
                <a class="sectionlogo" href="<?php bloginfo( 'url' ); ?>"><img src="<?php echo get_bloginfo( 'stylesheet_directory' ) ?>/images/bedminster_logo2.png" alt="<?php bloginfo('name')?>" title="<?php bloginfo('name')?>" /></a>
                <div class="section-header-inner-right">
                    <?php genesis_do_nav( array('menu' => 'Primary navigation' )); ?>
                </div>
            </div>
            <div class="content">
                <p class="section-label">07 <img class="section-line" src="<?php bloginfo('stylesheet_directory' );?>/images/line01.png"> Contact Us</p>
                <p class="section-p-large">We don’t just have a pleasurable environment with a great staff.<br>We treat people the way we want to be treated.</p>
                <div id="s07-con">
                    <div class="s07-card">
                        <div class="s07-card-left">
                            <img class="s07-card-icon" id="s07-icon1" src="<?php bloginfo('stylesheet_directory' );?>/images/sec07_icon_phone.png">
                        </div>
                        <div class="s07-card-right">
                            <p class="s07-001">Existing Patients:</p>
                            <p>908-234-1401</p>
                            <p class="s07-001">New Patients:</p>
                            <p>877-202-9877</p>
                        </div>
                    </div>
                    <div class="s07-card">
                        <div class="s07-card-left">
                            <img class="s07-card-icon" src="<?php bloginfo('stylesheet_directory' );?>/images/sec07_icon_flag.png">
                        </div>
                        <div class="s07-card-right">
                            <p>Mike Mavrostomos, DMD</p>
                            <p>Bedminster Medical Plaza,</p>
                            <p>1 Robertson Drive, Suite 14</p>
                            <p>Bedminster, NJ 07921</p>
                        </div>
                    </div>
                    <div class="s07-card">
                        <div class="s07-card-left">
                            <img class="s07-card-icon" src="<?php bloginfo('stylesheet_directory' );?>/images/sec07_icon_clock.png">
                        </div>
                        <div class="s07-card-right">
                            <p>Mon & Thu: 10am - 7pm</p>
                            <p>Tue, Wed, & Fri: 8am - 3pm</p>
                            <p>Alternate Sat: 8am - 1pm</p>
                            <p id="s07-lastp">.</p>
                        </div>
                    </div>
                </div>
                <a id="s07-a1" class="s07-as" href="/request-an-appointment.html"><img class="s07-a-icon" src="<?php bloginfo('stylesheet_directory' );?>/images/sec07_icon_call.png"><span>Make An Appointment</span></a>
                <a id="s07-a2" class="s07-as" href="/map-to-our-office.html"><img class="s07-a-icon" src="<?php bloginfo('stylesheet_directory' );?>/images/sec07_icon_map.png"><span>Us On Google Map</span></a>
                <img id="s07-img-tagline" src="<?php bloginfo('stylesheet_directory' );?>/images/sec07_tagline.png">
            </div>
            <div id="footer-lower">
                <ul class="social">
                    <li><a href="https://www.facebook.com/BedminsterDental" alt="Facebook"><i class="fa fa-facebook fa-1x"></i></a></li>
                    <li><a href="https://twitter.com/DrMavrostomos" alt="Twitter"><i class="fa fa-twitter fa-1x"></i></a></li>
                    <li><a href="https://www.instagram.com/drmavrostomos/" alt="Instagram"><i class="fa fa-instagram fa-1x"></i></a></li>
                    <li><a href="https://www.youtube.com/channel/UCSEnSPpvFGZkhh2nRdA9Pzw" alt="YouTube"><i class="fa fa-youtube fa-1x"></i></a></li>
                    <li><a href="#" alt="Google Plus"><i class="fa fa-google-plus fa-1x"></i></a></li>
                </ul>
                <p>&copy;<?php echo date("Y") ?> Bedminster Dental &bull; All rights reserved<br />
                    <?php if(is_front_page()){?>Website Design and SEO by <a href="http://infinitydentalweb.com" target="_blank" rel="nofollow">Infinity Dental Web</a><?php }else{?>Website Design and SEO by Infinity Dental Web <?php }?></p>
            </div>
        </div>
    </section>

    <nav>
        <ul class="cd-vertical-nav">
            <li><a href="#" class="cd-prev inactive">Next</a></li>
            <li><a href="#" class="cd-next">Prev</a></li>
        </ul>
    </nav>

<?php }
add_action( 'arnold_content_area', 'idw_home_page' );

function arnold_site_inner_attr( $attributes ) {
    $attributes['role']     = 'main';
    $attributes['itemprop'] = 'mainContentOfPage';
    return $attributes;
}
add_filter( 'genesis_attr_site-inner', 'arnold_site_inner_attr' );

get_header();
do_action( 'arnold_content_area' );
get_footer();
