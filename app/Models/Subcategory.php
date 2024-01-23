<?php

namespace App\Models;

use App\Models\Category;
use App\Models\ImageSubcategory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Subcategory extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'category_id'];

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function imageSubcategories()
    {
        return $this->hasMany(ImageSubcategory::class);
    }
    
}
