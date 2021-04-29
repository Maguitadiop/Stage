<!DOCTYPE html>
<html>
    <head>
        <title>liste des Personne</title>
        <link rel="stylesheet" href="css/bootstrap.min.css" >
    </head>
    <style>
      a{
        margin-left: 30px;
      }
    </style>
  <body>
     <div class="container">
        <ul class="nav">
          <li class="nav-item"> 
          <a class="nav-link active" href="{{('/ajoutPersonne')}}">Ajouter une personne </a>
          </li>
        </ul>
        <form method="GET" action ="/recherchePersonne">
          <input type="search" name="q" placeholder="Recherche..." />
          <input type="submit" value="Valider" />
        </form><br>
     <table class="table">
       <thead>
         <tr>
          <th scope="col">#</th>
          <th scope="col">Nom</th>
          <th scope="col">Prenom</th>
          <th scope="col" >Date_naiss</th>
          <th scope="col" >Age</th>
          <th scope="col" >Sexe</th>
          <th scope="col" >Famille</th>
          <th scope="col" >Actions</th>
       </tr>
       </thead>
       <tbody>
           @foreach ($personnes as $key => $personne)    
           <?php $Familles = App\Models\famille::find($personne->famille_id); ?>
    <tr>
    <td>{{$key+1}}</td>
    <td>{{$personne->nom}}</td>
    <td>{{$personne->prenom}}</td>
    <td>{{$personne->date_naiss}}</td>
    <td>{{$personne->age}} ans</td>
    <td>{{$personne->sexe}}</td>
    <td>{{$Familles->nom}}</td>
    <td>
      <a href="{{('/listePersonne/editPersonne')}}/{{$personne->id}}"class="badge badge-success">Modifier</a>

      <a href="{{('/listePersonne/destroyPersonne')}}/{{$personne->id}}" class="badge badge-danger">Supprimer</a>
      </td>
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