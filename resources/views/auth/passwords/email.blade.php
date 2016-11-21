@extends('templaterecup')

<!-- Main Content -->
@section('content')

      
    <div class="row">

        <div class="col m6 offset-m3">
<br><br>
            <h4 class="light italic"><i class="material-icons green-text text-lighten-1 small left">public</i> Récupération du mot de passe</h4>
            <div class="divider"></div>
            <br/>
                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session()->flash('message', 'Votre demande de récupération de mot de passe vous a été envoyé par e-mail !')
        }}
                        </div>
                    @endif

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/password/email') }}">
                        {{ csrf_field() }}
 <div class="input-field col s12 m12 l12">
                       <div class="input-field col s12 m12 l12">
                        @if ($errors->first('email'))
                        {{ Form::email('email', '',array('class' => 'invalid')) }}
                        <span style="font-size:16px;" class='flow-text red-text'>{{ $errors->first('email')}}</span>
                        @else
                        {{ Form::email('email', '',array('class' => 'validate')) }}
                        @endif

                        <label for="email" data-error="Adresse invalide" data-success="Adresse valide">Adresse E-mail</label>
                    </div>
 </div>
                         <button class="btn waves-effect green lighten-1 waves-light right" type="submit" name="action">Récupération
                </button>
                    </form>
                </div>
            </div>
    </div><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
@endsection
