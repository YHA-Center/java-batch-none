<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'cover',
        'category_id',
        'user_id',
    ];

    public function Category(){
        return $this->belongsTo('App\Models\Category');
    }

    public function User(){
        return $this->belongsTo('App\Models\User');
    }

    public function Comment(){
        return $this->belongsTo('App\Models\Comment');
    }

    public function Popular(){
        return $this->belongsTo('App\Models\Popular');
    }
}
