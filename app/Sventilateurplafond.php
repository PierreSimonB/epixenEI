<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sventilateurplafond extends Model
{
    protected $table = 'slider_ventilateur_plafond';
    
    public function ventilateurplafond(){
        
        return $this->hasOne('App\Ventilateurplafond', 'ventilateur_plafond_id');
        
        
    }
    public function Image(){
        
        return $this->belongsTo('App\Sventilateurplafond', 'ventilateur_plafond_id');
        
        
    }
}
