<?php echo $__env->make('../header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<body>
<?php echo $__env->make('student.boder', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<table class="table table-bordered">
    <tr>
        <th>#</th>
        <th>Fullname</th>
        <th>Username</th>
        <?php if(session('type') == 'teacher'): ?>
            <th>Password</th>
        <?php endif; ?>
        <th>Email</th>
        <th>SDT</th>
        <?php if(session('type') == 'teacher'): ?>
            <th>Edit</th>
            <th>Delete</th>
        <?php endif; ?>
    </tr>
    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $each): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($each->id); ?></td>
            <td><?php echo e($each->fullname); ?></td>
            <td><?php echo e($each->username); ?></td>
            <?php if(session('type') == 'teacher'): ?>
                <td><?php echo e($each->password); ?></td>
            <?php endif; ?>
            <td><?php echo e($each->gmail); ?></td>
            <td><?php echo e($each->sdt); ?></td>
            <?php if(session('type') == 'teacher'): ?>
                <td>
                    <form action="<?php echo e(route('login.edit' , $each)); ?> ">
                        <button>Edit</button>
                    </form>
                </td>
                <td>
                    <form action="<?php echo e(route('login.destroy' , $each)); ?> " , method="POST">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button>Delete</button>
                    </form>
                </td>
            <?php endif; ?>
        </tr>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
<?php if(session('type') == 'teacher'): ?>
    <a href=" <?php echo e(route('login.create')); ?>">
        <button>Thêm</button>
    </a>
<?php endif; ?>
</body>
<?php /**PATH C:\laragon\www\challenge5b_daohx\resources\views/student/index.blade.php ENDPATH**/ ?>