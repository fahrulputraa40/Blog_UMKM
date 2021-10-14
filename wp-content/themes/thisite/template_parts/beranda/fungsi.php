<div class="fungsi">
    <h3>Fungsi Bergabung di Rumah BUMN</h3>
    <ul class="carausel-container" id="carausel-container">
        <li class="carausel-item">
            <div class="item-image">
                <img src=<?php echo get_theme_file_uri('/assets/demo1.jpg'); ?> width="400px" alt="Belum ada">
            </div>
            <div class="paragraf">
                <h4>Fungsi Pertama</h4>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Praesentium iusto adipisci, et eius voluptatum odio sunt cupiditate possimus mollitia minus vero, a ullam odit reiciendis ipsum delectus? Aut, ratione quaerat!</p>
            </div>
        </li>
        <li class="carausel-item">
            <div class="item-image">
                <img src=<?php echo get_theme_file_uri('/assets/demo2.jpg'); ?> alt="Belum ada" width="400px">
            </div>
            <div class="paragraf">
                <h4>Fungsi Kedua</h4>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Praesentium iusto adipisci, et eius voluptatum odio sunt cupiditate possimus mollitia minus vero, a ullam odit reiciendis ipsum delectus? Aut, ratione quaerat!</p>
            </div>
        </li>
    </ul>
</div>

<script>
    var file = "<?php echo get_theme_file_uri('/blog_files/js/lib/carousel/carousel.css'); ?>"

    var link = document.createElement("link");
    link.href = file.substr(0, file.lastIndexOf(".")) + ".css";
    link.type = "text/css";
    link.rel = "stylesheet";
    link.media = "screen,print";

    document.getElementsByTagName("head")[0].appendChild(link);
</script>
<script src=<?php echo get_theme_file_uri('/blog_files/js/lib/carousel/carousel.js'); ?>></script>
<script src=<?php echo get_theme_file_uri('/blog_files/js/beranda/fungsi.js'); ?>></script>