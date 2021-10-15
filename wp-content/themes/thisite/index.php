<?php 
get_header();
get_template_part( 'template_parts/header');

if($pagename == 'beranda')
    get_template_part('template_parts/beranda/beranda');
else if($pagename == 'produk-umkm'){
    get_template_part('template_parts/produk/produk');
}
    
?>

<?php get_footer(); ?>