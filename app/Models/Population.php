<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Population extends Model
{
    use HasFactory;

    protected $table = 'population';

    protected $fillable = [
        'id',
        'year',
        'count',
        'municipality_id'
    ];

    // Define the relationship with the Municipality model
    public function municipality()
    {
        return $this->belongsTo(Municipality::class);
    }
}
