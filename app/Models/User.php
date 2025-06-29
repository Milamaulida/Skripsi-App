<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    protected $table = 'users';

    protected $fillable = ['class_id', 'name', 'email', 'password', 'phone', 'identification_number', 'role_id', 'status', 'birth_date', 'address', 'image_path',];

    protected $dates = ['created_at', 'updated_at'];

    public function role()
    {
        return $this->belongsTo(Role::class, 'role_id', 'id');
    }

    public function nrclass()
    {
        return $this->belongsTo(Nrclass::class, 'class_id', 'id');
    }
}
