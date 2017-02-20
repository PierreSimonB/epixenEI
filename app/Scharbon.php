<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Scharbon extends Model
{
   protected $table = 'slider_charbon';
   
    public function charbon(){
        
        return $this->hasOne('App\Charbon', 'charbon_id');
        
        
    }
    public function Image(){
        
        return $this->belongsTo('App\Scharbon', 'charbon_id');
        
        
    }
}
