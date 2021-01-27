<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Main extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'subtitle',
        'description_about',
        'description_service',
        'description_cta',
        'url_image'
    ];
}
