@if(session('type') == 'teacher')
<nav class="navbar navbar-inverse">
    <a class="navbar-brand" href="{{ route('profile') }}">Profile</a>
    <ul class="nav navbar-nav">
        <li>
            <a href="{{ route('login.index') }}">Quản Lý Sinh Viên</a>
        </li>
        <li>
            <a href="{{ route('edit') }}">Upload Avatar</a>
        </li>
        <li>
            <a href="{{ route('exercise') }}">Upload Bài Tập</a>
        </li>
        <li>
            <a href="{{route('dsExercise')}}">Danh Sách Bài Làm</a>
        </li>
        <li>
            <a href="{{route('challenge')}}">Challenge</a>
        </li>
        <li>
            <a href="{{ route('logout') }}">Log Out</a>
        </li>
    </ul>
</nav>

@endif
@if(session('type') == 'student')
<nav class="navbar navbar-inverse" >
    <a class="navbar-brand" href="{{ route('profile') }}">Profile</a>
    <ul class="nav navbar-nav">
        <li>
            <a href="{{ route('login.index') }}">Danh Sách Người Dùng</a>
        </li>
        <li>
            <a href="{{ route('edit') }}">Chỉnh Sửa Thông Tin</a>
        </li>
        <li>
            <a href="{{route('display')}}">Danh Sách Bài Tập</a>
        </li>
        <li>
            <a href="{{route('listChallenge')}}">Danh Sách Challege</a>
        </li>
        <li>
            <a href="{{ route('logout') }}">Log Out</a>
        </li>
    </ul>
</nav>

@endif
