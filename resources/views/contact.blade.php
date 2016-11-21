@extends('template')
@section('content')
<style>
    .input-field input[type=text]:focus + label {
        color: #ec407a;
    }    
    .input-field input[type=text]:focus {
        border-bottom: 1px solid #ec407a;
        box-shadow: 0 1px 0 0 #ec407a;
    }
    .input-field input[type=email]:focus + label {
        color: #ec407a;
    }    
    .input-field input[type=email]:focus {
        border-bottom: 1px solid #ec407a;
        box-shadow: 0 1px 0 0 #ec407a;
    }
    .input-field .prefix.active {
        color: #ec407a;
    }
    .input-field textarea[class=materialize-textarea]:focus {
        border-bottom: 1px solid #ec407a;
        box-shadow: 0 1px 0 0 #ec407a;
    }

    .input-field textarea[class=materialize-textarea]:focus +label {
        color: #ec407a;
    }
</style>


<div class='container'>
    <br/>
    <h4 class="thin"><i class="material-icons left pink-text medium text-lighten-1">email</i> Contactez-nous</h4><div class="divider pink lighten-1"></div>
    <br/>

    <div class="row">
        {{ Form::open(array('url' => '/envoyer', 'method' => 'post', 'class'=>'col s12')) }}
       
            <div class="input-field col m6 s12">
                <i class="material-icons prefix">account_circle</i>
                <input id="icon_prefix" name="nom" required type="text" class="validate" value="{{old('nom')}}">
                <label for="icon_prefix">Nom - prénom</label>
            </div>
            <div class="input-field col m6 s12">
                <i class="material-icons prefix">mail_outline</i>
                <input id="email" name="email" required type="email" class="validate" value="{{old('email')}}">
                <label for="email" data-error="Adresse non valide" data-success="Adresse valide">Adresse e-mail</label>
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


            <button class="btn waves-effect waves-light right pink lighten-1" type="submit" name="action">Envoyer
                <i class="material-icons right">send</i>
            </button>
   
        {{ Form::close() }}
        <br/>
        <div class="col m6 s12">

            <h5 class="pink-text text-lighten-1"><i class="material-icons small">place</i> Adresse des salles</h5>

            <div class="col s12 m6">
                <p>
                    <strong>Salle des fêtes  </strong><br/>
                    10 Grande rue <br/>39120 CHAUSSIN<br/>
                    A côté de La Poste via Le Café du Centre
                </p>   
            </div>


            <div class="col s12 m6">
                <p>
                    <strong>Salle Omnisports Jean-Marie DUSSOL </strong><br/>
                    Rue Henri Gagneur<br/> 39120 CHAUSSIN<br/>
                    Via Le Collège Marcel Aymé 
                </p>   
            </div>

        </div>
        <div class="col m6 s12" style="border-left:1px solid #ec407a">
          <h5 class="pink-text text-lighten-1"><i class="material-icons small">info</i> Informations</h5>
          
          <div class="col s12 m6">
          <p>
          <strong>Moyens de paiements : </strong> <br/>
          - Chèques <br/>
          - Espèces <br/>
          </p>
        </div>
          <div class="col s12 m6">
              <p> Nous consulter pour nos tarifs et pour toutes autres informations sur les modalités de paiements.
              </p>
          </div>
          
        </div>
        
        <div class="clearfix"></div>

    </div>

        <div class="col s12 m12 map-responsive">   <br/><br/><br/>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13330.364902690104!2d5.400150854799272!3d46.96982030224628!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47f2cb1dc33fe929%3A0xccce17ca52ea70e8!2sMairie!5e0!3m2!1sfr!2sfr!4v1467929648062" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

        </div>
    <br/>
    
    <center>
    <img src="{{url('images/jaime.png')}}">
    </center>
</div>





@endsection
