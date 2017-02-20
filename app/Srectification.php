<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Srectification extends Model
{
    protected $table = 'slider_rectification';
    
      public function rectification(){
        
        return $this->hasOne('App\Rectification', 'rectification_id');
        
        
    }
    public function Image(){
        
        return $this->belongsTo('App\Srectification', 'rectification_id');
        
        
    }  
}
