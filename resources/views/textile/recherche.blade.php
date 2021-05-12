<!DOCTYPE html>
<html>
    <head>
        <title>liste des textiles</title>
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
          <a class="nav-link active" href="{{('/ajoutTextile')}}">Ajouter textile </a>
          </li>
        </ul>
        <form method="GET" action ="/rechercheTextile">
          <input type="search" name="q" placeholder="Recherche..."  value="{{request()->q ?? '' }}" />
          <input type="submit" value="Valider" />
        </form><br>
        @if(request()->input())
         <h6>{{$textiles->total() }} resultat(s) pour la recherche "{{request()->q}}"</h6>
        @endif
     <table class="table">
       <thead>
         <tr>
          <th scope="col">Choix</th>
          <th scope="col">#</th>
          <th scope="col">Type</th>
          <th scope="col">Taille</th>
          <th scope="col" >Couleur</th>
          <th scope="col" >Actions</th>
       </tr>
       </thead>
       <tbody>
           @foreach ($textiles as $key => $textile)    
    <tr>
    <td><input type="checkbox" id="" name="choix" value="{{$textile->id}}"></td>
    <td>{{$key+1}}</td>
    <td>{{$textile->type}}</td>
    <td>{{$textile->taille}}</td>
    <td>{{$textile->couleur}}</td>
    <td>
      <a href="{{('/listeTextile/editTextile')}}/{{$textile->id}}"class="badge badge-success">Modifier</a>

      <a href="{{('/listeTextile/destroyTextile')}}/{{$textile->id}}" class="badge badge-danger">Supprimer</a>
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