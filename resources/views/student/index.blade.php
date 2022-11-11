@include('../header')
<body>
@include('../boder')
<table class="table table-bordered">
    <tr>
        <th>#</th>
        <th>Fullname</th>
        <th>Username</th>
        @if(session('type') == 'teacher')
            <th>Password</th>
        @endif
        <th>Email</th>
        <th>SDT</th>
        @if(session('type') == 'teacher')
            <th>Edit</th>
            <th>Delete</th>
        @endif
    </tr>
    @foreach($data as $each)
        <tr>
            <td>{{ $each->id }}</td>
            <td>{{ $each->fullname }}</td>
            <td>{{ $each->username }}</td>
            @if(session('type') == 'teacher')
                <td>{{ $each->password }}</td>
            @endif
            <td>{{ $each->gmail }}</td>
            <td>{{ $each->sdt }}</td>
            @if(session('type') == 'teacher')
                <td>
                    <form action="{{ route('login.edit' , $each)}} ">
                        <button>Edit</button>
                    </form>
                </td>
                <td>
                    <form action="{{ route('login.destroy' , $each)}} " , method="POST">
                        @csrf
                        @method('DELETE')
                        <button>Delete</button>
                    </form>
                </td>
            @endif
        </tr>

    @endforeach
</table>
@if(session('type') == 'teacher')
    <a href=" {{ route('login.create') }}">
        <button>Thêm</button>
    </a>
@endif
</body>
