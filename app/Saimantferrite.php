<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Saimantferrite extends Model
{
    protected $table = 'slider_aimant_ferrite';
    
    public function Aimant(){
        
        return $this->hasOne('App\Aimantferrite', 'aimant_ferrite_id');
        
        
    }
    public function Image(){
        
        return $this->belongsTo('App\Saimantferrite', 'aimant_ferrite_id');
        
        
    }
}
