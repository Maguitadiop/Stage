<!DOCTYPE html>
<html>
    <head>
        <title>liste des familles</title>
        <link rel="stylesheet" href="css/bootstrap.min.css" >
    </head>
    <style>
      a{
        margin-left: 30px;
      }
    </style>
  <body>
    @include('./header')
     <div class="container">
        <ul class="nav">
          <li class="nav-item"> 
          <a class="nav-link active" href="{{('/ajoutFamille')}}">Ajouter famille </a>
          </li>
        </ul>
        <form method="GET" action ="/rechercheFamille">
          <input type="search" name="q" placeholder="Recherche..." />
          <input type="submit" value="Valider" />
        </form><br>
     <table class="table">
       <thead>
         <tr>
          <th scope="col">#</th>
          <th scope="col">Nom</th>
          <th scope="col">Adresse</th>
          <th scope="col" >telephone</th>
          <th scope="col" >Email</th>
          <th scope="col" >Actions</th>
       </tr>
       </thead>
       <tbody>
           @foreach ($Familles as $key => $Famille)    
    <tr>
    <td>{{$key+1}}</td>
    <td>{{$Famille->nom}}</td>
    <td>{{$Famille->adresse}}</td>
    <td>0{{$Famille->telephone}}</td>
    <td>{{$Famille->email}}</td>
    <td>
      <a href="{{('/listeFamille/editFamille')}}/{{$Famille->id}}"class="badge badge-success">Modifier</a>

      <a href="{{('/listeFamille/destroyFamille')}}/{{$Famille->id}}" class="badge badge-danger">Supprimer</a>

      <a href="/ajoutPersonne" class="badge badge-warning">AjoutPersonne</a>
      </td>
    </tr>
        @endforeach
  </tbody>
</table>
     </div>
     <script src="/js/jquery-3.3.1.slim.min.js" ></script>
      <script src="/js/popper.min.js" ></script>
      <script src="/js/bootstrap.min.js" ></script>
      @include('./pied')
</body>
</html>