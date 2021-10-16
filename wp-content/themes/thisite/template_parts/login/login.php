<script>
    let link = document.createElement('link');
    link.href = "<?php echo get_theme_file_uri('/blog_files/css/login.css'); ?>";
    link.rel = "stylesheet";
    link.type = "text/css";
    link.media = "screen,print"

    document.getElementsByTagName('head')[0].appendChild(link);
</script>
<div class="login">
    <div class="login-form">
        <h4>Silahkan masuk ke akun anda</h4>
        <p>Belum punya akun? <a href="#">Daftar Sekarang</a></p>
        <form action="#" method="post">
            <div class="form-container">
                <label for="formGroupExampleInput">Email</label>
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fa fa-envelope"></i></div>
                    </div>
                    <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Email">
                </div>
            </div>
            <div class="form-container">
                <label for="formGroupExampleInput">Password</label>
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fa fa-key"></i></div>
                    </div>
                    <input type="password" class="form-control password" id="input-pswd" placeholder="Password">
                    <div class="input-group-prepend">
                        <div class="input-group-text" style="cursor: pointer;" id="eye"><i class="fa fa-eye-slash"></i></div>
                    </div>
                </div>
            </div>
            <div class="form-check mb-2">
                <input class="form-check-input" type="checkbox" id="autoSizingCheck">
                <label class="form-check-label" for="autoSizingCheck">
                    Remember me
                </label>
            </div>
            <button type="submit" class="btn btn-primary mb-2">Login</button>
        </form>
    </div>
</div>
<script>
    $(document).ready(function() {
        $('#eye').click(function() {
            if ($(this).find("i").hasClass("fa-eye-slash")) {
                $(this).find("i").removeClass("fa-eye-slash");
                $(this).find("i").addClass("fa-eye")
                $('#input-pswd').attr('type', 'text');
            } else {
                $(this).find("i").removeClass("fa-eye");
                $(this).find("i").addClass("fa-eye-slash");
                $('#input-pswd').attr('type', 'password');
            }
        })
    })
</script>