<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sfaisceau extends Model
{
    protected $table = 'slider_faisceau';
    
     public function Faisceau(){
        
        return $this->hasOne('App\Faisceau', 'faisceau_id');
        
        
    }
    public function Image(){
        
        return $this->belongsTo('App\Sfaisceau', 'faisceau_id');
        
        
    }
}
