<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Items extends Model
{
    protected $fillable = [
        'name',
        'price',
        'description',
        'quantity',
        'created_at',
        'updated_at'
    ];
}
