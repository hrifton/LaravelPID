<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    /*
    protected $fillable = [
        'slug', 'designation', 'adress', 'website', 'phone',
    ];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    /*
    protected $table = 'locations';
    */
    /**
     * Get the localitie for location.
     */
    public function localities() {
        return $this->hasMany('App\Localitie');
    }

    public function hasMany() {
        
    }

}
