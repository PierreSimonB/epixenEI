<?php

namespace App\Http\Controllers;

use App\User;
use App\Societes;
use App\Civilites;
use Illuminate\Http\Request;
use App\Http\Requests;

class UsersController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $societes = societes::find(1);
        $civilites = civilites::all();
        $users = user::all();
   
        return view('auth.register', ['societes' => $societes, 'civilites' => $civilites, 'users' => $users]);
    }

 

}
