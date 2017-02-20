<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sdenture extends Model
{
    protected $table = 'slider_denture';
    
    public function denture(){
        
        return $this->hasOne('App\Denture', 'denture_id');
        
        
    }
    public function Image(){
        
        return $this->belongsTo('App\Sdenture', 'denture_id');
        
        
    }
}
