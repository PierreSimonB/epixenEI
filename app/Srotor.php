<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Srotor extends Model
{
    protected $table = 'slider_rotor';
    
   
    
      public function rotor(){
        
        return $this->hasOne('App\Rotor', 'rotor_id');
        
        
    }
    public function Image(){
        
        return $this->belongsTo('App\Srotor', 'rotor_id');
        
        
    }
}
