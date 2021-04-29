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
        <form action ="/ajoutFamille" method='POST' id="form">
            {{ csrf_field() }}
                  <h3 id="h3">Formulaire d'ajout de Famille</h3><br>
                  <div class="form-group">
                      <label for="inputAddress">Nom</label>
                      <input type="text" class="form-control"  name="nom">
                    </div>
                  <div class="form-group">
                    <label for="inputAddress2">Adresse</label>
                    <input type="text" class="form-control" name="adresse">
                  </div>
                  <div class="form-group">
                    <label for="inputAddress2">telephonne</label>
                    <input type="text" class="form-control" name="telephone">
                  </div>
                  <div class="form-group">
                    <label for="inputAddress2">email</label>
                    <input type="text" class="form-control" name="email">
                  </div>
                  <button type="submit" class="btn btn-primary">Ajouter</button>
                </form>
      
                <script src="js/bootstrap.min.js"></script>
                <script src="js/bootstrap.bundle.min.js"></script>
    </body>
</html>