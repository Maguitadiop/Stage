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
        <form action ="/ajoutAliment" method='POST' id="form">
            {{ csrf_field() }}
                  <h3 id="h3">Formulaire d'ajout denrées alimentaires</h3><br>
                  <div class="form-group">
                      <label for="inputAddress">Libelle</label>
                      <input type="text" class="form-control" id="inputAddress" 
                      placeholder="Ex: riz, pâtes, huile ..." name="libelle">
                    </div>
                  <div class="form-group">
                    <label for="inputAddress2">Quantité</label>
                    <input type="number" class="form-control" id="inputPassword4"
                     placeholder="" name="quantite">
                  </div>
                  
                  <button type="submit" class="btn btn-primary">Ajouter</button>
                </form>
      
                <script src="js/bootstrap.min.js"></script>
                <script src="js/bootstrap.bundle.min.js"></script>
                @include('./pied')
    </body>
</html>