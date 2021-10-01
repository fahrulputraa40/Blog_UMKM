<?php 
 
 function this_blog_style_files(){
    wp_enqueue_style('this_blog_style', get_theme_file_uri('/blog_files/css/index.css'));
    wp_enqueue_style('this_blog_header_style', get_theme_file_uri('/blog_files/css/header.css'));
    wp_enqueue_style('bootstrap_css', get_theme_file_uri('/blog_files/css/bootstrap_css/bootstrap.min.css'));
    wp_enqueue_style('font_awesome_css', get_theme_file_uri('/blog_files/css/font-awesome/css/fontawesome-all.min.css'));
    wp_enqueue_script('jquery_script', get_theme_file_uri('/blog_files/js/jquery-3.6.0.min.js'));
    wp_enqueue_script('header_script', get_theme_file_uri('/blog_files/js/header.js'));

    wp_enqueue_style('footer_style', get_theme_file_uri('/blog_files/css/footer.css'));
    wp_enqueue_style('beranda_style', get_theme_file_uri('/blog_files/css/beranda.css'));
  }

 add_action('wp_enqueue_scripts', 'this_blog_style_files');

?>

