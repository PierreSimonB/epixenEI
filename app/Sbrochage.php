<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sbrochage extends Model
{
    protected $table = 'slider_brochage';
    
    public function brochage(){
        
        return $this->hasOne('App\Brochage', 'brochage_id');
        
        
    }
    public function Image(){
        
        return $this->belongsTo('App\Sbrochage', 'brochage_id');
        
        
    }
}
