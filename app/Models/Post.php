<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['category_id', 'title_uz', 'title_ru', 'body_uz', 'body_ru',
    'image', 'view', 'meta_title', 'meta_description', 'meta_keywords', 'slug', 'is_special'];

    public function tags(){
        return $this->belongsToMany(Tag::class);
    }
}
