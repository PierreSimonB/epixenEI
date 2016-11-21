<!DOCTYPE html>
<html lang="fr">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
<title>Panel administrateur JOLLIET Innovation</title>
<!-- Fichier CSS  !-->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="{{asset('css/materialize.css')}}" >
  <link rel="stylesheet" href="{{asset('css/materializeadmin.css')}}" >
<link rel="stylesheet" href="{{asset('css/styleadmin.css')}}" >
<link rel="stylesheet" href="{{asset('css/lightbox.css')}}" >
<link rel="stylesheet" href="{{asset('css/redactor.css')}}" >
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
</head>


<body>
<!-- menu grand écran !-->
<nav>
<div class="nav-wrapper  grey lighten-1" >
<!-- Titre en hat à gauche !-->
<a href="#!" class="brand-logo" style="font-size: 160%">Pannel administrateur</a>
<ul class="right hide-on-med-and-down">
<!-- Accueil !-->
<li style="text-align: justify;"><a href="{{route('admin.index')}}"><i class="material-icons left">home</i>Accueil</a></li>
<!-- Produits !-->
 <li><a class="dropdown-button" href="#!" data-activates="dropdown1"><i class="material-icons left">shop</i>Produits<i class="material-icons right">arrow_drop_down</i></a></li>
<ul id="dropdown1" class="dropdown-content">
<li><a href="{{route('produits.index')}}">Produits</a></li>
<li><a href="{{route('categories.index')}}">Catégories</a></li>
<li><a href="{{route('familles.index')}}">Famille de catégorie</a></li>
<li><a href="{{route('tvas.index')}}">TVA</a></li>
<li><a href="#!">Graphique</a></li>
</ul>
<!-- Carnet d'adresse !-->
 <!--<li><a class="dropdown-button" href="#!" data-activates="dropdown2"  style="text-align: justify;"><i class="material-icons left">import_contacts</i>Carnet d'adresse<i class="material-icons right">arrow_drop_down</i></a></li>
<ul id="dropdown2" class="dropdown-content">
<li><a href="#!">Facturation</a></li>
<li><a href="#!">Livraison</a></li>
</ul>
<!-- Commande !-->
 <!--<li><a class="dropdown-button" href="#!" data-activates="dropdown3"  style="text-align: justify;"><i class="small material-icons left">chrome_reader_mode</i>Commande<i class="material-icons right">arrow_drop_down</i></a></li>
<ul id="dropdown3" class="dropdown-content">
<li><a href="#!">Commande</a></li>
<li><a href="#!">Promotion</a></li>
<li><a href="#!">Frais de port</a></li>
</ul>
<!-- Gestion de la société !-->
<li><a class="dropdown-button" href="#!" data-activates="dropdown4"  style="text-align: justify;"><i class="material-icons left">domain</i>Gestion de la société<i class="material-icons right">arrow_drop_down</i></a></li>
<ul id="dropdown4" class="dropdown-content">
<li><a href="{{url('quisommesnous/1/edit')}}" >Qui sommes-nous</a></li>
 <!--<li><a href="#!">Condition</a></li> !-->
<li><a href="{{url('etiquettes')}}">Etiquettes</a></li>
<li><a href="{{url('services')}}">Services</a></li>
 <!--<li><a href="#!">Question frequente</a></li>!-->
<li><a href="{{url('societes/1/edit')}}">Societe</a></li>
</ul>
<!-- Gestion des médias !-->
<li><a class="dropdown-button" href="#!" data-activates="dropdown5"  style="text-align: justify;"><i class="material-icons left">photo</i>Gestion des médias<i class="material-icons right">arrow_drop_down</i></a></li>
<ul id="dropdown5" class="dropdown-content">
<li><a href="{{url('sliders')}}">Slider</a></li>
 <!--<li><a href="#!">Template</a></li>
<li><a href="#!">Sondage</a></li>!-->
</ul>
<!-- Gestion des utilisateurs !-->
 <!--<li><a class="dropdown-button" href="#!" data-activates="dropdown6"  style="text-align: justify;"><i class="material-icons left">people</i>Gestion des utilisateurs<i class="material-icons right">arrow_drop_down</i></a></li>
<ul id="dropdown6" class="dropdown-content">
<li><a href="#!">Gestion des membres</a></li>
<li><a href="#!">Support</a></li>
</ul> !-->
<li style="text-align: justify;"><a href="{{url('/')}}"><i class="material-icons left">cancel</i>Quitter</a></li>
</ul>
<!-- menu responsive téléphone et tablette !-->
<ul id="slide-out" class="side-nav">
<li class="no-padding">
<!-- Accueil !-->
<li style="text-align: justify;"><a href="{{route('admin.index')}}"><i class="material-icons left">home</i>Accueil</a></li><br>
<ul class="collapsible collapsible-accordion">
<!-- Produits !-->
<li>
<a class="collapsible-header"><i class="material-icons left">shop</i>Produits<i class="material-icons">arrow_drop_down</i></a>
<div class="collapsible-body"><br>
<ul>
<li><a href="#!" style="text-align: justify;">Produits</a></li>
<li><a href="#!">Catégories</a></li>
<li><a href="#!">TVA</a></li>
<li><a href="#!">Graphique</a></li>
</ul>
</div>
</li>
</ul>
<br>
</li>
<!-- Carnet dadresse !-->
<li class="no-padding">
<ul class="collapsible collapsible-accordion">
<li>
<a class="collapsible-header"><i class="material-icons left">import_contacts</i>Carnet d'adresse<i class="material-icons">arrow_drop_down</i></a>
<div class="collapsible-body"><br>
<ul>
<li><a href="#!">Slider</a></li>
<li><a href="#!">Template</a></li>
<li><a href="#!">Sondage</a></li>
</ul>
</div></li></ul></li>
<br>
<!-- Commande !-->
<ul class="collapsible collapsible-accordion">
<li>
<a class="collapsible-header"><i class="small material-icons left">chrome_reader_mode</i>Commande<i class="material-icons">arrow_drop_down</i></a>
<div class="collapsible-body"><br>
<ul>
<li><a href="#!">Commande</a></li>
<li><a href="#!">Promotion</a></li>
<li><a href="#!">Frais de port</a></li>
</ul></div></li></ul>
<br>
<!-- Gestion de la société !-->
<ul class="collapsible collapsible-accordion">
<li>
<a class="collapsible-header"><i class="material-icons left">domain</i>Gestion de la société<i class="material-icons">arrow_drop_down</i></a>
<div class="collapsible-body"><br>
<ul>
<li><a href="{{url('quisommesnous/1/edit')}}" >Qui sommes-nous</a></li>
<li><a href="#!">Condition</a></li>
<li><a href="{{url('etiquettes')}}">Etiquette</a></li>
<li><a href="{{url('services')}}">Services</a></li>
<li><a href="#!">Question frequente</a></li>
<li><a href="{{url('societes/1/edit')}}">Societe</a></li>
</ul></div></li></ul>
<br>
<!-- Gestion des médias !-->
<ul class="collapsible collapsible-accordion">
<li>
<a class="collapsible-header"><i class="material-icons left">photo</i>Gestion des médias<i class="material-icons">arrow_drop_down</i></a>
<div class="collapsible-body"><br>
<ul>
<li><a href="{{url('sliders')}}">Slider</a></li>
<li><a href="#!">Template</a></li>
<li><a href="#!">Sondage</a></li>
</ul></div></li></ul>
<br>
<!-- Gestion des utilisateurs !-->
<ul class="collapsible collapsible-accordion">
<li>
<a class="collapsible-header"><i class="material-icons left">people</i>Gestion des utilisateurs<i class="material-icons">arrow_drop_down</i></a>
<div class="collapsible-body"><br>
<ul>
<li><a href="#!">Gestion des membres</a></li>
<li><a href="#!">Support</a></li>
</ul></div></li></ul>
</ul>
<!-- Bouton menu responsive téléphone et tablette !-->
<a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>
</nav>
<!-- fin du menu normal et reponsive !-->

<!-- Contenu !-->
   @yield('content')

    </body>

 <!--  Scripts dossier !-->


<script type="text/javascript" src="{{asset('js/materialize.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery-letterfx.js')}}"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700,800,900" />
 <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<script type="text/javascript" src="{{asset('js/redactor.js')}}"></script>
<script type="text/javascript" src="{{asset('js/lightbox.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery-letterfx.js')}}"></script>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">


<!-- script manuel !-->
<script>
$(".dropdown-button").dropdown();
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
<script>  $('.button-collapse').sideNav({
menuWidth: 300, // Default is 240
edge: 'right', // Choose the horizontal origin
closeOnClick: true // Closes side-nav on <a> clicks, useful for Angular/Meteor
}
);
</script>
<script type="text/javascript">
$(document).ready(
function ()
{
$('#redactor').redactor();
}
);
</script>
<script type="text/javascript">
$(document).ready(
function ()
{
$('#redactor2').redactor();
}
);
</script>
<script type="text/javascript">
$(document).ready(
function ()
{
$('#redactor3').redactor();
}
);
</script>
<script>

  $(document).ready(function(){
 
  $('.modal-trigger').leanModal({});
          

  });
</script>
<script>

  $(document).ready(function(){
 
  $('.modal1-trigger').leanModal({});
          

  });
</script>
 <script>

            $(document).ready(function () {
                $('select').material_select();
            });



        </script>
        <script>
    
    
  $('.carousel.carousel-slider').carousel({full_width: true});
  
  </script>
  <script type="text/javascript">

  $(document).ready(function(){
    $('.scrollspy').scrollSpy();
  });
</script>


</body>
</html>