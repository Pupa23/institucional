<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pircing extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'name_plan',
        'price',
        'description_plan',
        'button'
    ];
}
