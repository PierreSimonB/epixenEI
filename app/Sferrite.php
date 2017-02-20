<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sferrite extends Model
{
    protected $table = 'slider_ferrite';
    
    public function Ferrite(){
        
        return $this->hasOne('App\Ferrite', 'ferrite_id');
        
        
    }
    public function Image(){
        
        return $this->belongsTo('App\Sferrite', 'ferrite_id');
        
        
    }
}
