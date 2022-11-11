<?php if(session('type') == 'teacher'): ?>{
<nav class="navbar navbar-inverse">
    <a class="navbar-brand" href="profile.php">Profile</a>
    <ul class="nav navbar-nav">
        <li>
            <a href="<?php echo e(route('login.index')); ?>">Quản Lý Sinh Viên</a>
        </li>
        <li>
            <a href="list.php">Danh Sách Người Dùng</a>
        </li>
        <li>
            <a href="uploadAvatar.php">Upload Avatar</a>
        </li>
        <li>
            <a href="upload.php">Upload Bài Tập</a>
        </li>
        <li>
            <a href="listBT.php">Danh Sách Bài Làm</a>
        </li>
        <li>
            <a href="challege.php">Challenge</a>
        </li>
        <li>
            <a href="<?php echo e(route('logout')); ?>">Log Out</a>
        </li>
    </ul>
</nav>
}
<?php endif; ?>
<?php if(session('type') == 'student'): ?>{
<nav class="navbar navbar-inverse" >
    <a class="navbar-brand" href="profile.php">Profile</a>
    <ul class="nav navbar-nav">
        <li>
            <a href="<?php echo e(route('login.index')); ?>">Danh Sách Người Dùng</a>
        </li>
        <li>
            <a href="editProfile.php">Chỉnh Sửa Thông Tin</a>
        </li>
        <li>
            <a href="uploadAvatar.php">Upload Avatar</a>
        </li>
        <li>
            <a href="uploadBT.php">Danh Sách Bài Tập</a>
        </li>
        <li>
            <a href="uploadChallege.php">Danh Sách Challege</a>
        </li>
        <li>
            <a href="<?php echo e(route('logout')); ?>">Log Out</a>
        </li>
    </ul>
</nav>
}
<?php endif; ?>
<?php /**PATH C:\laragon\www\challenge5b_daohx\resources\views/teacher/boder.blade.php ENDPATH**/ ?>