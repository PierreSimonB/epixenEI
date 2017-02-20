<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sisolantmoteur extends Model
{
    protected $table = 'slider_isolantmoteur';
    
     public function Isolantmoteur(){
        
        return $this->hasOne('App\Isolantmoteur', 'isolant_moteur_id');
        
        
    }
    public function Image(){
        
        return $this->belongsTo('App\Sisolantmoteur', 'isolant_moteur_id');
        
        
    }
}
