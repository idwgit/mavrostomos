<?php
/* Template Name: Smile Gallery 2 */
add_action( 'wp_enqueue_scripts', 'sg_enqueue_scripts' );
function sg_enqueue_scripts() {
    wp_enqueue_style( 'slick-css', get_stylesheet_directory_uri() . '/css/slick.css' );
    wp_enqueue_style( 'slick-theme-css', get_stylesheet_directory_uri() . '/css/slick-theme.css' );
    wp_enqueue_script( 'slick-js', get_stylesheet_directory_uri() . '/js/slick.min.js', array( 'jquery' ), '', true );
}
add_action ('wp_head','smartscript');
function smartscript()
{?>
  <script>
  jQuery(document).ready(function($){
      $('.sg-more-content').slick({
          slidesToShow: 1,
          slidesToScroll: 1,
          arrows: false,
          fade: true,
          asNavFor: '.sg-thumb'
      });
      $('.sg-thumb').slick({
          slidesToShow: 6,
          slidesToScroll: 6,
          asNavFor: '.sg-more-content',
          dots: false,
          nextArrow: $(".next"),
          prevArrow: $(".prev"),
          centerMode: true,
          focusOnSelect: true,
          responsive: [
              {
                  breakpoint: 1200,
                  settings: {
                      arrows: false,
                      centerMode: true,
                      slidesToShow: 3
                  }
              },
              {
                  breakpoint: 600,
                  settings: {
                      slidesToShow: 1,
                      slidesToScroll: 1
                  }
              }
          ]
      });
  });
  </script>

  <?php }

genesis();
