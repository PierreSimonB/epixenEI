<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class imagesproduits extends Model
{
    protected $table = 'imagesproduits';
    public function Produits() {
        
        return $this->hasOne('App\Produits', 'prod_id');
    }
    
     public function imagesproduits() {
        
        return $this->belongsTo('App\Imagesproduits', 'prod_id');
    }
}
