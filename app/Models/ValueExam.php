<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ValueExam extends Model
{
    use HasFactory;
    protected $table = 'value_exam';

    protected $fillable = ['user_id','exam_id','score','exam_date'];
    
    protected $dates =['created_at','updated_at'];
}
