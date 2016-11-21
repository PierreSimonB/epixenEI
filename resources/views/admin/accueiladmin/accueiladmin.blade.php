@extends('templateadmin')
@section('content')

  </div>

</div>

</div>
   <!-- <div class="section no-pad-bot" id="index-banner">
    <div class="container">
    <div class="row">
  
   <div class="row center">

      <h5 class="header col s12  light"> Depuis votre dernière connexion </h5>
      </div>
      <div class="col s12 m12 l12" >
 <div class="collection">
    <a href="#!" class="collection-item" style="font-size:108%;">Commande <span class="new badge blue" data-badge-caption="Nouvelle(s) commande(s)" style="font-size:100%;">8</span></a>
    <a href="#!" class="collection-item" style="font-size:108%;">Membre<span class="new badge red" data-badge-caption="Nouveau(x) membre(s)" style="font-size:100%;">2</span></a>
    <a href="#!" class="collection-item" style="font-size:108%;">Support<span class="new badge green" data-badge-caption="Nouvelle(s) conversation(s)" style="font-size:100%;">0</span></a>
       <a href="#!" class="collection-item" style="font-size:108%;">Sondage<span class="new badge" data-badge-caption="Réponse(s) au(x) sondage(s)" style="font-size:100%;">0</span></a>
  </div><br>

</div>
  <div class="row center">

      <h5 class="header col s12  light"> A modifier pour tenir le référencement à jour</h5>
      </div> 
       <div class="col s12 m12 l12" >
       <table class="responsive-table highlight bordered">
        <thead>
          <tr>
              <th data-field="id">Titre</th>
              <th data-field="name">Date de la dernière mise à jours</th>
              <th data-field="price">Modifier</th>
                   <th data-field="price">Supprimer</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>boitier</td>
            <td>13/08/2016</td>
            <td> <button class="btn waves-effect waves-light" type="submit" name="action">Modifier
    <i class="material-icons right">send</i>
  </button></td>
   <td> <button class="btn waves-effect waves-light red" type="submit" name="action">Supprimer
    <i class="material-icons right">delete</i>
  </button></td>
          </tr>
          <tr>
            <td>Nouveaux boitier métal</td>
            <td>13/06/2016</td>
            <td> <button class="btn waves-effect waves-light" type="submit" name="action">Modifier
    <i class="material-icons right">send</i>
  </button></td>
   <td> <button class="btn waves-effect waves-light red" type="submit" name="action">Supprimer
    <i class="material-icons right">delete</i>
  </button></td>
          </tr>
          <tr>
            <td>Nouveau sondage</td>
            <td>09/04/2016</td>
            <td> <button class="btn waves-effect waves-light" type="submit" name="action">Modifier
    <i class="material-icons right">send</i>
  </button></td>
   <td> <button class="btn waves-effect waves-light red" type="submit" name="action">Supprimer
    <i class="material-icons right">delete</i>
  </button></td>
          </tr>
        </tbody>
      </table>
       <ul class="pagination">
    <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
    <li class="active"><a href="#!">1</a></li>
    <li class="waves-effect"><a href="#!">2</a></li>
    <li class="waves-effect"><a href="#!">3</a></li>
    <li class="waves-effect"><a href="#!">4</a></li>
    <li class="waves-effect"><a href="#!">5</a></li>
    <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
  </ul>
</div> </div> 

</div>
!-->




































<div class="demo" id="canvaspie" width="600" height="200"><script>demo</script></div>




<script>
function demo() {
   var hasCanvas = CanvasRenderer.isSupported();

   var opts = {
   "pieRadius": 0.4
   };

   var data1 = [[0, 5], [1, 4], [2, 3], [3, 5], [4, 6], [5, 7]];
   var data2 = [[0, 2.5], [1, 2], [2, 1.5], [3, 2.5], [4, 3], [5,
   3.5]];
   var data3 = [[0, 1.25], [1, 1], [2, 0.75], [3, 1.25], [4, 1.5], [5, 1.75]];

   if (hasCanvas) {
       var pie = new EasyPlot("pie", opts, $('canvaspie'), [data1]);
       var line = new EasyPlot("line", opts, $('canvasline'), [data1, data2, data3]);
       var bar = new EasyPlot("bar", opts, $('canvasbar'), [data1, data2, data3]);
   }
}
</script>
</div>
</div>
</body>
</html>
@stop