<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Academic extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'outstanding_plant_student',
        'outstanding_auto_student',
        'outstanding_ref_student',
        'outstanding_electrical_student',
        'outstanding_petroleum_student',
        'outstanding_civil_student',
        'outstanding_renewable_student',
        'outstanding_level_100_student',
        'outstanding_level_200_student',
        'outstanding_level_300_student',
        'outstanding_level_400_student',
        'outstanding_HND_student',
        'outstanding_BTech_student',
        'outstanding_Welding_student'
 ];

}
