<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExamResult extends Model
{
    use HasFactory;

    protected $table = 'exam_results';
    protected $fillable = [
        'exam_id',
        'user_id',
        'score',
        'is_done',
        'started_at',
        'finished_at',

    ];

    public function answers()
{
    return $this->hasMany(ExamAnswer::class);
}
public function exam()
{
    return $this->belongsTo(Exam::class);
}
public function user()
{
    return $this->belongsTo(User::class);
}

}