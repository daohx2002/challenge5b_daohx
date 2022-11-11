<?php echo $__env->make('../header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;
<body>
<?php echo $__env->make('../boder', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;
<div class="container">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h2 class="text-center">Sửa Tin Nhắn</h2>
        </div>
        <div class="panel-body">
            <form method="post" action="<?php echo e(route('updateMessage', $content )); ?>">
                <?php echo csrf_field(); ?>
                <?php echo method_field('PUT'); ?>
                <div class="form-group">
                    <label for="usr">Tin Nhắn:</label>
                    <input required="true" type="text" class="form-control" id="usr" name="con"
                           value="<?php echo e($content); ?>">
                </div>
                <button class="btn btn-success">Save</button>
            </form>
        </div>
    </div>
</div>
</body>
<?php /**PATH C:\laragon\www\challenge5b_daohx\resources\views/editMessage.blade.php ENDPATH**/ ?>