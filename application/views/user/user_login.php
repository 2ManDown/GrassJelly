<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In | โรงงานเฉาก๊วย</title>
</head>
<body>
    
<section id="content" class="m-t-lg wrapper-md animated fadeInUp">
    <div class="container aside-xl">
        <a class="navbar-brand block" href="">Grass Jelly</a>
        <section class="m-b-lg">
            <header class="wrapper text-center">
                <strong>Sign in to get in touch</strong>
            </header>
            <?php echo form_open('user/user_auth') ?>
                <div class="list-group">
                    <div class="list-group-item">
                        <input type="text" placeholder="Username Or Email" name="user_username" class="form-control no-border">
                    </div>
                    <div class="list-group-item">
                        <input type="password" placeholder="Password" name="user_password"  class="form-control no-border">
                    </div>
                </div>
                <button type="submit" class="btn btn-lg btn-primary btn-block">เข้าสู่ระบบ</button>
                <div class="text-center m-t m-b"><a href="#"><small>ลืมรหัสผ่าน?</small></a></div>
                <div class="line line-dashed"></div>
                <p class="text-muted text-center"><small>Do not have an account?</small></p>
                <a href="#" class="btn btn-lg btn-default btn-block">Create an account</a>
            <?php form_close()?>
        </section>
    </div>
</section>

</body>
</html>