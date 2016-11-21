
<!DOCTYPE html>

@extends('template')
@section('content')






<div class="slider">
<ul class="slides">

<li>
<img src="{{url('images/sliders/'.$sliders1->image)}}" class="responsive-img"> <!-- random image -->
<div class="caption center-align">
<h3>{!! $sliders1->texte !!}</h3>

</div>
</li>
<li>
<img src="{{url('images/sliders/'.$sliders2->image)}}" class="responsive-img">
<div class="caption left-align">
<h3>{!! $sliders2->texte !!}</h3>

</div>
</li>
<li>
<img src="{{url('images/sliders/'.$sliders3->image)}}" class="responsive-img"> 
<div class="caption right-align">
<h3>{!! $sliders3->texte !!}</h3>

</div>
</li>
<li>
<img src="{{url('images/sliders/'.$sliders4->image)}}" class="responsive-img"> 
<div class="caption center-align">
<h3>{!! $sliders4->texte !!}</h3>

</div>
</li> 

</ul>
</div>






<div class="section no-pad-bot" id="index-banner">
<div class="container">
<br>
<br>
<h1 class="header center orange-text">JOLLIET Innovation</h1>
<div class="row center">
<h5 class="header col s12 light"> Vente de pièces et prestation de service </h5>
</div>

<div class="card hoverable col s12 m4 l8" >
<div class="card-image waves-effect waves-block waves-light">
<img class="activator responsive-img" src="{{url('images/quisommesnous/'.$quisommesnous->image)}}" >
</div>
<div class="card-content ">
<span class="card-title activator grey-text text-darken-4">Qui sommes-nous ?<i class="material-icons right">more_vert</i></span>
<p><i class="card-title activator" style="color: #7cb342">En savoir plus</i></p>
</div>
<div class="card-reveal">
<span class="card-title grey-text text-darken-4">Qui sommes-nous ?<i class="material-icons right">close</i></span>
<p>{!! $quisommesnous->texte !!}</p>
</div>
</div>
<br><br>
</div>
    
    
    
    
    
    
    
<div class="container">
<div class="section">
<div class="row">
<div class="col s10 m6 l6">
<div class="icon-block">
<div class="card hoverable">
<div class="card-image waves-effect waves-block waves-light">
<img class="activator responsive-img" src="{{url('images/etiquettes/'.$etiquettes1->image)}}" style="max-height: 360px;">
</div>
<div class="card-content">
<span class="card-title activator grey-text text-darken-4">{{$etiquettes1->titre}}<i class="material-icons right">more_vert</i></span>
<p><a><i class="card-title activator" style="color: #7cb342;">En savoir plus</i></a></p>
</div>
<div class="card-reveal">
<span class="card-title grey-text text-darken-4"><i class="material-icons right">close</i></span>
<p>{!! $etiquettes1->descri !!}</p>
</div>
</div>   
</div>
</div>

<!-- etiquette 2 !-->
<div class="col s10 m6 l6 ">
<div class="icon-block ">
<div class="card hoverable">
<div class="card-image waves-effect waves-block waves-light">
<img class="activator responsive-img" src="{{url('images/etiquettes/'.$etiquettes2->image)}}" style="max-height: 360px;">
</div>
<div class="card-content">
<span class="card-title activator grey-text text-darken-4">{{$etiquettes2->titre}}<i class="material-icons right">more_vert</i></span>
<p><a><i class="card-title activator" style="color: #7cb342">En savoir plus</i></a></p>
</div>


<div class="card-reveal ">
<span class="card-title grey-text text-darken-4"><i class="material-icons right">close</i></span>
<p>{!! $etiquettes2->descri !!}</p>
</div>
</div>   
</div>  <br><br>
</div>
<br><br>
  <div class="row center">
<h3 class="header col s12 light"> Nos services </h3>
</div>

    @foreach ($services as $service)
  <ul class="collapsible popout" data-collapsible="accordion" >
      
    <li> 
        <div class="collapsible-header "><br><div class="row center"><img src="{{url('images/services/'.$service->image)}}" class="responsive-img"/></div>
                 <div class="divider"></div><span style="font-size: 200%;text-decoration:underline;">        {{ $service->titre }}</span><br>
            <i class="material-icons left" >more_vert</i><span style="font-size: 150%; color: #7cb342; font-style:italic " >En savoir plus</span></div>
      <div class="collapsible-body"><p>
        {!! $service->descri !!}
          
          
          
          </p></div>
    </li>
    
  </ul>
@endforeach
</div>
</div>
</div></div>
@stop