
<html>
    <head>
        <link href="css/bootstrap.min.css" rel="stylesheet" media="all">
            <link rel="stylesheet" href="css/style2.css" >
    <style>
        #forme{
            width: 80%;
            margin-left: 120px;
            margin-right: 30px;
         }
        #h3{
            text-align: center;
        }
    </style>
    </head>
    <body>
    <div id="forme">
        <form action ="/listeAliment/updateAliment/{{$aliment->id}}" method='POST' >
            {{ csrf_field() }}
                  <h3 id="h3">Modification</h3><br>
                  <div class="form-group">
                      <label for="inputAddress">libelle / description</label>
                      <input type="text" class="form-control" id="inputAddress" 
                      placeholder="Ex: riz, pattes, huile ..." name="libelle" value="{{$aliment->libelle}}">
                    </div><br>
                  <div class="form-group">
                    <label for="inputAddress2">Quantite</label>
                    <input type="number" class="form-control" id="inputPassword4"
                     placeholder="" name="quantite" value="{{$aliment->quantite}}">
                  </div>
                  <div class="form-group"><br>
                    <label for="inputAddress2">Categorie</label>
                    <select class="form-control" name="categorie_id">
                        <option value="{{$aliment->categorie_id}}">{{$aliment->categorie_id}}</option>
                        <option value="1">1:Aliment</option>
                        <option value="2">2:Textile</option>
                        <option value="3">3:Monnaie</option>
                      </select>
                  </div><br>
                  <button type="submit" class="btn btn-primary">Modifier</button>
                </form>
    </div>
      
                <script src="js/bootstrap.min.js"></script>
                <script src="js/bootstrap.bundle.min.js"></script>
    </body>
</html>