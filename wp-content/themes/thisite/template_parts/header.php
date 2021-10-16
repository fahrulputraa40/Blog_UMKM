<nav class="header">
    <?php
    // var_dump(get_pages()); 
    // //     var_dump(get_the_ID());
    // var_dump(get_page_by_title("beranda"));
    // echo get_permalink(get_page_by_title("beranda"));
    //     die();
    ?>
    <div class="blog-logo">
        <img style="display: bloc;" src=<?php echo get_theme_file_uri('/assets/bumn.png'); ?> alt="">
    </div>
    <div class="sidebar-ctrl">
        <span id="sidebar-ctrl"><i class="fa fa-bars"></i></span>
    </div>
    <ul class="header-contents" id="header-contents">
        <?php
        foreach(get_pages(array('sort_column' => 'menu_order')) as $page){
            if($page->post_title == "Masuk")
                continue;
            if((get_the_ID() == 1 && $page->post_title == 'Beranda')|| ($page->ID == get_the_ID()))
                echo '<li><a class="nav-active" href="'.get_permalink($page).'">'.$page->post_title.'</a></li>';
            else
                echo '<li><a href="'.get_permalink($page).'">'.$page->post_title.'</a></li>';    
        }?>
        <li><a id="search-ctrl" href="">Cari UMKM</a></li>
        <li class="login"><a href="<?php echo get_permalink(get_page_by_title("masuk")); ?>">Masuk</a></li>
        <li class="spacing"></li>
        <li><a href=""></a></li>
        <li><a href="">ID</a></li>
    </ul>
</nav>
<div class="popup-search">
    <div class="search-container">
        <div class="search-head">
            <i class="fa fa-search"></i>
            <input autocomplete="off" type="text" name="search" id="search" placeholder="Cari UMKM">
            <span id="close-sarch">x</span>
        </div>
    </div>
</div>