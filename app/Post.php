<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Kategori;
class Post extends Model
{
    protected $fillable = ['author','title', 'slug','content', 'foto', 'kategori_id'];

    public function kategori(){
    	return $this->belongsTo('App\Kategori');
    }

    public function comments(){
    	return $this->morphMany('App\Comment','commentable');
    }
}
