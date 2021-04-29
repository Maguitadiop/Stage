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
        <form action ="/listeMonnaie/updateMonnaie/{{$monnaie->id}}" method='POST' id="form">
            {{ csrf_field() }}
                  <h3 id="h3">Modification finançieres</h3><br>
                  <div class="form-group">
                      <label for="inputAddress">Devise</label>
                      <input type="text" class="form-control" id="inputAddress" 
                      placeholder="Ex: euros, dollars, ..." name="devise" value="{{$monnaie->devise}}">
                    </div><br>
                  <div class="form-group">
                    <label for="inputAddress2">Montant</label>
                    <input type="number" class="form-control" id="inputPassword4"
                     placeholder="" name="montant" value="{{$monnaie->montant}}">
                  </div><br>
                  <div class="form-group">
                    <label for="inputAddress2">Categorie</label>
                    <select class="form-control" name="categorie_id">
                        <option value="{{$monnaie->categorie_id}}">{{$monnaie->categorie_id}}</option>
                        <option value="1">1:Aliment</option>
                        <option value="2">2:Textile</option>
                        <option value="3">3:Monnaie</option>
                      </select>
                  </div><br>
                  <button type="submit" class="btn btn-primary">Modifier</button>
                </form>
      
                <script src="js/bootstrap.min.js"></script>
                <script src="js/bootstrap.bundle.min.js"></script>
    </body>
</html>