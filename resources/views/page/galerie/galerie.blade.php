@extends('template')
@section('content')





<div class="section no-pad-bot" id="index-banner">
<div class="container">

<div class="row center">
<h3 class="header col s12 light" style="text-decoration : underline;"> Galerie photo</h3>
</div>

   

<div class=" col s12 m4 l12" >

   <a href=""><img src="images/21.gif" style="width: 20%;"></a>  
   <a href=""><img src="images/gym.jpg" style="width: 20%;"></a>
   <a href=""><img src="images/21.gif" style="width: 20%;"></a>
    <a href=""><img src="images/gym.jpg" style="width: 20%;"></a>

</div></div></div>
    
    
    <script>
        
    $(document).ready(function(){
      $('.carousel4').carousel();
    });
        
        </script>
@stop


