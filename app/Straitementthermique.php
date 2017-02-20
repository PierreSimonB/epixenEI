<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Straitementthermique extends Model
{
    protected $table = 'slider_traitement_thermique';
    
       public function traitementthermique(){
        
        return $this->hasOne('App\Traitementthermique', 'traitement_thermique_id');
        
        
    }
    public function Image(){
        
        return $this->belongsTo('App\Straitementthermique', 'traitement_thermique_id');
        
        
    }
}
