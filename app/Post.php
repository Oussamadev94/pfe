<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable =['title','text','price','user_id','category_id','country_id'];

    public function images()
    {
        return $this->hasMany('App\Image');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function country()
    {
        return $this->belongsTo('App\Country');
    }
    public function category()
    {
        return $this->belongsTo('App\Category');
    }
    public function delete()
    {
        $this->images()->delete();
        return parent::delete();
    }
}
