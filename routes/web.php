<?php

use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\AnswerController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\ExamController;
use App\Http\Controllers\Guru\GuruDashboardController;
use App\Http\Controllers\NilaiController;
use App\Http\Controllers\NrClassController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\Siswa\SiswaDashboardController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\SubjectTopicController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ValueExamController;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/subject', [SubjectController::class, 'index']);
Route::post('/subject/create', [SubjectController::class, 'create']);
Route::put('/subject/update{id}', [SubjectController::class, 'update']);
Route::get('/subject/{id}', [SubjectController::class, 'show']);
Route::delete('/subject/delete/{id}', [SubjectController::class, 'destroy']);

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

Route::get('/evaluasi', [ExamController::class, 'studentEvaluation'])->name('evaluasi_student');

Route::get('/value_student', function () {
    return view('value_student');
})->name('value_student');

Route::get('/exam/{exam}/question/{number?}', [ExamController::class, 'showQuestion'])->name('exam.question');

Route::get('/tentang kami', function () {
    return view('tentang kami');
})->name('tentang kami');

Route::post('/ckeditor/upload', [UploadController::class, 'upload'])->name('ckeditor.upload');

Route::get('/input nilai kelas 9 guru', function () {
    return view('input nilai kelas 9 guru');
})->name('input nilai kelas 9 guru');

Route::get('/subject/create', [SubjectController::class, 'create'])->name('subject.create');
Route::post('/subject/store', [SubjectController::class, 'store'])->name('subject.store');

Route::get('/tentang kami guru', function () {
    return view('tentang kami guru');
})->name('tentang kami guru');

Route::get('/edit nilai', function () {
    return view('edit nilai');
})->name('edit nilai');

Route::get('/nilai/{id}/edit', [NilaiController::class, 'edit'])->name('nilai.edit');
Route::put('/nilai/{id}', [NilaiController::class, 'update'])->name('nilai.update');

Route::get('/about-us-student', function () {
    return view('about_us_student');
})->name('about-us-student');

Route::get('/about-us-teacher', function () {
    return view('about_us_teacher');
})->name('about-us-teacher');

Route::middleware(['auth', 'role:siswa'])->group(function () {
    Route::get('/dashboard-student', function () {
        return view('dashboard_student');
    })->name('dashboard-student');
    Route::get('/class-student', [NrClassController::class, 'classStudent']);

    Route::get('/learning-materials-data/{class_id}', [SubjectTopicController::class, 'showByClass'])->name('subject-by-class');

    Route::get('/subject-by-class/{class_id}/{id}', [SubjectController::class, 'showContent'])->name('subject.showContent');

});

Route::get('/class-student/{class_id}/materials', [SubjectController::class, 'listMaterialsStudent'])
    ->name('student.materials');

Route::get('/materials/{id}', [SubjectController::class, 'showDetailMaterial'])
    ->name('student.materials.detail');

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');

    // User Management
    Route::get('/teacher-data', [UserController::class, 'dataGuru'])->name('data.guru');
    Route::get('/student-data', [UserController::class, 'dataSiswa'])->name('data.siswa');
    Route::get('/account-management', [UserController::class, 'managementAkun'])->name('account.management');
    Route::get('/add-user', [UserController::class, 'create'])->name('user.create');
    Route::post('/user/store', [UserController::class, 'store'])->name('user.store');
    Route::get('/user/{id}/edit', [UserController::class, 'edit'])->name('user.edit');
    Route::put('/user/{id}', [UserController::class, 'update'])->name('user.update');
    Route::delete('/user/{id}', [UserController::class, 'destroy'])->name('user.destroy');
    Route::resource('users', UserController::class);

    // Class Management
    Route::resource('classes', NrClassController::class)->except(['index']);
    Route::get('/class-data', [NrClassController::class, 'classData'])->name('class.data');

    // Subject Management
    Route::get('/learning-materials-data', [SubjectController::class, 'indexAdmin']);
    Route::resource('subject', SubjectController::class);

});

Route::middleware(['auth', 'role:guru'])->group(function () {
    Route::get('/guru/dashboard', [GuruDashboardController::class, 'index'])->name('guru.dashboard');
    Route::get('/class-teacher', [NrClassController::class, 'classTeacher']);
    Route::get('/teacher-evaluation', [QuestionController::class, 'index']);
    Route::get('/add-evaluation-question', [QuestionController::class, 'create']);

    Route::resource('questions', QuestionController::class);

    Route::get('/value-teacher', [ValueExamController::class, 'index']);

    Route::get('/input-score-grade7', [ValueExamController::class, 'inputScoreGrade7']);
    Route::get('/input-score-grade8', [ValueExamController::class, 'inputScoreGrade8']);
    Route::get('/input-score-grade9', [ValueExamController::class, 'inputScoreGrade9']);

    // Route::get('/class/{id}', [ClassController::class, 'show'])->name('classes.show');

    // Route::get('/learning-materials-data/{class_id}', [SubjectTopicController::class, 'showByClass'])->name('subject-by-class');

    // Route::get('/subject-by-class/{class_id}/{id}', [SubjectController::class, 'showContent'])->name('subject.showContent');

    Route::get('/value_student', function () {
        return view('value_student');
    })->name('value_student');

    Route::get('/evaluasi_teacher', function () {
        return view('evaluasi_teacher');
    })->name('evaluasi_teacher');

    Route::get('/update-value', function () {
        return view('update_value');
    })->name('update_value');

    Route::get('/teacher-materials', [SubjectController::class, 'teacherMaterials'])->name('teacher.materials');
    Route::get('/teacher-materials/{class_id}', [SubjectController::class, 'showMaterialsByClass'])->name('teacher-materials');
    Route::get('/add_teacher_materials', [SubjectController::class, 'create'])->name('subject.create');
    Route::post('/teacher-materials', [SubjectController::class, 'store'])->name('subject.store');
    Route::resource('subject', SubjectController::class);

    Route::get('/isi-materi-kelas-7/{id}', [SubjectController::class, 'showKelas'])->name('subject.show.kelas7');
    Route::get('/isi-materi-kelas-8/{id}', [SubjectController::class, 'showKelas8'])->name('subject.show.kelas8');
    Route::get('/isi-materi-kelas-9/{id}', [SubjectController::class, 'showKelas9'])->name('subject.show.kelas9');
});

Route::middleware(['auth', 'role:siswa'])->group(function () {
    Route::get('/siswa/dashboard', [SiswaDashboardController::class, 'index'])->name('siswa.dashboard');
});

require __DIR__ . '/auth.php';