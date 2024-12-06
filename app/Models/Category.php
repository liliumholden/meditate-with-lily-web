<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Meditation; // Import the Meditation model

class Category extends Model
{
    use HasFactory;

    // Specify which attributes can be mass-assigned
    protected $fillable = ['name', 'slug', 'description', 'parent_id'];

    // Define the relationship: A category can have many meditations
    // A category can have many meditations
    public function meditations()
    {
        return $this->hasMany(Meditation::class);
    }

// A category may belong to a parent category
    public function parent()
    {
        return $this->belongsTo(Category::class, 'parent_id');
    }

// A category may have many child categories
    public function children()
    {
        return $this->hasMany(Category::class, 'parent_id');
    }
}
