<!DOCTYPE html>
<html>
    <head>
        <title>liste donations aliments</title>
        <link rel="stylesheet" href="css/bootstrap.min.css" >
    </head>
    <style>
      a{
        margin-left: 30px;
      }
    </style>
  <body>
      <br>
     <div class="container">
        <ul class="nav">
          <li class="nav-item"> 
          </li>
        </ul>
        <form method="GET" action ="/rechercheDonationTextile">
          <input type="search" name="q" placeholder="Recherche..."  value="{{request()->q ?? '' }}"/>
          <input type="submit" value="Valider" />
        </form><br>
        @if(request()->input())
        <h6>{{$donations->total() }} resultat(s) pour la recherche "{{request()->q}}"</h6>
       @endif
     <table class="table">
       <thead>
         <tr>
          <th scope="col">#</th>
          <th scope="col">Type</th>
          <th scope="col" >Taille</th>
          <th scope="col" >Couleur</th>
          <th scope="col">Famille</th>
       </tr>
       </thead>
       <tbody>
           @foreach ($donations as $key => $donation)    
           <?php  $famille = App\Models\famille::find($donation->famille_id); ?>
    <tr>
    <td>{{$key+1}}</td>
    <td>{{$donation->type}}</td>
    <td>{{$donation->taille}}</td>
    <td>{{$donation->couleur}}</td>
    <td>{{$famille->nom}}</td>
    </tr>
        @endforeach
  </tbody>
</table>
     </div>
     <script src="/js/jquery-3.3.1.slim.min.js" ></script>
      <script src="/js/popper.min.js" ></script>
      <script src="/js/bootstrap.min.js" ></script>
</body>
</html>