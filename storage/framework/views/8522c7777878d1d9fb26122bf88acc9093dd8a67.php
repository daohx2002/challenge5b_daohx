<?php echo $__env->make('../header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;
<body>
<?php echo $__env->make('../boder', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="container">
    <div class="panel panel-primary">
        <div class="panel-heading">

            <h2 class="text-center">Thêm Sinh Viên</h2>
        </div>
        <div class="panel-body">
            <form method="post" , action="<?php echo e(route('login.store')); ?>">
                <?php echo csrf_field(); ?>
                <div class="form-group">
                    <label for="fullname">Name:</label>
                    <input required="true" type="text" class="form-control" id="usr" name="fullname">
                </div>
                <div class="form-group">
                    <label for="usr">Username:</label>
                    <input required="true" type="text" class="form-control" id="usr" name="username">
                </div>
                <div class="form-group">
                    <label for="usr">Password:</label>
                    <input required="true" type="text" class="form-control" id="usr" name="password">
                </div>
                <div class="form-group">
                    <label for="usr">Email:</label>
                    <input required="true" type="text" class="form-control" id="usr" name="gmail">
                </div>
                <div class="form-group">
                    <label for="usr">SĐT:</label>
                    <input required="true" type="text" class="form-control" id="usr" name="sdt">
                </div>
                <button class="btn btn-success">Save</button>
            </form>
        </div>
    </div>
</div>
</body>
<?php /**PATH C:\laragon\www\challenge5b_daohx\resources\views/teacher/create.blade.php ENDPATH**/ ?>