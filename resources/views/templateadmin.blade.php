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
<li style="text-align: justify;"><a href="{{route('agenda.index')}}">Agenda</a></li>
<!-- Produits !-->

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