<?php

use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\ExamController;
use App\Http\Controllers\Guru\GuruDashboardController;
use App\Http\Controllers\NrClassController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\Siswa\SiswaDashboardController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\SubjectTopicController;
use App\Http\Controllers\UserController;
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

Route::middleware(['auth', 'role:siswa'])->group(function () {
    Route::get('/siswa/dashboard', [SiswaDashboardController::class, 'index'])->name('siswa.dashboard');

    Route::get('/class-student', [NrClassController::class, 'classStudent']);

    Route::get('/learning-materials-data/{class_id}', [SubjectTopicController::class, 'showByClass'])->name('subject-by-class');

    Route::get('/subject-by-class/{class_id}/{id}', [SubjectController::class, 'showContent'])->name('subject.showContent');
    Route::get('/evaluasi', [ExamController::class, 'studentEvaluation'])->name('evaluasi_student');

    Route::get('/exam/{exam_id}/start/{number?}', [ExamController::class, 'start'])->name('exam.question');
    Route::post('/exam/{exam_id}/start/{number}', [ExamController::class, 'answer'])->name('exam.answer');
    Route::get('/exam/{exam_id}/complete', [ExamController::class, 'complete'])->name('exam.complete');
    Route::get('/class-student/{class_id}/materials', [SubjectController::class, 'listMaterialsStudent'])
        ->name('student.materials');

    Route::get('/materials/{id}', [SubjectController::class, 'showDetailMaterial'])
        ->name('student.materials.detail');
    Route::get('/my-results', [ExamController::class, 'resultStudent'])->name('exam.results');

    Route::get('/about-us-student', function () {
        return view('student.about_us_student');
    })->name('about-us-student');
});

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
    Route::get('/learning-materials/{id}/edit-admin', [SubjectController::class, 'editAdmin'])->name('learning-materials.edit.admin');
    Route::put('/learning-materials/{id}/update-admin', [SubjectController::class, 'updateAdmin'])->name('learning-materials.update.admin');
    Route::delete('/learning-materials/{id}', [SubjectController::class, 'destroyAdmin'])->name('learning-materials.destroy');

});

Route::middleware(['auth', 'role:guru'])->group(function () {
    Route::get('/guru/dashboard', [GuruDashboardController::class, 'index'])->name('guru.dashboard');
    Route::get('/class-teacher', [NrClassController::class, 'classTeacher']);
    Route::get('/teacher-evaluation', [QuestionController::class, 'index']);
    Route::get('/add-evaluation-question', [QuestionController::class, 'create']);

    //Exam Management
    Route::resource('/exams', ExamController::class);
    Route::get('/exam-class', [ExamController::class, 'selectClass'])->name('exam.select-class');
    Route::get('/exams/class/{class_id}', [ExamController::class, 'listByClass'])->name('exam.by-class');

    // Question Management
    Route::get('/exams/{exam_id}/questions', [QuestionController::class, 'index'])->name('questions.index');
    Route::get('/exams/{exam_id}/questions/create', [QuestionController::class, 'create'])->name('questions.create');
    Route::post('/exams/{exam_id}/questions', [QuestionController::class, 'store'])->name('questions.store');

    Route::get('/exams/{exam_id}/questions/{question_id}/edit', [QuestionController::class, 'edit'])->name('questions.edit');
    Route::put('/exams/{exam_id}/questions/{question_id}', [QuestionController::class, 'update'])->name('questions.update');
    Route::delete('/exams/{exam_id}/questions/{question_id}', [QuestionController::class, 'destroy'])->name('questions.destroy');

    // Exam Results Management
    Route::get('/grades/by-class', [ExamController::class, 'selectClassGrade'])->name('teacher.grade.by-class');
    Route::get('/grades/{class}/exams', [ExamController::class, 'selectExam'])->name('teacher.exam.select');
    Route::get('/grades/exam/{exam_id}/results', [ExamController::class, 'viewResults'])->name('teacher.exam.results');

    // Learning Materials Management
    Route::get('/teacher-materials/{class_id}', [SubjectController::class, 'showMaterialsByClass'])->name('teacher-materials');
    Route::get('/add_teacher_materials', [SubjectController::class, 'create'])->name('subject.create');
    Route::post('/teacher-materials', [SubjectController::class, 'store'])->name('subject.store');
    Route::resource('subject', SubjectController::class);

    Route::get('/about-us-teacher', function () {
    return view('teacher.about_us_teacher');
    })->name('teacher.about-us-teacher');

});

require __DIR__ . '/auth.php';
