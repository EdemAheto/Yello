<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lifestyle extends Model
{
    use HasFactory;

    protected $fillable = [
        'outstanding_influential_student',
        'outstanding_department',
        'outstanding_departmental_executive',
        'outstanding_faculty_executive',
        'outstanding_activist_student',
        'outstanding_wine_personality',
        'outstanding_wine_executive'
];
}
