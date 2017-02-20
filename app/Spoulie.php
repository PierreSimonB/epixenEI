<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Spoulie extends Model
{
    protected $table = 'slider_poulie';
    
    public function poulie(){
        
        return $this->hasOne('App\Poulie', 'poulie_id');
        
        
    }
    public function Image(){
        
        return $this->belongsTo('App\Spoulie', 'poulie_id');
        
        
    }    
    
}

