<?php 
get_header();
get_template_part( 'template_parts/header');
$path = parse_url(home_url( $wp->request ), PHP_URL_PATH); // gives "/pwsdedtech"
$path = substr($path, 1);

if($pagename == 'beranda' || get_the_ID() == 1)
    get_template_part('template_parts/beranda/beranda');
else if($pagename == 'produk-umkm'){
    get_template_part('template_parts/produk/produk');
} 
else if($path == "masuk"){
    get_template_part('template_parts/login/login');
}
    
?>

<?php get_footer(); ?>