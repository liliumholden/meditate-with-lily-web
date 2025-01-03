<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meditation extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'audio_path', 'category_id', 'description'];

    // A meditation belongs to a category
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}

