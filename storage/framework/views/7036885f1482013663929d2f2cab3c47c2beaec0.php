<?php echo $__env->make('../header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;
<body>
<?php echo $__env->make('boder', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;
<div class="container">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h2 class="text-center">Sửa Thông Tin</h2>
        </div>
        <div class="panel-body">
            <form method="post"  action="<?php echo e(route('login.update', $ed )); ?>">
                <?php echo csrf_field(); ?>
                <?php echo method_field('PUT'); ?>
                <div class="form-group">
                    <label for="fullname">Name:</label>
                    <input required="true" type="text" class="form-control" id="usr" name="fullname" value="<?php echo e($ed->fullname); ?>">
                </div>
                <div class="form-group">
                    <label for="usr">Username:</label>
                    <input required="true" type="text" class="form-control" id="usr" name="username" value="<?php echo e($ed->username); ?>">
                </div>
                <div class="form-group">
                    <label for="usr">Password:</label>
                    <input required="true" type="text" class="form-control" id="usr" name="password" value="<?php echo e($ed->password); ?>">
                </div>
                <div class="form-group">
                    <label for="usr">Email:</label>
                    <input required="true" type="text" class="form-control" id="usr" name="gmail" value="<?php echo e($ed->gmail); ?>" >
                </div>
                <div class="form-group">
                    <label for="usr">SĐT:</label>
                    <input required="true" type="text" class="form-control" id="usr" name="sdt" value="<?php echo e($ed->sdt); ?>">
                </div>
                <button class="btn btn-success">Save</button>
            </form>
        </div>
    </div>
</div>
</body>
<?php /**PATH C:\laragon\www\challenge5b_daohx\resources\views/login/edit.blade.php ENDPATH**/ ?>