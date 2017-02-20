<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Smoteurbrushless extends Model
{
    protected $table = 'slider_moteur_brushless';
    
    public function moteurbrush(){
        
        return $this->hasOne('App\Moteurbrushless', 'moteur_brushless_id');
        
        
    }
    public function Image(){
        
        return $this->belongsTo('App\Smoteurbrushless', 'moteur_brushless_id');
        
        
    }
}
