<?php
/*  template name: smile gallery                */

add_action( 'wp_enqueue_scripts', 'sg_enqueue_scripts' );
function sg_enqueue_scripts() {
    wp_enqueue_style( 'slick-css', get_stylesheet_directory_uri() . '/css/slick.css' );
    wp_enqueue_style( 'slick-theme-css', get_stylesheet_directory_uri() . '/css/slick-theme.css' );
    wp_enqueue_script( 'slick-js', get_stylesheet_directory_uri() . '/js/slick.min.js', array( 'jquery' ), '', true );
}

function sg_content() { ?>
    <div id="sg-content-con">
        <div id="sg-content-header">
            <h2 id="sg-label"><img class="sg-label-bar" src="<?php bloginfo('stylesheet_directory' );?>/images/line02.png"> Before & After <img class="sg-label-bar" src="<?php bloginfo('stylesheet_directory' );?>/images/line02.png"></h2>
            <h2 id="sg-title">Gallery of Smiles</h2>
            <p id="sg-text">Praesent odio risus, condimentum sed venenatis vitae, fringilla vitae tellus. Duis neque tellus, sagittis vitae nisl. Sed ultrices ante eu odio blandit tristique.</p>
        </div>
        <div id="sg-content-left">
            <div class="sg-thumbnail"></div>
            <div class="sg-thumbnail"></div>
            <div class="sg-thumbnail"></div>
            <div class="sg-thumbnail"></div>
            <div class="sg-thumbnail"></div>
            <div class="sg-thumbnail"></div>
        </div>
        <div id="sg-content-right">
            <div id="sg-feature-con">
                <div id="sg-feature-shadow"></div>
                <div id="sg-feature"></div>
            </div>
        </div>
    </div>
<?php }
add_action( 'genesis_entry_content', 'sg_content' );

genesis();