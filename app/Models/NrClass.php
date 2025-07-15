<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NrClass extends Model
{
    protected $table = 'nr_class';

    protected $fillable = ['name'];

    protected $dates =['created_at','updated_at'];

     public function subjects()
    {
        return $this->hasMany(Subject::class, 'class_id');
    }

   public function subjecttopic()
{
    return $this->hasMany(SubjectTopic::class, 'class_id');
}

public function exams()
{
    return $this->hasMany(Exam::class, 'class_id');
}


}
