<?php

namespace App\Http\Controllers;

use App\Models\Login;
use App\Http\Requests\StoreLoginRequest;
use App\Http\Requests\UpdateLoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(Request $request)
    {
        $data = Login::get();
        return view('teacher.index', data: [
            'data' => $data,
        ]);
    }


    public function create()
    {
        return view('teacher.create');
    }

    public function store(Request $request)
    {
        $object = new Login();
        $object->fill($request->except('_token'));
        $object->save();
        return redirect() -> route('login.index');
    }


    public function show(Login $login)
    {
        //
    }


    public function edit(Login $login)
    {
        return view('teacher/edit', data: [
            'ed' => $login,
        ]);
    }


    public function update(Request $request, Login $login)
    {
//        dd($request->except('_token', '_method'));
        $login -> update($request->except('_token', '_method'));
        return redirect() -> route('login.index');
    }

    public function destroy(Login $login)
    {
//        dd($login);
        $login -> delete();
        return redirect() -> route('login.index');
    }
}
