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
        <form action ="/ajoutTextile" method='POST' id="form">
            {{ csrf_field() }}
                  <h3 id="h3">Formulaire d'ajout denrées textile</h3><br>
                  <div class="form-group">
                      <label for="inputAddress">Type </label>
                      <input type="text" class="form-control"  
                      placeholder="Ex: robe, chemise, pantelon, ..." name="type">
                    </div>
                  <div class="form-group">
                    <label for="inputAddress2">Age</label>
                    <input type="text" class="form-control" 
                     placeholder="Ex: S, M, L, XS, XL, 5, 9, 10, 26ans,..." name="taille">
                  </div>
                  <div class="form-group">
                    <label for="inputAddress2">Couleur</label>
                    <input type="text" class="form-control"
                     placeholder="Ex: rouge, noire, blanc, ..." name="couleur">
                  </div>
                  
                  <button type="submit" class="btn btn-primary">Ajouter</button>
                </form>
      
                <script src="js/bootstrap.min.js"></script>
                <script src="js/bootstrap.bundle.min.js"></script>
                @include('./pied')
    </body>
</html>