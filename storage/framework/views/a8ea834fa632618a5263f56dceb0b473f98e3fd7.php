<head>
    <title>Danh Sách Bài Tập</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
</head>

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

                    <th></th>
                    <th></th>
                </tr>
                <?php $__currentLoopData = $d; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($dt->title); ?></td>
                        <td><?php echo e($dt->username); ?></td>
                        <td><?php echo e($dt->question); ?></td>
                        <td>
                            <button><strong><a href="<?php echo e(asset( 'upload/'.$dt->question)); ?>">Download</a></strong></button>
                        </td>
                        <td>
                            <form action="<?php echo e(route('answer')); ?>">
                                <button>Upload</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </thead>
            </table>
        </div>
    </div>
</div>
</body>
<?php /**PATH C:\laragon\www\challenge5b_daohx\resources\views/student/listExercise.blade.php ENDPATH**/ ?>