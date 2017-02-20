<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Smoteuraimantperm extends Model
{
    protected $table = 'slider_moteuraimantperm';
     
    public function Aimant(){
        
        return $this->hasOne('App\Moteuraimantpermanent', 'moteur_aimantperm_id');
        
        
    }
    public function Image(){
        
        return $this->belongsTo('App\Smoteuraimantperm', 'moteur_aimantperm_id');
        
        
    }
}
