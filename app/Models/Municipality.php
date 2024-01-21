<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Municipality extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'municipality_name',
        'category'
    ];

    // protected $casts = [
    //     'timestamp' => 'datetime',
    // ];
}
