<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $fillable = [
        'id',
        'name',
        'email',
        'role',
        'password',
        'created_at',
        'updated_at'
    ];
}
