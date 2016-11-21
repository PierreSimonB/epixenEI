<?php

namespace App\Http\Controllers\Auth;
use Auth;
use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Http\Request;
use App\ActivationService;
use Illuminate\Contracts\Auth\Guard;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\RegisterRequest;
use App\Repositories\UserRepository;
class AuthController extends Controller {
    /*
      |--------------------------------------------------------------------------
      | Registration & Login Controller
      |--------------------------------------------------------------------------
      |
      | This controller handles the registration of new users, as well as the
      | authentication of existing users. By default, this controller uses
      | a simple trait to add these behaviors. Why don't you explore it?
      |
     */

use AuthenticatesAndRegistersUsers,
    ThrottlesLogins;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/';
 protected $activationService;
    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct(ActivationService $activationService) {

         $this->activationService = $activationService; 
    }

 

    
    public function register(Request $request)
    {
        $validator = $this->validator($request->all());
        if ($validator->fails()) {
            $this->throwValidationException(
                $request, $validator
            );
        }
        $user = $this->create($request->all());
        $this->activationService->sendActivationMail($user);
                 $request->session()->flash('message', 'Votre inscription à bien été enregistrée, Il ne vous reste plus qu\'a activer votre compte sur votre adresse e-mail !');
        return redirect('user');
    }
    
    public function authenticated(Request $request, $user)
    {
        if (!$user->activated) {
            $this->activationService->sendActivationMail($user);
            auth()->logout();
            return back()->with('warning', 'You need to confirm your account. We have sent you an activation code, please check your email.');
        }
        return redirect()->intended($this->redirectPath());
    }
    
    public function activateUser($token)
    {
        if ($user = $this->activationService->activateUser($token)) {
            auth()->login($user);
            return redirect($this->redirectPath());
        }
        abort(404);
    }
    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'nom' => 'required',
            'prenom' => 'required',
            'civ_id' => 'required',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);
    }
    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'nom' => $data['nom'],
            'prenom' => $data['prenom'],
            'email' => $data['email'],
            'civ_id' => $data['civ_id'],
            'password' => bcrypt($data['password']),
         
        ]);
    }
    
    
    
 
    
    
   /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
	public function postLogin(Request $request){
            
	$email = $request->input('email');
        $password = $request->input('password');
        
	   if (Auth::attempt(['email' => $email, 'password' => $password, 'activated' => 1])) {
          
                $request->session()->flash('message', 'Vous êtes bien connecté');
           return redirect('/'); }
           
        elseif (Auth::attempt(['email' => $email, 'password' => $password, 'activated' => 0])) {
       Auth::logout();
                $request->session()->flash('errormessage', 'Votre compte n\'est pas encore activé');
	 return redirect('/connect');  
        }
        else 
            Auth::logout();
                   $request->session()->flash('errormessage', 'Un de vos identifiants est incorrect');
        return redirect('/connect'); 
        
        }
        
        
        
        
        
     public function getLogout(Request $request)

    {

        Auth::logout();

            $request->session()->flash('message','vous avez bien été deconnecté');

 return Redirect('/');

    }
        
        
        
        
        
        
        
}
    
         
        
         
         
         
         
        
    
    
        
    
    
    
    
    

