@extends('template')
@section('content')







        
      




<div class="section no-pad-bot" id="index-banner">
<div class="container">
<br>
<br>
<p>Mettre la photo refaite de l'ancien site </p>
<h1 class="header center orange-text">Epixen Industrie</h1>
<div class="row center">
<h3 class="header col s12 light" style="text-decoration : underline;"> Epixen vous souhaite la bienvenue </h3>

</div>

<div class=" col s12 m4 l8" > 
    <div class="row center">

</div>

<div class=" col s12 m4 l6" >
 
    
    
  <ul class="collapsible" data-collapsible="accordion">
    <li>
      <div class="collapsible-header"><i class="material-icons">filter_drama</i>MISSION</div>
      <div class="collapsible-body"><p>Vous apporter, l’accès et l’expertise d’un réseau d’industriels compétents et performants. 
<br>Vous fournir les moteurs électriques et composants de moteurs électriques adaptés à vos exigences à prix très compétitifs.
<br>Réactivité, forces de propositions et compétitivité pour répondre à vos besoins de moteurs électriques, de composants moteurs, bobinages de rotors ou stators,
axes de décolletage haute précision et tout type d’aimants.</p></div>
    </li>
    <li>
      <div class="collapsible-header"><i class="material-icons">place</i>VISION</div>
      <div class="collapsible-body"><p>Devenir votre partenaire de confiance pour tous les développements de vos projets, et l’optimisation des produits actuels :<br>
moteurs électriques, composants moteurs électriques avec bobinages de rotors ou stators, axes de décolletage haute précision et toutes les familles d’aimants.<br></p></div>
    </li>
    <li>
      <div class="collapsible-header"><i class="material-icons">whatshot</i>OFFRE</div>
      <div class="collapsible-body"><p>Vous proposer une écoute, une analyse, une étude, une proposition avisée pour la fourniture aux meilleures conditions du prototype à la série, selon vos spécifications :
<br>
De vos moteurs de types : Moteurs électriques Universels, Moteurs à courant continu, Moteurs synchrones, Moteurs asynchrones, Moteurs Brushless,
Moteurs d’aspiration divers, Moteurs spéciaux forte puissance.<br>
De vos besoins en bobinages rotors et stators moteurs divers. <br>
D’axes décolletés de haute précision de Diamètre 4 à 32 mm pour machines tournantes.<br>
De tout type d’aimants permanents et matières premières magnétiques<br>
Des réducteurs, des vis sans fin, des poulies, des planétaires, pignons, roues dentées, des sous ensembles mécaniques de renvoi d’angle…</p></div>
    </li>
    <li>
      <div class="collapsible-header"><i class="material-icons">whatshot</i>FORCE</div>
      <div class="collapsible-body"><p>Réactivité et compétitivité de PME Italiennes industrielles de types familiales.<br>
Unités de production avec équipements récents afin de répondre aux exigences élevées sur petites et très grandes séries.<br>
30 ans d’expérience dans l’industrie des composants magnétiques et moteurs électriques.<br>
Un réseau de partenaires industriels aux savoir-faire reconnus dans leurs métiers, certifiés ISO 9001 et ISO TS 16949.<br>
Une très grande réactivité, alliant expertise et performance avec un coût réduit de structure.<br></p></div>
    </li>
  
     <li>
      <div class="collapsible-header"><i class="material-icons">whatshot</i>APLICATIONS</div>
      <div class="collapsible-body"><p>Voici les applications ou nous sommes positionnées.<br>
Unités de production avec équipements récents afin de répondre aux exigences élevées sur petites et très grandes séries.<br>
30 ans d’expérience dans l’industrie des composants magnétiques et moteurs électriques.<br>
Un réseau de partenaires industriels aux savoir-faire reconnus dans leurs métiers, certifiés ISO 9001 et ISO TS 16949.<br>
<br></p></div>
    </li>
    </ul>
    
   
    
    
    
    
    
    
    
</div>
</div></div>

    
<script>
  $(document).ready(function(){
      $('.carousel').carousel();
    });

</script>

<script>
// Next slide
$('.carousel').carousel('next');
$('.carousel').carousel('next', 3); // Move next n times.
// Previous slide
$('.carousel').carousel('prev');
$('.carousel').carousel('prev', 4); // Move prev n times.
// Set to nth slide
$('.carousel').carousel('set', 4);
</script>
<script>
$('.carousel.carousel-slider').carousel({full_width: true});
</script>
@stop

