<?php 
 
 function this_blog_style_files(){
    wp_enqueue_style('this_blog_style', get_theme_file_uri('/blog_files/css/index.css'));
    wp_enqueue_style('this_blog_header_style', get_theme_file_uri('/blog_files/css/header.css'));
    wp_enqueue_style('bootstrap_css', get_theme_file_uri('/blog_files/css/bootstrap_css/bootstrap.min.css'));
  }

 add_action('wp_enqueue_scripts', 'this_blog_style_files');

?>