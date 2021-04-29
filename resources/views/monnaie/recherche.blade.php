<!DOCTYPE html>
<html>
    <head>
        <title>liste</title>
        <link rel="stylesheet" href="css/bootstrap.min.css" >
    </head>
    <style>
      a{
        margin-left: 30px;
      }
      button{
        margin-left: 1100px;
      }
    </style>
<body>
     <div class="container">
        <ul class="nav">
          <li class="nav-item">
          <a class="nav-link active" href="{{('/ajoutMonnaie')}}">Ajouter monnaie </a>
          </li>
        </ul>
        <form method="GET" action ="/rechercheMonnaie">
          <input type="search" name="q" placeholder="Recherche..." value="{{request()->q ?? '' }}"/>
          <input type="submit" value="Valider" />
        </form><br>
        @if(request()->input())
         <h6>{{$monnaies->total() }} resultat(s) pour la recherche "{{request()->q}}"</h6>
        @endif
     <table class="table">
       <thead>
         <tr>
          <th scope="col">Choix</th>
          <th scope="col">#</th>
          <th scope="col">Devise</th>
          <th scope="col">montant</th>
          <th scope="col" >Actions</th>
       </tr>
       </thead>
       <tbody>
           @foreach ($monnaies as $key => $monnaie)    
    <tr>
    <td><input type="checkbox" id="" name="choix" value="{{$monnaie->id}}"></td>
    <td>{{$key+1}}</td>
    <td>{{$monnaie->devise}}</td>
    <td>{{$monnaie->montant}}</td>
      <td>
      <a href="{{('/listeMonnaie/editMonnaie')}}/{{$monnaie->id}}"class="badge badge-success">Modifier</a>

      <a href="{{('/listeMonnaie/destroyMonnaie')}}/{{$monnaie->id}}" class="badge badge-danger">Supprimer</a>
      </td>
    </tr>
        @endforeach
  </tbody>
</table>
     </div>
     <button type="button" class="btn btn-secondary">Donation</button>
     <script src="/js/jquery-3.3.1.slim.min.js" ></script>
      <script src="/js/popper.min.js" ></script>
      <script src="/js/bootstrap.min.js" ></script>
</body>
</html>