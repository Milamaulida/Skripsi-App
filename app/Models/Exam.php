<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class exam extends Model
{
    use HasFactory;
    protected $table = 'exams';
    protected $fillable = [
        'title',
        'description',
        'class_id',
        'order',
        'is_active'
    ];

     public function nrclass()
    {
        return $this->belongsTo(Nrclass::class, 'class_id', 'id');
    }

    public function results()
{
    return $this->hasMany(ExamResult::class);
}


public function questions()
{
    return $this->hasMany(Question::class);
}
}
