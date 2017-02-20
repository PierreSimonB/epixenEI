<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Saccueil extends Model
{
    protected $table = 'slider_accueil';
    
    public function Accueil(){
        
        return $this->hasOne('App\Accueil', 'accueil_id');
        
        
    }
    public function Image(){
        
        return $this->belongsTo('App\Saccueil', 'accueil_id');
        
        
    }
    
    
    
    
    
    
}
