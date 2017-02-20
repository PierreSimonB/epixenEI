<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Saxe extends Model
{
    protected $table = 'slider_axe';
    
     public function Axe(){
        
        return $this->hasOne('App\Axe', 'axe_id');
        
        
    }
    public function Image(){
        
        return $this->belongsTo('App\Saxe', 'axe_id');
        
        
    }
}
