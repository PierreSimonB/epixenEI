<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Svissansfin extends Model
{
    protected $table = 'slider_vis_sans_fin';
    
    public function vissansfin(){
        
        return $this->hasOne('App\Vissansfin', 'vis_sans_fin_id');
        
        
    }
    public function Image(){
        
        return $this->belongsTo('App\Svissansfin', 'vis_sans_fin_id');
        
        
    }
    
}
