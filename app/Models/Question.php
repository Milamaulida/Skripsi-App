<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $table = 'question'; 
    
    protected $fillable = ['exam_id','class_id','question'];
    
    protected $dates =['created_at','updated_at'];
    public function answers()
    {
        return $this->hasMany(Answer::class);
    }

   public function correctAnswer()
    {
        return $this->hasOne(Answer::class)->where('is_correct', 1);
    }
}
