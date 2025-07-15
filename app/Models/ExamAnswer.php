<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExamAnswer extends Model
{
    use HasFactory;

    protected $table = 'exam_answers';
    protected $fillable = [
        'exam_result_id',
        'question_id',
        'selected_option',
        'is_correct',
    ];

    public function examResult()
{
    return $this->belongsTo(ExamResult::class);
}

}