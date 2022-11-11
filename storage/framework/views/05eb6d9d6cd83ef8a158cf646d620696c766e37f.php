<nav class="navbar navbar-inverse" >
            <a class="navbar-brand" href="profile.php">Profile</a>
            <ul class="nav navbar-nav">
                <li>
                    <a href="<?php echo e(route('teacher.index')); ?>">Danh Sách Người Dùng</a>
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
<?php /**PATH C:\laragon\www\challenge5b_daohx\resources\views/student/boder.blade.php ENDPATH**/ ?>