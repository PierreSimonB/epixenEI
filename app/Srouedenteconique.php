<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Srouedenteconique extends Model
{
   protected $table = 'slider_roue_dente_conique';
   
     public function rouedenteconique(){
        
        return $this->hasOne('App\Rouedenteconique', 'roue_dente_conique_id');
        
        
    }
    public function Image(){
        
        return $this->belongsTo('App\Srouedenteconique', 'roue_dente_conique_id');
        
        
    }
}
