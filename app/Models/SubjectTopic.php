<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubjectTopic extends Model
{
    use HasFactory;

    protected $table = 'subject_topic';
    protected $fillable = ['class_id', 'chapter','nilai'];

    public function nrclass()
    {
        return $this->belongsTo(NrClass::class, 'class_id');
    }

    public function subject()
    {
    return $this->hasOne(Subject::class, 'subject_topic_id');
    }

}
