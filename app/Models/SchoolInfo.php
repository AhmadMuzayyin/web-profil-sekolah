<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SchoolInfo extends Model
{
    protected $fillable = [
        'about',
        'history',
        'vision',
        'mission',
        'motto',
        'organizational_structure_image',
    ];
}
