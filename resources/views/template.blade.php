<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
        <title>Club d'Escalade Horizon Vertical</title>

        <!-- Fichier CSS  -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('css/materialize.css')}}" >
        <link rel="stylesheet" href="{{asset('css/style.css')}}" >
    </head>

    <body>
     
         <nav>
      <!-- menu page pleine !-->
            <div class="nav-wrapper   green darken-1" >
                
                <a class="brand-logo"  style="width:3%;"><img src="images/Logo.jpg" class="responsive-img"/> </a>
<ul class="right hide-on-med-and-down">
       <li><a href="{{ url('accueil') }}"><i class="material-icons left">clear_all</i>Accueil</a></li>
               
                    <li><a href="{{url('agenda')}}">Agenda</a></li>
                    <li><a href="{{url('club')}}">Club</a></li>
                                     <li><a href="{{url('bureau')}}">Bureau</a></li> 
                                     <li><a href="{{url('reglement')}}">Tarif</a></li>
                                                      <li><a href="{{url('materiel')}}">Matériel</a></li>
                                                                       <li><a href="{{url('technologie')}}">Technologie</a></li>
                                                                                        <li><a href="{{url('gymnase')}}">Gymnase</a></li>
                                                                                                         <li><a href="{{url('galerie')}}">Galerie</a></li>
                                                                                                              <li><a href="{{url('contact')}}">Contact</a></li>
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
        <!-- fin des menus !-->


        <!-- contenu !-->
        @yield('content')









        <!-- Début footer !-->
        <footer class="page-footer green darken-1" >
            <div class="container">
                <div class="row">
                    <!-- Contact !-->
                    <div class="col l3 s12">
                        <h5 class="white-text">Contact</h5>
                        <p class="grey-text text-lighten-4">
             Horizon Vertical<br> <br>Damparis Tavaux
4 bis chemin des écoles<br><br>
39120 LE DESCHAUX <br><br>cirylbernard@yahoo.fr <br><br>06 64 99 92 32


                        </p>
                    </div>
                    <!-- Conditions générales et moyens de paiements !-->
           
                    <!-- Menu !-->
                    <div class="col l3 s12">
                        <h5 class="white-text">Menu</h5>
                        <ul>
                       <li><a href="{{ url('accueil') }}">Accueil</a></li>
                   <li><a href="{{url('produits/all')}}">Actualité</a></li>
                    <li><a href="{{url('devis')}}">Agenda</a></li>
                    <li><a href="{{url('contact')}}">Club</a></li>
                                     <li><a href="{{url('contact')}}">Bureau</a></li>           
                                     <li><a href="{{url('contact')}}">Règlement</a></li>
                                                      <li><a href="{{url('contact')}}">Matériel</a></li>
                                                                       <li><a href="{{url('contact')}}">Technologie</a></li>
                                                                                        <li><a href="{{url('contact')}}">Gymnase</a></li>
                                                                                                         <li><a href="{{url('contact')}}">Galerie</a></li>
               
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Réalisation !-->
            <div class="footer-copyright green darken-1">
                <div class="container">
                                        Copyright © 2016 Club d'Escalade Horizon Vertical
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