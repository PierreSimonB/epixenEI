<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Smoteurelectrique extends Model
{
    protected $table = 'slider_moteur_electrique';
    
    public function moteurelec(){
        
        return $this->hasOne('App\Moteurelectrique', 'moteur_electrique_id');
        
        
    }
    public function Image(){
        
        return $this->belongsTo('App\Smoteurelectrique', 'moteur_electrique_id');
        
        
    }
}
