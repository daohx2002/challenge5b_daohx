<?php echo $__env->make('../header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<body>
<?php echo $__env->make('../boder', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="container">
        <div class="panel panel-primary">
            <div class="panel-heading">
                Danh Sách Bài Tập
            </div>
            <div class="panel-body">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th width="120px">Tên Bài</th>
                        <th width="200px">Người Giao Bài</th>
                        <th>Bài Tập</th>
                    </tr>
                    <?php $__currentLoopData = $d; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($dt->title); ?></td>
                        <td><?php echo e($dt->username); ?></td>
                        <td><?php echo e($dt->question); ?></td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </thead>
                </table>
            </div>
        </div>
    </div>
</body>
<?php /**PATH C:\laragon\www\challenge5b_daohx\resources\views/teacher/listExercise.blade.php ENDPATH**/ ?>