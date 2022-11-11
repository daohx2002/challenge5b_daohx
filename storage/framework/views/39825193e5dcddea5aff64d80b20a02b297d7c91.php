<?php echo $__env->make('../header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<body>
<?php echo $__env->make('../boder', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="container">
    <div class="panel-body">
        <form action="<?php echo e(route('uploadExercise')); ?>" method="POST" role="form" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <legend>Upload Bài Tập</legend>
            <div class="form-group">
                <label for="">Tên Bài</label>
                <input type="text" class="form-control" id="" placeholder="Input field" name="title">
            </div>
            <div class="form-group">
                <label for="">File Bài Tập</label>
                <input type="file" class="form-control" id="" placeholder="Input field" name="question">
            </div>
            <button type="submit" class="btn btn-primary">Upload</button>
        </form>
        <form action="<?php echo e(route('display')); ?> ">
            <button class="btn btn-primary">List</button>
        </form>
    </div>
</div>



























</body>
<?php /**PATH C:\laragon\www\challenge5b_daohx\resources\views/teacher/uploadExercise.blade.php ENDPATH**/ ?>