<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Smoteuruni extends Model
{
    protected $table = 'slider_moteur_uni';
    
             public function moteuruni(){
        
                return $this->hasOne('App\Moteurelectrique', 'moteur_electrique_id');
        
        
    }
            public function Image(){
        
                return $this->belongsTo('App\Smoteurelectrique', 'moteur_electrique_id');
        
        
    }
}
