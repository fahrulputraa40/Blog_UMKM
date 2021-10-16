<script>
    let link = document.createElement('link');
    link.href = "<?php echo get_theme_file_uri('/blog_files/css/produk.css') ?>";
    link.type = "text/css";
    link.rel = "stylesheet";
    link.media = "screen,print"
    document.getElementsByTagName('head')[0].appendChild(link);
</script>
<div class="produk-container">
    <h1>Produk UMKM</h1>
    <ul class="detail-produk">
        <li class="detail-item active" id="detail-item-1">Daftar Produk</li>
        <li class="detail-item" id="detail-item-2">Daftar UMKM</li>
    </ul>
    <ul class="pencarian">
        <li class="pencarian-item">
            <h5>Pencarian produk</h5>
            <input type="text" name="item-search" placeholder="Masukkan kata kunci pencarian">
            <span><i class="fa fa-search"></i></span>
        </li>
        <li class="pencarian-item">
            <h5>Filter pencarian</h5>
            <div class="filter-container">
                <div class="dropdown show">
                    <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="filter-wilayah" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Semua Wilayah
                    </a>
                    
                    <?php
                        $conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, 'db_daerah');
                        $sql = "SELECT * FROM provinsi LIMIT 50";
                        $provinsi = $conn->query($sql);
                        $conn->close();
                    ?>
                    <div class="dropdown-menu wilayah" aria-labelledby="dropdownMenuLink">
                        <?php 
                            while ($row = $provinsi->fetch_assoc()) {
                                echo "<a class='dropdown-item' href='#'>".$row['nama']."</a>";
                            }
                        ?>
                    </div>
                </div>
                <div class="dropdown show">
                    <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="filter-kategori" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Semua Kategori
                    </a>

                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="#">Kategori A</a>
                        <a class="dropdown-item" href="#">Kategori B</a>
                        <a class="dropdown-item" href="#">Kategori C</a>
                    </div>
                </div>
                <div class="dropdown show">
                    <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="filter-harga" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Semua Harga
                    </a>

                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="#">Harga Terendah</a>
                        <a class="dropdown-item" href="#">Harga Tertinggi</a>
                    </div>
                </div>
                <button class="btn btn-primary">Cari</button>
            </div>
        </li>
    </ul>
    <?php 
    get_template_part('template_parts/produk/daftar-produk');
    get_template_part('template_parts/produk/daftar-umkm');
    ?>
</div>



<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="<?php echo get_theme_file_uri("/blog_files/js/bootstrap_js/bootstrap.min.js"); ?>"></script>
<script>
    $(document).ready(function(){
        $('.detail-item').click(function(){
            if(!$(this).hasClass('active')){
                $('.detail-item').removeClass('active');
                $(this).addClass('active');
                if($(this).attr('id') == 'detail-item-2'){
                    $('.daftar-umkm').css('display', 'unset');
                    $('.daftar-produk').css('display', 'none');
                }else{
                    $('.daftar-produk').css('display', 'unset');
                    $('.daftar-umkm').css('display', 'none');
                }
            }
        });
        $('.dropdown-item').click(function(event){
            event.preventDefault()
           $(this).parents('div.dropdown').find('a.btn').text($(this).html().trim())
        });
    });
</script>