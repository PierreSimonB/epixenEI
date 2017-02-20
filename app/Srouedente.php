<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Srouedente extends Model
{
    protected $table = 'slider_roue_dente';
    
    public function rouedente(){
        
        return $this->hasOne('App\Rouedente', 'roue_dente_id');
        
        
    }
    public function Image(){
        
        return $this->belongsTo('App\Srouedente', 'roue_dente_id');
        
        
    }
}
