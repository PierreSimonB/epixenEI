<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sconnection extends Model
{
    protected $table = 'slider_connection';
    
     public function connection(){
        
        return $this->hasOne('App\Connection', 'connection_id');
        
        
    }
    public function Image(){
        
        return $this->belongsTo('App\Sconnection', 'connection_id');
        
        
    }
}
