<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Spoudremagnetique extends Model
{
    protected $table = 'slider_poudre_magnetique';
    
public function poudremagne(){
        
        return $this->hasOne('App\Poudremagnetique', 'poudre_magnetique_id');
        
        
    }
    public function Image(){
        
        return $this->belongsTo('App\Spoudremagnetique', 'poudre_magnetique_id');
        
        
    }    
    
}
