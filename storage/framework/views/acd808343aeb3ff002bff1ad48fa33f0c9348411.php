<?php if(session('type') == 'teacher'): ?>
<nav class="navbar navbar-inverse">
    <a class="navbar-brand" href="<?php echo e(route('profile')); ?>">Profile</a>
    <ul class="nav navbar-nav">
        <li>
            <a href="<?php echo e(route('login.index')); ?>">Quản Lý Sinh Viên</a>
        </li>
        <li>
            <a href="<?php echo e(route('edit')); ?>">Upload Avatar</a>
        </li>
        <li>
            <a href="<?php echo e(route('exercise')); ?>">Upload Bài Tập</a>
        </li>
        <li>
            <a href="<?php echo e(route('dsExercise')); ?>">Danh Sách Bài Làm</a>
        </li>
        <li>
            <a href="<?php echo e(route('challenge')); ?>">Challenge</a>
        </li>
        <li>
            <a href="<?php echo e(route('logout')); ?>">Log Out</a>
        </li>
    </ul>
</nav>

<?php endif; ?>
<?php if(session('type') == 'student'): ?>
<nav class="navbar navbar-inverse" >
    <a class="navbar-brand" href="<?php echo e(route('profile')); ?>">Profile</a>
    <ul class="nav navbar-nav">
        <li>
            <a href="<?php echo e(route('login.index')); ?>">Danh Sách Người Dùng</a>
        </li>
        <li>
            <a href="<?php echo e(route('edit')); ?>">Chỉnh Sửa Thông Tin</a>
        </li>
        <li>
            <a href="<?php echo e(route('display')); ?>">Danh Sách Bài Tập</a>
        </li>
        <li>
            <a href="<?php echo e(route('listChallenge')); ?>">Danh Sách Challege</a>
        </li>
        <li>
            <a href="<?php echo e(route('logout')); ?>">Log Out</a>
        </li>
    </ul>
</nav>

<?php endif; ?>
<?php /**PATH C:\laragon\www\challenge5b_daohx\resources\views/boder.blade.php ENDPATH**/ ?>