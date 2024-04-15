<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Comment extends Model
{
    use HasFactory;

    function product() : BelongsTo {
        return $this->belongsTo(Product::class);
    }

    protected $fillable = [
        'content',
        'rate',
        'user_id',
    ];
}
