<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Certification extends Model
{
    //use HasFactory;

    protected $fillable = [
        'name',
        'description',
    ];
}
