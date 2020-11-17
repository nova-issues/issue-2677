<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    /**
     * Get all of the commentable models.
     */
    public function commentable()
    {
        return $this->morphTo();
    }
}
