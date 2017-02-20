<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sventilateuraspiration extends Model
{
    protected $table = 'slider_ventilateur_aspiration';
    
          public function ventilateuraspiration(){
        
        return $this->hasOne('App\Ventilateuraspiration', 'ventilateur_aspiration_id');
        
        
    }
    public function Image(){
        
        return $this->belongsTo('App\Sventilateuraspiration', 'ventilateur_aspiration_id');
        
        
    }
}
