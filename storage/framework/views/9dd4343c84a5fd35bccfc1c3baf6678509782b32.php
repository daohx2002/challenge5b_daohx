<?php echo $__env->make('../header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<body>
<?php echo $__env->make('boder', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<table border="1" width="100%">
    <tr>
        <th>#</th>
        <th>Fullname</th>
        <th>Username</th>
        <th>Password</th>
        <th>Email</th>
        <th>SDT</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>
    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $each): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($each->id); ?></td>
            <td><?php echo e($each->fullname); ?></td>
            <td><?php echo e($each->username); ?></td>
            <td><?php echo e($each->password); ?></td>
            <td><?php echo e($each->gmail); ?></td>
            <td><?php echo e($each->sdt); ?></td>
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
        </tr>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
<a href=" <?php echo e(route('login.create')); ?>">
    <button>Thêm</button>
</a>
</body>
<?php /**PATH C:\laragon\www\challenge5b_daohx\resources\views/login/index.blade.php ENDPATH**/ ?>