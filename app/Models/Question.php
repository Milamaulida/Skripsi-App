<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $table = 'question'; 
    
    protected $fillable = ['exam_id','class_id','type_of_question','question'];
    
    protected $dates =['created_at','updated_at'];

   
}
