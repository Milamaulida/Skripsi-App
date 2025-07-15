<?php
namespace Database\Seeders;

use App\Models\Exam;
use App\Models\Question;
use Illuminate\Database\Seeder;

class ExamSeeder extends Seeder
{
    public function run(): void
    {
        $classId = 1;

        for ($e = 1; $e <= 5; $e++) {
            $exam = Exam::create([
                'title'       => "Penilaian Harian $e",
                'description' => "Deskripsi untuk PH $e",
                'class_id'    => $classId,
                'order'       => $e,
                'is_active'   => true,
            ]);

            for ($q = 1; $q <= 5; $q++) {
                Question::create([
                    'exam_id'        => $exam->id,
                    'question'       => "Soal ke-$q untuk {$exam->title}",
                    'option_a'       => "Pilihan A",
                    'option_b'       => "Pilihan B",
                    'option_c'       => "Pilihan C",
                    'option_d'       => "Pilihan D",
                    'correct_answer' => "A",
                ]);
            }
        }
    }
}