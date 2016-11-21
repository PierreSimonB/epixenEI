@extends('template')
@section('content')



<div class='container'>
    <br/>
    <h4 class="thin"><i class="material-icons left  grey-text medium text-lighten-1">email</i> Contactez-nous</h4><div class="divider  grey lighten-1"></div>
    <br/>

    <div class="row">
        {{ Form::open(array('url' => '/envoyer', 'method' => 'post', 'class'=>'col s12')) }}
       
            <div class="input-field col m6 s12">
                <i class="material-icons prefix">account_circle</i>
                <input id="icon_prefix" name="nom" required type="text" class="validate" value="{{old('nom')}}">
                <label for="icon_prefix">Nom</label>
            </div>
          <div class="input-field col m6 s12">
                <i class="material-icons prefix">account_circle</i>
                <input id="icon_prefix" name="prenom" required type="text" class="validate" value="{{old('prenom')}}">
                <label for="icon_prefix">Prénom</label>
            </div>
            <div class="input-field col m6 s12">
                <i class="material-icons prefix">mail_outline</i>
                <input id="email" name="email" required type="email" class="validate" value="{{old('email')}}">
                <label for="email" data-error="Adresse non valide" data-success="Adresse valide">Adresse e-mail</label>
            </div>
          <div class="input-field col m6 s12">
                <i class="material-icons prefix">phone</i>
                <input id="icon_prefix" name="telephone" required type="tel"  class="validate" value="{{old('telephone')}}">
                <label for="icon_prefix">Téléphone</label>
            </div>

            <div class="input-field col s12">
                <i class="material-icons prefix">edit</i>
                <input id="sujet" name="sujet" required type="text" class="validate">
                <label for="sujet">Sujet</label>
            </div>

            <div class="input-field col s12">
                <i class="material-icons prefix">reorder</i>
                <textarea id="textarea1" name="mess" required class="materialize-textarea">{{old('mess')}}</textarea>
                <label for="textarea1">Message</label>
            </div>


            <button class="btn waves-effect waves-light right  grey lighten-1" type="submit" name="action">Envoyer
                <i class="material-icons right">send</i>
            </button>
   
        {{ Form::close() }}
        <br/>
      
       
        
        <div class="clearfix"></div>

    </div>

        <div class="col s1 m12 map-responsive">   <br/><br/><br/>
            
      
    <br/>
  
</div></div>





@endsection
