<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
/* AUTH FOR LIKES TABLE */

use Illuminate\Support\Facades\Auth;

use App\Like;

use App\Pic;

class Building extends Model
{
    //
    protected $fillable = [ 
    
    'img', 

    'name','price', 'rent', 

    'square', 'type', 'roomNumber',

    'smallDisc', 'largDisc', 'tags',

    'lang', 'lat', 'status', 'codePostalMaroc', 

    'user_id',
    
    'thing_id',
    
    'car_id',

    'area_id',

    'carCarb',

    'carModel',

    'thingKind',

    'tel',

    ];




    public function user()
    {
        return $this->belongsTo('App\User');
    }
    
    public function thing()
    {
        return $this->hasOne('App\Thing');
    }
    
    public function car()
    {
        return $this->hasOne('App\Car');
    }
    
    public function area()
    {
        return $this->hasOne('App\Area');
    }

    public function tags()
    {
        return $this->belongsToMany('App\Tag');
    }

    public function pics()
    {
        return $this->hasMany('App\Pic');
    }



    public function getTagListAttribute()
    {
        return  $this->tags()->pluck('id')->all()  ;
    }


    /* LIKES TABLE */

    public function isLiked()
    {
        return (bool) Like::where('user_id', Auth::id())
                            ->where('building_id', $this->id)
                            ->first();
    }

/*
    public function likes()
    {
        return $this->morphToMany('App\User', 'likeable')->whereDeletedAt(null);
    }

    public function getIsLikedAttribute()
    {
        $like = $this->likes()->whereUserId(Auth::id())->first();
        return (!is_null($like)) ? true : false;
    }

*/
}
