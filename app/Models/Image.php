<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $table = 'images';

    protected $fillable = ['name', 'article_id'];

    //use HasFactory;
    public function article(){
        return $this->belongsTo('App\Models\Article');
    }
}
