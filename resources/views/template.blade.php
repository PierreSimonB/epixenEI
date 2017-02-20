<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
        <title>Epixen industrie</title>

        <!-- Fichier CSS  -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('css/materialize.css')}}" >
        <link rel="stylesheet" href="{{asset('css/style.css')}}" >
    </head>

    <body>
       
        
      
        
     
      

         <nav>
      <!-- menu page pleine !-->
      
           <!-- Dropdown Structure -->
            <!-- Moteurs !-->
<ul id="dropdown1" class="dropdown-content">
  <li><a href="#!">Moteurs universels</a></li>
  <li><a href="#!">Moteurs à aimants permanents</a></li>
  <li><a href="#!">Moteurs électriques aspirants</a></li>
  <li><a href="#!">Moteurs asynchrone</a></li>
  <li><a href="#!">Moteurs brushless à commutation électronique</a></li>
  <li><a href="#!">Générateurs synchrones à aimants permanents</a></li>
  <li class="divider"></li>
  <li><a href="#!">Moteurs</a></li>
  
</ul>
            <!-- Bobinage moteurs!-->
<ul id="dropdown2" class="dropdown-content">
  <li><a href="#!">Rotors bobinés à collecteur</a></li>
  
 
  
  <li class="divider"></li>
  <li><a href="#!">Bobinages Moteurs</a></li>
</ul>
            <!-- Aimants Permanents !-->
<ul id="dropdown3" class="dropdown-content">
  <li><a href="#!">Aimant Ferrite</a></li>
  <li><a href="#!">Aimant Néodyme</a></li>
  <li><a href="#!">Aimant Samarium</a></li>
  <li><a href="#!">Aimant Alnico</a></li>
  <li><a href="#!">Poudre Magnétique</a></li>
  <li><a href="#!">Capteur Magnétique</a></li>
  <li><a href="#!">Ferrite Doux</a></li>
  <li><a href="#!">Elastomère magnétique</a></li>
  
  <li class="divider"></li>
  <li><a href="#!">Aimants Permanents</a></li>
  
</ul>
             <!-- Reducteurs !-->
<ul id="dropdown4" class="dropdown-content">
  <li><a href="#!">Engrenage</a></li>
  <li><a href="#!">Roue dentée</a></li>
  <li><a href="#!">Roue dentée conique</a></li>
  <li><a href="#!">Poulie</a></li>
  <li><a href="#!">Vis sans fin</a></li>
  <li><a href="#!">Denture interne</a></li>
  <li><a href="#!">Arbre denté</a></li>
  <li><a href="#!">Rectification</a></li>
  <li><a href="#!">Brochage</a></li>
  <li><a href="#!">Traitement Thermique</a></li>
  
  <li class="divider"></li>
  <li><a href="#!">Reducteurs</a></li>
  
</ul>
<!-- Divers composant moteurs !-->
<ul id="dropdown5" class="dropdown-content">
  <li><a href="#!">Axe Acier</a></li>
  <li><a href="#!">Isolant Moteur</a></li>
  <li><a href="#!">Faisceau</a></li>
  <li><a href="#!">Connection</a></li>
  <li><a href="#!">Charbon</a></li>
  
  
  <li class="divider"></li>
  <li><a href="#!">Divers composant moteurs</a></li>
  
</ul>
<!-- Ventilateurs !-->
<ul id="dropdown6" class="dropdown-content">
  <li><a href="#!">Ventilateur Plafond</a></li>
  <li><a href="#!">Ventilateur d'aspiration</a></li>

  <li class="divider"></li>
  <li><a href="#!">Ventilateurs</a></li>
  
</ul>
      </ul>
           <ul id="dropdown7" class="dropdown-content">
  <li><a href="#!">AMC</a></li>
  <li><a href="#!">IME</a></li>
  <li><a href="#!">ANFABO</a></li>
  <li><a href="#!">COMIP</a></li>
  <li><a href="#!">EVEL</a></li>
  <li><a href="#!">FAET</a></li>
  
  <li class="divider"></li>
  <li><a href="#!">Sociétes</a></li>
  
</ul>
               
<nav>
    <div style="color: black"   class="nav-wrapper">
    <a href="acceuil" class="brand-logo">Epixen Industrie</a>
    <ul class="right hide-on-med-and-down">
      <li><a href="{{ url('accueil') }}">Acceuil</a></li>
      <li><a href="{{ url('quisommesnous') }}">Qui sommes nous ?</a></li>
      <!-- Dropdown Trigger -->
      <li><a class="dropdown-button" href="#!" data-activates="dropdown1">Moteurs<i class="material-icons right">arrow_drop_down</i></a></li>
      <li><a class="dropdown-button" href="#!" data-activates="dropdown2">Bobinages Moteurs<i class="material-icons right">arrow_drop_down</i></a></li>
      <li><a class="dropdown-button" href="#!" data-activates="dropdown3">Aimants Permanents<i class="material-icons right">arrow_drop_down</i></a></li>
      <li><a class="dropdown-button" href="#!" data-activates="dropdown4">Reducteurs<i class="material-icons right">arrow_drop_down</i></a></li>
      <li><a class="dropdown-button" href="#!" data-activates="dropdown6">Ventilateurs<i class="material-icons right">arrow_drop_down</i></a></li>
      <li><a class="dropdown-button" href="#!" data-activates="dropdown5">Divers Composants Moteurs <i class="material-icons right">arrow_drop_down</i></a></li>
      <li><a class="dropdown-button" href="#!" data-activates="dropdown7">Sociétés<i class="material-icons right">arrow_drop_down</i></a></li>
    </ul>
  </div>
</nav>
      
       
      
                   @if (Auth::guest())
                 <!--      <li><a class="dropdown-button" href="#!" data-activates="dropdownuse"><i class="material-icons left">settings</i>Utilisateur<i class="material-icons right">arrow_drop_down</i></a></li>
      </ul>
                  <ul id="dropdownuse" class="dropdown-content" >
               <li><a href="{{url('user')}}"><i class="material-icons left">fiber_new</i>Inscription</a></li>
                     <li><a href="{{url('/connect')}}"><i class="material-icons left">perm_identity</i>Connexion</a></li>
                   <li class="divider"></li>
               </ul> !-->
                   
                    @else
                 
                         <li><a class="dropdown-button" href="#!" data-activates="dropdown1"><i class="material-icons left">settings</i>Utilisateur<i class="material-icons right">arrow_drop_down</i></a></li>

                  <!--  <li><a href="badges.html"><i class="material-icons left">shopping_cart</i>Panier(0)</a></li>  !-->
                </ul>
                  <ul id="dropdown1" class="dropdown-content" >
                   <li><a href="#!"><i class="material-icons left">info_outline</i>Informations</a></li>
                   <li><a href="#!"  style="font-size : 99%"><i class="material-icons left">contacts</i>Carnet d'adresse</a></li>
                   <li><a href="#!"><i class="material-icons left">lock_outline</i>Mot de passe</a></li>
                   <li><a href="#!"><i class="material-icons left">web</i>Commandes</a></li>
                   <li><a href="#!"><i class="material-icons left">supervisor_account</i>Support</a></li>
                   @if (Auth::user()->is_admin == 1)
                        <li><a href="{{route('admin.index')}}"><i class="material-icons left">share</i>Panel d'administration</a></li>
                       @else
                       @endif
                   <li><a href="{{url('auth/logout')}}"><i class="material-icons left">input</i>Déconnexion</a></li>
                   <li class="divider"></li>
                  </ul> 
                    @endif
</ul>
<!-- menu responsive téléphone et tablette !-->
<ul id="slide-out" class="side-nav">
<li class="no-padding">
    <li style="text-align: justify;"><a href="{{ url('/') }}"><i class="material-icons left">clear_all</i>Accueil</a></li><br>
                   <!-- <li><a href="{{route('admin.index')}}"><i class="material-icons left">shop</i>Produits</a></li><br>!-->
                    <li style="text-align: justify;"><a href="{{url('devis')}}"><i class="material-icons left">assignment</i>Devis</a></li><br>
                    <li style="text-align: justify;"><a href="{{url('contact')}}"><i class="material-icons left">email</i>Contact</a></li><br>
                   <!--  <li><a href="badges.html"><i class="material-icons left">shopping_cart</i>Panier(0)</a></li> !-->
                    <br>
              
                    <!-- Utilisateur !-->
                    <!--  <li class="no-padding">
                          <ul class="collapsible collapsible-accordion">
                              <li>
                                  <a class="collapsible-header"><i class="material-icons left">settings</i>Utilisateur<i class="material-icons">arrow_drop_down</i></a>
                                  <div class="collapsible-body"><br>
                                      <ul>
                                          <li><a href="#!"><i class="material-icons left">info_outline</i>Informations</a></li><br>
                                          <li><a href="#!"><i class="material-icons left">contacts</i>Carnet d'adresse</a></li><br>
                                          <li><a href="#!"><i class="material-icons left">lock_outline</i>Mot de passe</a></li><br>
                                          <li><a href="#!"><i class="material-icons left">web</i>Commandes</a></li><br>
                                          <li><a href="#!"><i class="material-icons left">supervisor_account</i>Support</a></li><br>
                                          <li><a href="#!"><i class="material-icons left">input</i>Déconnexion</a></li><br>
                                      </ul>
                                  </div> </li></ul></li> --> 
                    <br>
</ul>
<!-- Bouton menu responsive téléphone et tablette !-->
<a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>
</nav>
      <div class="slider">
    <ul class="slides">
      <li>
        <img src="images/bob1.JPG"> <!-- random image -->
        <div class="caption center-align">
          <h3>Bobinage moteur</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
      <li>
        <img src="images/engrenages.JPG"> <!-- random image -->
        <div class="caption left-align">
          <h3>Roues dentées</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
      <li>
        <img src="images/vissansfin.JPG"> <!-- random image -->
        <div class="caption right-align">
          <h3>Vis sans fin</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
      <li>
        <img src="http://lorempixel.com/580/250/nature/4"> <!-- random image -->
        <div class="caption center-align">
          <h3>This is our big Tagline!</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
    </ul>
  </div>


        <!-- contenu !-->
        @yield('content')













        <!-- Début footer !-->
        <footer class="page-footer grey darken-1" >
            <div class="container">
                <div class="row">
                    <!-- Contact !-->
                    <div class="col l3 s12">
                        <h5 class="white-text">Contact</h5>
                        <p class="grey-text text-lighten-4">
                                 Epixen Industrie<br> <br>39100 Gevry
                                Rue du pommier<br><br>
                                Tél. : 03.84.710.494<br>
                                Fax : 03.51.08.15.99


                        </p>
                    </div>
                    <!-- Conditions générales et moyens de paiements !-->
           
                    <!-- Menu !-->
                    <div class="col l3 s12">
                        <h5 class="white-text">Menu</h5>
                        
                    </div>
                </div>
            </div>
            <!-- Réalisation !-->
            <div class="footer-copyright grey darken-1">
                <div class="container">
                                        Copyright © 2016 Epixen Industrie
                </div>
            </div>
        </footer>
        <!-- Fin du footer !-->

        <!--  Scripts-->
        <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script type="text/javascript" src="{{asset('js/materialize.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/jquery-letterfx.js')}}"></script>

        <!-- script manuel !-->
        <script>
$(".dropdown-button").dropdown();
        </script>
<script>
        $(document).ready(function(){
      $('.slider').slider({full_width: true});
    });
    </script>
        <script>  $('.button-collapse').sideNav({
                menuWidth: 300, // Default is 240
                edge: 'right', // Choose the horizontal origin
                closeOnClick: true // Closes side-nav on <a> clicks, useful for Angular/Meteor
            }
            );
        </script>

        <script>
            $(document).ready(function () {
                $('.slider').slider({
                    full_width: true,
                    height: 500});

            });
        </script>

        <script>
            $(document).ready(function () {
                $('.carousel').carousel({dist: 40});
            });
        </script>

        <script>
            $(document).ready(function () {
                $('.collapsible').collapsible({
                    accordion: false // A setting that changes the collapsible behavior to expandable instead of the default accordion style
                });
            });
        </script>

        @if (Session::has('message'))
        <script>
            Materialize.toast("<i class='material-icons left green-text'>done</i> {{Session::get('message')}}", 5000);
        </script>
        @endif
        @if (Session::has('errormessage'))
        <script>
            Materialize.toast("<i class='material-icons left red-text'>close</i> {{Session::get('errormessage')}}", 5000);
        </script>
        @endif
        <script>

            $(document).ready(function () {
                $('.collapsible').collapsible({
                    accordion: false // A setting that changes the collapsible behavior to expandable instead of the default accordion style
                });
            });
        </script>
        <script>

            $('.datepicker').pickadate({
                selectMonths: true, // Creates a dropdown to control month
                selectYears: 160 // Creates a dropdown of 15 years to control year
            });
        </script>
        <script>

            $(document).ready(function () {
                $('select').material_select();
            });



        </script>
        <script>

    window.sr = ScrollReveal();



    sr.reveal('.reveal1', {duration: 2000}, 50);

</script>


    </body>
</html>