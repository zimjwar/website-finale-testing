<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    // use HasFactory;

    protected $fillable = [
        'user_id',
        'project_name',
        'project_description',
        'project_url',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
