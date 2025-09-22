<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'users_id',
        'title',
        'image',
        'desc',
        'category'
    ];
    
    public function user()
    {
        return $this->hasOne(User::class, 'id', 'users_id');
    }
}