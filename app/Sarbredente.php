<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sarbredente extends Model
{
    protected $table = 'slider_arbre_dente';
    
    public function Arbredente(){
        
        return $this->hasOne('App\Arbredente', 'arbre_dente_id');
        
        
    }
    public function Image(){
        
        return $this->belongsTo('App\Sarbredente', 'arbre_dente_id');
        
        
    }
}
