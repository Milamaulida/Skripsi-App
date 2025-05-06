<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;

    protected $table = 'subject';

    protected $fillable = [
        'title',
        'material_number',
        'description',
        'class_id',
        'video_material'
    ];

    protected $dates = ['created_at', 'updated_at'];

    public function nrclass()
    {
        return $this->belongsTo(NrClass::class, 'class_id', 'id');
    }
}
