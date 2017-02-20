<?php

Use App\User;

use Illuminate\Http\Request;
use App\Http\Requests;

/*
  |--------------------------------------------------------------------------
  | Application Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register all of the routes for an application.
  | It's a breeze. Simply tell Laravel the URIs it should respond to
  | and give it the controller to call when that URI is requested.
  | maintenance
 */

Route::get('/', function () {

     
    return view('page.accueil.accueil');

});




Route::resource('accueil', 'AccueilController');
Route::resource('quisommesnous', 'QuisommesnousController');

Route::resource('aimant', 'AimantController');
Route::resource('aimantalnico', 'AimantalnicoController');
Route::resource('aimantferrite', 'AimantferriteController');
Route::resource('aimantneodyme', 'AimantneodymeController');
Route::resource('aimantsamarium', 'AimantsamariumController');
Route::resource('arbredente', 'ArbredenteController');
Route::resource('axe', 'AxeController');
Route::resource('bobinagemoteur', 'BobinagemoteurController');
Route::resource('brochage', 'BrochageController');
Route::resource('capteurmagnetique', 'CapteurmagnetiqueController');
Route::resource('charbon', 'CharbonController');
Route::resource('connection', 'ConnectionController');
Route::resource('denture', 'DentureController');
Route::resource('divercomposant', 'DivercomposantController');
Route::resource('elastomere', 'ElastomereController');
Route::resource('engrenage', 'EngrenageController');
Route::resource('faisceau', 'FaisceauController');
Route::resource('ferrite', 'FerriteController');
Route::resource('generateur', 'GenerateurController');
Route::resource('isolantmoteur', 'IsolantmoteurController');
Route::resource('moteur', 'MoteurController');
Route::resource('moteuraimantpermanent', 'MoteuraimantpermanentController');
Route::resource('moteurbrushless', 'MoteurbrushlessController');
Route::resource('moteurelectrique', 'MoteurelectriqueController');
Route::resource('moteuruniversel', 'MoteuruniverselController');
Route::resource('poudremagnetique', 'PoudremagnetiqueController');
Route::resource('poulie', 'PoulieController');
Route::resource('rectification', 'RectificaionController');
Route::resource('reducteur', 'ReducteurController');
Route::resource('rotor', 'RotorController');
Route::resource('rouedente', 'RouedenteController');
Route::resource('rouedenteconique', 'RouedenteconiqueController');
Route::resource('societe', 'SocieteController');
Route::resource('traitementthermique', 'TraitementthermiqueController');
Route::resource('ventilateur', 'VentilateurController');
Route::resource('ventilateuraspiration', 'VentilateuraspirationController');
Route::resource('ventilateurplafond', 'VentilateurplafondController');
Route::resource('vissansfin', 'VissansfinController');
Route::resource('admin', 'AdminController');

