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
      @include('./header')
        <form action ="/listeFamille/updateFamille/{{$famille->id}}" method='POST' id="form">
            {{ csrf_field() }}
                  <h3 id="h3">Formulaire de modification</h3><br>
                  <div class="form-group">
                      <label for="inputAddress">Nom</label>
                      <input type="text" class="form-control"  name="nom" value="{{$famille->nom}}">
                    </div><br>
                  <div class="form-group">
                    <label for="inputAddress2">Adresse</label>
                    <input type="text" class="form-control" name="adresse" value="{{$famille->adresse}}">
                  </div><br>
                  <div class="form-group">
                    <label for="inputAddress2">telephonne</label>
                    <input type="text" class="form-control" name="telephone" value="{{$famille->telephone}}">
                  </div><br>
                  <div class="form-group">
                    <label for="inputAddress2">email</label>
                    <input type="text" class="form-control" name="email" value="{{$famille->email}}">
                  </div><br>
                  <button type="submit" class="btn btn-primary">Modifier</button>
                </form>
      
                <script src="js/bootstrap.min.js"></script>
                <script src="js/bootstrap.bundle.min.js"></script>
                @include('./pied')
    </body>
</html>