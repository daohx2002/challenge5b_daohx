<head>
    <title>Sửa Thông Tin Cá Nhân</title>
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
                <h2 class="text-center">Sửa Thông Tin Cá Nhân</h2>
            </div>
            <div class="panel-body">
                <form method="post" enctype="multipart/form-data" action={{ route('edit') }}>
                    @csrf
                    @method('PUT')
                    @if(session('type') == 'student')
                    <div class="form-group">
                        <label for="fullname">Fullname:</label>
                        <input required="true" type="text" class="form-control" id="usr" name="fullname" value="{{ session('fullname') }}"readonly >
                    </div>
                    <div class="form-group">
                        <label for="usr">Username:</label>
                        <input required="true" type="text" class="form-control" id="usr" name="username" value="{{ session('username') }}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="usr">Password:</label>
                        <input required="true" type="text" class="form-control" id="usr" name="password" value="{{ session('password') }}">
                    </div>
                    <div class="form-group">
                        <label for="usr">Email:</label>
                        <input required="true" type="text" class="form-control" id="usr" name="email" value="{{ session('gmail') }}">
                    </div>
                    <div class="form-group">
                        <label for="usr">SĐT:</label>
                        <input required="true" type="text" class="form-control" id="usr" name="sdt" value="{{ session('sdt') }}">
                    </div>
                    @endif
                    <div class="form-group" >
                        <label for="">Avatar</label>
                        <input type="file" class="form-control" id="" placeholder="Input field" name="image">
                    </div>
                    <button class="btn btn-success" type="submit">Save</button>
                </form>
            </div>
        </div>
    </div>
</body>
