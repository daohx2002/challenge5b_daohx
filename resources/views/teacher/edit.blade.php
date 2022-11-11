<head>
    <title>Sửa Thông Tin</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
@include('../boder');
<div class="container">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h2 class="text-center">Sửa Thông Tin</h2>
        </div>
        <div class="panel-body">
            <form method="post" action="{{route('login.update', $ed )}}">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="fullname">Name:</label>
                    <input required="true" type="text" class="form-control" id="usr" name="fullname"
                           value="{{ $ed->fullname }}">
                </div>
                <div class="form-group">
                    <label for="usr">Username:</label>
                    <input required="true" type="text" class="form-control" id="usr" name="username"
                           value="{{ $ed->username }}">
                </div>
                <div class="form-group">
                    <label for="usr">Password:</label>
                    <input required="true" type="text" class="form-control" id="usr" name="password"
                           value="{{ $ed->password }}">
                </div>
                <div class="form-group">
                    <label for="usr">Email:</label>
                    <input required="true" type="text" class="form-control" id="usr" name="gmail"
                           value="{{ $ed->gmail }}">
                </div>
                <div class="form-group">
                    <label for="usr">SĐT:</label>
                    <input required="true" type="text" class="form-control" id="usr" name="sdt" value="{{ $ed->sdt }}">
                </div>
                <button class="btn btn-success">Save</button>
            </form>
        </div>
    </div>
</div>
</body>
