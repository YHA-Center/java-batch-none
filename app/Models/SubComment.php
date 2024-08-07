<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubComment extends Model
{
    use HasFactory;

    protected $fillable = [
        'pre_id',
        'user_id',
        'content',
    ];
}
