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
@include('../boder')
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
                    </tr>
                    @foreach($d as $dt)
                    <tr>
                        <td>{{$dt->title}}</td>
                        <td>{{$dt->username}}</td>
                        <td>{{$dt->question}}</td>
                    </tr>
                    @endforeach
                    </thead>
                </table>
            </div>
        </div>
    </div>
</body>
