<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nom', 'email', 'password','prenom', 'civ_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    
    public static $login_validation_rules= [
		'email'=>'required|email|exists:users', 
		'password'=>'required',

	];
	
	public static $create_validation_rules=[
		
            'nom'=>'required',
            'prenom'=>'required',
              'civ_id'=>'required',
		'email'=>'required|email|unique:users',
		'password'=>'required|min:8',
	];
      
        
        
        public function User() {
        
        return $this->hasOne('App\Civilites', 'civ_id');
    }
    
     public function civilite() {
        
        return $this->belongsTo('App\Civilites', 'civ_id');
    }
    
}
