<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    // use HasFactory; (yet to test)

    protected $fillable = [
        'category_id',
        'name',
        'description',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function projects()
    {
        return $this->hasMany(Project::class);
    }
}
