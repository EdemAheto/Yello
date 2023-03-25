<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entertainment extends Model
{
    use HasFactory;

    protected $fillable = [
        'outstanding_artist',
        'outstanding_mc',
        'outstanding_dj',
        'outstanding_rapper',
        'outstanding_actor_and_actress'
];

}
