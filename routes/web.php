<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\ExamController;
use App\Http\Controllers\ValueExamController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\AnswerController;
use App\Http\Controllers\NrClassController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ProfileController;
use App\Models\Subject;
use App\Models\Role;
use App\Models\Exam;
use App\Models\ValueExam;
use App\Models\Question;
use App\Models\Answer;
use App\Models\User;
use App\Http\Controllers\UploadController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/subject', [SubjectController::class, 'index']);
Route::post('/subject/create', [SubjectController::class, 'create']);
Route::put('/subject/update{id}', [SubjectController::class, 'update']);
Route::get('/subject/{id}', [SubjectController::class, 'show']);
Route::delete('/subject/delete/{id}',[SubjectController::class, 'destroy'] );

Route::get('/role', [RoleController::class, 'index']);
Route::post('/role/create', [RoleController::class, 'create']);
Route::put('/role/update{id}', [RoleController::class, 'update']);
Route::get('/role/{id}', [RoleController::class, 'show']);
Route::delete('/role/delete/{id}', [RoleController::class, 'destroy']);


Route::get('/exam', [ExamController::class, 'index']);
Route::post('/exam/create', [ExamController::class, 'create']);
Route::put('/exam/update{id}', [ExamController::class, 'update']);
Route::get('/exam/{id}', [ExamController::class, 'show']);
Route::delete('/exam/delete/{id}', [ExamController::class, 'destroy']);


Route::get('ValueExam', [ValueExamController::class, 'index']);
Route::post('/ValueExam/create', [ValueExamController::class, 'create']);
Route::put('/ValueExam/update{id}', [ValueExamController::class, 'update']);
Route::get('/ValueExam/{id}', [ValueExamController::class, 'show']);
Route::delete('/ValueExam/delete/{id}', [ValueExamController::class, 'destroy']);


Route::get('/question', [QuestionController::class, 'index']);
Route::post('/question/create', [QuestionController::class, 'create']);
Route::put('/question/update{id}', [QuestionController::class, 'update']);
Route::get('/question/{id}', [QuestionController::class, 'show']);
Route::delete('/question/delete/{id}', [QuestionController::class, 'destroy']);


Route::get('/answer', [AnswerController::class, 'index']);
Route::post('/answer/create', [AnswerController::class, 'create']);
Route::put('/answer/update{id}', [AnswerController::class, 'update']);
Route::get('/answer/{id}', [AnswerController::class, 'show']);
Route::delete('/answer/delete/{id}', [AnswerController::class, 'destroy']);


Route::get('/class', [NrClassController::class, 'index']);
Route::post('/class/create', [NrClassController::class, 'create']);
Route::put('/class/update{id}', [NrClassController::class, 'update']);
Route::get('/class/{id}', [NrClassController::class, 'show']);
Route::delete('/class/delete/{id}', [NrClassController::class, 'destroy']);


Route::get('/user', [UserController::class, 'index']);
Route::post('/user/create', [UserController::class, 'create']);
Route::put('/user/update{id}', [UserController::class, 'update']);
Route::get('/user/{id}', [UserController::class, 'show']);
Route::delete('/user/delete/{id}', [UserController::class, 'destroy']);

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login.form');
Route::post('/login', [AuthController::class, 'login'])->name('login');


Route::get('/evaluasi_student', function () {
    return view('evaluasi_student');
})->name('evaluasi_student');

Route::get('/bab semester 1 kelas 7', function () {
    return view('bab semester 1 kelas 7');
})->name('bab semester 1 kelas 7');

Route::get('/bab semester 2 kelas 7', function () {
    return view('bab semester 2 kelas 7');
})->name('bab semester 2 kelas 7');

Route::get('/bab semester 1 kelas 8', function () {
    return view('bab semester 1 kelas 8');
})->name('bab semester 1 kelas 8');

Route::get('/bab semester 2 kelas 8', function () {
    return view('bab semester 2 kelas 8');
})->name('bab semester 2 kelas 8');

Route::get('/bab semester 1 kelas 9', function () {
    return view('bab semester 1 kelas 9');
})->name('bab semester 1 kelas 9');

Route::get('/bab semester 2 kelas 9', function () {
    return view('bab semester 2 kelas 9');
})->name('bab semester 2 kelas 9');


Route::get('/materi 1 bab 1 kelas 7', function () {
    return view('materi 1 bab 1 kelas 7');
})->name('materi 1 bab 1 kelas 7');

Route::get('/materi 2 bab 1 kelas 7', function () {
    return view('materi 2 bab 1 kelas 7');
})->name('materi 2 bab 1 kelas 7');

Route::get('/materi 1 bab 2 kelas 7', function () {
    return view('materi 1 bab 2 kelas 7');
})->name('materi 1 bab 2 kelas 7');

Route::get('/materi 2 bab 2 kelas 7', function () {
    return view('materi 2 bab 2 kelas 7');
})->name('materi 2 bab 2 kelas 7');

Route::get('/materi 3 bab 2 kelas 7', function () {
    return view('materi 3 bab 2 kelas 7');
})->name('materi 3 bab 2 kelas 7');

Route::get('/materi 4 bab 2 kelas 7', function () {
    return view('materi 4 bab 2 kelas 7');
})->name('materi 4 bab 2 kelas 7');

Route::get('/materi 5 bab 2 kelas 7', function () {
    return view('materi 5 bab 2 kelas 7');
})->name('materi 5 bab 2 kelas 7');

Route::get('/materi 1 bab 3 kelas 7', function () {
    return view('materi 1 bab 3 kelas 7');
})->name('materi 1 bab 3 kelas 7');

Route::get('/materi 2 bab 3 kelas 7', function () {
    return view('materi 2 bab 3 kelas 7');
})->name('materi 2 bab 3 kelas 7');

Route::get('/materi 3 bab 3 kelas 7', function () {
    return view('materi 3 bab 3 kelas 7');
})->name('materi 3 bab 3 kelas 7');

Route::get('/materi 4 bab 3 kelas 7', function () {
    return view('materi 4 bab 3 kelas 7');
})->name('materi 4 bab 3 kelas 7');

Route::get('/materi 5 bab 3 kelas 7', function () {
    return view('materi 5 bab 3 kelas 7');
})->name('materi 5 bab 3 kelas 7');

Route::get('/materi 1 bab 4 kelas 7', function () {
    return view('materi 1 bab 4 kelas 7');
})->name('materi 1 bab 4 kelas 7');

Route::get('/materi 2 bab 4 kelas 7', function () {
    return view('materi 2 bab 4 kelas 7');
})->name('materi 2 bab 4 kelas 7');

Route::get('/materi 3 bab 4 kelas 7', function () {
    return view('materi 3 bab 4 kelas 7');
})->name('materi 3 bab 4 kelas 7');

Route::get('/materi 1 bab 5 kelas 7', function () {
    return view('materi 1 bab 5 kelas 7');
})->name('materi 1 bab 5 kelas 7');

Route::get('/materi 2 bab 5 kelas 7', function () {
    return view('materi 2 bab 5 kelas 7');
})->name('materi 2 bab 5 kelas 7');

Route::get('/materi 3 bab 5 kelas 7', function () {
    return view('materi 3 bab 5 kelas 7');
})->name('materi 3 bab 5 kelas 7');

Route::get('/materi 4 bab 5 kelas 7', function () {
    return view('materi 4 bab 5 kelas 7');
})->name('materi 4 bab 5 kelas 7');

Route::get('/materi 1 bab 6 kelas 7', function () {
    return view('materi 1 bab 6 kelas 7');
})->name('materi 1 bab 6 kelas 7');

Route::get('/materi 2 bab 6 kelas 7', function () {
    return view('materi 2 bab 6 kelas 7');
})->name('materi 2 bab 6 kelas 7');

Route::get('/materi 3 bab 6 kelas 7', function () {
    return view('materi 3 bab 6 kelas 7');
})->name('materi 3 bab 6 kelas 7');

Route::get('/materi 1 bab 7 kelas 7', function () {
    return view('materi 1 bab 7 kelas 7');
})->name('materi 1 bab 7 kelas 7');

Route::get('/materi 2 bab 7 kelas 7', function () {
    return view('materi 2 bab 7 kelas 7');
})->name('materi 2 bab 7 kelas 7');

Route::get('/materi 3 bab 7 kelas 7', function () {
    return view('materi 3 bab 7 kelas 7');
})->name('materi 3 bab 7 kelas 7');

Route::get('/materi 4 bab 7 kelas 7', function () {
    return view('materi 4 bab 7 kelas 7');
})->name('materi 4 bab 7 kelas 7');

Route::get('/materi 1 bab 8 kelas 7', function () {
    return view('materi 1 bab 8 kelas 7');
})->name('materi 1 bab 8 kelas 7');

Route::get('/materi 2 bab 8 kelas 7', function () {
    return view('materi 2 bab 8 kelas 7');
})->name('materi 2 bab 8 kelas 7');


Route::get('/semester kelas 8', function () {
    return view('semester kelas 8');
})->name('semester kelas 8');

Route::get('/semester kelas 9', function () {
    return view('semester kelas 9');
})->name('semester kelas 9');

Route::get('/materi 1 bab 1 kelas 8', function () {
    return view('materi 1 bab 1 kelas 8');
})->name('materi 1 bab 1 kelas 8');

Route::get('/materi 2 bab 1 kelas 8', function () {
    return view('materi 2 bab 1 kelas 8');
})->name('materi 2 bab 1 kelas 8');

Route::get('/materi 1 bab 2 kelas 8', function () {
    return view('materi 1 bab 2 kelas 8');
})->name('materi 1 bab 2 kelas 8');

Route::get('/materi 2 bab 2 kelas 8', function () {
    return view('materi 2 bab 2 kelas 8');
})->name('materi 2 bab 2 kelas 8');

Route::get('/materi 1 bab 3 kelas 8', function () {
    return view('materi 1 bab 3 kelas 8');
})->name('materi 1 bab 3 kelas 8');

Route::get('/materi 2 bab 3 kelas 8', function () {
    return view('materi 2 bab 3 kelas 8');
})->name('materi 2 bab 3 kelas 8');

Route::get('/materi 1 bab 4 kelas 8', function () {
    return view('materi 1 bab 4 kelas 8');
})->name('materi 1 bab 4 kelas 8');

Route::get('/materi 2 bab 4 kelas 8', function () {
    return view('materi 2 bab 4 kelas 8');
})->name('materi 2 bab 4 kelas 8');

Route::get('/materi 1 bab 5 kelas 8', function () {
    return view('materi 1 bab 5 kelas 8');
})->name('materi 1 bab 5 kelas 8');

Route::get('/materi 2 bab 5 kelas 8', function () {
    return view('materi 2 bab 5 kelas 8');
})->name('materi 2 bab 5 kelas 8');

Route::get('/materi 3 bab 5 kelas 8', function () {
    return view('materi 3 bab 5 kelas 8');
})->name('materi 3 bab 5 kelas 8');

Route::get('/materi 4 bab 5 kelas 8', function () {
    return view('materi 4 bab 5 kelas 8');
})->name('materi 4 bab 5 kelas 8');

Route::get('/materi 5 bab 5 kelas 8', function () {
    return view('materi 5 bab 5 kelas 8');
})->name('materi 5 bab 5 kelas 8');

Route::get('/materi 1 bab 6 kelas 8', function () {
    return view('materi 1 bab 6 kelas 8');
})->name('materi 1 bab 6 kelas 8');

Route::get('/materi 2 bab 6 kelas 8', function () {
    return view('materi 2 bab 6 kelas 8');
})->name('materi 2 bab 6 kelas 8');

Route::get('/materi 3 bab 6 kelas 8', function () {
    return view('materi 3 bab 6 kelas 8');
})->name('materi 3 bab 6 kelas 8');

Route::get('/materi 1 bab 7 kelas 8', function () {
    return view('materi 1 bab 7 kelas 8');
})->name('materi 1 bab 7 kelas 8');

Route::get('/materi 2 bab 7 kelas 8', function () {
    return view('materi 2 bab 7 kelas 8');
})->name('materi 2 bab 7 kelas 8');

Route::get('/materi 3 bab 7 kelas 8', function () {
    return view('materi 3 bab 7 kelas 8');
})->name('materi 3 bab 7 kelas 8');

Route::get('/materi 1 bab 8 kelas 8', function () {
    return view('materi 1 bab 8 kelas 8');
})->name('materi 1 bab 8 kelas 8');

Route::get('/materi 2 bab 8 kelas 8', function () {
    return view('materi 2 bab 8 kelas 8');
})->name('materi 2 bab 8 kelas 8');

Route::get('/materi 3 bab 8 kelas 8', function () {
    return view('materi 3 bab 8 kelas 8');
})->name('materi 3 bab 8 kelas 8');

Route::get('/penilaian harian 1 kelas 7', function () {
    return view('penilaian harian 1 kelas 7');
})->name('penilaian harian 1 kelas 7');

Route::get('/penilaian harian 2 kelas 7', function () {
    return view('penilaian harian 2 kelas 7');
})->name('penilaian harian 2 kelas 7');

Route::get('/penilaian harian 3 kelas 7', function () {
    return view('penilaian harian 3 kelas 7');
})->name('penilaian harian 3 kelas 7');

Route::get('/penilaian harian 4 kelas 7', function () {
    return view('penilaian harian 4 kelas 7');
})->name('penilaian harian 4 kelas 7');

Route::get('/penilaian tengah semester kelas 7', function () {
    return view('penilaian tengah semester kelas 7');
})->name('penilaian tengah semester kelas 7');

Route::get('/penilaian akhir semester kelas 7', function () {
    return view('penilaian akhir semester kelas 7');
})->name('penilaian akhir semester kelas 7');

Route::get('/soal 1 ph1 kelas 7', function () {
    return view('soal 1 ph1 kelas 7');
})->name('soal 1 ph1 kelas 7');

Route::get('/soal 2 ph1 kelas 7', function () {
    return view('soal 2 ph1 kelas 7');
})->name('soal 2 ph1 kelas 7');

Route::get('/soal 3 ph1 kelas 7', function () {
    return view('soal 3 ph1 kelas 7');
})->name('soal 3 ph1 kelas 7');

Route::get('/soal 4 ph1 kelas 7', function () {
    return view('soal 4 ph1 kelas 7');
})->name('soal 4 ph1 kelas 7');

Route::get('/soal 5 ph1 kelas 7', function () {
    return view('soal 5 ph1 kelas 7');
})->name('soal 5 ph1 kelas 7');

Route::get('/soal 6 ph1 kelas 7', function () {
    return view('soal 6 ph1 kelas 7');
})->name('soal 6 ph1 kelas 7');

Route::get('/soal 1 ph2 kelas 7', function () {
    return view('soal 1 ph2 kelas 7');
})->name('soal 1 ph2 kelas 7');

Route::get('/soal 2 ph2 kelas 7', function () {
    return view('soal 2 ph2 kelas 7');
})->name('soal 2 ph2 kelas 7');

Route::get('/soal 3 ph2 kelas 7', function () {
    return view('soal 3 ph2 kelas 7');
})->name('soal 3 ph2 kelas 7');

Route::get('/soal 4 ph2 kelas 7', function () {
    return view('soal 4 ph2 kelas 7');
})->name('soal 4 ph2 kelas 7');

Route::get('/soal 5 ph2 kelas 7', function () {
    return view('soal 5 ph2 kelas 7');
})->name('soal 5 ph2 kelas 7');

Route::get('/soal 6 ph2 kelas 7', function () {
    return view('soal 6 ph2 kelas 7');
})->name('soal 6 ph2 kelas 7');

Route::get('/value_student', function () {
    return view('value_student');
})->name('value_student');

Route::get('/tentang kami', function () {
    return view('tentang kami');
})->name('tentang kami');





Route::get('/nilai teacher', function () {
    return view('nilai teacher');
})->name('nilai teacher');

Route::get('/semester kelas 7 guru', function () {
    return view('semester kelas 7 guru');
})->name('semester kelas 7 guru');

Route::get('/semester kelas 8 guru', function () {
    return view('semester kelas 8 guru');
})->name('semester kelas 8 guru');

Route::get('/semester kelas 9 guru', function () {
    return view('semester kelas 9 guru');
})->name('semester kelas 9 guru');


Route::get('/bab semester 1 kelas 7 guru', function () {
    return view('bab semester 1 kelas 7 guru');
})->name('bab semester 1 kelas 7 guru');

Route::get('/materi 1 bab 1 kelas 9 ', function () {
    return view('materi 1 bab 1 kelas 9');
})->name('materi 1 bab 1 kelas 9');

Route::get('/materi 2 bab 1 kelas 9 ', function () {
    return view('materi 2 bab 1 kelas 9');
})->name('materi 2 bab 1 kelas 9');

Route::get('/materi 3 bab 1 kelas 9 ', function () {
    return view('materi 3 bab 1 kelas 9');
})->name('materi 3 bab 1 kelas 9');

Route::get('/materi 1 bab 2 kelas 9 ', function () {
    return view('materi 1 bab 2 kelas 9 ');
})->name('materi 1 bab 2 kelas 9 ');

Route::get('/materi 2 bab 2 kelas 9 ', function () {
    return view('materi 2 bab 2 kelas 9 ');
})->name('materi 2 bab 2 kelas 9 ');

Route::get('/materi 3 bab 2 kelas 9 ', function () {
    return view('materi 3 bab 2 kelas 9 ');
})->name('materi 3 bab 2 kelas 9 ');

Route::get('/materi 1 bab 3 kelas 9 ', function () {
    return view('materi 1 bab 3 kelas 9 ');
})->name('materi 1 bab 3 kelas 9 ');

Route::get('/materi 1 bab 4 kelas 9 ', function () {
    return view('materi 1 bab 4 kelas 9 ');
})->name('materi 1 bab 4 kelas 9 ');


Route::get('/materi 1 bab 5 kelas 9', function () {
    return view('materi 1 bab 5 kelas 9');
})->name('materi 1 bab 5 kelas 9');

Route::get('/materi 2 bab 5 kelas 9', function () {
    return view('materi 2 bab 5 kelas 9');
})->name('materi 2 bab 5 kelas 9');

Route::get('/materi 3 bab 5 kelas 9', function () {
    return view('materi 3 bab 5 kelas 9');
})->name('materi 3 bab 5 kelas 9');

Route::get('/materi 4 bab 5 kelas 9', function () {
    return view('materi 4 bab 5 kelas 9');
})->name('materi 4 bab 5 kelas 9');

Route::get('/materi 5 bab 5 kelas 9', function () {
    return view('materi 5 bab 5 kelas 9');
})->name('materi 5 bab 5 kelas 9');


Route::get('/materi 1 bab 6 kelas 9', function () {
    return view('materi 1 bab 6 kelas 9');
})->name('materi 1 bab 6 kelas 9');

Route::get('/materi 2 bab 6 kelas 9', function () {
    return view('materi 2 bab 6 kelas 9');
})->name('materi 2 bab 6 kelas 9');

Route::get('/materi 3 bab 6 kelas 9', function () {
    return view('materi 3 bab 6 kelas 9');
})->name('materi 3 bab 6 kelas 9');

Route::get('/materi 1 bab 7 kelas 9', function () {
    return view('materi 1 bab 7 kelas 9');
})->name('materi 1 bab 7 kelas 9');

Route::get('/materi 2 bab 7 kelas 9', function () {
    return view('materi 2 bab 7 kelas 9');
})->name('materi 2 bab 7 kelas 9');

Route::get('/materi 3 bab 7 kelas 9', function () {
    return view('materi 3 bab 7 kelas 9');
})->name('materi 3 bab 7 kelas 9');

Route::get('/materi 1 bab 8 kelas 9', function () {
    return view('materi 1 bab 8 kelas 9');
})->name('materi 1 bab 8 kelas 9');

Route::get('/materi 2 bab 8 kelas 9', function () {
    return view('materi 2 bab 8 kelas 9');
})->name('materi 2 bab 8 kelas 9');

Route::get('/materi 3 bab 8 kelas 9', function () {
    return view('materi 3 bab 8 kelas 9');
})->name('materi 3 bab 8 kelas 9');

Route::post('/ckeditor/upload', [UploadController::class, 'upload'])->name('ckeditor.upload');

Route::get('/edit materi bab 1 kelas 7 semester 1 guru', function () {
    return view('edit materi bab 1 kelas 7 semester 1 guru');
})->name('edit materi bab 1 kelas 7 semester 1 guru');

Route::get('/edit materi bab 2 kelas 7 semester 1 guru', function () {
    return view('edit materi bab 2 kelas 7 semester 1 guru');
})->name('edit materi bab 2 kelas 7 semester 1 guru');

Route::get('/edit materi bab 3 kelas 7 semester 1 guru', function () {
    return view('edit materi bab 3 kelas 7 semester 1 guru');
})->name('edit materi bab 3 kelas 7 semester 1 guru');

Route::get('/edit materi bab 4 kelas 7 semester 1 guru', function () {
    return view('edit materi bab 4 kelas 7 semester 1 guru');
})->name('edit materi bab 4 kelas 7 semester 1 guru');

Route::get('/edit materi bab 5 kelas 7 semester 1 guru', function () {
    return view('edit materi bab 5 kelas 7 semester 1 guru');
})->name('edit materi bab 5 kelas 7 semester 1 guru');

Route::get('/edit materi bab 6 kelas 7 semester 1 guru', function () {
    return view('edit materi bab 6 kelas 7 semester 1 guru');
})->name('edit materi bab 6 kelas 7 semester 1 guru');

Route::get('/edit materi bab 7 kelas 7 semester 1 guru', function () {
    return view('edit materi bab 7 kelas 7 semester 1 guru');
})->name('edit materi bab 7 kelas 7 semester 1 guru');

Route::get('/edit materi bab 8 kelas 7 semester 1 guru', function () {
    return view('edit materi bab 8 kelas 7 semester 1 guru');
})->name('edit materi bab 8 kelas 7 semester 1 guru');

Route::get('/bab semester 2 kelas 7 guru', function () {
    return view('bab semester 2 kelas 7 guru');
})->name('bab semester 2 kelas 7 guru');

Route::get('/bab semester 1 kelas 8 guru', function () {
    return view('bab semester 1 kelas 8 guru');
})->name('bab semester 1 kelas 8 guru');

Route::get('/bab semester 2 kelas 8 guru', function () {
    return view('bab semester 2 kelas 8 guru');
})->name('bab semester 2 kelas 8 guru');

Route::get('/bab semester 1 kelas 9 guru', function () {
    return view('bab semester 1 kelas 9 guru');
})->name('bab semester 1 kelas 9 guru');

Route::get('/bab semester 2 kelas 9 guru', function () {
    return view('bab semester 2 kelas 9 guru');
})->name('bab semester 2 kelas 9 guru');


Route::get('/edit materi bab 1 kelas 8 semester 1 guru', function () {
    return view('edit materi bab 1 kelas 8 semester 1 guru');
})->name('edit materi bab 1 kelas 8 semester 1 guru');

Route::get('/edit materi bab 2 kelas 8 semester 1 guru', function () {
    return view('edit materi bab 2 kelas 8 semester 1 guru');
})->name('edit materi bab 2 kelas 8 semester 1 guru');

Route::get('/edit materi bab 3 kelas 8 semester 1 guru', function () {
    return view('edit materi bab 3 kelas 8 semester 1 guru');
})->name('edit materi bab 3 kelas 8 semester 1 guru');

Route::get('/edit materi bab 4 kelas 8 semester 1 guru', function () {
    return view('edit materi bab 4 kelas 8 semester 1 guru');
})->name('edit materi bab 4 kelas 8 semester 1 guru');

Route::get('/edit materi bab 5 kelas 8 semester 2 guru', function () {
    return view('edit materi bab 5 kelas 8 semester 2 guru');
})->name('edit materi bab 5 kelas 8 semester 2 guru');

Route::get('/edit materi bab 6 kelas 8 semester 2 guru', function () {
    return view('edit materi bab 6 kelas 8 semester 2 guru');
})->name('edit materi bab 6 kelas 8 semester 2 guru');

Route::get('/edit materi bab 7 kelas 8 semester 2 guru', function () {
    return view('edit materi bab 7 kelas 8 semester 2 guru');
})->name('edit materi bab 7 kelas 8 semester 2 guru');

Route::get('/edit materi bab 8 kelas 8 semester 2 guru', function () {
    return view('edit materi bab 8 kelas 8 semester 2 guru');
})->name('edit materi bab 8 kelas 8 semester 2 guru');

Route::get('/edit materi bab 1 kelas 9 semester 1 guru', function () {
    return view('edit materi bab 1 kelas 9 semester 1 guru');
})->name('edit materi bab 1 kelas 9 semester 1 guru');

Route::get('/edit materi bab 2 kelas 9 semester 1 guru', function () {
    return view('edit materi bab 2 kelas 9 semester 1 guru');
})->name('edit materi bab 2 kelas 9 semester 1 guru');

Route::get('/edit materi bab 3 kelas 9 semester 1 guru', function () {
    return view('edit materi bab 3 kelas 9 semester 1 guru');
})->name('edit materi bab 3 kelas 9 semester 1 guru');

Route::get('/edit materi bab 4 kelas 9 semester 1 guru', function () {
    return view('edit materi bab 4 kelas 9 semester 1 guru');
})->name('edit materi bab 4 kelas 9 semester 1 guru');

Route::get('/edit materi bab 5 kelas 9 semester 2 guru', function () {
    return view('edit materi bab 5 kelas 9 semester 2 guru');
})->name('edit materi bab 5 kelas 9 semester 2 guru');

Route::get('/edit materi bab 6 kelas 9 semester 2 guru', function () {
    return view('edit materi bab 6 kelas 9 semester 2 guru');
})->name('edit materi bab 6 kelas 9 semester 2 guru');

Route::get('/edit materi bab 7 kelas 9 semester 2 guru', function () {
    return view('edit materi bab 7 kelas 9 semester 2 guru');
})->name('edit materi bab 7 kelas 9 semester 2 guru');

Route::get('/edit materi bab 8 kelas 9 semester 2 guru', function () {
    return view('edit materi bab 8 kelas 9 semester 2 guru');
})->name('edit materi bab 8 kelas 9 semester 2 guru');

Route::get('/nilai perkelas guru', function () {
    return view('nilai perkelas guru');
})->name('nilai perkelas guru');

Route::get('/input nilai kelas 7 guru', function () {
    return view('input nilai kelas 7 guru');
})->name('input nilai kelas 7 guru');

Route::get('/input nilai kelas 8 guru', function () {
    return view('input nilai kelas 8 guru');
})->name('input nilai kelas 8 guru');

Route::get('/input nilai kelas 9 guru', function () {
    return view('input nilai kelas 9 guru');
})->name('input nilai kelas 9 guru');

Route::get('/tentang kami guru', function () {
    return view('tentang kami guru');
})->name('tentang kami guru');

Route::get('/edit nilai', function () {
    return view('edit nilai');
})->name('edit nilai');

Route::get('/nilai/{id}/edit', [NilaiController::class, 'edit'])->name('nilai.edit');
Route::put('/nilai/{id}', [NilaiController::class, 'update'])->name('nilai.update');





Route::get('/data-guru', function () {
    return view('data-guru');
})->name('data-guru');

Route::get('/data siswa', function () {
    return view('data siswa');
})->name('data siswa');

Route::get('/edit data guru', function () {
    return view('edit data guru');
})->name('edit data guru');

Route::get('/tambah data guru', function () {
    return view('tambah data guru');
})->name('tambah data guru');

Route::get('/edit data siswa', function () {
    return view('edit data siswa');
})->name('edit data siswa');

Route::get('/tambah data siswa', function () {
    return view('tambah data siswa');
})->name('tambah data siswa');

Route::get('/edit materi', function () {
    return view('edit materi');
})->name('edit materi');

Route::get('/dashboard-admin', function () {
    return view('dashboard-admin');
})->name('dashboard-admin');

Route::get('/dashboard-teacher', function () {
    return view('dashboard-teacher');
})->name('dashboard-teacher');

Route::get('/dashboard-student', function () {
    return view('dashboard-student');
})->name('dashboard-student');


//Route Dashboard Admin
Route::get('/teacher-data', [UserController::class, 'dataGuru'])->name('data.guru');
Route::get('/student-data', [UserController::class, 'dataSiswa']);
Route::get('/account-management', [UserController::class, 'managementAkun']);
Route::get('/class-data', [NrClassController::class, 'classData']);

//Route Dashboard Student
Route::get('/class-student', [NrClassController::class, 'classStudent']);

//Route Dashboard Teacher
Route::get('/class-teacher', [NrClassController::class, 'classTeacher']);
Route::get('/teacher-evaluation', [ExamController::class, 'index']);
Route::get('/add-evaluation-question', [QuestionController::class,'index']);
Route::get('/value-teacher', [ValueExamController::class, 'index']);
Route::get('/input-score-grade7', [ValueExamController::class, 'inputScoreGrade7']);
Route::get('/input-score-grade8', [ValueExamController::class, 'inputScoreGrade8']);
Route::get('/input-score-grade9', [ValueExamController::class, 'inputScoreGrade9']);



Route::get('/value_student', function () {
    return view('value_student');
})->name('value_student');


Route::get('/evaluasi_teacher', function () {
    return view('evaluasi_teacher');
})->name('evaluasi_teacher');

Route::get('/materi', [SubjectController::class, 'index_student'])->name('materi.index');
Route::get('/materi/{id}', [SubjectController::class, 'show'])->name('materi.show');

Route::get('/learning-materials-data', [SubjectController::class, 'index']);


Route::get('/isi-materi-kelas-7/{id}', [SubjectController::class, 'showKelas7'])->name('subject.show.kelas7');
Route::get('/isi-materi-kelas-8/{id}', [SubjectController::class, 'showKelas8'])->name('subject.show.kelas8');
Route::get('/isi-materi-kelas-9/{id}', [SubjectController::class, 'showKelas9'])->name('subject.show.kelas9');



Route::get('/materi/{classId}', [StudentController::class, 'showMateri'])->name('materi');


Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/profile', [ProfileController::class, 'show'])->name('profile.show');
Route::post('/profile/update', [ProfileController::class, 'update'])->name('profile.update');


Route::get('/materi/{id}', [SubjectController::class, 'show'])->name('materi.show');



Route::get('/learning-materials-data', [SubjectController::class, 'index'])
     ->name('classes.index');

Route::get('/learning-materials-data/{id}', [SubjectController::class, 'showByClass'])
     ->name('classes.show');