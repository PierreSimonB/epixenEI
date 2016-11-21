@extends('template')

@section('content')


    <br><br>

    <div class="row">

        <div class="col m6 offset-m3">

            <h4 class="light italic"><i class="material-icons green-text text-lighten-1 small left">perm_identity</i> Inscription</h4>
            <div class="divider"></div>
            <br/>

            <div class="row">
                <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                    {{ csrf_field() }}

              <div class="input-field col s12">
    <select name="civ_id" value="civ_id">
        <option name="civ_id" value="civ_id" disabled selected>Choisir une civilité</option>
        @foreach ($civilites as $cv)
    
      
      <option name="civ_id" value="{{$cv->id}}">{{$cv->civilite}}</option>
    
      @endforeach
     </select>
    <label>Civilité</label>
  </div> 


                    <div class="input-field col s12 m12 l12">
                        @if ($errors->first('nom'))
                        {{ Form::text('nom', '',array('class' => 'invalid')) }}
                        <span style="font-size:16px;" class='flow-text red-text'>{{ $errors->first('nom')}}</span>
                        @else
                        {{ Form::text('nom', '',array('class' => 'validate')) }}
                        @endif

                        <label for="nom">nom</label>
                    </div>
                        <div class="input-field col s12 m12 l12">
                        @if ($errors->first('prenom'))
                        {{ Form::text('prenom', '',array('class' => 'invalid')) }}
                        <span style="font-size:16px;" class='flow-text red-text'>{{ $errors->first('prenom')}}</span>
                        @else
                        {{ Form::text('prenom', '',array('class' => 'validate')) }}
                        @endif

                        <label for="prenom">prenom</label>
                    </div>

                    <div class="input-field col s12 m12 l12">
                        @if ($errors->first('email'))
                        {{ Form::email('email', '',array('class' => 'invalid')) }}
                        <span style="font-size:16px;" class='flow-text red-text'>{{ $errors->first('email')}}</span>
                        @else
                        {{ Form::email('email', '',array('class' => 'validate')) }}
                        @endif

                        <label for="email" data-error="Adresse invalide" data-success="Adresse valide">Adresse E-mail</label>
                    </div>

                <div class="input-field col s12 m12 l12">
                    @if ($errors->first('password'))
                    {{ Form::password('password', '',array('class' => 'invalid')) }}
                    <span style="font-size:16px;" class='flow-text red-text'>{{ $errors->first('password')}}</span>
                    @else
                    {{ Form::password('password', '',array('class' => 'validate')) }}
                    @endif
                    {{ Form::label('text', 'Mot de passe', array('class' => '')) }} 
                </div>
                    
                    
                    
                <div class="input-field col s12 m12 l12">
                        @if ($errors->first('password_confirmation'))
                        <input id="passconf" type="password" name="password_confirmation" class="invalid">
                        <span style="font-size:16px;" class='flow-text red-text'>{{ $errors->first('password_confirmation')}}</span>
                        @else
                        <input id="passconf" type="password" name="password_confirmation" class="validate">
                        @endif

                        <label for="passconf">Confirmation du mot de passe</label> 
                    </div>
                    
                
       

                <div class="input-field col s12 m12 l12">
                  <a class="" href="{{ url('/connect') }}">Vous avez déjà un compte ?</a>
                <button class="btn waves-effect green lighten-1 waves-light right" type="submit" name="action">Connexion
                </button>
                </div>
                </form>
            </div>
            
       


        </div>


    </div>

    <br><br><br><br><br><br><br><br><br><br><br>






@endsection
