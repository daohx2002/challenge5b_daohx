
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Nhập</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">

</head>
<body>
<div class="container">
    <form method="POST" action="<?php echo e(route('authLogin')); ?>">
        <?php echo csrf_field(); ?>
        <div class="container">
            <div class="row">
                <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                    <div class="card card-signin my-5">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="user">Tên Đăng Nhập</label>
                                <input name="username" class="form-control" placeholder="Tên Đăng Nhập">
                            </div>
                            <div class="form-group">
                                <label for="pass">Mật Khẩu</label>
                                <input name="password" type = "password" class="form-control" placeholder="Mật Khẩu">
                            </div>
                            <button type="submit" class="active" name="dangnhap">Đăng Nhập</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
</body>
</html>

<?php /**PATH C:\laragon\www\challenge5b_daohx\resources\views/login.blade.php ENDPATH**/ ?>