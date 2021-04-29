<html>
    <head>
        <link href="css/bootstrap.min.css" rel="stylesheet" media="all">
    <style>
        #form{
            width:70%;
            margin-left: 15%;
        }
        #h3{
            text-align: center;
        }
    </style>
    </head>
    <body>

        <form action ="/listePersonne/updatePersonne/{{$personne->id}}" method='POST' id="form">
            <h3 id="h3">Formulaire de modification</h3><br>
            {{ csrf_field() }}
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputEmail4">Nom</label>
                <input type="text" class="form-control" id="inputEmail4" placeholder="Nom" name="nom" value="{{$personne->nom}}">
              </div><br>
              <div class="form-group col-md-6">
                <label for="inputPassword4">Prenom</label>
                <input type="text" class="form-control" id="inputPassword4" placeholder="Prenom" name="prenom" value="{{$personne->prenom}}">
              </div>
            </div><br>
            <div class="form-group">
              <label for="inputAddress">Date de naissance</label>
              <input type="date" class="form-control" id="inputAddress" placeholder="" name="date_naiss" value="{{$personne->date_naiss}}">
            </div><br>
            <div class="form-row">
              <div class="form-group col-md-4">
                <label for="inputCity">Age</label>
                <input type="number" class="form-control" id="inputCity" name="age" value="{{$personne->age}}">
              </div><br>
              <div class="form-group col-md-8">
                <label for="inputState">Sexe</label>
                <select id="inputState" class="form-control" name="sexe" value="{{$personne->sexe}}">
                  <option selected>Sexe</option>
                  <option value="feminin">Feminin</option>
                  <option value="masculin">Masculin</option>
                </select>
              </div>
            </div><br>
            <div class="form-group">
                <label for="inputAddress">Famille</label>
                <select id="inputState" class="form-control" name="famille_id" value="{{$personne->famille_id}}"> 
                 {{$Familles = App\Models\famille::all()}}
                    @foreach ($Familles as $key => $Famille) 
                    <option value="{{$Famille->id}}">{{$Famille->id}} : {{$Famille->nom}}</option>
                    @endforeach
                  </select>
              </div><br>
            <button type="submit" class="btn btn-primary">Modifier</button>
          </form>
    </body>
</html>