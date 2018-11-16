<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Building;

class Pic extends Model
{
    //

	protected $fillable = ['name', 'building_id'];

    public function building()
    {
        return $this->belongsTo('App\Building');
    }
}
