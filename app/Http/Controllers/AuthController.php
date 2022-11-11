<?php

namespace App\Http\Controllers;

use App\Models\Login;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Throwable;

class AuthController extends Controller
{
    public function login()
    {
        return view('login');
    }
    public function authLogin(Request $request)
    {
//        dd($request->username, $request->password);
        try{
            $user = Login::query()
//            $user = DB::table('logins')->query()
                -> where('username', $request->get('username'))
                -> where('password', $request->get('password'))
                ->firstOrFail();
            session()->put('username', $user->username);
            session()->put('fullname', $user->fullname);
            session()->put('gmail', $user->gmail);
            session()->put('sdt', $user->sdt);
            session()->put('image', $user->image);
            session()->put('type', $user->type);
            return redirect()->route('login.index');

        } catch (Throwable $e){
            return redirect()->route('login');
        }

    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
    public function profile()
    {
//        return view('profile', data: [
//            'data' => Auth::user(),
//        ]);
        return view('profile');
    }
    public function edit()
    {
        return view('student/edit');
    }
    public function update(Request $request)
    {
        if($request->hasFile('image')) {
            //Hàm kiểm tra dữ liệu
            $this->validate($request,
                [
                    //Kiểm tra đúng file đuôi .jpg,.jpeg,.png.gif và dung lượng không quá 2M
                    'image' => 'mimes:jpg,jpeg,png,gif|max:2048',
                ],
                [
                    //Tùy chỉnh hiển thị thông báo không thõa điều kiện
                    'image.mimes' => 'Chỉ chấp nhận hình thẻ với đuôi .jpg .jpeg .png .gif',
                    'image.max' => 'Hình thẻ giới hạn dung lượng không quá 2M',
                ]
            );

            //Lưu hình ảnh vào thư mục public/upload/hinhthe
            $image = $request->file('image');
            $getimage = $image->getClientOriginalName();
            $destinationPath = public_path('images');
            $image->move($destinationPath, $getimage);
        }
//        dd($getimage);
        if(session('type') == 'student' && isset($_POST['image'])) {
            DB::table('logins')
                ->where('fullname', session('fullname'))
                ->update(['gmail' => $request->email, 'sdt' => $request->sdt, 'image' => $getimage, 'password' => $request->password]);
        }
        if(session('type') == 'student') {
            DB::table('logins')
                ->where('fullname', session('fullname'))
                ->update(['gmail' => $request->email, 'sdt' => $request->sdt, 'password' => $request->password]);
        }
        else{
            DB::table('logins')
                ->where('fullname', session('fullname'))
                ->update(['image' => $getimage]);
        }
        return redirect() -> route('logout');
    }

    public function editAvatar()
    {
        return view('student/uploadAvatar');
    }

    public function uploadAvatar(Request $request)
    {
        if($request->hasFile('image')){
            //Hàm kiểm tra dữ liệu
            $this->validate($request,
                [
                    //Kiểm tra đúng file đuôi .jpg,.jpeg,.png.gif và dung lượng không quá 2M
                    'image' => 'mimes:jpg,jpeg,png,gif|max:2048',
                ],
                [
                    //Tùy chỉnh hiển thị thông báo không thõa điều kiện
                    'image.mimes' => 'Chỉ chấp nhận hình thẻ với đuôi .jpg .jpeg .png .gif',
                    'image.max' => 'Hình thẻ giới hạn dung lượng không quá 2M',
                ]
            );

            //Lưu hình ảnh vào thư mục public/upload/hinhthe
            $image = $request->file('image');
            $getimage = $image->getClientOriginalName();
            $destinationPath = public_path('images');
            $image->move($destinationPath, $getimage);
            DB::table('logins')
                ->where('fullname', session('fullname'))
                ->update(['image' => $getimage]);
            return redirect() -> route('profile');
        }
    }
}
