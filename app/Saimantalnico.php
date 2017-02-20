<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Saimantalnico extends Model
{
    protected $table = 'slider_aimant_alnico';
    
    
    public function Aimant(){
        
        return $this->hasOne('App\Aimantalnico', 'aimant_alnico_id');
        
        
    }
    public function Image(){
        
        return $this->belongsTo('App\Saimantalnico', 'aimant_alnico_id');
        
        
    }
}
