<?php echo $__env->make('../header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<body>
<?php echo $__env->make('../boder', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="panel-body">
        <form action="<?php echo e(route('uploadAnswer')); ?>" method="POST" role="form" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>

            <legend>Upload Câu Trả Lời</legend>
            <div class="form-group">
                <label for="">Tên Bài</label>
                <input type="text" class="form-control" id="" placeholder="Input field" name="title" >
            </div>
            <div class="form-group">
                <label for="">Sinh Viên Nộp Bài</label>
                <input type="text" class="form-control" id="" placeholder="Input field" name="username" value="<?php echo e(session('username')); ?>" readonly>
            </div>
            <div class="form-group">
                <label for="">File Câu Trả Lời</label>
                <input type="file" class="form-control" id="" placeholder="Input field" name="answer">
            </div>
            <button type="submit" class="btn btn-primary">Upload</button>
        </form>
    </div>
</body>
<?php /**PATH C:\laragon\www\challenge5b_daohx\resources\views/student/uploadAnswer.blade.php ENDPATH**/ ?>