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


Route::get('agenda/all', 'AgendaController@all');
Route::get('club/all', 'AgendaController@all');
Route::get('bureau/all', 'AgendaController@all');
Route::get('reglement/all', 'AgendaController@all');
Route::get('gymnase/all', 'AgendaController@all');
Route::get('materiel/all', 'AgendaController@all');
Route::get('technologie/all', 'AgendaController@all');
Route::get('galerie/all', 'AgendaController@all');

Route::resource('accueil', 'AccueilController');




Route::resource('admin', 'AdminController');



Route::resource('actualite', 'ActualiteController');
Route::resource('agenda', 'AgendaController');
Route::resource('club', 'ClubController');
Route::resource('bureau', 'BureauController');
Route::resource('reglement', 'ReglementController');
Route::resource('gymnase', 'GymnaseController');
Route::resource('materiel', 'MaterielController');
Route::resource('technologie', 'TechnologieController');
Route::resource('galerie', 'GalerieController');














Route::post('/envoyer', function (Request $request) {

    $data = array('mess' => $request->input('mess'), 'email' => $request->input('email'), 'nom' => $request->input('nom'), 'prenom' => $request->input('prenom'), 'telephone' => $request->input('telephone'));
    $sujet = $request->input('sujet');

    Mail::send('page.email.contact', $data, function ($message) use ($sujet) {

        $message->from('sauvageot.thomas.pro@gmail.com', 'Escalade');
        $message->to('sauvageot.thomas.pro@gmail.com')->subject($sujet);
    });

    if (count(Mail::failures()) > 0) {
        $request->session()->flash('errormessage', 'Erreur dans l\'envoi du mail.');
        return redirect('/contact');
    } else {
        $request->session()->flash('message', 'Votre mail a été envoyé avec succès.');
        return redirect('/contact');
    }
});

Route::get('/contact', function () {
  
    return view('page.contact.contact');
});





Route::auth();

Route::get('/connect', function () {

    return view('auth.login');
});

Route::get('user/activation/{token}', 'Auth\AuthController@activateUser')->name('user.activate');




Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');

Route::get('auth/logout', 'Auth\AuthController@getLogout');



