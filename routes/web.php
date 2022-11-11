<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ChallengeController;
use App\Http\Controllers\exerciseController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MessageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', action: [AuthController::class, 'login']) -> name('login');
Route::post('/', action: [AuthController::class, 'authLogin']) -> name('authLogin');
Route::get('/logout', action: [AuthController::class, 'logout']) -> name('logout');


Route::group(['middleware' => 'student',
], function(){
    Route::get('danhsach', action: [LoginController::class, 'index']) -> name('login.index');
    Route::get('danhsach/create', action: [LoginController::class, 'create']) -> name('login.create');
    Route::post('danhsach/create', action: [LoginController::class, 'store']) -> name('login.store');
    Route::delete('danhsach/destroy/{login}', action: [LoginController::class, 'destroy']) -> name('login.destroy');
    Route::get('danhsach/edit/{login}', action: [LoginController::class, 'edit']) -> name('login.edit');
    Route::put('danhsach/edit/{login}', action: [LoginController::class, 'update']) -> name('login.update');


});

Route::get('profile', action: [AuthController::class, 'profile']) -> name('profile');

//Student
Route::get('edit', action: [AuthController::class, 'edit']) -> name('edit');
Route::put('edit', action: [AuthController::class, 'update']) -> name('update');

//upload ảnh
Route::get('upload', action: [AuthController::class, 'editAvatar']) -> name('editAvatar');
Route::post('upload', action: [AuthController::class, 'uploadAvatar']) -> name('uploadAvatar');

//upload bài tập
Route::get('exercise', action: [exerciseController::class, 'exercise']) -> name('exercise');
Route::get('exercise/list', action: [exerciseController::class, 'display']) -> name('display');
Route::post('exercise', action: [exerciseController::class, 'uploadExercise']) -> name('uploadExercise');

Route::get('exercise/list/answer', action: [exerciseController::class, 'answer']) -> name('answer');
Route::post('exercise/list/answer', action: [exerciseController::class, 'uploadAnswer']) -> name('uploadAnswer');

Route::get('dsExercise', action: [exerciseController::class, 'dsExercise']) -> name('dsExercise');


Route::get('user/{id}', action: [MessageController::class, 'user']) -> name('user');
Route::get('user/message/{username}', action: [MessageController::class, 'message']) -> name('message');

Route::post('send/{recipient}', action: [MessageController::class, 'send']) -> name('send');
Route::post('destroy/{content}', action: [MessageController::class, 'destroy']) -> name('destroy');

Route::get('edit/{content}', action: [MessageController::class, 'editMessage']) -> name('editMessage');
Route::put('edit/{content}', action: [MessageController::class, 'updateMessage']) -> name('updateMessage');

//Route::post('user/message/send/{recipient}', action: [MessageController::class, 'send']) -> name('send');


Route::get('chall', action: [ChallengeController::class, 'challenge']) -> name('challenge');
Route::post('chall', action: [ChallengeController::class, 'uploadChallenge']) -> name('uploadChallenge');

Route::get('listChallenge', action: [ChallengeController::class, 'listChallenge']) -> name('listChallenge');
Route::get('replyChallenge/{title}', action: [ChallengeController::class, 'replyChallenge']) -> name('replyChallenge');
Route::post('replyChallenge', action: [ChallengeController::class, 'answerChallenge']) -> name('answerChallenge');
