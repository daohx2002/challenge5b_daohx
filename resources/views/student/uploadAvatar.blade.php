
<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Upload Avatar</title>

        <!-- Bootstrap CSS -->
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

    </head>
    <body>
    @include('../boder')

        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="panel panel-info">
                          <div class="panel-body">
                                <form action={{ route('uploadAvatar') }} method="POST" role="form" enctype="multipart/form-data">
                                    @csrf
                                    <legend>Upload Avatar</legend>
                                    <div class="form-group">
                                        <label for="">Avatar</label>
                                        <input type="file" class="form-control" id="" placeholder="Input field" name="image">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                          </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Bootstrap JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </body>
</html>
