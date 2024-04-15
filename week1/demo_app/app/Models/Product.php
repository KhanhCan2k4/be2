<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    use HasFactory;

    public function categories() : BelongsToMany {
        return $this->belongsToMany(Category::class);
    }

    public function comments() : HasMany {
        return $this->hasMany(Comment::class);
    }

    protected $fillable = ['name', 'price', 'description', 'photo'];
}
