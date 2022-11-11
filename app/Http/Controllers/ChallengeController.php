<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ChallengeController extends Controller
{
    public function challenge()
    {
//        dd("k");
        return view('teacher/uploadChallenge');
    }
    public function uploadChallenge(Request $request)
    {
        $getChallenge = '';
        if($request->hasFile('chall')){
            $this->validate($request,
                [
                    //Kiểm tra đúng file đuôi .doc hay .docx và dung lượng không quá 5M
                    'challenge' => 'mimes:doc,docx,ppt,pptx,txt|max:5120',
                ],
                [
                    //Tùy chỉnh hiển thị thông báo không thõa điều kiện
                    'challenge.mimes' => 'Chỉ chấp nhận lý lịch với đuôi .doc .docx .ppt .pptx',
                    'challenge.max' => 'Lý lịch giới hạn dung lượng không quá 5M',
                ]
            );
        $challenge = $request->file('chall');
        $getChallenge = $challenge->getClientOriginalName();
        $destinationPath = public_path('/challenge');
        $challenge->move($destinationPath, $getChallenge);
        }
        $dataInsertToDatabase = array(
            'title'  => $request->title,
            'hint' => $request->hint,
            'file' => $getChallenge,
        );
        $insertData = DB::table('challenges')->insert($dataInsertToDatabase);
        return redirect() -> route('challenge');
    }

    public function listChallenge()
    {
        $data = DB::select("select * from `challenges`");
        return view('student/listChallenge', data:[
            'data' => $data,
        ]);
    }
    public function replyChallenge(Request $request)
    {
        $title = $request->title;
        $file = DB::select("select * from `challenges` where `title`='$title'" );
//        dd($file);
        return view('student/replyChallenge', data:[
            'data' => $file,
        ]);

    }


    public function answerChallenge(Request $request)
    {
        $title = $request->title;
//        dd($title);
        $a = DB::select("select * from `challenges` where `title`='$title'" );
        foreach ($a as $data) {
            $file = $data->file;
        }
        $answer = $request->answer;
        $check = explode(".", $file);
        if(isset($_POST['answer'])){
            if($check[0] ==$_POST['answer']){
                readfile('challenge/'.$file);
//                return redirect()->back();
//                return redirect()->back(readfile('challenge/'.$file));
            }
            else{
                return 'Sai Mất Rồi';
//                return redirect()->back()->content('Your SMS message content');
            }
        }
//        if($check[0] == $answer){
////            $c = 'challenge/'.$file;
////            $content = Storage::disk('public')->get($c);
////            dd($content);
////            dd('aa');
//            return view('checkk', data:[
//                'data' => $file
//            ])->with('mess',"Đúng");
//        }
//        return redirect()->back()->with('error',"Sai");


    }
}
