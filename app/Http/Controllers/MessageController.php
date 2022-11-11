<?php

namespace App\Http\Controllers;
use App\Models\Login;
use App\Models\Messages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MessageController extends Controller
{
    public function user(Request $request)
    {
        $id = $request['id'];
        $data = DB::select("Select * from `logins` where `id`='$id'");
        return view('user', data:[
            'data' => $data,
        ]);
    }
    public function message(Request $request)
    {
        $recipient = $request['username'];
        $sendor = session('username');
//        $studentList = DB::select("select * FROM `messages`,`logins` WHERE ((`sender`='$sendor' AND `messages`.`recipient`=`logins`.`username`) OR (`sender`='$recipient' AND `messages`.`sender`=`logins`.`username`))");
//        dd($studentList);
        $studentList = DB::select("select * FROM `messages`");

        return view('message', data: [
            'data' => $studentList,
            'recipient' => $recipient,
            'sender' => session('username'),
        ]);
    }
    public function send(Request $request)
    {
        $messages = new Messages();
        $messages->sender = session('username');
        $messages->recipient = $request->recipient;
        $messages->content = $request['content'];
//        DB::insert()
        $messages->save();
        return redirect()->action(
            [MessageController::class, 'message'], ['username' => $messages->recipient]
        );
    }
    public function destroy(Request $request)
    {
//        dd($request['content']);
//        $request['content'] -> delete();
        $con = $request['content'];
        $delete = DB::delete("delete from `messages` where `content`= '$con'");
        return redirect() -> back();
    }
    public function editMessage(Request $request)
    {
        $con = $request['content'];
//        dd($con);
//        $delete = DB::delete("delete from `messages` where `content`= '$con'");
        return view('editMessage', data:[
            'content' => $con,
        ]);
    }
    public function updateMessage(Request $request)
    {
        $con = $request['con'];
        $cu = $request['content'];
        $update = DB::update ("UPDATE `messages` SET `content`='$con' where `content`='$cu'");
        return redirect()->route('login.index');
    }
}
