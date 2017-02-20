<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sengrenage extends Model
{
    protected $table = 'slider_engrenage';
    
    public function Engrenage(){
        
        return $this->hasOne('App\Engrenage', 'egrenage_id');
        
        
    }
    public function Image(){
        
        return $this->belongsTo('App\Sengrenage', 'egrenage_id');
        
        
    }
}
