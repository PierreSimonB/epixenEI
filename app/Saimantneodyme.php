<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Saimantneodyme extends Model
{
   protected $table = 'slider_aimant_neodyme';
   
     public function Aimant(){
        
        return $this->hasOne('App\Aimantneodyme', 'aimant_neodyme_id');
        
        
    }
    public function Image(){
        
        return $this->belongsTo('App\Saimantneodyme', 'aimant_neodyme_id');
        
        
    }
}
