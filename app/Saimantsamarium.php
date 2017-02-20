<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Saimantsamarium extends Model
{
    protected $table = 'slider_aimant_samarium';
    
    public function Aimant(){
        
        return $this->hasOne('App\Aimantsamarium', 'aimant_samarium_id');
        
        
    }
    public function Image(){
        
        return $this->belongsTo('App\Saimantsamarium', 'aimant_samarium_id');
        
        
    }
    
    
}
