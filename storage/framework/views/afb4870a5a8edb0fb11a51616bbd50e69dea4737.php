<?php echo $__env->make('../header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<body>
<?php echo $__env->make('../boder', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="container">
    <div class="panel-body">
        <form action="<?php echo e(route('uploadChallenge')); ?>" method="POST" role="form" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <legend>Upload Challenge</legend>
            <div class="form-group">
                <label for="">Tên Bài</label>
                <input type="text" class="form-control" id="" placeholder="Input field" name="title">
            </div>
            <div class="form-group">
                <label for="">Hint</label>
                <input type="text" class="form-control" id="" placeholder="Input field" name="hint">
            </div>
            <div class="form-group">
                <label for="">File Challenge</label>
                <input type="file" class="form-control" id="" placeholder="Input field" name="chall">
            </div>
            <button type="submit" class="btn btn-primary">Upload</button>
        </form>
    </div>
</div>
<?php /**PATH C:\laragon\www\challenge5b_daohx\resources\views/teacher/uploadChallenge.blade.php ENDPATH**/ ?>