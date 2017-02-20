<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sgenerateur extends Model
{
    protected $table = 'slider_generateur';
    
     public function Generateur(){
        
        return $this->hasOne('App\Generateur', 'generateur_id');
        
        
    }
    public function Image(){
        
        return $this->belongsTo('App\Sgenerateur', 'generateur_id');
        
        
    }
}
