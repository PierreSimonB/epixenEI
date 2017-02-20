<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sbobinagemoteur extends Model
{
    protected $table = 'slider_bobinage_moteur';
    
     public function Bobinagemoteur(){
        
        return $this->hasOne('App\Bobinagemoteur', 'bobinage_moteur_id');
        
        
    }
    public function Image(){
        
        return $this->belongsTo('App\Sbobinagemoteur', 'bobinage_moteur_id');
        
        
    }
}
