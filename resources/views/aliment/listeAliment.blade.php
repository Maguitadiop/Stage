
<!DOCTYPE html>
<html>
    <head>
        <title>liste des aliments disponible</title>
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
          <a class="nav-link active" href="{{('/ajoutAliment')}}">Ajouter aliment </a>
          </li>
        </ul>
        <form method="GET" action ="/rechercheAliment">
          <input type="search" name="q" placeholder="Recherche..." />
          <input type="submit" value="Valider" />
        </form><br>
      <form method="POST" action="/PanierDonationAliment">
     {{ csrf_field() }}
     <table class="table">
       <thead>
         <tr>
          <th scope="col">Choix</th>
          <th scope="col">#</th>
          <th scope="col">Libelle</th>
          <th scope="col">Quantite</th>
          <th scope="col" >Actions</th>
       </tr>
       </thead>
       <tbody>
           @foreach ($aliments as $key => $aliment)    
    <tr>
    <td><input type="checkbox" id="{{$aliment->libelle}}" name="choix[]" value="{{$aliment->id}}"></td>
    <td>{{$key+1}}</td>
    <td>{{$aliment->libelle}}</td>
    <td>{{$aliment->quantite}}</td>
      <td>
      <a href="{{('/listeAliment/editAliment')}}/{{$aliment->id}}"class="badge badge-success">Modifier</a>

      <a href="{{('/listeAliment/destroyAliment')}}/{{$aliment->id}}" class="badge badge-danger">Supprimer</a>
      </td>

    </tr>
        @endforeach
  </tbody>
</table>
     </div>
    
     <button type="submit" class="btn btn-secondary">Donation</button>
     </form>
     <script src="/js/jquery-3.3.1.slim.min.js" ></script>
      <script src="/js/popper.min.js" ></script>
      <script src="/js/bootstrap.min.js" ></script>
</body>
</html>