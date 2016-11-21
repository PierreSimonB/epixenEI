@extends('templaterecup')

@section('content')








    <div class="row">

        <div class="col m6 offset-m3">
<br>
            <h4 class="light italic"><i class="material-icons green-text text-lighten-1 small left">public</i> Récupération du mot de passe</h4>
            <div class="divider"></div>
            <br/>

            <div class="row">
              <form class="form-horizontal" role="form" method="POST" action="{{ url('/password/reset') }}">
                        {{ csrf_field() }}
      <input type="hidden" name="token" value="{{ $token }}">
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
        
                <button class="btn waves-effect green lighten-1 waves-light right" type="submit" name="action">Modifier
                </button>
                </div>
                </form>
            </div>

        </div>


    </div>

    <br><br><br><br><br><br><br><br><br><br><br><br><br><br>



















@endsection
