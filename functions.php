<?php
//* Start the engine
include_once( get_template_directory() . '/lib/init.php' );

//* Child theme (do not remove)
define( 'CHILD_THEME_NAME', 'Genesis Sample Theme' );
define( 'CHILD_THEME_URL', 'http://www.studiopress.com/' );
define( 'CHILD_THEME_VERSION', '2.0.1' );

//* Use to enqueue fonts
add_action( 'wp_enqueue_scripts', 'idw_enqueue_scripts' );
function idw_enqueue_scripts() {
    wp_enqueue_style( 'google-font-open-sans', '//fonts.googleapis.com/css?family=Open+Sans:400,300,600', array(), CHILD_THEME_VERSION );
    wp_enqueue_style( 'font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css' );

    wp_enqueue_script( 'modernizer', get_stylesheet_directory_uri() . '/js/modernizr.js', '', '', true );
    wp_enqueue_script( 'velocity', get_stylesheet_directory_uri() . '/js/velocity.min.js', array( 'jquery' ),'', true );
    wp_enqueue_script( 'velocityUI', get_stylesheet_directory_uri() . '/js/velocity.ui.min.js', array( 'velocity' ),'', true );
    wp_enqueue_script( 'main-script', get_stylesheet_directory_uri() . '/js/main.js', array( 'jquery' ), '', true );
    wp_enqueue_script( 'video', get_stylesheet_directory_uri() . '/js/video.js', array( 'jquery' ),'', true );

    wp_enqueue_script( 'idw-script', get_stylesheet_directory_uri() . '/js/idw.js', array( 'jquery' ), '', true );
}

//* Add HTML5 markup structure
add_theme_support( 'html5' );

//* Add viewport meta tag for mobile browsers
add_theme_support( 'genesis-responsive-viewport' );

//=====================================Header==============================================

//* Defines Clickable Logo and adds Blog Info to title
remove_action( 'genesis_site_title', 'genesis_seo_site_title' );
remove_action( 'genesis_after_header', 'genesis_do_nav' );
add_action( 'genesis_before_header','practice_header',5,1);
function practice_header() {
    if (is_front_page()) { ?>

    <?php } else { ?>
        <div id="top-header">
            <a id="sitelogo" href="<?php bloginfo( 'url' ); ?>"><img src="<?php echo get_bloginfo( 'stylesheet_directory' ) ?>/images/bedminster_logo2.png" alt="<?php bloginfo('name')?>" title="<?php bloginfo('name')?>" /></a>
            <div id="top-header-inner-right">
                <a id="sitedocs" class="site-contacts"href="https://www.ident.ws/template_include/new_patient_sign_in.do?site=14059&practiceId=31111"><img src="<?php echo get_bloginfo( 'stylesheet_directory' ) ?>/images/bedminster_forms.png" alt="" /><span class="site-contacts-text">Patient Forms</span></a>
                <a id="sitenum1" class="site-contacts" href="tel:908-234-1401"><img src="<?php echo get_bloginfo( 'stylesheet_directory' ) ?>/images/bedminster_numbers.png" alt="" /><span class="site-contacts-text">Existing Patients: 908-234-1401</span></a>
                <a id="sitenum2" class="site-contacts" href="tel:877-202-9877"><img src="<?php echo get_bloginfo( 'stylesheet_directory' ) ?>/images/bedminster_numbers.png" alt="" /><span class="site-contacts-text">New Patients: 877-202-9877</span></a>
            </div>
        </div>
        <div id="inner-tagline-con">
            <div id="inner-main-nav-con"><?php genesis_do_nav( array('menu' => 'Primary navigation' )); ?></div>
            <img src="<?php echo get_bloginfo( 'stylesheet_directory' ) ?>/images/Innerpage-tagline.png" alt="" title="" />
        </div>
    <?php }
}


//* Remove the header right widget area
unregister_sidebar( 'header-right' );

//----------------------------------Footer---------------------------------------------------

remove_action( 'genesis_after_header', 'genesis_do_subnav' );
remove_action ('genesis_footer' , 'genesis_do_footer');
add_action ('genesis_footer' , 'idw_footer');
function idw_footer() {

    if (is_front_page()) { ?>

    <?php } else { ?>

        <section class="inner-footer S07">
            <div class="inner-footer-container">
                <div class="content">
                    <p class="section-label"><img class="section-line" src="<?php bloginfo('stylesheet_directory' );?>/images/line01.png"> Contact Us</p>
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
                <div style="clear: both; content:' ';"></div>
            </div>
        </section>

    <?php }
}

//----------------------------------login page IDW logo--------------------------------------
function login_logo() { ?>
    <style type="text/css">
        body.login div#login h1 a {
            background-image: url(<?php echo get_bloginfo( 'stylesheet_directory' ) ?>/images/idw_logo_wp_admin.jpg);
            width: 320px;
            height: 80px;
            background-size: 320px 80px;
        }
    </style>
   <?php }
add_action( 'login_enqueue_scripts', 'login_logo' );
function put_my_url(){
    return ('http://www.infinitydentalweb.com/');
    }
add_filter('login_headerurl', 'put_my_url');

function put_my_title(){
    return ('Powered by Infinity Dental Web CMS');
}
add_filter('login_headertitle', 'put_my_title');
