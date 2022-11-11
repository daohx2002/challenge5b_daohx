<head>
    <title>Upload Câu Trả Lời</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
@include('../boder')
    <div class="panel-body">
        <form action="{{route('uploadAnswer')}}" method="POST" role="form" enctype="multipart/form-data">
            @csrf
{{--            @method('PUT')--}}
            <legend>Upload Câu Trả Lời</legend>
            <div class="form-group">
                <label for="">Tên Bài</label>
                <input type="text" class="form-control" id="" placeholder="Input field" name="title" >
            </div>
            <div class="form-group">
                <label for="">Sinh Viên Nộp Bài</label>
                <input type="text" class="form-control" id="" placeholder="Input field" name="username" value="{{session('username')}}" readonly>
            </div>
            <div class="form-group">
                <label for="">File Câu Trả Lời</label>
                <input type="file" class="form-control" id="" placeholder="Input field" name="answer">
            </div>
            <button type="submit" class="btn btn-primary">Upload</button>
        </form>
    </div>
</body>
