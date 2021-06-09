
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
        @include('./header')
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
                  <input type="hidden" name="categorie_id" value="1"><br>
                  <button type="submit" class="btn btn-primary">Modifier</button>
                </form>
    </div>
      
                <script src="js/bootstrap.min.js"></script>
                <script src="js/bootstrap.bundle.min.js"></script>
                @include('./pied')
    </body>
</html>