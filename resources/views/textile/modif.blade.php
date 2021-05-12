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
        <form action ="/listeTextile/updateTextile/{{$textile->id}}" method='POST' id="form">
            {{ csrf_field() }}
                  <h3 id="h3">Modification</h3><br>
                  <div class="form-group">
                      <label for="inputAddress">Type</label>
                      <input type="text" class="form-control"  
                      placeholder="Ex: robe, chemise, pantelon, ..." name="type" value="{{$textile->type}}">
                    </div><br>
                  <div class="form-group">
                    <label for="inputAddress2">Taille/Age</label>
                    <input type="text" class="form-control" 
                     placeholder="Ex: S, M, L, XS, XL, 5, 9, 10, 26ans,..." name="taille" value="{{$textile->taille}}">
                  </div><br>
                  <div class="form-group">
                    <label for="inputAddress2">Couleur</label>
                    <input type="text" class="form-control"
                     placeholder="Ex: rouge, noire, blanc, ..." name="couleur" value="{{$textile->couleur}}">
                  </div><br>
                  <input type="hidden" name="categorie_id" value="2"><br>
                  <button type="submit" class="btn btn-primary">Modifier</button>
                </form>
      
                <script src="js/bootstrap.min.js"></script>
                <script src="js/bootstrap.bundle.min.js"></script>
    </body>
</html>