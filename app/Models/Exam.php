<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class exam extends Model
{
    use HasFactory;
    protected $table = 'exam';
    protected $fillable = ['class_id',
                            'type'];
    
    protected $dates =['created_at','updated_at'];
     public function nrclass()
    {
        return $this->belongsTo(Nrclass::class, 'class_id', 'id');
    }
}
