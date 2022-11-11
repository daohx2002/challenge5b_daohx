<head>
    <title>Upload Câu Trả Lời Challenge</title>
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
    <form action="{{route('answerChallenge')}}" method="POST" role="form" enctype="multipart/form-data">
        @csrf
        @foreach($data as $dt)
        <legend>Upload Câu Trả Lời Challenge</legend>
        <div class="form-group">
            <label for="">Tên Bài</label>
            <input type="text" class="form-control" id="" placeholder="Input field" name="title" value="{{$dt->title}}" readonly>
        </div>
        <div class="form-group">
            <label for="">Hint</label>
            <input type="text" class="form-control" id="" placeholder="Input field" name="username" value="{{$dt->hint}}" readonly>
        </div>
        <div class="form-group">
            <label for="">Câu Trả Lời (Không Dấu)</label>
            <input type="text" class="form-control" id="" placeholder="Input field" name="answer">
        </div>
        <button type="submit" class="btn btn-primary"> Upload </button>
        @endforeach
    </form>
</div>
</body>
