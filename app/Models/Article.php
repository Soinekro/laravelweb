<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Article extends Model
{
    use Sluggable;
    public function sluggable(): array{
        return [
            'slug'    =>[
                'source'=>  'title'
            ]
        ];
    }

    protected $table = "articles" ;

    protected $fillable = ['title', 'content', 'categories_id', 'user_id'];
   // use HasFactory;

   public function category(){
       return $this->belongsTo('App\Models\Category');
   }
   public function user(){
       return $this->belongsTo('App\Models\User');
   }

   public function images(){
       return $this->hasMany('App\Models\Image');
   }

   public function tags(){
       return $this->belongsToMany('App\Models\Tag');
   }
}
