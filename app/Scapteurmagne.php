<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Scapteurmagne extends Model
{
    protected $table = 'slider_capteur_magnetique';
    
    public function capturemagne(){
        
        return $this->hasOne('App\capteur_magnetique', 'capteur_magnetique_id');
        
        
    }
    public function Image(){
        
        return $this->belongsTo('App\Scapteurmagne', 'capteur_magnetique_id');
        
        
    }
}
