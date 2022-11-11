<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class exerciseController extends Controller
{
    public function exercise()
    {
        return view('teacher/uploadExercise');
    }
    public function uploadExercise(Request $request)
    {
//        $getQuestion = '';
//        if($request->hasFile('question')){
//            $this->validate($request,
//                [
//                    //Kiểm tra đúng file đuôi .doc hay .docx và dung lượng không quá 5M
//                    'question' => 'mimes:doc,docx,ppt,pptx|max:5120',
//                ],
//                [
//                    //Tùy chỉnh hiển thị thông báo không thõa điều kiện
//                    'question.mimes' => 'Chỉ chấp nhận lý lịch với đuôi .doc .docx .ppt .pptx',
//                    'question.max' => 'Lý lịch giới hạn dung lượng không quá 5M',
//                ]
//            );

            //Lưu file vào thư mục public/upload/lylich
            $question = $request->file('question');
            $getQuestion = $question->getClientOriginalName();
            $destinationPath = public_path('/upload');
            $question->move($destinationPath, $getQuestion);
//        }
        $dataInsertToDatabase = array(
            'title'  => $request->title,
            'username' => session('username'),
            'question' => $getQuestion,
        );
        $insertData = DB::table('exercises')->insert($dataInsertToDatabase);
        return redirect() -> route('exercise');
    }
    public function display(Request $request)
    {
        $d = DB::table('exercises')->get();
        if(session('type') == 'teacher') {
            return view('teacher.listExercise', data: [
                'd' => $d,
            ]);
        }else{
            return view('student.listExercise', data: [
                'd' => $d,
            ]);
        }
    }

    public function answer(Request $request)
    {
        return view('student.uploadAnswer', data: [
            'data' => $request,
        ]);
    }
    public function uploadAnswer(Request $request)
    {
        $answer = $request->file('answer');
        $getAnswer = $answer->getClientOriginalName();
        $destinationPath = public_path('/answer');
        $answer->move($destinationPath, $getAnswer);
        $check = DB::table('answers')->select('title')->where('title', $request->title)
            ->get();
        $a = $request->title;
        $check = DB::select("select * from `answers` where `title` = '$a' ");
        if(!$check) {
            $dataInsertToDatabase = array(
                'title' => $request->title,
                'username' => session('username'),
                'answer' => $getAnswer,
            );
            $insertData = DB::table('answers')->insert($dataInsertToDatabase);
            return redirect()->route('display');
        }
        else {
            DB::table('answers')
                ->update(['title' => $request->title,
                    'username' => session('username'),
                    'answer' => $getAnswer,]);
            return redirect()->route('profile');
        }
    }
    public function dsExercise(Request $request)
    {
        $data = DB::table('answers')->get();
        return view('teacher/dsExercise', data:[
            'data' => $data,
        ]);
    }
}
