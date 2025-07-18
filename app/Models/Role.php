<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
    protected $table = 'roles';

    protected $fillable = ['name','email','password'];

    protected $dates =['created_at','updated_at'];

      public function users()
    {
        return $this->hasMany(User::class, 'role_id');
    }
}
