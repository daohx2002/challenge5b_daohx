<?php if(!session('mess')): ?>
    <?php
//        $file = 'challenge/'.$data;
//        $content = Storage::disk('public')->get($file);
//        echo $content;
        readfile('challege/'.$data);
    ?>

<?php endif; ?>
<?php /**PATH C:\laragon\www\challenge5b_daohx\resources\views/check.blade.php ENDPATH**/ ?>