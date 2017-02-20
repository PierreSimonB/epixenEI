<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Selastomere extends Model
{
    protected $table = 'slider_elastomere';
    
    public function Elastomere(){
        
        return $this->hasOne('App\Elastomere', 'elastomere_id');
        
        
    }
    public function Image(){
        
        return $this->belongsTo('App\Selastomere', 'elastomere_id');
        
        
    }
}
