<?php echo $__env->make('../header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<body>
<?php echo $__env->make('../boder', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="panel-body">
    <form action="<?php echo e(route('answerChallenge')); ?>" method="POST" role="form" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <legend>Upload Câu Trả Lời</legend>
        <div class="form-group">
            <label for="">Tên Bài</label>
            <input type="text" class="form-control" id="" placeholder="Input field" name="title" value="<?php echo e($dt->title); ?>" readonly>
        </div>
        <div class="form-group">
            <label for="">Hint</label>
            <input type="text" class="form-control" id="" placeholder="Input field" name="username" value="<?php echo e($dt->hint); ?>" readonly>
        </div>
        <div class="form-group">
            <label for="">Câu Trả Lời</label>
            <input type="text" class="form-control" id="" placeholder="Input field" name="answer">
        </div>
        <button type="submit" class="btn btn-primary"> Upload </button>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </form>
</div>
</body>
<?php /**PATH C:\laragon\www\challenge5b_daohx\resources\views/student/replyChallenge.blade.php ENDPATH**/ ?>