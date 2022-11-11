@if(!session('mess'))
    <?php
//        $file = 'challenge/'.$data;
//        $content = Storage::disk('public')->get($file);
//        echo $content;
        readfile('challege/'.$data);
    ?>
{{--    {{File::get($data)}};--}}
@endif
